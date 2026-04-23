## Jobsheet 7: Implementasi Wizard Form (Multi Step Form) di Filament

**Nama:** Nur Alfiyanti <br>
**NIM:** 244107020055  <br>
**Kelas:** TI-2F <br>

### Langkah-langkah beserta bukti Screenshoot:

## LAPORAN PRAKTIKUM WEEK07
<details>
<summary><h3>JOBSHEET 01</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
## Membuat Struktur Database Product
![alt text](<Screenshot 2026-04-23 030842.png>)
![alt text](<Screenshot 2026-04-23 114735.png>)
![alt text](<Screenshot 2026-04-23 120622.png>)
## Membuat Resource Product 
![alt text](<Screenshot 2026-04-23 121650.png>)
![alt text](<Screenshot 2026-04-23 121809.png>)
## Implementasi Wizard Form
Step 1 – Product Info
![alt text](<Screenshot 2026-04-23 122459.png>)
![alt text](<Screenshot 2026-04-23 122539.png>)
tep 2 – Pricing & Stock 
![alt text](<Screenshot 2026-04-23 134039.png>)
![alt text](<Screenshot 2026-04-23 134056.png>)
Step 3 – Media & Status
![alt text](<Screenshot 2026-04-23 134235.png>)
![alt text](<Screenshot 2026-04-23 134313.png>)
## Menambahkan Tombol Submit 
![alt text](<Screenshot 2026-04-23 134235-1.png>)
![alt text](<Screenshot 2026-04-23 144928.png>)
## Menghilangkan Default Button
![alt text](<Screenshot 2026-04-23 150049.png>)
![alt text](<Screenshot 2026-04-23 150338.png>)
## Tampilan Wizard Form
![alt text](<Screenshot 2026-04-23 150621.png>)
## Menambahkan Validasi per Step 
![alt text](<Screenshot 2026-04-23 151723.png>)
## I. Menampilkan Data pada Table 
![alt text](<Screenshot 2026-04-23 152809.png>)
## Cek pada database 
![alt text](<Screenshot 2026-04-23 153155.png>)
## Pada halaman awal 
![alt text](<Screenshot 2026-04-23 153354.png>) 
## Cara menampikan datanya buka: 
![alt text](<Screenshot 2026-04-23 153720.png>)
![alt text](<Screenshot 2026-04-23 153758.png>)
## Pengujian 
1. Buat produk baru 
2. Isi Step 1 → klik Next 
![alt text](<Screenshot 2026-04-23 154005.png>)
3. Isi Step 2 → klik Next 
![alt text](<Screenshot 2026-04-23 154011.png>)
4. Upload gambar di Step 3 
![alt text](<Screenshot 2026-04-23 154100.png>)
5. Klik Save Product 
![alt text](<Screenshot 2026-04-23 154111.png>)
![alt text](<Screenshot 2026-04-23 154125.png>)
![alt text](<Screenshot 2026-04-23 154141.png>)
![alt text](<Screenshot 2026-04-23 154440.png>)

##  Analisis & Diskusi
1. Mengapa Wizard Form lebih baik untuk form panjang? <br>
Wizard Form lebih baik untuk form panjang karena: (a) Mengurangi cognitive load - user tidak perlu melihat semua field sekaligus, form panjang membuat user overwhelmed. Wizard membagi form menjadi beberapa step fokus. (b) Meningkatkan completion rate - user lebih termotivasi karena bisa melihat progress (Step 1 dari 3). (c) Better UX - form terlihat rapih dan professional dengan visual progress indicator. (d) Validasi per step - error terdeteksi lebih awal tanpa perlu mengisi semua data baru. (e) Organized data - field dikelompokkan berdasarkan kategori logis memudahkan user memahami alur.

2. Kapan kita menggunakan skippable()? <br>
`skippable()` digunakan pada Step wizard (bukan individual field) untuk memungkinkan user melewati step tanpa mengisi data. Penggunaan yang tepat: (a) Step optional/non-critical seperti Media & Status bisa skippable. (b) Data yang bisa diisi kemudian - user ingin input cepat bisa skip dan edit nanti. (c) User experience yang fleksibel - memberikan opsi Skip membuat form lebih user-friendly. Contoh: Step::make('Media')->skippable()->schema([...]). Catatan: Di Filament, skippable() adalah method Step, bukan individual field.

