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



## Jobsheet 2: CRUD Resource User dengan Filament v4

### Langkah Praktikum

### Langkah-langkah beserta bukti Screenshoot:
**Langkah 1 – Membuat Resource User**
Jalankan perintah berikut di terminal Laragon: `php artisan list`
![alt text](<screenshoot/Screenshot 2026-03-26 000411.png>) 
![alt text](<screenshoot/Screenshot 2026-03-26 000446.png>)

Jalankan perintah berikut di terminal Laragon: `php artisan make:filament-resource User`
Saat diminta, isi:
- Attribute utama: `name`
- Generate read-only page: `no`
- Generate dari database: `no`
Setelah berhasil, akan muncul folder baru di `app/Filament/Resources/UserResource.php`
![alt text](<screenshoot/Screenshot 2026-03-26 143456.png>)
![alt text](<screenshoot/Screenshot 2026-03-26 144101.png>)

**Langkah 2 – Menjalankan Aplikasi**
Jalankan server: `php artisan serve`
Login dengan:
- Email: admin@gmail.com
- Password: 123456
Sekarang akan muncul menu **Users** di sidebar.
![alt text](<screenshoot/Screenshot 2026-03-26 144256.png>)
Jika diklik user pada sidebar
![text](<screenshoot/Screenshot 2026-03-26 144923.png>) 
Jika diklik new user ( blm ada form inputnya)
![text](<screenshoot/Screenshot 2026-03-26 145103.png>)

**Langkah 3 – Membuat Form Input (Create & Edit)**
Buka file `app/Filament/Resources/Schemas/UserForm.php`
Modifikasi dan Tambahkan field berikut:
![alt text](<screenshoot/Screenshot 2026-03-26 150943.png>)

Refresh browser.
Hasil:
• Form Create User memiliki input Name, Email, Password
• Password otomatis terenkripsi oleh Laravel
![alt text](<screenshoot/Screenshot 2026-03-26 151015.png>)

Coba inputan:
![alt text](<screenshoot/Screenshot 2026-03-26 151046.png>)

Cek pada DB
![alt text](<screenshoot/Screenshot 2026-03-26 152416.png>)

**Langkah 4 – Menampilkan Data pada Tabel**
Buka file app/Filament/Resources/UserTable.php
Tambahkan kolom:
![alt text](<screenshoot/Screenshot 2026-03-26 175319.png>)

Refresh browser.
![alt text](<screenshoot/Screenshot 2026-03-26 175217.png>)

**Langkah 5 - Mengganti Icon Menu Resource**
Website resmi: Heroicons
Buka file:
• UserResource.php (Ubah property icon:
• protected static string|BackedEnum|null $navigationIcon = 
Heroicon::UserGroup;)
![text](<screenshoot/Screenshot 2026-03-26 180553.png>) 

Refresh browser → Icon berubah.
Sesudah
![text](<screenshoot/Screenshot 2026-03-26 180541.png>)


### Analisis & Diskusi
**1. Mengapa Filament dapat membuat CRUD tanpa banyak coding?**
Menurut saya, Filament bisa membuat CRUD dengan sangat cepat karena menggunakan konsep Resource. Jadi kita cukup menjalankan satu perintah php artisan make:filament-resource User, maka Filament akan langsung membuat semua file yang diperlukan seperti halaman list, create, edit, dan konfigurasi form serta tabel.

Kita sebagai developer tinggal mengatur field apa saja yang mau ditampilkan. Misalnya di form kita tambahkan TextInput::make('name') dan di tabel kita tambahkan TextColumn::make('name'). Filament sudah menyediakan komponen-komponen yang siap pakai, jadi kita tidak perlu membuat controller, view, atau menulis logika CRUD dari awal. Ini sangat membantu karena kita bisa fokus ke fitur utama aplikasi, bukan sibuk menulis kode yang itu-itu saja.

**2. Apa perbedaan Form Schema dan Table Schema?**
Dari yang saya pelajari, perbedaannya ada di fungsi masing-masing:

Form Schema digunakan untuk halaman Create dan Edit. Di sini kita mengatur komponen input seperti text field, select dropdown, atau file upload. Contohnya seperti TextInput::make('name') yang akan menampilkan kolom input teks. Kita juga bisa menambahkan validasi seperti required() atau minLength() untuk memastikan data yang masuk sesuai.

