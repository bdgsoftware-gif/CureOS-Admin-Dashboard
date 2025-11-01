# CureOS - Hospital Management System

![CureOS Dashboard](https://via.placeholder.com/1200x600/3B82F6/FFFFFF?text=CureOS+Hospital+Management+System)

A modern, responsive Hospital Management System built with Laravel and Tailwind CSS. CureOS provides comprehensive healthcare management solutions with an intuitive dashboard and robust features.

## 🚀 Features

### Core Modules
- **Patient Management** - Complete patient records and history
- **Appointment Scheduling** - Efficient booking and management system
- **Doctor Management** - Staff profiles and availability tracking
- **Billing & Payments** - Financial management and invoicing
- **Medical Records** - Secure patient health information storage
- **Inventory Management** - Medical supplies and equipment tracking

### Dashboard Features
- **Real-time Analytics** - Interactive charts and statistics
- **Quick Overview** - Key metrics and performance indicators
- **Appointment Calendar** - Visual scheduling interface
- **Revenue Tracking** - Income and financial reports
- **Staff Management** - Doctor availability and profiles

## 🛠️ Technology Stack

### Backend
- **Laravel 12** - PHP Framework
- **MySQL** - Database
- **Eloquent ORM** - Database Management

### Frontend
- **Tailwind CSS** - Utility-first CSS framework
- **Alpine.js** - Lightweight JavaScript framework
- **ApexCharts** - Interactive charts and graphs
- **Remix Icons** - Beautiful icon library

### Development Tools
- **Vite** - Fast build tool
- **Laravel Sail** - Docker development environment
- **Pint** - PHP code style fixer

## 📦 Installation

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js 18+ and npm
- MySQL 8.0+

### Quick Start

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/cureos.git
   cd cureos
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   ```bash
   # Update .env with your database credentials
   DB_DATABASE=cureos
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations**
   ```bash
   php artisan migrate --seed
   ```

7. **Build assets**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

8. **Start development server**
   ```bash
   php artisan serve
   ```

### Using Docker (Laravel Sail)
```bash
# Install Sail
php artisan sail:install

# Start containers
./vendor/bin/sail up -d

# Run migrations
./vendor/bin/sail artisan migrate --seed
```

## 🎯 Usage

### Default Login Credentials
```
Email: admin@example.com
Password: password
```

### Key Features Overview

#### Dashboard
- View real-time hospital statistics
- Monitor patient admissions and appointments
- Track revenue and financial performance
- Manage doctor schedules and availability

#### Patient Management
- Add new patients with complete profiles
- Track patient medical history
- Manage appointments and consultations
- Generate patient reports

#### Appointment System
- Schedule appointments with doctors
- Send automated reminders
- Track appointment status
- Manage cancellations and rescheduling

## 🏗️ Project Structure

```
cureos/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── Providers/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   ├── auth/
│   │   └── dashboard.blade.php
│   └── js/
│       └── pages/
│           └── dashboard.js
├── routes/
│   ├── web.php
│   └── auth.php
├── database/
│   ├── migrations/
│   └── seeders/
└── public/
    └── images/
```

## 🎨 Customization

### Styling
The project uses Tailwind CSS with custom configuration:
- Primary color: `#3e60d5`
- Custom color palette in `tailwind.config.js`
- Responsive design with breakpoints

### Charts
Interactive charts powered by ApexCharts:
- Enrollment statistics
- Patient demographics
- Revenue analytics
- Department-wise distribution

### Components
Reusable Blade components:
- Flash messages with Alpine.js animations
- Card layouts with hover effects
- Form elements with validation
- Responsive navigation

## 🔧 Development

### Code Style
```bash
# Fix PHP code style
composer pint

# Check JavaScript style
npm run lint
```

### Building Assets
```bash
# Development build with hot reload
npm run dev

# Production build
npm run build
```

### Testing
```bash
# Run PHP tests
php artisan test

# Run feature tests
php artisan test --feature
```

## 📊 Database Schema

Key tables include:
- `users` - System users and staff
- `patients` - Patient records
- `doctors` - Medical staff profiles
- `appointments` - Scheduling information
- `medical_records` - Patient health data
- `payments` - Financial transactions

## 🔒 Security Features

- Laravel Sanctum for API authentication
- CSRF protection
- XSS prevention
- SQL injection protection
- Input validation and sanitization
- Secure session management

## 🚀 Deployment

### Production Requirements
- PHP 8.2+
- MySQL 8.0+
- Web server (Apache/Nginx)
- SSL certificate

### Deployment Steps
1. Set up production environment
2. Configure environment variables
3. Run migrations: `php artisan migrate --force`
4. Build assets: `npm run build`
5. Optimize: `php artisan optimize`
6. Set up queue workers (if using)

## 🤝 Contributing

We welcome contributions! Please see our [Contributing Guide](CONTRIBUTING.md) for details.

### Development Workflow
1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

- 📧 Email: hello@endbrackets.com
- 🐛 [Issue Tracker](https://github.com/your-username/cureos/issues)
- 📖 [Documentation](https://docs.cureos.com)

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The PHP framework
- [Tailwind CSS](https://tailwindcss.com) - CSS framework
- [ApexCharts](https://apexcharts.com) - Chart library
- [Remix Icons](https://remixicon.com) - Icon library

---

<div align="center">

**Built with ❤️ by [End Brackets](https://endbrackets.com)**

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)

</div>

## 📱 Screenshots

### Dashboard
![Dashboard](https://via.placeholder.com/800x450/3B82F6/FFFFFF?text=Dashboard+View)

### Patient Management
![Patient Management](https://via.placeholder.com/800x450/10B981/FFFFFF?text=Patient+Management)

### Appointment Scheduling
![Appointments](https://via.placeholder.com/800x450/F59E0B/FFFFFF?text=Appointment+System)
