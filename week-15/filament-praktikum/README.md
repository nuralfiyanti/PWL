## Jobsheet 15: Implementasi Many-to-Many Relationship pada Filament

**Nama:** Nur Alfiyanti <br>
**NIM:** 244107020055  <br>
**Kelas:** TI-2F <br>

### Langkah-langkah beserta bukti Screenshoot:

## LAPORAN PRAKTIKUM WEEK15
<details>
<summary><h3>JOBSHEET 15</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
## Rollback Migration
![alt text](<screenshoot/Screenshot 2026-06-04 015525.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-04 020221.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-04 020441.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-04 020710.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-04 020726.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-04 023708.png>) <br>
Jika ingin rollback posts dan products, Yang terakhir dibuat: products dan posts. Maka harus rollback 2 langkah. <br>
Kemudian hapus kolom: <br>
![alt text](<screenshoot/Screenshot 2026-06-04 021010.png>)
## Membuat Tabel Tags
![alt text](<screenshoot/Screenshot 2026-06-04 024203.png>) <br>
## Membuat Pivot Table
![alt text](<screenshoot/Screenshot 2026-06-04 025056.png>) <br>
Jalankan Migration <br>
![alt text](<screenshoot/Screenshot 2026-06-04 025218.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-04 025312.png>) <br>
## Membuat Resource Tag pada Filament
![alt text](<screenshoot/Screenshot 2026-06-04 025812.png>) <br>
## Membuat Model Tag
![alt text](<screenshoot/Screenshot 2026-06-04 025903.png>) <br>
Edit models tag.php: <br>
![alt text](<screenshoot/Screenshot 2026-06-04 030110.png>) <br>
tampilan di web setelah di masuk: <br>
![alt text](<screenshoot/Screenshot 2026-06-04 030223.png>) <br>
Form Tag, Buka file TagForm.php pada schemas. Tambah kode berikut <br>
![alt text](<screenshoot/Screenshot 2026-06-04 032735.png>)
![alt text](<screenshoot/Screenshot 2026-06-04 030223.png>)
Table Tag
Buka file TagsTable.php pada folder Tags. Tambah kode berikut <br>
![alt text](<screenshoot/Screenshot 2026-06-04 033513.png>) <br>
Setelah itu admin dapat: <br>
• Menambah tag <br>
• Mengedit tag <br>
• Menghapus tag <br>
![alt text](<screenshoot/Screenshot 2026-06-04 033620.png>) <br>
Tambahkan kode pada CreateTag.php dan EditTag.php pada folder pages agar setelah create atau edit selesai maka bisa langsung ke halaman index <br>
CreateTag.php <br>
![alt text](<screenshoot/Screenshot 2026-06-04 033837.png>) <br>
EditTag.php <br>
![alt text](<screenshoot/Screenshot 2026-06-04 033922.png>) <br>
## Menambahkan Relationship pada Model Post
![alt text](<screenshoot/Screenshot 2026-06-04 183351.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-04 205347.png>) <br>
## Menambahkan Relationship pada Model Tags
Tambahkan fungsi pada Model Tag <br>
![alt text](<screenshoot/Screenshot 2026-06-04 205828.png>) <br>
## Menggunakan Relationship pada Form Post
Buka PostResource → Form Schema <br>
Ganti field tags dengan:<br>
![alt text](<screenshoot/Screenshot 2026-06-04 211124.png>) <br>
Penjelasan: <br>
relationship: mengambil data relasi <br>
multiple: memilih banyak data <br>
## Hasil Form Post
Dropdown tag akan menampilkan: <br>
• Laravel 10 <br>
• Laravel 11 <br>
• Laravel 12 <br>
User dapat memilih lebih dari satu tag. <br>
![alt text](<screenshoot/Screenshot 2026-06-04 223506.png>) <br>
Tambahkan function multiple() untuk membuat field Select bisa memilih lebih dari satu data. <br>
![alt text](<screenshoot/Screenshot 2026-06-04 225157.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-04 225242.png>) <br>
## Membuat Relationship Manager 
![alt text](<screenshoot/Screenshot 2026-06-04 225649.png>) <br>
## Menghubungkan Relationship Manager
Buka PostResource.php. Tambahkan: <br>
![alt text](<screenshoot/Screenshot 2026-06-05 030030.png>) <br>
## Fitur Relationship Manager
Buka file TagsRelationManager.php dan modifikasi codenya
![alt text](<screenshoot/Screenshot 2026-06-04 233312.png>) <br>
![alt text](<screenshoot/Screenshot 2026-06-05 030507.png>) <br>
## Analisis & Diskusi
1. **Apa perbedaan HasMany dan Many-to-Many?** <br>
HasMany digunakan ketika satu data dapat memiliki banyak data lain, tetapi data tersebut hanya terhubung ke satu induk. Contohnya satu kategori memiliki banyak post. Sedangkan Many-to-Many memungkinkan kedua tabel saling memiliki banyak hubungan, seperti post dan tag. <br>

2. **Mengapa pivot table diperlukan?** <br>
Pivot table digunakan untuk menghubungkan dua tabel yang memiliki relasi Many-to-Many. Pada praktikum ini, tabel post_tag berfungsi menghubungkan data post dengan tag. <br>

3. **Apa fungsi attach dan detach pada Filament?** <br>
Attach digunakan untuk menambahkan hubungan antara dua data yang sudah ada, sedangkan detach digunakan untuk menghapus hubungan tersebut tanpa menghapus data aslinya. <br>

4. **Mengapa JSON column kurang baik untuk relasi?** <br>
Karena data menjadi kurang terstruktur, sulit dicari dan dikelola, serta berpotensi menimbulkan duplikasi data. Relasi Many-to-Many dengan pivot table lebih rapi dan efisien untuk database.<br>

## Kesimpulan
Pada praktikum ini mahasiswa telah mempelajari: <br>
. Konsep Many-to-Many Relationship <br>
. Implementasi pivot table pada Laravel <br>
. Relationship model menggunakan belongsToMany <br>
. Multiple select relationship pada Filament <br>
. Penggunaan Relationship Manager untuk mengelola relasi <br>

