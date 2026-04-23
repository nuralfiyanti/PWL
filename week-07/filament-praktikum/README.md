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

