## Jobsheet 16: RESTful API

**Nama:** Nur Alfiyanti <br>
**NIM:** 244107020055  <br>
**Kelas:** TI-2F <br>

### Langkah-langkah beserta bukti Screenshoot:

## LAPORAN PRAKTIKUM WEEK16
<details>
<summary><h3>JOBSHEET 16</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
## Sebelum masuk ke dalam praktikum, silahkan siapkan beberapa kebutuhan berikut:
1. Download Postman di https://www.postman.com/downloads <br>
![alt text](<screenshoot/Screenshot 2026-06-05 043219.png>) <br>
2. Buka link Import collection dan save json response-nya <br>
https://www.getpostman.com/collections/0361390acabf30c321bf <br>
3. Cara import <br>
a. Klik import pada postman <br>
![alt text](<screenshoot/Screenshot 2026-06-05 061329.png>) <br>
b. Browse file json yang sudah di download <br>
![alt text](<screenshoot/Screenshot 2026-06-05 061445.png>) <br>
c. Maka akan muncul daftar collection yang sudah di import <br>
![alt text](<screenshoot/Screenshot 2026-06-05 063057.png>) <br>
## Praktikum 1: Membuat autentikasi token pada RESTful API
Pada praktikum ini, akan dibuat autentikasi token pada RESTful API dengan memanfaatkan 
Laravel Sanctum <br>
1. Buatlah proyek baru Laravel dengan menjalankan perintah laravel installer. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 073635.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-05 073647.png>) <br>
2. Tunggu sampai proses instalasi composer selesai dilakukan. Setup proyek menjadi git 
repository. <br>
3. Tambahkan package laravel sanctum dengan menjalankan perintah berikut <br>
![alt text](<screenshoot/Screenshot 2026-06-05 073702.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-05 073734.png>) <br>
4. Publish konfigurasi dari Laravel sanctum dengan menjalankan perintah berikut. Proses ini 
memungkinkan konfigurasi sanctum sesuai kebutuhan dan juga digunakan untuk 
mendapatkan skema migration. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 075055.png>) <br>
5. Buka file User.php yang terdapat dalam models. Sisipkan trait HasApiTokens ke dalam file 
User.php. Trait ini digunakan untuk menambahkan fungsi pembuatan serta penghapusan 
token.<br>
![alt text](<screenshoot/Screenshot 2026-06-05 075401.png>) <br>
6. Buat database kosong baru dengan menggunakan phpmyadmin atau mysql client. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 075944.png>) <br>
7. Atur koneksi ke database baru dengan menyesuaikan file .env yang ada dalam proyek 
Laravel. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 080331.png>) <br>
8. Jalankan migrate data dengan menjalankan perintah artisan <br>
![alt text](<screenshoot/Screenshot 2026-06-05 080645.png>) <br>
9. Pastikan proyek bisa dijalankan dan tidak ada kesalahan, dengan menjalankan perintah
artisan serve. Lakukan commit untuk langkah setup awal proyek Laravel. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 084054.png>) <br>
10. Untuk memudahkan pembangunan response dari API yang dibangun, tambahkan trait 
ApiResponse.php di lokasi directory app/Traits/ApiResponse.php. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 084818.png>) <br>
11. Selain itu buatlah juga custom request untuk menangani request spesifik terhadap API. 
Jalankan perintah berikut <br>
![alt text](<screenshoot/Screenshot 2026-06-05 085424.png>) <br>
12. Ubah kode pada ApiRequest menjadi seperti berikut. Kode berikut mengganti perilaku 
default dari Laravel jika terjadi kesalahan pada request berupa API. Perhatikan, class 
ApiRequest diganti menjadi abstract class ApiRequest <br>
![alt text](<screenshoot/Screenshot 2026-06-05 095010.png>) <br>
13. Buat controller untuk menangani autentikasi dengan perintah artisan. Jalankan perintah 
berikut <br>
![alt text](<screenshoot/Screenshot 2026-06-05 085424.png>) <br>
14. Tambahkan Trait ApiResponse ke dalam Api/AuthController. Perhatikan kode 
berikut sebagai referensi. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 095508.png>) <br>
15. Untuk mengakses API, user membutuhkan sebuah akun. Sehingga dibutuhkan proses 
register. Untuk menghindari controller yang terlalu panjang, untuk proses validasi akan 
ditangani oleh custom request. Buatlah custom request dan beri nama dengan 
RegisterRequest. Jalankan perintah berikut untuk membuat custom request. Pemisahan 
proses validasi di luar controller, bertujuan untuk menerapkan konsep thin controller. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 095540.png>) <br>
16. Buka file RegisterRequest.php, ubah parent class menjadi ApiRequest. Atur nilai 
kembalian menjadi true pada function authorize() dan sesuaikan proses validasi 
berdasar kebutuhan proses registrasi akun. Kode selengkapnya, dapat anda lihat sebagai 
berikut. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 100215.png>) <br>
17. Tambahkan function register dengan parameter RegisterRequest pada 
Api/AuthController. Dalam function ini terdapat logika pembuatan user jika validasi 
berhasil. Sebagai balasan dari API, dikembalikan nilai berupa data user beserta token. 
Proses pembuatan token, dapat menggunakan function createToken. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 100215.png>) <br>
18. Untuk mengimplementasikan fitur login, buatlah custom request dengan nama 
LoginRequest dengan perintah artisan. Modifikasi isi dari LoginRequest.php
sehingga menjadi kode seperti berikut. Sebenarnya implementasi API dari fitur registrasi 
dan login tidak jauh berbeda, yang membedakannya adanya perbedaan format respon 
dari server. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 100303.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-05 102557.png>) <br>
19. Sedangkan implementasi login dapat menggunakan kode berikut. Letakkan function login 
berikut pada file Api/AuthController.php <br
![alt text](<screenshoot/Screenshot 2026-06-05 103712.png>) <br>
20. Buka file routes/api.php dan tambahkan route baru untuk register dan juga login. 
Sehingga dalam file routes/api.php menjadi berikut. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 104401.png>) <br>
21. Bukalah aplikasi postman, ubah semua path {{baseurl}} menjadi path server 
development anda (Contoh: http://localhost:8000). Uji fungsionalitas fitur register dan 
juga login. Jika tidak ada kesalahan, anda akan mendapatkan balasan berupa format json 
yang di dalamnya terdapat token. Lakukan git commit untuk pembuatan fitur register dan 
login tersebut. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 104928.png>) <br>
22. . Copy token yang didapatkan dari proses login atau register pada postman,
digunakan sebagai autentikasi setiap dibutuhkan untuk pemanggilan API. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 114938.png>) <br>
Token ini disisipkan (paste) pada header di menu Authorization pada postman dengan 
format Authorization: bearer <token> (nilai dari <token> akan digantikan dengan 
token yang didapatkan dari API register atau login). <br>
![alt text](<screenshoot/Screenshot 2026-06-05 115336.png>) <br>
23. Buka kembali file Api/AuthController.php, tambahkan fungsi untuk menghapus 
token sebagai implementasi fitur logout. Proses logout dilakukan dengan cara menghapus 
token yang dikirimkan melalui header. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 115818.png>) <br>
24. Tambahkan route pada routes/api.php untuk endpoint logout. Route logout hanya 
dapat diakses oleh user yang telah terautentikasi. Sehingga dibutuhkan penambahan 
middleware auth:sanctum. Perhatikan deklarasi route berikut. <br>
![alt text](<screenshoot/Screenshot 2026-06-05 121145.png>) <br>
25. Buka kembali aplikasi postman, lakukan percobaan request logout dengan menyisipkan 
informasi token pada tab Authorization di postman. Jika anda telah berhasil mendapatkan 
balasan pesan “Tokens revoked” berarti anda telah berhasil menyelesaikan fitur 
logout <br>
![alt text](<screenshoot/Screenshot 2026-06-05 120920.png>) <br>
26. Lakukan git commit untuk implementasi fitur logout sebagai penanda bahwa 
praktikum 1 telah selesai dilakukan. <br>
