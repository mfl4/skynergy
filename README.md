# skynergy

Skynergy is a dynamic webapp tailored for students of the Universitas Muhammadiyah Surakarta Faculty of Communication and Informatics. It serves as an energetic platform where students collaborate, share opportunities, and fuel each other's growth in academics and professional development.

## Tech Stack

- Laravel 11
- Tailwind CSS (via CDN)
- PostgreSQL

## Prerequisites

- PHP 8.2 or higher
- Composer
- PostgreSQL
- Node.js and npm (for asset compilation)

## Installation

1. Clone the repository:

```bash
git clone https://github.com/yourusername/skynergy.git
cd skynergy
```

2. Install PHP dependencies:

```bash
composer install
```

3. Copy the example env file and make the required configuration changes in the .env file:

```bash
cp .env.example .env
```

4. Generate a new application key:

```bash
php artisan key:generate
```

5. Set up your database in the .env file:

```.env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=skynergy
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. Run database migrations:

```bash
php artisan migrate
```

7. Start the local development server:
You can now access the server at <http://localhost:8000>

## Features

- User authentication (Guest, Member, Admin roles)
- Opportunity creation and management
- Category management
- User management (for Admins)
- Dashboard for administrative tasks

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

- Universitas Muhammadiyah Surakarta
- Faculty of Communication and Informatics
