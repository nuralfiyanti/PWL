## Jobsheet 14: Implementasi Relation pada Filament (HasMany)

**Nama:** Nur Alfiyanti <br>
**NIM:** 244107020055  <br>
**Kelas:** TI-2F <br>

### Langkah-langkah beserta bukti Screenshoot:

## LAPORAN PRAKTIKUM WEEK14
<details>
<summary><h3>JOBSHEET 14</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
## Relasi Category dan Post
![alt text](<screenshoot/Screenshot 2026-06-01 165347.png>) <br>
## Implementasi Relationship pada Form
Tambahkan kode dan comment kode preload <br>
![alt text](<screenshoot/Screenshot 2026-06-01 164924.png>) <br>
Parameter  :  Fungsi <br>
category   -  nama relasi pada model <br>
name       -  field yang ditampilkan <br>
## Membuat Dropdown Searchable
Jika kategori sangat banyak, gunakan fitur pencarian: <br>
![alt text](<screenshoot/Screenshot 2026-06-01 165347.png>) <br>
Hasil Dropdown kategori:<br>
• Bisa dicari <br>
• Lebih cepat untuk dataset besar <br>
• Tidak perlu memuat semua data sekaligus <br>
![alt text](<screenshoot/Screenshot 2026-06-01 173044.png>) <br>
## Relationship pada Model
Pastikan relasi sudah dibuat pada model. <br>
Model post <br>
![alt text](<screenshoot/Screenshot 2026-06-01 173303.png>) <br>
Model category <br>
![alt text](<screenshoot/Screenshot 2026-06-01 173541.png>) <br>
## Menampilkan Data Relasi pada Table
Pada Post Table: <br>
• TextColumn::make('category.name') <br>
![alt text](<screenshoot/Screenshot 2026-06-01 173926.png>) <br>
Hasil Tabel akan menampilkan: <br>
![alt text](<screenshoot/Screenshot 2026-06-01 183336.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-01 175021.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-01 183059.png>) <br>
## Membuat Relationship Manage
Filament menyediakan fitur Relationship Manager untuk mengelola relasi langsung dari 
resource. <br>
Jalankan Command : php artisan make:filament-relation-manager <br>
Isi parameter: <br>
• Resource : CategoryResource <br>
Relationship : posts <br>
Title Column : title <br>
![alt text](<screenshoot/Screenshot 2026-06-01 184025.png>) <br>
File yang Dibuat <br>
CategoryResource <br>
└── RelationManagers <br>
 └── PostsRelationManager.php <br>
 ![alt text](<screenshoot/Screenshot 2026-06-01 184147.png>) <br>
## Menghubungkan Relationship Manager
Buka: CategoryResource.php, Tambahkan pada method: <br>
![alt text](<screenshoot/Screenshot 2026-06-01 184810.png>) <br>
Buka model -> Category.php dan tambahkan kode berikut <br>
![alt text](<screenshoot/Screenshot 2026-06-01 173541.png>) <br>
## Hasil Relationship Manager
Saat membuka Edit Category, akan muncul tabel Post yang berelasi. <br>
Fitur yang tersedia: <br>
• View Post <br>
• Create Post <br>
• Edit Post <br>
• Delete Post <br>
![alt text](<screenshoot/Screenshot 2026-06-01 185938.png>) <br>
## Menambahkan Kolom pada Relationship Table
![alt text](<screenshoot/Screenshot 2026-06-01 191049.png>) <br>
Hasil Tabel Post di Category akan menampilkan: <br>
![alt text](<screenshoot/Screenshot 2026-06-01 191353.png>) <br>
## Membuat Form Create Post pada Relationship
Pada Relationship Manager: <br>
![alt text](<screenshoot/Screenshot 2026-06-01 193646.png>) <br>
Saat membuat post baru dari kategori: <br>
• category_id otomatis terisi <br>
• tidak perlu memilih kategori lagi <br>
![alt text](<screenshoot/Screenshot 2026-06-01 194031.png>) <br>
## Keuntungan Menggunakan Relationship Manager
![alt text](<screenshoot/Screenshot 2026-06-01 194207.png>) <br>
## Analisis & Diskusi
1. **Apa perbedaan relationship() dengan options()?** <br>
   - **relationship()**: Mengambil data langsung dari database menggunakan relasi Eloquent. Data diambil secara real-time sesuai relasi yang didefinisikan pada Model. Cocok untuk dataset besar karena bisa menggunakan pagination dan lazy loading.
   - **options()**: Menampilkan daftar pilihan statis yang sudah didefinisikan sebelumnya. Harus manually mendefinisikan semua pilihan atau mengambil dengan `::all()->pluck()`. Kurang fleksibel tapi lebih cepat untuk dataset kecil.
   - Pada praktikum: `->relationship("category", "name")` lebih baik daripada `->options(Category::all()->pluck("name", "id"))` karena lebih dinamis dan optimal untuk dataset besar.
   <br>

2. **Mengapa searchable penting untuk dataset besar?** <br>
   - Tanpa searchable: User harus scroll ribuan pilihan untuk menemukan kategori yang diinginkan (UX buruk).
   - Dengan searchable: User bisa mengetik untuk filter pilihan secara real-time, jauh lebih cepat dan efisien.
   - Mengurangi beban server: Data tidak semua dimuat ke browser, hanya yang sesuai pencarian.
   - Meningkatkan produktivitas: Pengguna bisa langsung menemukan kategori tanpa banyak klik.
   - Pada praktikum: `.searchable()` membuat dropdown category lebih user-friendly ketika ada banyak kategori.
   <br>

3. **Apa fungsi Relationship Manager pada Filament?** <br>
   - Mengelola data relasi langsung dari resource (dalam hal ini: melihat dan mengelola Posts dari halaman Edit Category).
   - Fitur yang tersedia: View, Create, Edit, Delete Posts tanpa harus pindah ke halaman Posts.
   - Meningkatkan efisiensi admin panel: Satu tempat untuk manage related data.
   - Menampilkan tabel relasi dengan kolom yang dapat dikustomisasi.
   - Pada praktikum: PostsRelationManager memungkinkan admin mengelola semua posts yang berelasi dengan suatu kategori langsung dari halaman Category.
   <br>

4. **Kapan menggunakan HasMany dan BelongsTo?** <br>
   - **HasMany**: Digunakan ketika 1 model punya banyak model lain. Contoh: 1 Category punya banyak Posts. Defined di model yang "memiliki" (Category).
     ```php
     // Category.php
     public function posts() {
         return $this->hasMany(Post::class);
     }
     ```
   - **BelongsTo**: Digunakan ketika banyak model milik 1 model lain. Contoh: Banyak Posts milik 1 Category. Defined di model yang "dimiliki" (Post).
     ```php
     // Post.php
     public function category() {
         return $this->belongsTo(Category::class);
     }
     ```
   - Pada praktikum: Category menggunakan HasMany (punya banyak posts), Post menggunakan BelongsTo (milik satu category).
   <br>

# Kesimpulan
Pada praktikum ini mahasiswa telah mempelajari: <br>
• Konsep relationship pada Laravel <br>
• Implementasi relationship pada Filament form <br>
• Penggunaan dropdown relationship <br>
• Penggunaan Relationship Manager <br>
• Pengelolaan data relasi pada admin panel <br>

