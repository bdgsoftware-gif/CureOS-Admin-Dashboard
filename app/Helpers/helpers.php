<?php

// General flash message helper
if (!function_exists('flash')) {
    function flash($message, $type = 'success', $icon = null)
    {
        session()->flash('flash', [
            'type' => $type,
            'message' => $message,
            'icon' => $icon
        ]);
    }
}

// Hospital-specific critical alerts
if (!function_exists('flash_critical')) {
    function flash_critical($message)
    {
        flash($message, 'critical', 'ri-alarm-warning-fill');
    }
}

// Success messages
if (!function_exists('flash_success')) {
    function flash_success($message)
    {
        flash($message, 'success', 'ri-checkbox-circle-fill');
    }
}

// Warning messages
if (!function_exists('flash_warning')) {
    function flash_warning($message)
    {
        flash($message, 'warning', 'ri-error-warning-fill');
    }
}

// Info messages
if (!function_exists('flash_info')) {
    function flash_info($message)
    {
        flash($message, 'info', 'ri-information-fill');
    }
}

// Error messages
if (!function_exists('flash_error')) {
    function flash_error($message)
    {
        flash($message, 'error', 'ri-close-circle-fill');
    }
}

// Hospital-specific medical alerts
if (!function_exists('flash_medical_alert')) {
    function flash_medical_alert($patientId, $alertType, $additionalInfo = null)
    {
        $messages = [
            'critical_lab' => "Critical lab result for Patient #{$patientId}",
            'vital_alert' => "Abnormal vital signs for Patient #{$patientId}",
            'allergy_warning' => "Allergy warning for Patient #{$patientId}",
            'drug_interaction' => "Potential drug interaction detected for Patient #{$patientId}",
            'emergency_admission' => "Emergency admission for Patient #{$patientId}",
        ];

        $message = $messages[$alertType] ?? "Medical alert for Patient #{$patientId}";

        if ($additionalInfo) {
            $message .= " - {$additionalInfo}";
        }

        flash_critical($message);
    }
}
