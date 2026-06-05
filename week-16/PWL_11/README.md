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