Table Schema digunakan untuk halaman List (tampilan data). Di sini kita mengatur kolom-kolom yang ingin ditampilkan dari database. Contohnya TextColumn::make('name') akan menampilkan data nama dari tabel. Kita juga bisa menambahkan fitur seperti searchable() agar kolom bisa dicari, atau sortable() agar bisa diurutkan.

Singkatnya, Form Schema untuk input, Table Schema untuk output.

**3. Bagaimana jika kita ingin menambahkan validasi email unik?**
Untuk menambahkan validasi email unik, saya tinggal menambahkan method unique() di field email pada form. Caranya seperti ini:
TextInput::make('email')
    ->email()
    ->required()
    ->unique(table: 'users', column: 'email')
Kode di atas akan memastikan bahwa email yang dimasukkan belum terdaftar di tabel users. Jika sudah ada, sistem akan menampilkan pesan error dan user tidak bisa menyimpan data.

Kalau kita sedang mengedit data, kita perlu menambahkan ignoreRecord: true agar validasi tidak memeriksa email milik user itu sendiri. Jadi kodenya menjadi:
->unique(table: 'users', column: 'email', ignoreRecord: true)

**4. Mengapa password tidak perlu kita hash manual?**
Dari yang saya alami, password tidak perlu di-hash manual karena Laravel sudah menanganinya secara otomatis. Di dalam model User.php ada kode seperti ini:
protected $casts = [
    'password' => 'hashed',
];

Fungsi dari kode tersebut adalah memberitahu Laravel bahwa kolom password harus di-hash setiap kali ada penyimpanan data. Jadi ketika saya mengisi form dan menekan tombol save, Filament akan mengirim data ke model User, dan Laravel akan otomatis mengenkripsi password dengan bcrypt sebelum disimpan ke database.

Hal ini sangat membantu karena saya tidak perlu repot-repot menambahkan kode bcrypt() di setiap form. Cukup dengan menambahkan $casts di model, semuanya berjalan otomatis.

### Tugas Praktikum
1. Tambahkan validasi:
    o Email harus unik
    o Password minimal 6 karakter
![alt text](<screenshoot/Screenshot 2026-03-29 040911.png>)

saya telah membuat user baru dengan nama user2@gmail.com
![text](<screenshoot/Screenshot 2026-03-29 033846.png>) 
![alt text](<screenshoot/Screenshot 2026-03-29 035746.png>)

saya mencoba login menggunakan admin@gmail.com dan menginputkan data ser2@gmail.com dan hasilnya failed sesuai dengan gambar berikut
![alt text](<screenshoot/Screenshot 2026-03-29 045908.png>)

2. Tambahkan kolom baru pada tabel:
    o Created_at
![text](<screenshoot/Screenshot 2026-03-29 044043.png>) 
![text](<screenshoot/Screenshot 2026-03-29 044031.png>) 
![text](<screenshoot/Screenshot 2026-03-29 043938.png>)

3. Ganti icon dengan icon lain dari Heroicons
![alt text](<screenshoot/Screenshot 2026-03-29 044607.png>)
before:
![alt text](<screenshoot/Screenshot 2026-03-29 035746.png>)
after:
![alt text](<screenshoot/Screenshot 2026-03-29 044910.png>)

4. Buat laporan berisi:
    o Screenshot halaman List
    o Screenshot halaman Create
    o Screenshot database


#### 1. Halaman List User
Tampilan tabel user dengan kolom **Name**, **Email**, dan **Created_at** (kolom tambahan dari tugas).
![text](<screenshoot/Screenshot 2026-03-29 043938.png>)

#### 2. Halaman Create User (Validasi Error)
Saat membuat user baru dengan:
- Email yang sudah ada (`admin@gmail.com`)
- Password kurang dari 6 karakter (`123`)

Maka akan muncul pesan error:
- "The email has already been taken"
- "The password must be at least 6 characters"
![alt text](<screenshoot/Screenshot 2026-03-29 045908.png>)

#### 3. Halaman Create User (Berhasil)
Setelah mengisi data yang valid, user baru berhasil ditambahkan.
![text](<screenshoot/Screenshot 2026-03-29 050641.png>)
![text](<screenshoot/Screenshot 2026-03-29 050652.png>) 
![text](<screenshoot/Screenshot 2026-03-29 050708.png>) 

#### 4. Data User di Database
Tabel users di database menampilkan data user yang telah ditambahkan.
![alt text](<screenshoot/Screenshot 2026-03-29 051036.png>)

