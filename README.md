<p align="center">
  <a href="https://laravel.com<img src="https://laravel.com/img/logomark.min.svg" alt="Laravel" height="70"></a>
  <a href="https://filamentphp.com"<img src="https://github.com/filamentphp/filament/assets/41773797/8d5a0b12-4643-4b5c-964a-56f0db91b90a" alt="Filament" height="70"></a>
</p>
<p align="center">
  <a href="https://laravel.com"><img alt="Laravel v12.x" src="https://img.shields.io/badge/Laravel-v12.x-FF2D20?style=for-the-badge&logo=laravel"></a>
  <a href="https://filamentphp.com"><img alt="Filament v3.x" src="https://img.shields.io/badge/Filament-v3.x-FFE585?style=for-the-badge"></a>
</p>

# Filament Laravel 12 CRUD

Repositori ini hanyalah sarana pembelajaran saya dalam mengimplementasikan [Filament](https://filamentphp.com/) pada [Laravel 12](https://laravel.com/docs/12.x). 
Fokus utama proyek ini adalah membangun fitur CRUD (Create, Read, Update, Delete) menggunakan Filament sebagai admin panel.

## 📚 Fitur

- Instalasi Laravel 12 dan Filament 3
- Pembuatan model dan migrasi database
- Generate resource Filament untuk CRUD
- Akses admin panel melalui `/admin`

## Berikut Langkah Instalasi Filament dan Menghubungkan dengan database
- Instal Library Filament `composer require filament/filament:"^3.3" -W `
- Install Admin Panels Filament `php artisan filament:install --panels`
- Membuat user admin untuk login di panels `php artisan make:filament-user`
- Sesuaikan Environment `.env` Dengan Server Localhost contoh `APP_URL = https://127.0.0.1:8000`
- Hubungkan Filament dengan database/storage lokal `php artisan storage:link`
- 🥳 Instalasi Filament dan Menghubungkan Dengan Database Berhasil ✅ 
