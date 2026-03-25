## Jobsheet 5 - Filament PHP

**Nama:** Nur Alfiyanti
**NIM:** 244107020055
**Kelas:** TI-2F

## Jobsheet 1: Instalasi Filament
## Topik: : Instalasi dan Setup Filament PHP v4 pada Laravel 11


### Langkah-langkah beserta bukti Screenshoot:

1. Membuat project Laravel dengan `composer create-project laravel/laravel filament-praktikum`
Bukti project sudah dibuat
![alt text](<screenshoot/Screenshot 2026-03-25 122917.png>)

2. Install Filament v4 dengan `composer require filament/filament:"^4.0"` 
Bukti Filament terinstall
![text](<screenshoot/Screenshot 2026-03-23 221348.png>) 
![text](<screenshoot/Screenshot 2026-03-23 221818.png>)
![alt text](<week-05/filament-praktikum/screenshoot/Screenshot 2026-03-25 122137.png>)
![alt text](<week-05/filament-praktikum/screenshoot/Screenshot 2026-03-25 122127.png>)
![alt text](<week-05/filament-praktikum/screenshoot/Screenshot 2026-03-25 122209.png>)
![alt text](<week-05/filament-praktikum/screenshoot/Screenshot 2026-03-25 122219.png>)

3. Install Panel Builder dengan `php artisan filament:install --panels`
Bukti Panel Builder terinstall
![alt text](<screenshoot/Screenshot 2026-03-23 221325.png>)
![alt text](<screenshoot/Screenshot 2026-03-25 123110.png>)

4. Konfigurasi database MySQL di file `.env`
Bukti konfigurasi .env
![alt text](<screenshoot/Screenshot 2026-03-23 221424.png>) 
![alt text](<screenshoot/Screenshot 2026-03-23 221405.png>) 
![alt text](<screenshoot/Screenshot 2026-03-23 221357.png>) 
![alt text](<screenshoot/Screenshot 2026-03-23 221436.png>)
![alt text](<screenshoot/Screenshot 2026-03-23 182841.png>)
![alt text](<screenshoot/Screenshot 2026-03-25 123549.png>)

5. Jalankan migrasi dengan `php artisan migrate`
Bukti migrasi berhasil
![alt text](<screenshoot/Screenshot 2026-03-25 123959.png>)

6. Buat user admin dengan `php artisan make:filament-user`
Bukti user admin ada
![alt text](<screenshoot/Screenshot 2026-03-23 221448.png>)
![alt text](<screenshoot/Screenshot 2026-03-23 221818.png>)

7. Jalankan server dengan `php artisan serve`
Bukti server jalan
![alt text](<screenshoot/Screenshot 2026-03-23 221500.png>)

8. Akses admin panel di `http://localhost:8000/admin`
Bukti admin panel (di browser)
![alt text](<screenshoot/Screenshot 2026-03-23 191629.png>)
![alt text](<screenshoot/Screenshot 2026-03-23 191641.png>) 
![alt text](<screenshoot/Screenshot 2026-03-23 191659.png>) 
![alt text](<screenshoot/Screenshot 2026-03-23 191715.png>) 
![alt text](<screenshoot/Screenshot 2026-03-24 164120.png>)


### Jawaban Analisis & Diskusi

**1. Apa kelebihan Filament dibanding membuat admin panel manual?**
Filament menyediakan komponen siap pakai seperti form builder (untuk membuat formulir), table builder (untuk menampilkan data), dan sistem autentikasi yang sudah jadi. Tampilannya juga sudah modern dan responsif di berbagai perangkat, jadi tidak perlu repot mengatur CSS atau JavaScript dari awal. Yang paling penting, Filament bisa menghemat waktu pengerjaan hingga 70-80% karena kita tidak perlu menulis kode berulang-ulang untuk fitur yang sama.