#### 5. Icon Menu Berubah
Icon menu Users di sidebar telah diganti dengan icon baru dari Heroicons.
![alt text](<screenshoot/Screenshot 2026-03-29 044910.png>)

#
### Jobsheet 3: Membuat Migration, Model, Relasi & Resource Category

### Langkah Praktikum 

### Langkah-langkah beserta bukti Screenshoot:

1. Langkah 1 – Membuat Model & Migration Category
Jalankan perintah:
• php artisan make:model Category -m dan selanjutnya Mendesain Tabel Categories
Buka file migration Category dan ubah menjadi:
![alt text](<screenshoot/Screenshot 2026-04-08 133520.png>)
![alt text](<screenshoot/Screenshot 2026-04-08 133703.png>)

2.  Simpan file dan Jalankan migrasi:
• php artisan migrate
![alt text](<screenshoot/Screenshot 2026-04-08 133858.png>)

3. Langkah 3 – Mengatur Model Category
Buka file:
• app/Models/Category.php
![alt text](<screenshoot/Screenshot 2026-04-08 134030.png>)

4. Langkah 4 – Generate Model Post
• php artisan make:model Post -m
![alt text](<Screenshot 2026-04-08 134135.png>)

5. Langkah 5 – Mendesain Struktur Tabel Posts
Edit migration Post menjadi:
![alt text](<screenshoot/Screenshot 2026-04-08 134255.png>)

6. Jalankan:
• php artisan migrate
![alt text](<screenshoot/Screenshot 2026-04-08 134320.png>)

7. Buka:
• app/Models/Post.php
Tambahkan
![alt text](<screenshoot/Screenshot 2026-04-08 134523.png>)

8. Menggunakan Casting Laravel
Karena beberapa field memiliki tipe khusus, tambahkan: ( pada models/Post.php )
![alt text](<screenshoot/Screenshot 2026-04-08 144401.png>)

9. Menambahkan Relasi ( pada model/Post.php )
Tambahkan relasi ke Category:
![alt text](<screenshoot/Screenshot 2026-04-08 144411.png>)

10. G. Membuat Resource Category di Filament
Karena kita akan menggunakan Category untuk relasi Post, maka kita buat resource-nya terlebih 
dahulu.
• php artisan make:filament-resource Category
![alt text](<screenshoot/Screenshot 2026-04-08 160150.png>)

11. Jalankan browser maka akan muncul pada sidebar categories :
![alt text](<screenshoot/Screenshot 2026-04-08 172929.png>)

12. Edit Form Category
Buka:
• CategoryForm.php
Tambahkan:
![alt text](<screenshoot/Screenshot 2026-04-08 174012.png>)

13. Jalankan browser :
Sebelum
![alt text](<screenshoot/Screenshot 2026-04-08 174631.png>)
 
Sesudah
![alt text](<screenshoot/Screenshot 2026-04-08 174135.png>)

14. Edit Table Category
Buka:
• CategoriesTable.php
Tambahkan:
![alt text](<screenshoot/Screenshot 2026-04-08 175539.png>)

15. Jalankan browser
![alt text](<screenshoot/Screenshot 2026-04-08 175714.png>)
![alt text](<screenshoot/Screenshot 2026-04-08 202227.png>)


### Jawaban Analisis & Diskusi
1. Mengapa kita perlu $fillable?
$fillable melindungi aplikasi dari serangan dan memastikan hanya field yang diizinkan yang bisa diisi massal. Filament sangat bergantung pada mass assignment, jadi $fillable wajib diatur.

2. Apa fungsi $casts pada Laravel?
$casts adalah properti yang mengubah tipe data dari database menjadi tipe data yang lebih mudah digunakan di PHP.

Cast	                    Fungsi
'tags' => 'array'	        JSON di database → array PHP
'published' => 'boolean'	Integer 0/1 → true/false
'published_at' => 'date'	String date → Carbon instance (bisa pakai ->format())

3. Apa perbedaan integer biasa dengan foreign key?
Perbedaan utama antara integer biasa dan foreign key terletak pada validasi dan integritas data. Integer biasa hanya menyimpan angka tanpa validasi, bisa diisi nilai berapa pun (termasuk yang tidak valid), tidak mendukung cascade, dan contohnya seperti $table->integer('category_id'). Sedangkan foreign key menyimpan referensi ke tabel lain, memiliki validasi yang memastikan nilai benar-benar ada di tabel referensi, mendukung cascade (otomatis terhapus/terupdate), dan contohnya seperti $table->foreignId('category_id')->constrained(). Dengan kata lain, foreign key lebih aman untuk menjaga konsistensi data.

