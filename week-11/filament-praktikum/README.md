## Jobsheet 11:  Implementasi Search & Filter pada Table Filament 

**Nama:** Nur Alfiyanti <br>
**NIM:** 244107020055  <br>
**Kelas:** TI-2F <br>

### Langkah-langkah beserta bukti Screenshoot:

## LAPORAN PRAKTIKUM WEEK11
<details>
<summary><h3>JOBSHEET 11</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
## Menambahkan Search pada Kolom
Buka file: PostsTable.php <br>
Tambahkan method searchable() pada kolom yang ingin dicari. <br>
Search pada Title 
TextColumn::make('title') ->searchable(), <br>
Simpan dan refresh halaman. <br>
![alt text](<screenshoot/Screenshot 2026-05-10 154354.png>)
![alt text](<screenshoot/Screenshot 2026-05-10 155836.png>)
Search pada Slug <br>
TextColumn::make('slug') ->searchable(), <br>
![alt text](<screenshoot/Screenshot 2026-05-10 160845.png>)
![alt text](<screenshoot/Screenshot 2026-05-10 160951.png>)
Search pada Relasi Category <br>
TextColumn::make('category.name') ->searchable(), <br>
![alt text](<screenshoot/Screenshot 2026-05-10 163336.png>)
![alt text](<screenshoot/Screenshot 2026-05-10 164257.png>)
Hasil <br>
• Search bar muncul otomatis di atas tabel <br>
• Bisa mencari berdasarkan Title, Slug, dan Category <br>
• Hasil tampil secara real-time <br>
## Membuat Filter Berdasarkan Tanggal 
Search cocok untuk teks, tetapi tidak efektif untuk tanggal. <br>
Solusinya: gunakan Filter. <br>
Tambahkan Filter Created At <br>
![alt text](<screenshoot/Screenshot 2026-05-10 170236.png>) 
![alt text](<screenshoot/Screenshot 2026-05-10 170314.png>)
Menambahkan Query Logic <br>
Agar filter benar-benar bekerja, tambahkan: <br>
![alt text](<screenshoot/Screenshot 2026-05-10 172627.png>)
![alt text](<screenshoot/Screenshot 2026-05-10 172835.png>)
![alt text](<screenshoot/Screenshot 2026-05-10 172856.png>)
## Membuat Filter Berdasarkan Relasi (Kategori)
Gunakan SelectFilter: <br>
use Filament\Tables\Filters\SelectFilter; <br>
Tambahkan: <br>
• SelectFilter::make('category_id') ->label('Select Category') ->relationship('category', 'name') ->preload(), <br>
![alt text](<screenshoot/Screenshot 2026-05-10 174003.png>) 
![alt text](<screenshoot/Screenshot 2026-05-10 174011.png>) 
![alt text](<screenshoot/Screenshot 2026-05-10 174036.png>)
##  Analisis & Diskusi
1. Mengapa search tidak cocok untuk filter tanggal? <br>
Karena search menggunakan pencarian teks (LIKE), sedangkan tanggal adalah data terstruktur (timestamp). Mencari tanggal dengan metode teks sangat tidak akurat. <br>
2. Apa fungsi relationship() pada SelectFilter?  <br>
Untuk mengambil daftar opsi dropdown secara otomatis dari tabel lain yang berelasi, sehingga kita tidak perlu menuliskan pilihan secara manual.<br>
3. Mengapa kita perlu whereDate() pada query filter?<br>
Karena data seperti created_at menyimpan tanggal beserta jamnya (timestamp). whereDate() digunakan untuk mengabaikan jam dan hanya mencocokkan tanggalnya saja agar filter akurat.<br>
4. Apa perbedaan searchable() dan filters()?  <br>
searchable(): Fitur input teks bebas (search bar) untuk mencari kata kunci secara langsung. <br>
filters(): Antarmuka teratur (dropdown, date picker) untuk menyaring data berdasarkan kategori atau rentang tertentu. <br>