**2. Mengapa Filament menggunakan Livewire?**
Livewire memungkinkan kita berkomunikasi antara halaman depan (frontend) dan server (backend) hanya dengan bahasa PHP. Jadi ketika pengguna mengklik tombol atau mengisi form, semua proses bisa ditangani dengan kode PHP tanpa harus menulis AJAX atau Vue.js. Ini membuat pengembangan lebih cepat dan fokus pada logika bisnis, bukan pada teknis frontend. Selain itu, Livewire juga lebih ringan dibanding framework JavaScript lain seperti Vue atau React, sehingga cocok untuk kebutuhan admin panel.

**3. Apa perbedaan SQLite dan MySQL dalam development?**
SQLite	
- Database dalam satu file, tinggal taruh di folder project	
- Setupnya cepat, langsung bisa dipakai tanpa ribet	
- Cocok untuk belajar dan testing di laptop sendiri	
- Fiturnya standar, cukup untuk kebutuhan dasar

MySQL
- Perlu install server terpisah, butuh konfigurasi khusus
- Setup-nya lebih panjang, perlu atur host, port, user, password
- Cocok untuk aplikasi sungguhan yang dipakai banyak orang
- Fiturnya lengkap, bisa pakai stored procedure, trigger, dan lainnya

Untuk development (belajar dan uji coba), SQLite sangat membantu karena simpel. Tapi untuk aplikasi yang nanti benar-benar dipakai (production), MySQL lebih handal karena punya fitur keamanan dan performa yang lebih baik.

**4. Apa fungsi Panel Builder?**
Panel Builder ini adalah "tulang punggung" atau fondasi dari Filament. Fungsi utamanya adalah:
- Membuat struktur admin panel – menentukan halaman apa saja yang muncul, menu apa yang tersedia di sidebar kiri
- Mengelola akses pengguna – siapa yang boleh login, siapa yang bisa melihat menu tertentu
- Menyediakan layout dasar – seperti header, sidebar, dan area konten yang sudah rapi
- Menghubungkan semua komponen – menghubungkan resource yang kita buat (seperti CRUD User, Category, dll) agar bisa diakses dari panel admin
Sederhananya, Panel Builder adalah "kerangka" yang menyatukan semua fitur Filament sehingga kita tinggal fokus pada isi kontennya saja.


### Tugas Praktikum 

#### 1. Buat 2 user admin berbeda
- User 1: Admin User (admin@gmail.com)
- User 2: User Kedua (user2@gmail.com)
![alt text](<screenshoot/Screenshot 2026-03-25 134150.png>)

#### 2. Screenshot
- **Halaman Login**
 ![alt text](<screenshoot/Screenshot 2026-03-25 144010.png>)

- **Dashboard**
![alt text](<screenshoot/Screenshot 2026-03-25 144054.png>)
 
- **Data User di Database**
![alt text](<screenshoot/Screenshot 2026-03-25 205511.png>)
  
#### 3. Langkah Instalasi
 No | Langkah | Perintah 
1. Buat project Laravel            : `composer create-project laravel/laravel filament-praktikum` 
2. Install Filament v4             : `composer require filament/filament:"^4.0"` 
3. Install Panel Builder           : `php artisan filament:install --panels` 
4. Konfigurasi database  Edit file : `.env` (DB_DATABASE=filamentTI2F) 
5. Jalankan migrasi                : `php artisan migrate` 
6. Generate app key                : `php artisan key:generate` 
7. Buat user admin                 : `php artisan make:filament-user` 
8. Jalankan server                 : `php artisan serve` 
9.  Akses admin panel              : `http://localhost:8000/admin` 

#### 4. Kendala yang Ditemukan
1. Permission denied saat install Filament
Solusi: Gunakan terminal Laragon, bukan terminal VS Code.

2. Error APP_KEY missing
Solusi: Jalankan perintah php artisan key:generate.

3. Database tidak terbaca
Solusi: Hapus tanda # di file .env pada bagian database, lalu jalankan php artisan config:clear.

4. phpMyAdmin error (E_STRICT deprecated)
Solusi: Gunakan HeidiSQL yang sudah tersedia di Laragon sebagai alternatif untuk melihat database.

5. User kedua tidak bisa login
Solusi: Saat membuat user, gunakan bcrypt('password') untuk mengenkripsi password.

