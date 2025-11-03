<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relationships
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function patients()
    {
        return $this->hasMany(Patient::class, 'created_by');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }

    public function doctorAppointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }

    public function createdPatients()
    {
        return $this->hasMany(Patient::class, 'created_by');
    }

    public function doctorConsultations()
    {
        return $this->hasManyThrough(Consultation::class, Appointment::class, 'doctor_id', 'appointment_id');
    }

    public function doctorPrescriptions()
    {
        return $this->hasManyThrough(Prescription::class, Consultation::class, 'appointment_id', 'consultation_id')
            ->through('doctorAppointments.consultation');
    }

    // ADD SCOPES FOR ROLE-BASED QUERIES
    public function scopeDoctors($query)
    {
        return $query->whereHas('roles', function ($q) {
            $q->where('name', 'doctor');
        });
    }

    public function scopePatients($query)
    {
        return $query->whereHas('roles', function ($q) {
            $q->where('name', 'patient');
        });
    }

    public function scopeStaff($query)
    {
        return $query->whereHas('roles', function ($q) {
            $q->where('name', 'staff');
        });
    }

    // Role & Permission Methods
    public function assignRole($role)
    {
        if (is_string($role)) {
            $role = Role::where('name', $role)->firstOrFail();
        }

        return $this->roles()->syncWithoutDetaching([$role->id]);
    }

    public function assignRoles(array $roles)
    {
        $roleIds = [];
        foreach ($roles as $role) {
            if (is_string($role)) {
                $role = Role::where('name', $role)->firstOrFail();
            }
            $roleIds[] = $role->id;
        }

        return $this->roles()->syncWithoutDetaching($roleIds);
    }

    public function removeRole($role)
    {
        if (is_string($role)) {
            $role = Role::where('name', $role)->firstOrFail();
        }

        return $this->roles()->detach($role->id);
    }

    public function syncRoles(array $roles)
    {
        $roleIds = [];
        foreach ($roles as $role) {
            if (is_string($role)) {
                $role = Role::where('name', $role)->firstOrFail();
            }
            $roleIds[] = $role->id;
        }

        return $this->roles()->sync($roleIds);
    }

    public function hasRole($role)
    {
        // Eager load roles to avoid N+1 queries
        $this->loadMissing('roles');

        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        if (is_array($role)) {
            return $this->roles->whereIn('name', $role)->isNotEmpty();
        }

        return $this->roles->contains('id', $role->id);
    }

    public function hasAnyRole($roles)
    {
        if (is_string($roles)) {
            $roles = func_get_args();
        }

        $this->loadMissing('roles');
        return $this->roles->whereIn('name', $roles)->isNotEmpty();
    }

    public function hasAllRoles($roles)
    {
        if (is_string($roles)) {
            $roles = func_get_args();
        }

        $this->loadMissing('roles');
        $userRoles = $this->roles->pluck('name')->toArray();

        return count(array_diff($roles, $userRoles)) === 0;
    }

    public function hasPermission($permission)
    {
        $this->loadMissing('roles.permissions');
        return $this->roles->flatMap(function ($role) {
            return $role->permissions;
        })->contains('name', $permission);
    }

    public function hasPermissionThroughRole($permission)
    {
        $this->loadMissing('roles.permissions');
        foreach ($this->roles as $role) {
            if ($role->hasPermission($permission)) {
                return true;
            }
        }

        return false;
    }

    // Attribute accessors
    public function getRoleNamesAttribute()
    {
        $this->loadMissing('roles');
        return $this->roles->pluck('name');
    }

    public function getPermissionsAttribute()
    {
        $this->loadMissing('roles.permissions');
        return $this->roles->flatMap(function ($role) {
            return $role->permissions;
        })->unique('name');
    }

    // Scopes - FIXED: Use proper column names
    public function scopeRole($query, $role)
    {
        if (is_string($role)) {
            return $query->whereHas('roles', function ($q) use ($role) {
                $q->where('name', $role); // FIXED: Use 'name' not role_id
            });
        }

        if ($role instanceof Role) {
            return $query->whereHas('roles', function ($q) use ($role) {
                $q->where('id', $role->id); // FIXED: Use 'id' not role_id
            });
        }

        return $query;
    }

    public function scopeWhereRole($query, $roles)
    {
        $roles = is_array($roles) ? $roles : [$roles];

        return $query->whereHas('roles', function ($q) use ($roles) {
            $q->whereIn('name', $roles);
        });
    }
}
