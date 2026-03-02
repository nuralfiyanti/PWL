#Tugas Jobsheet 3 - POS 

Nama:Nur Alfiyanti 
NIM: 244107020055 
Kelas:TI - 2F

Praktikum 1
![alt text](<screenshoot/Screenshot 2026-03-01 205105.png>)
![alt text](<screenshoot/Screenshot 2026-03-01 205105.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 210640.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 212911.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 212946.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 214840.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 221456.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 221517.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 222717.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 222744.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 224226.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 224324.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 224441.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 224513.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 225511.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 225534.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 232800.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 232812.png>) 

Praktikum 2
![alt text](<screenshoot/Screenshot 2026-03-01 232825.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 234224.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 234800.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 235219.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 235451.png>) 
![alt text](<screenshoot/Screenshot 2026-03-01 235817.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 000032.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 000231.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 000434.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 000448.png>) 

Praktikum 3
![alt text](<screenshoot/Screenshot 2026-03-02 001612.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 002253.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 003513.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 003617.png>) 

Praktikum 4
![alt text](<screenshoot/Screenshot 2026-03-02 003748.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 011129.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 011142.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 013702.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 013711.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 015306.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 015327.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 022327.png>) 

Praktikum 5
![alt text](<screenshoot/Screenshot 2026-03-02 022344.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 023506.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 025127.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 025429.png>) 

Praktikum 6
![alt text](<screenshoot/Screenshot 2026-03-02 025737.png>) 
![alt text](<screenshoot/Screenshot 2026-03-02 044249.png>)
![alt text](<screenshoot/Screenshot 2026-03-02 101759.png>)

Jawaban Pertanyaan 

1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?

Jawaban:
APP_KEY berfungsi sebagai key enkripsi untuk mengamankan data sensitif seperti session dan cookie. Key ini digunakan Laravel untuk melakukan enkripsi/dekripsi data menggunakan cipher AES-256.

2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?

Jawaban:
php artisan key:generate

Perintah ini akan menghasilkan random string 32 karakter yang akan otomatis terisi di file .env pada baris APP_KEY.


3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? 
dan untuk apa saja file migrasi tersebut?

Jawaban:
Secara default Laravel memiliki 3 file migrasi:

0001_01_01_000000_create_users_table.php - Untuk membuat tabel users (data pengguna)

0001_01_01_000001_create_cache_table.php - Untuk membuat tabel cache (penyimpanan cache)

0001_01_01_000002_create_jobs_table.php - Untuk membuat tabel jobs (antrian job)

4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output
dari fungsi tersebut?

Jawaban:
Fungsi $table->timestamps() akan membuat 2 kolom:

created_at (timestamp saat data dibuat)

updated_at (timestamp saat data terakhir diupdate)

Keduanya akan otomatis diisi oleh Laravel.

5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari 
fungsi tersebut?

Jawaban:
Fungsi $table->id() menghasilkan kolom dengan tipe data:

MySQL: BIGINT UNSIGNED AUTO_INCREMENT

PostgreSQL: BIGSERIAL (auto-increment integer)

Kolom ini juga otomatis menjadi PRIMARY KEY.

6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id();
dengan menggunakan $table->id('level_id'); ?

Jawaban:
$table->id() → Membuat kolom dengan nama id sebagai primary key auto-increment

$table->id('level_id') → Membuat kolom dengan nama level_id sebagai primary key auto-increment

Jadi perbedaannya hanya pada nama kolom yang dihasilkan.

7. Pada migration, Fungsi ->unique() digunakan untuk apa?

Jawaban:
Fungsi ->unique() digunakan untuk menambahkan UNIQUE constraint pada kolom, sehingga nilai dalam kolom tersebut tidak boleh duplikat. Contoh: level_kode harus unik.


8. Kenapa level_id di tabel m_user pake unsignedBigInteger, tapi di m_level pake id('level_id')?
Ini tuh hubungannya sama relasi foreign key. Jadi:

Di tabel m_level, level_id itu primary key (induknya), jadi pake id('level_id') biar auto-increment

Di tabel m_user, level_id itu foreign key (anaknya), jadi harus pake tipe data yang sama persis, yaitu unsignedBigInteger

Supaya mereka bisa "nyambung" pas direlasikan, tipe datanya harus cocok. Makanya pake unsignedBigInteger yang sama dengan hasil dari id().

8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user
menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id
pada tabel m_level menggunakan $tabel->id('level_id') ?

Jawaban:
m_level.level_id menggunakan id('level_id') → sebagai primary key (auto-increment)

m_user.level_id menggunakan unsignedBigInteger('level_id') → sebagai foreign key yang merujuk ke m_level.level_id

Keduanya harus memiliki tipe data yang sama agar bisa direlasikan. unsignedBigInteger digunakan karena primary key di PostgreSQL adalah BIGINT UNSIGNED.


9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode 
program Hash::make('1234');?

Jawaban:
Class Hash berfungsi untuk melakukan enkripsi satu arah (hashing) pada password

Hash::make('1234') adalah perintah untuk mengenkripsi string '1234' menjadi hash yang aman disimpan di database

Ini penting untuk keamanan password user


10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa 
kegunaan dari tanda tanya (?) tersebut?

Jawaban:
Tanda tanya (?) adalah placeholder untuk binding parameter yang berfungsi mencegah SQL injection. Nilai sebenarnya akan diisi oleh array kedua. Contoh
DB::insert('insert into m_level(level_kode) values(?)', ['CUS']);

Tanda ? akan diganti dengan 'CUS' secara aman.

11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = 
‘m_user’; dan protected $primaryKey = ‘user_id’; ? 

Jawaban:
protected $table = 'm_user'; → Memberitahu Eloquent bahwa model ini terhubung ke tabel m_user (bukan tabel users default)

protected $primaryKey = 'user_id'; → Memberitahu Eloquent bahwa primary key tabel adalah user_id (bukan id default)


12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke 
database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan

Jawaban:
Menurut saya, Eloquent ORM adalah yang paling mudah karena:

Aspek	DB Facade	Query Builder	Eloquent ORM
Penulisan kode	Raw SQL (rentan error)	Method chaining	OOP murni
Keamanan	Manual binding	Otomatis	Otomatis
Relasi	Join manual	Join manual	Mudah dengan relationship
Readability	Sulit dibaca	Cukup jelas	Sangat jelas
Kesimpulan: Eloquent ORM lebih intuitif karena setiap baris tabel direpresentasikan sebagai objek, sehingga kode lebih bersih, mudah dipahami, dan cepat dalam pengembangan aplikasi.