3. Apa kelebihan multi step dibanding single form panjang? <br>
Kelebihan multi-step: (a) UX lebih baik - terstruktur vs overwhelming panjang. (b) Completion rate lebih tinggi - ada progress bar membuat user termotivasi. (c) Error handling lebih jelas - error per step bukan di tengah form panjang. (d) Performance lebih ringan - load step by step bukan semua field sekaligus. (e) Mobile friendly - scrolling berkurang drastis. (f) Data terorganisir logis - user tahu kapan input informasi tertentu. (g) Ilusi progress - user merasa cepat selesai walaupun banyak field karena ada milestone step. (h) Error recovery mudah - tinggal kembali ke step sebelumnya daripada scroll panjang mencari field error.

4. Apakah wizard cocok untuk semua jenis form? <br>
Tidak, wizard tidak cocok untuk semua jenis form. COCOK untuk: form panjang (10+ field), form kompleks dengan banyak kategori, registration/onboarding, checkout process, setup wizard, data terkelompok logis, user baru. TIDAK COCOK untuk: form sederhana (<5 field), form dengan field interdependent, form filter/search, form login/password, quick action form, form yang sering diisi (user frustasi banyak click). Contoh: Wizard cocok untuk Product Form (7 field), TIDAK cocok untuk Form Login (2 field). Kesimpulan: gunakan wizard bijak - hanya form kompleks & panjang, form sederhana gunakan single page langsung.


</blockquote>
</details>

<br>

## Jobsheet 8 : Implementasi Info List (View Page) di Filament

### Langkah-langkah beserta bukti Screenshoot:

## LAPORAN PRAKTIKUM WEEK07 
<details>
<summary><h3>JOBSHEET 02</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
## Mengedit Product Info List 
![alt text](<Screenshot 2026-04-23 185758.png>)
## Membuat Section – Product Info 
![alt text](<Screenshot 2026-04-23 191528.png>)
Tampilan Section Product Info <br>
![alt text](<Screenshot 2026-04-23 192427.png>)
## Section – Pricing & Stock
![alt text](<Screenshot 2026-04-23 192833.png>)
Hasil: <br>
• Price memiliki icon dolar <br>
• Stock ditampilkan dalam format teks <br>
![alt text](<Screenshot 2026-04-23 192926.png>)
## Section – Media & Status
![alt text](<Screenshot 2026-04-24 032208.png>)
![alt text](<Screenshot 2026-04-24 032200.png>)
![alt text](<Screenshot 2026-04-24 032141.png>)
![alt text](<Screenshot 2026-04-24 032041.png>)
## Menampilkan Status Boolean
![alt text](<Screenshot 2026-04-24 032804.png>)
![alt text](<Screenshot 2026-04-24 032748.png>)
Menampilkan Tanggal dengan Format <br>
![alt text](<Screenshot 2026-04-24 033245.png>)
![alt text](<Screenshot 2026-04-24 033232.png>)

##  Analisis & Diskusi

1. Mengapa View Page tidak cocok menggunakan form input? <br>
View Page (halaman rincian data) pada dasarnya dirancang khusus dengan sifat *Read-Only* atau hanya untuk dilihat saja. Jika kita memakai komponen form input (seperti kolom ketik bebas atau dropdown) di halaman ini, hal tersebut dapat memicu kebingungan (*bad UX*). Pengguna secara psikologis akan mengira bahwa data tersebut bisa langsung diketik dan diubah di situ, lalu mereka akan kebingungan mencari tombol simpan. Sebaiknya, biarkan fungsi lihat data menggunakan teks statis (seperti `TextEntry`), sedangkan form input dikhususkan hanya untuk halaman *Create* atau *Edit*. <br>

2. Apa perbedaan TextColumn dan TextEntry? <br>
TextColumn dan TextEntry:
TextColumn biasa digunakan ketika kita menampilkan data dalam format Tabel (misal: di halaman List Filament), sedangkan TextEntry ditujukan untuk menampilkan informasi berformat teks di dalam Infolist dalam Infolist (halaman rincian View suatu data spesifik). <br>

3. Kapan kita menggunakan badge? <br>
Cocok disisipkan ketika kita ingin menyoroti atau menegaskan suatu status atau label penting (contoh: Status Pesanan "Dibatalkan" / "Sukses"). Pewarnaan pada Badge membuat mata pengguna secara cepat menangkap nilai dari status tersebut, tanpa menghabiskan banyak waktu membaca teks.<br>

4. Apa keuntungan menggunakan IconEntry untuk boolean? <br>
IconEntry untuk tipe boolean:
Lebih baik secara estetika visual. Menampilkan icon seperti ceklis hijau (True/Aktif) atau silang merah (False/Tidak Aktif) sangat kental akan intuitivitas dibanding melempar teks berupa "1/0" atau "True/False" yang kaku dan menghambat user experience.<br>

</blockquote>
</details>

<br>