4. Bagaimana jika category dihapus tetapi masih ada post?
Tergantung pengaturan foreign key pada migration. Jika menggunakan onDelete('cascade'), post akan ikut terhapus. Jika menggunakan onDelete('set null'), category_id pada post akan menjadi NULL (field harus nullable). Jika tidak ada pengaturan cascade (default), maka akan muncul error karena masih ada post yang terkait. Pada praktikum ini, saya menggunakan onDelete('cascade') sehingga post otomatis terhapus jika category-nya dihapus.

## Jobsheet 6: Implementasi Form Elements & Resource Post di Filament


**Nama:** Nur Alfiyanti
**NIM:** 244107020055
**Kelas:** TI-2F

### Langkah-langkah beserta bukti Screenshoot:

## LAPORAN PRAKTIKUM WEEK06
<details>
<summary><h3>JOBSHEET 01</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
## Membuat Resource Post
![alt text](<screenshoot/Screenshot 2026-04-10 192910.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 193417.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 194037.png>)
## Implementasi Form Elements
![alt text](<Screenshot 2026-04-08 175516.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 194243.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 194404.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 194557.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 194808.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 194952.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 195007.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 195821.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 195903.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 200225.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 200239.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 201149.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 201203.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 201506.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 203748.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 203803.png>)
![alt text](<screenshoot/Screenshot 2026-04-10 203957.png>)
![alt text](<screenshoot/Screenshot 2026-04-11 194259.png>)
![alt text](<screenshoot/Screenshot 2026-04-11 194727.png>)
## Menampilkan Data di Tabel
![alt text](<screenshoot/Screenshot 2026-04-18 151737.png>)
![alt text](<screenshoot/Screenshot 2026-04-18 145209.png>)
![alt text](<screenshoot/Screenshot 2026-04-18 151342.png>)
![alt text](<screenshoot/Screenshot 2026-04-18 151808.png>)
![alt text](<screenshoot/Screenshot 2026-04-18 160202.png>)


## Analisis & Diskusi
1.Mengapa kita perlu storage:link?
File yang diupload melalui form disimpan di direktori storage/app/public yang secara default tidak dapat diakses langsung oleh browser karena berada di luar folder public. Perintah storage:link membuat tautan simbolis (symlink) dari public/storage ke storage/app/public, sehingga file-file tersebut dapat diakses melalui URL publik seperti http://localhost:8000/storage/nama_file.jpg. Tanpa perintah ini, gambar yang diupload tidak akan muncul di halaman web.<br>
2.Apa peran $casts pada field tags yang menggunakan TagsInput?<br>
Field tags pada database bertipe JSON. TagsInput di Filament menghasilkan data dalam bentuk array. Agar data array ini bisa disimpan ke database, diperlukan konversi ke format JSON. Dengan menambahkan 'tags' => 'array' di properti $casts model Post, Laravel akan secara otomatis: Mengubah array menjadi JSON saat menyimpan ke database, Mengubah JSON menjadi array saat mengambil data dari database, Ini memudahkan manipulasi data tag di sisi aplikasi.<br>
3.Mengapa menggunakan category.name (bukan category_id) pada tabel?<br>
category_id yang tersimpan di database hanyalah berupa angka (foreign key) yang tidak informatif bagi pengguna. Dengan menggunakan category.name, kita memanfaatkan relasi Eloquent belongsTo yang telah didefinisikan di model Post. Filament akan secara otomatis mengambil data dari relasi tersebut dan menampilkan nama kategori, bukan ID-nya. Ini membuat tampilan tabel menjadi lebih mudah dipahami.<br>
4.Perbedaan antara RichEditor dan MarkdownEditor<br>
RichEditor adalah editor WYSIWYG yang menampilkan hasil langsung seperti di Microsoft Word, dilengkapi toolbar untuk formatting, menyimpan output dalam format HTML (ukuran lebih besar), dan cocok untuk pengguna awam.<br>
MarkdownEditor adalah editor berbasis teks dengan sintaks khusus, tanpa toolbar (hanya preview), menyimpan output dalam format markdown (ukuran lebih kecil), dan lebih disukai developer karena hasilnya bersih dan fleksibel.
</blockquote>
</details>

