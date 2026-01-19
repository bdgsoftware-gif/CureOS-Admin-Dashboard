# 🏥 Clinic Management & Patient Service System (CMPSS) [Upgrading regularly...]

[![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=flat&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat&logo=mysql&logoColor=white)](https://mysql.com)
[![TailwindCSS](https://img.shields.io/badge/Tailwind-3.0-38B2AC?style=flat&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

A comprehensive web-based clinic management system designed to streamline administrative and clinical operations for small to medium-sized healthcare facilities. Built with Laravel 12, featuring role-based access control, patient management, appointment scheduling, prescription tracking, and billing capabilities.

## 📋 Table of Contents

- [Features](#-features)
- [Demo](#-demo)
- [Screenshots](#-screenshots)
- [Tech Stack](#-tech-stack)
- [System Requirements](#-system-requirements)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Usage](#-usage)
- [Database Schema](#-database-schema)
- [API Documentation](#-api-documentation)
- [Testing](#-testing)
- [Security](#-security)
- [Contributing](#-contributing)
- [License](#-license)
- [Contact](#-contact)

## ✨ Features

### 🔐 Authentication & Authorization
- Secure user authentication using Laravel Breeze
- Role-based access control (Admin, Doctor, Staff)
- Email verification for new accounts
- Password reset via email
- Session management with CSRF protection

### 👥 Patient Management
- Patient registration with unique ID generation
- Comprehensive patient profiles (Name, DOB, Gender, Phone, Address)
- Patient search by name, phone, or patient ID
- Complete visit history tracking

### 📅 Appointment System
- Appointment scheduling with doctor and time slot assignment
- Double-booking prevention
- Appointment status tracking (Scheduled, Completed)
- Doctor's visit notes and consultation records

### 💊 Prescription Management
- Digital prescription creation with medicines and dosages
- Link prescriptions to patient records and appointments
- Export and print prescriptions as PDF
- Prescription history tracking

### 💰 Billing & Invoicing
- Service-based billing with itemized invoices
- Automatic fee calculation
- Payment status tracking (Paid/Unpaid)
- Printable invoice generation
- Billing history and reports

### 📊 Dashboard & Reports
- Real-time appointment metrics
- Doctor workload analytics
- Daily, weekly appointment summaries
- CSV export functionality for reports

## 🎥 Demo

**Live Demo:** [Coming Soon]

**Video Demonstration:** [5-minute walkthrough video link]

## 📸 Screenshots

<details>
<summary>Click to view screenshots</summary>

### Login Page
![Login Page](screenshots/login.png)

### Dashboard
![Dashboard](screenshots/dashboard.png)

### Patient Registration
![Patient Registration](screenshots/patient-registration.png)

### Appointment Scheduling
![Appointment Scheduling](screenshots/appointments.png)

### Prescription Management
![Prescription](screenshots/prescription.png)

### Invoice Generation
![Invoice](screenshots/invoice.png)

</details>

## 🛠️ Tech Stack

### Backend
- **Framework:** Laravel 12
- **Language:** PHP 8.2+
- **Database:** MySQL 8.0
- **ORM:** Eloquent
- **Authentication:** Laravel Breeze

### Frontend
- **Template Engine:** Blade
- **CSS Framework:** Tailwind CSS 3.x
- **JavaScript:** Alpine.js
- **Icons:** Heroicons

### Tools & Libraries
- **PDF Generation:** DomPDF / Laravel Snappy
- **Email:** Laravel Mail with SMTP
- **Version Control:** Git
- **Package Manager:** Composer, NPM

## 📦 System Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18.x
- MySQL >= 8.0
- Web Server (Apache/Nginx)
- Git

## 🚀 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/rhjoyofficial/CureOS-Admin-Dashboard-New.git
cd CureOS-Admin-Dashboard-New
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node Dependencies

```bash
npm install
```

### 4. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Database Configuration

Edit your `.env` file with database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=clinic_management
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations

```bash
# Create database tables
php artisan migrate

# Seed database with sample data (optional)
php artisan db:seed
```

### 7. Build Frontend Assets

```bash
npm run dev
```

### 8. Start Development Server

```bash
php artisan serve
```

Visit: `http://localhost:8000`

## ⚙️ Configuration

### Email Configuration

Configure your SMTP settings in `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@clinic.com
MAIL_FROM_NAME="Clinic Management System"
```

### Storage Configuration

```bash
# Create symbolic link for storage
php artisan storage:link
```

### Cache Configuration

```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## 📖 Usage

### Default User Roles

After seeding the database, you can login with:

**Admin Account:**
- Email: `admin@example.com`
- Password: `password`
- Role: Administrator

**Doctor Account:**
- Email: `doctor@example.com`
- Password: `password`
- Role: Doctor

**Staff Account:**
- Email: `staff@example.com`
- Password: `password`
- Role: Staff

### Creating a New User

1. Login as Admin
2. Navigate to **Users Management**
3. Click **Add New User**
4. Fill in user details and assign role
5. User will receive verification email

### Registering a Patient

1. Login as Staff or Admin
2. Navigate to **Patients** → **Register New Patient**
3. Fill in patient information
4. System auto-generates unique Patient ID
5. Patient profile is created

### Scheduling an Appointment

1. Navigate to **Appointments** → **Create Appointment**
2. Select patient (or register new)
3. Choose doctor and time slot
4. System prevents double-booking
5. Appointment is scheduled

### Creating a Prescription

1. Doctor logs in and views appointments
2. Marks appointment as completed
3. Creates prescription with medicines and dosages
4. Prescription is linked to patient and appointment
5. Export/print as PDF

### Generating Invoice

1. Staff navigates to **Billing** → **Create Invoice**
2. Select patient and appointment
3. Add service items with fees
4. System calculates total
5. Generate and print invoice

## 🗄️ Database Schema

### Main Tables

#### Users
- `id` (PK)
- `name`
- `email` (unique)
- `role` (admin/doctor/staff)
- `password` (bcrypt hashed)
- `email_verified_at`
- `timestamps`

#### Patients
- `id` (PK)
- `patient_id` (unique)
- `name`
- `date_of_birth`
- `gender`
- `phone`
- `address`
- `timestamps`

#### Appointments
- `id` (PK)
- `patient_id` (FK → patients)
- `doctor_id` (FK → users)
- `appointment_date`
- `appointment_time`
- `status` (scheduled/completed)
- `visit_notes`
- `timestamps`

#### Prescriptions
- `id` (PK)
- `appointment_id` (FK → appointments)
- `patient_id` (FK → patients)
- `medicines` (JSON)
- `notes`
- `timestamps`

#### Invoices
- `id` (PK)
- `patient_id` (FK → patients)
- `appointment_id` (FK → appointments)
- `services` (JSON)
- `total_amount`
- `payment_status` (paid/unpaid)
- `timestamps`

### Entity Relationships

```
Users (Doctor) 1 ──────< N Appointments
Patients 1 ────────────< N Appointments
Appointments 1 ────────< 1 Prescriptions
Appointments 1 ────────< 1 Invoices
Patients 1 ────────────< N Prescriptions
Patients 1 ────────────< N Invoices
```

## 📚 API Documentation

### Authentication Endpoints

```
POST   /register                    - Register new user
POST   /login                       - User login
POST   /logout                      - User logout
POST   /forgot-password             - Request password reset
POST   /reset-password              - Reset password
GET    /verify-email/{id}/{hash}    - Verify email address
POST   /email/verification-notification - Resend verification email
```

### Patient Endpoints

```
GET    /patients                    - List all patients
POST   /patients                    - Create new patient
GET    /patients/{id}               - View patient details
PUT    /patients/{id}               - Update patient
DELETE /patients/{id}               - Delete patient
GET    /patients/search             - Search patients
```

### Appointment Endpoints

```
GET    /appointments                - List appointments
POST   /appointments                - Create appointment
GET    /appointments/{id}           - View appointment
PUT    /appointments/{id}           - Update appointment
DELETE /appointments/{id}           - Cancel appointment
POST   /appointments/{id}/complete  - Mark as completed
```

### Prescription Endpoints

```
GET    /prescriptions               - List prescriptions
POST   /prescriptions               - Create prescription
GET    /prescriptions/{id}          - View prescription
GET    /prescriptions/{id}/pdf      - Download PDF
```

### Invoice Endpoints

```
GET    /invoices                    - List invoices
POST   /invoices                    - Create invoice
GET    /invoices/{id}               - View invoice
GET    /invoices/{id}/pdf           - Download PDF
PUT    /invoices/{id}/payment       - Update payment status
```

## 🧪 Testing

### Run All Tests

```bash
php artisan test
```

### Run Specific Test Suite

```bash
# Feature tests
php artisan test --testsuite=Feature

# Unit tests
php artisan test --testsuite=Unit
```

### Run with Coverage

```bash
php artisan test --coverage
```

### Test Categories

- **Authentication Tests:** User registration, login, logout, password reset
- **Patient Management Tests:** CRUD operations, search functionality
- **Appointment Tests:** Scheduling, double-booking prevention
- **Prescription Tests:** Creation, PDF generation
- **Invoice Tests:** Billing calculations, payment tracking
- **Authorization Tests:** Role-based access control

## 🔒 Security

### Implemented Security Measures

- ✅ **Password Hashing:** Bcrypt with cost factor 10
- ✅ **CSRF Protection:** Token validation on all state-changing requests
- ✅ **SQL Injection Prevention:** Eloquent ORM parameterized queries
- ✅ **XSS Protection:** Blade template automatic escaping
- ✅ **Email Verification:** Signed URLs for account verification
- ✅ **Rate Limiting:** Throttle middleware (6 requests/minute)
- ✅ **Session Security:** Encrypted cookies, regeneration on auth
- ✅ **Role-Based Access:** Middleware authorization checks
- ✅ **HTTPS Enforcement:** Secure communication in production

### Security Best Practices

1. Keep Laravel and dependencies updated
2. Use strong passwords for production databases
3. Enable HTTPS in production
4. Regularly backup database
5. Monitor application logs
6. Implement API rate limiting
7. Use environment variables for sensitive data

### Reporting Vulnerabilities

If you discover a security vulnerability, please email:
**security@clinic.com**

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. **Fork the repository**
2. **Create a feature branch**
   ```bash
   git checkout -b feature/AmazingFeature
   ```
3. **Commit your changes**
   ```bash
   git commit -m 'Add some AmazingFeature'
   ```
4. **Push to the branch**
   ```bash
   git push origin feature/AmazingFeature
   ```
5. **Open a Pull Request**

### Coding Standards

- Follow PSR-12 coding standards
- Write meaningful commit messages
- Add tests for new features
- Update documentation as needed
- Keep code DRY (Don't Repeat Yourself)

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Developer

**Rakibul Hasan Joy**
- GitHub: [@rhjoyofficial](https://github.com/rhjoyofficial)
- University ID: 42230200754
- Course: CSE3292 - Software Development III
- Section: 8B
- Supervisor: Md. Intekhabul Hafiz

## 📞 Contact

For questions or support, please reach out:

- **Email:** rhjoyofficial@gmail.com
- **GitHub Issues:** [Create an issue](https://github.com/rhjoyofficial/CureOS-Admin-Dashboard-New/issues)

## 🙏 Acknowledgments

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com)
- [Laravel Breeze](https://laravel.com/docs/starter-kits)
- Project Supervisor: Md. Intekhabul Hafiz
- Course Instructor: CSE3292 - Software Development III

## 📈 Project Status

**Current Version:** 1.0.0  
**Status:** ✅ Active Development  
**Last Updated:** January 2026

## 🗺️ Roadmap

- [x] User authentication and authorization
- [x] Patient management system
- [x] Appointment scheduling
- [x] Prescription management
- [x] Billing and invoicing
- [x] Dashboard and reports
- [ ] SMS notifications
- [ ] Payment gateway integration
- [ ] Mobile app (iOS/Android)
- [ ] Telemedicine integration
- [ ] Inventory management
- [ ] Lab integration
- [ ] Patient portal
- [ ] Multi-language support

---

<div align="center">

### ⭐ If you find this project useful, please give it a star!

**Made with ❤️ by [Rakibul Hasan Joy](https://github.com/rhjoyofficial)**

</div>
