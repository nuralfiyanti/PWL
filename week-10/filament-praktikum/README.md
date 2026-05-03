## Jobsheet 10:  Implementasi Sorting (Ascending & Descending) pada Table Filament

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
## Implementasi Sorting pada Kolom Title 
Buka file: PostsTable.php <br>
Ubah kolom Title menjadi:  <br>
• TextColumn::make('title') ->sortable(),  <br>
Simpan dan refresh halaman.  <br>
sebelum:
![alt text](<Screenshot 2026-05-02 174419.png>)
![alt text](<Screenshot 2026-05-02 174544.png>)
sesudah
![alt text](<Screenshot 2026-05-02 174610.png>)
Klik header Title:  <br>
• Klik 1 → Ascending (A–Z)  <br>
![alt text](<Screenshot 2026-05-02 225750.png>)
• Klik 2 → Descending (Z–A)  <br>
![alt text](<Screenshot 2026-05-02 225811.png>)

## Sorting pada Kolom Slug
TextColumn::make('slug') ->sortable(),  <br> 
Refresh → Kolom Slug bisa diurutkan. <br> 
![alt text](<Screenshot 2026-05-02 225919.png>)
![alt text](<Screenshot 2026-05-02 225948.png>)

## Sorting pada Relasi (Category) 
TextColumn::make('category.name') ->sortable(),  <br> 
Filament otomatis menangani join relasi.  <br> 
![alt text](<Screenshot 2026-05-02 230104.png>)
![alt text](<Screenshot 2026-05-02 234538.png>)

## Sorting pada Kolom Tanggal
Tambahkan kolom:  <br> 
TextColumn::make('created_at') ->label('Created At') ->dateTime() ->sortable(),  <br> 
Hasil:  <br> 
• Bisa diurutkan berdasarkan tanggal terbaru atau terlama. <br> 
![alt text](<Screenshot 2026-05-02 235016.png>)
![alt text](<Screenshot 2026-05-02 235110.png>)

 ## Mengatur Default Sorting
Jika ingin tabel otomatis urut berdasarkan Title (Ascending):  <br> 
Tambahkan pada konfigurasi table:  <br> 
• ->defaultSort('title', 'asc')  <br> 
Contoh lengkap:  <br> 
![alt text](<Screenshot 2026-05-02 235840.png>) 
![alt text](<Screenshot 2026-05-03 093104.png>)

##  Analisis & Diskusi
1. Mengapa sorting penting pada admin panel? <br>
Sorting memungkinkan admin mengurutkan data (misal berdasarkan judul atau tanggal) dengan cepat, sehingga memudahkan pencarian dan analisis data dalam jumlah besar tanpa scrolling manual. <br>
2. Apa perbedaan sortable biasa dengan defaultSort()? <br>
sortable() berfungsi untuk mengaktifkan fitur urut pada kolom (bisa diklik user).  <br>
Sementara, defaultSort() digunakan untuk menentukan urutan awal tabel sebelum user melakukan sorting. <br>
Dengan kata lain, sortable() adalah kemampuan interaktif, sedangkan defaultSort() adalah pengaturan bawaan sistem. <br>
3. Mengapa relasi tetap bisa di-sort? <br>
Filament otomatis menangani join tabel relasi, lalu menambahkan orderBy pada kolom terkait (contoh:`categories.name), sehingga sorting lintas tabel tetap berfungsi. <br>
4. Kapan kita menggunakan desc sebagai default? <br>
Pengaturan desc (descending) sebagai default sorting digunakan ketika data dengan nilai tertinggi, terbaru, atau terbesar ingin ditampilkan di bagian paling atas tabel. Contoh penerapannya adalah pada kolom created_at dengan ->defaultSort('created_at', 'desc') agar data yang paling baru muncul terlebih dahulu. Selain itu, desc juga cocok digunakan pada kolom seperti price atau stock untuk menampilkan produk dengan harga tertinggi atau stok terbanyak di urutan awal. <br>