<br>

<details>
<summary><h3>JOBSHEET 02</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
## Mengatur Layout Dasar dengan Columns
![alt text](<Screenshot 2026-04-18 171130.png>)
![alt text](<Screenshot 2026-04-18 170152.png>)
![alt text](<Screenshot 2026-04-18 171149.png>)
![alt text](<Screenshot 2026-04-18 172209.png>)
## Menggunakan Section
![alt text](<Screenshot 2026-04-18 183901.png>)
![alt text](<Screenshot 2026-04-18 184900.png>)
## Membuat Section Terpisah
Section Image Upload
![alt text](<Screenshot 2026-04-18 185403.png>)
Section Meta Data
![alt text](<Screenshot 2026-04-18 210011.png>)
![alt text](<Screenshot 2026-04-18 210126.png>)
![alt text](<Screenshot 2026-04-18 210308.png>)
![alt text](<Screenshot 2026-04-18 210340.png>)
## Menggunakan Group untuk Layout Horizontal
![alt text](<Screenshot 2026-04-18 214850.png>)
![alt text](<Screenshot 2026-04-18 214701.png>)
![alt text](<Screenshot 2026-04-18 220220.png>)
![alt text](<Screenshot 2026-04-18 220208.png>)
## Mengatur Lebar Field Individual
![alt text](<Screenshot 2026-04-18 222753.png>)
![alt text](<Screenshot 2026-04-18 222805.png>)
## Analisis & Diskusi
1.Mengapa layout form penting dalam aplikasi admin? <br>
Layout form sangat penting dalam aplikasi admin karena beberapa alasan. Pertama, form dengan layout yang rapi memudahkan admin dalam mengisi data karena field-field terorganisir dengan baik dan tidak terlihat berantakan. Kedua, layout yang baik dapat mengurangi kesalahan input karena admin bisa fokus pada satu bagian form dalam satu waktu. Ketiga, form yang terstruktur profesional memberikan kesan bahwa aplikasi tersebut berkualitas dan dapat dipercaya. Keempat, layout yang efisien dapat menghemat waktu pengguna karena field yang sering digunakan bisa ditempatkan di posisi strategis. Terakhir, dengan layout yang baik, form yang memiliki banyak field (seperti form post yang memiliki 10+ field) tetap terlihat rapi dan tidak membingungkan pengguna. <br>

2.Apa perbedaan Section dan Group?  <br>
Section dan Group memiliki perbedaan mendasar. Section adalah komponen yang menampilkan visual box dengan judul, deskripsi, dan icon. Section digunakan untuk mengelompokkan field-field yang memiliki tema atau kategori yang sama, misalnya "Post Details" untuk field utama dan "Meta Information" untuk field tambahan. Section akan terlihat jelas di form karena memiliki border dan judul.

Sementara itu, Group adalah komponen yang digunakan untuk mengatur layout tanpa tampilan visual. Group tidak memiliki border, judul, atau icon. Fungsinya murni untuk mengatur posisi dan lebar field di dalam form, misalnya membagi beberapa field menjadi 2 kolom. Group berguna ketika kita ingin mengatur tata letak tanpa menambahkan elemen visual tambahan <br>

3.Kapan kita menggunakan columnSpanFull()?  <br>
columnSpanFull() digunakan ketika kita ingin suatu field atau section memenuhi seluruh lebar kolom yang tersedia. Contoh penggunaannya adalah pada field Body (konten artikel) di form Post. Field Body biasanya membutuhkan ruang yang lebar karena berisi editor teks panjang. Dengan menggunakan columnSpanFull(), field tersebut akan melintang dari ujung kiri ke ujung kanan form, tidak terbatas pada grid kolom tertentu.

Penggunaan lainnya adalah ketika ada field yang membutuhkan perhatian khusus atau ingin ditampilkan secara menonjol, seperti field deskripsi panjang atau upload file yang memerlukan area luas. columnSpanFull() juga berguna ketika kita ingin membuat form yang responsif di mana field tertentu harus tampil full width di perangkat mobile. <br>


4.Apa keuntungan sistem grid 12 kolom?  <br>
Keuntungan utamanya adalah 12 dapat dibagi dengan mudah oleh angka 1, 2, 3, 4, 6, dan 12. Ini memungkinkan kita membuat berbagai kombinasi lebar kolom, misalnya:

