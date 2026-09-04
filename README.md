# Library System

## Description
Simple Library Information System

## Requirements
- PHP
- Composer
- MySQL
- Laravel

## Installation

1. Clone repository:
   ```bash
   git clone https://github.com/nabilaputriksm/library-system.git
   ```

2. Masuk ke folder project:
   ```bash
   cd library-system
   ```

3. Install dependency:
   ```bash
   composer install
   ```

4. Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Konfigurasi database pada file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=library-system
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Jalankan migration:
   ```bash
   php artisan migrate
   ```

8. Jalankan server Laravel:
   ```bash
   php artisan serve
   ```

9. Buka browser:
   ```text
   http://127.0.0.1:8000
   ```

## Author
Nabila Putri