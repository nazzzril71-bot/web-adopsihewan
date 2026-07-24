# Admin AdopsiHewan (CodeIgniter 3 + MySQL)

Panel admin berbasis **CodeIgniter 3** untuk mengelola data **Hewan**, **Adopsi**, dan **Pengguna**. Sistem ini menggunakan database **MySQL** dan telah disesuaikan dengan struktur database `adopsihewan.sql`.

---

# Teknologi

- CodeIgniter 3.1.x
- PHP 8.1+
- MySQL / MariaDB
- Bootstrap 5
- HTML, CSS, JavaScript

---

# Struktur Database

## Tabel `pets`

| Kolom | Tipe |
|-------|------|
| id | INT |
| name | VARCHAR |
| type | VARCHAR |
| age | INT |
| description | TEXT |
| photo | VARCHAR |
| created_at | TIMESTAMP |

---

## Tabel `adoptions`

| Kolom | Tipe |
|-------|------|
| id | INT |
| user_id | INT |
| pet_id | INT |
| status | VARCHAR |
| created_at | TIMESTAMP |

---

## Tabel `users`

| Kolom | Tipe |
|-------|------|
| id | INT |
| name | VARCHAR |
| email | VARCHAR |
| password | VARCHAR |
| role | VARCHAR |
| created_at | TIMESTAMP |

---

# Instalasi

## 1. Clone / Salin Project

Salin folder project ke dalam folder **htdocs** XAMPP.

Contoh:

```
C:\xampp\htdocs\AdopsiHewan
```

---

## 2. Import Database

Buka **phpMyAdmin**

Buat database

```
adopsihewan
```

Import file

```
adopsihewan.sql
```

---

## 3. Konfigurasi Database

Buka file

```
application/config/database.php
```

Ubah sesuai konfigurasi MySQL Anda.

Contoh XAMPP:

```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'adopsihewan',
    'dbdriver' => 'mysqli',
);
```

---

## 4. Konfigurasi Base URL

Buka

```
application/config/config.php
```

Ubah

```php
$config['base_url'] = 'http://localhost/AdopsiHewan/';
```

---

## 5. Jalankan Project

Aktifkan

- Apache
- MySQL

Lalu buka browser

```
http://localhost/AdopsiHewan/
```

---

# Struktur Folder

```
AdopsiHewan
│
├── application
│   ├── config
│   ├── controllers
│   ├── models
│   ├── views
│   └── helpers
│
├── assets
│   ├── css
│   ├── js
│   └── images
│
├── uploads
│
├── system
│
├── index.php
│
└── adopsihewan.sql
```

---

# Fitur

## Dashboard

- Total Hewan
- Total Pengguna
- Total Pengajuan Adopsi
- Statistik Singkat

---

## Login Admin

- Login menggunakan Email
- Password MD5 (sesuai database)
- Session Login
- Logout

---

## Manajemen Hewan

- Tambah Hewan
- Edit Hewan
- Hapus Hewan
- Upload Foto
- Pencarian Hewan

Data yang dikelola:

- Nama
- Jenis
- Umur
- Deskripsi
- Foto

---

## Manajemen Adopsi

- Lihat Semua Pengajuan
- Tambah Pengajuan
- Edit Pengajuan
- Hapus Pengajuan

Status yang tersedia:

- Pending
- Disetujui
- Ditolak

---

## Manajemen Pengguna

- Tambah User
- Edit User
- Hapus User

Data:

- Nama
- Email
- Password (MD5)
- Role

---

# Upload Foto

Semua foto hewan disimpan pada folder

```
uploads/
```

Pastikan folder tersebut memiliki izin tulis.

---

# Konfigurasi Session

CodeIgniter menggunakan Session Library.

Pastikan pada

```
application/config/autoload.php
```

Library berikut di-autoload

```php
$autoload['libraries'] = array(
    'database',
    'session'
);
```

Helper yang digunakan

```php
$autoload['helper'] = array(
    'url',
    'form'
);
```

---

# Routing

Contoh route

```php
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
```

---

# Akun Admin

Contoh akun

Email

```
admin@gmail.com
```

Password

```
admin123
```

> Password disimpan menggunakan hash **MD5**, sehingga data di database berupa nilai hash.

---

# Catatan

- Sistem menggunakan **CodeIgniter 3**, bukan Laravel.
- Password masih menggunakan **MD5** agar kompatibel dengan database yang sudah ada.
- Folder `uploads/` harus memiliki izin tulis.
- Untuk produksi disarankan menggunakan HTTPS.
- Disarankan melakukan migrasi password ke `password_hash()` untuk keamanan yang lebih baik.

---

# Fitur yang Tersedia

- Login Admin
- Dashboard
- CRUD Hewan
- CRUD Pengguna
- CRUD Adopsi
- Upload Foto
- Session Login
- Flash Message
- Pencarian Data
- Bootstrap Responsive

---

# Persyaratan Sistem

- PHP 8.1 atau lebih baru
- MySQL 5.7+
- Apache (XAMPP/Laragon)
- CodeIgniter 3.1.x

---

# Lisensi

Project ini dibuat untuk kebutuhan pembelajaran dan pengembangan aplikasi **AdopsiHewan** menggunakan **CodeIgniter 3**.