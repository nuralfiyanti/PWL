## Jobsheet 12: Implementasi Toggle Column pada Table Filament 

**Nama:** Nur Alfiyanti <br>
**NIM:** 244107020055  <br>
**Kelas:** TI-2F <br>

### Langkah-langkah beserta bukti Screenshoot:

## LAPORAN PRAKTIKUM WEEK12
<details>
<summary><h3>JOBSHEET 12</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
##  Menambahkan Kolom Baru 
Buka file: PostsTable.php <br>
1. Menambahkan Kolom ID <br>
![alt text](<screenshoot/Screenshot 2026-05-14 175102.png>)
2. Menambahkan Kolom Tags <br>
![alt text](<screenshoot/Screenshot 2026-05-14 183525.png>)
3. . Menambahkan Kolom Published (Boolean) 
![alt text](<screenshoot/Screenshot 2026-05-14 184249.png>)
Tampilan:
![alt text](<screenshoot/Screenshot 2026-05-14 184427.png>)
## Mengaktifkan Toggle Column  
Tambahkan method: <br>
• ->toggleable() <br>
![alt text](<screenshoot/Screenshot 2026-05-14 184749.png>)
Tampilan setelah di Refresh:
![alt text](<screenshoot/Screenshot 2026-05-14 184913.png>)
• Muncul icon pengaturan kolom di kanan atas tabel <br>
• User dapat mencentang atau menghilangkan kolom <br>
• Klik Apply → Kolom langsung disembunyikan <br>
## Menyembunyikan Kolom Secara Default
Jika ingin kolom tersembunyi saat pertama kali dibuka: <br>
• ->toggleable(isToggledHiddenByDefault: true) <br>
![alt text](<screenshoot/Screenshot 2026-05-14 191353.png>)
Hasil <br>
• Kolom tidak tampil secara default <br>
• User dapat mengaktifkannya melalui menu toggle <br>
![alt text](<screenshoot/Screenshot 2026-05-14 191329.png>)
## Penyimpanan Preferensi Kolom 
Filament otomatis menyimpan: <br>
• Kolom yang diaktifkan <br>
• Kolom yang disembunyikan <br>
Preferensi disimpan dalam session, sehingga saat pindah halaman lalu kembali, konfigurasi tetap 
tersimpan. <br>
## Menerapkan Toggle pada Semua Kolom
![alt text](<screenshoot/Screenshot 2026-05-14 213623.png>)
Tampilan setelah di Refresh:
![alt text](<screenshoot/Screenshot 2026-05-14 213753.png>)
##  Analisis & Diskusi
1. Mengapa toggle column penting pada admin panel? <br>
Untuk mengurangi kepadatan informasi (clutter) di tabel dan memberikan fleksibilitas agar pengguna bisa fokus membaca data yang relevan saja. <br>
2. Apa perbedaan toggleable() biasa dengan isToggledHiddenByDefault? <br>
toggleable(): Kolom bisa disembunyikan/ditampilkan, tetapi secara default (awal) akan muncul. <br>
isToggledHiddenByDefault: Kolom bisa disembunyikan/ditampilkan, tetapi secara default akan tersembunyi. <br>
3. Mengapa preferensi kolom tetap tersimpan? <br>
Karena framework (seperti Filament) secara otomatis merekam pilihan pengguna ke dalam Local Storage pada browser, sehingga saat di-refresh tampilannya akan mengikuti pengaturan terakhir. <br>
4. Kapan sebaiknya kolom disembunyikan secara default? <br>
Sebaiknya diterapkan pada kolom data yang bersifat teknis, sekunder, atau sangat jarang dilihat (contoh: ID, UUID, created_at, atau teks panjang). <br>
## Kesimpulan
Pada pertemuan ini mahasiswa telah mempelajari: <br>
• Implementasi Toggle Column <br>
• Menyembunyikan kolom default <br>
• Penggunaan IconColumn boolean <br>
• Manajemen visibilitas kolom <br>
Fitur ini sangat berguna untuk sistem dengan banyak data dan kolom dinamis. <br>