2 kolom sama lebar (6 + 6), 3 kolom sama lebar (4 + 4 + 4), Kolom besar dan kecil (8 + 4), Kolom utama dan sidebar (9 + 3), Form dengan rasio 2/3 - 1/3 (8 + 4)

Selain itu, sistem grid 12 kolom sudah umum digunakan (seperti di Tailwind CSS, Bootstrap, Filament), sehingga developer tidak perlu belajar sistem baru. Grid ini juga responsif, artinya kita bisa mengatur berapa banyak kolom yang ditampilkan di berbagai ukuran layar (desktop, tablet, mobile). Dengan fleksibilitas ini, kita bisa membuat form yang rapi, proporsional, dan profesional tanpa perlu coding CSS manual. <br>


</blockquote> 
</details>

<br>

<details>
<summary><h3>JOBSHEET 03</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
## Menambahkan Validasi
Menggunakan Method required()
![alt text](<Screenshot 2026-04-19 071240.png>)
![alt text](<Screenshot 2026-04-19 071714.png>)
Menggunakan rule()
![alt text](<Screenshot 2026-04-19 071937.png>)
![alt text](<Screenshot 2026-04-19 074618.png>)
Menggunakan rules() (Multiple Validation)
![alt text](<Screenshot 2026-04-19 074721.png>)
![alt text](<Screenshot 2026-04-19 075040.png>)
![alt text](<Screenshot 2026-04-19 075242.png>)
![alt text](<Screenshot 2026-04-19 080434.png>)
![alt text](<Screenshot 2026-04-19 080311.png>)
## Validasi Unique
![alt text](<Screenshot 2026-04-19 081104.png>)
![alt text](<Screenshot 2026-04-19 081119.png>)
## Mengganti Pesan Error (Custom Message)
![alt text](<Screenshot 2026-04-19 081744.png>)
![alt text](<Screenshot 2026-04-19 081827.png>)
## Contoh Validasi Lengkap Post
![alt text](<Screenshot 2026-04-19 083336.png>)
##  Jenis Validasi yang Bisa Digunakan
Karena berbasis Laravel, kita bisa menggunakan:
Rule            Fungsi
required        Wajib diisi
min             Minimal karakter
max             Maksimal karakter
email           Format email
numeric         Hanya angka
boolean         True/False
unique          Tidak boleh duplikat
date            Format tanggal
after           Tanggal setelah
confirmed       Konfirmasi password

Dokumentasi lengkap tersedia di Laravel Validation.
## Perbedaan rule() vs required()
Method                  Keterangan
required()              Shortcut validasi wajib isi
rule()                  Untuk 1 rule saja
rules()                 Untuk banyak rule
validationMessages()    Mengubah pesan error
## Analisis & Diskusi
1. Mengapa validasi penting pada admin panel? <br>
Agar data yang masuk ke database valid dan aman. Tanpa validasi, admin bisa salah input atau bahkan ada yang sengaja masukin data berbahaya. Validasi juga ngasih tahu admin kalau ada field yang salah, jadi langsung bisa diperbaiki. <br>
2. Apa perbedaan validasi client-side dan server-side? <br>
Client-side jalan di browser pakai JavaScript, cepat dan enak buat pengguna, tapi gak aman karena bisa dimatiin. Server-side jalan di server pakai PHP, lebih lambat dikit tapi aman karena gak bisa dilewati. Filament pakai server-side karena lebih aman. <br>
3. Mengapa unique otomatis bekerja saat edit data? <br>
Filament secara otomatis mengenali bahwa kita sedang mengedit data yang sudah ada, bukan membuat data baru. Saat menggunakan method unique() pada field slug, Filament akan mengecualikan record yang sedang diedit dari pengecekan unique. Artinya, jika kita mengedit post dengan slug "belajar-laravel" dan tidak mengubah slug tersebut, maka validasi unique akan tetap lolos karena slug tersebut milik record yang sama. Filament melakukan ini secara otomatis di balik layar dengan parameter ignoreRecord: true. Jika ingin mengatur secara manual, kita bisa menambahkan ->unique(ignoreRecord: true). <br>
4. Kapan kita perlu menggunakan rules array dibanding string? <br>
Rules string ('required|min:3') dipakai kalau aturannya sederhana. Rules array (['required', 'min:3']) dipakai kalau aturannya kompleks, misalnya butuh aturan in: atau validasi custom. Intinya, array lebih fleksibel. <br>

