## Jobsheet 13: Implementasi Table Actions & Custom Action di Filament 

**Nama:** Nur Alfiyanti <br>
**NIM:** 244107020055  <br>
**Kelas:** TI-2F <br>

### Langkah-langkah beserta bukti Screenshoot:

## LAPORAN PRAKTIKUM WEEK13
<details>
<summary><h3>JOBSHEET 13</h3></summary>
<br>
<blockquote>

## Langkah Praktikum :
## Menambahkan Delete Action 
Buka file: PostsTable.php <br>
Cari bagian: <br>
• ->recordActions([ <br>
EditAction::make(), <br>
]) <br>
Tambahkan: <br>
• DeleteAction::make(), <br>
![alt text](<screenshoot/Screenshot 2026-05-16 121516.png>)
Hasil <br>
• Tombol Delete muncul di tabel <br>
![alt text](<screenshoot/Screenshot 2026-05-16 123420.png>)
• Saat diklik muncul confirmation dialog <br>
![alt text](<screenshoot/Screenshot 2026-05-16 123528.png>)
• Data terhapus tanpa masuk ke halaman edit <br>
![alt text](<screenshoot/Screenshot 2026-05-16 123536.png>)
## Menambahkan Replicate (Copy) Action 
Filament menyediakan action bawaan untuk menduplikasi data: <br>
• ReplicateAction::make(), <br>
![alt text](<screenshoot/Screenshot 2026-05-16 132607.png>)
Hasil <br>
• Tombol Replicate muncul <br>
![alt text](<screenshoot/Screenshot 2026-05-16 132613.png>)
• Saat diklik → record baru dibuat dengan data yang sama
![alt text](<screenshoot/Screenshot 2026-05-16 132856.png>)
![alt text](<screenshoot/Screenshot 2026-05-16 132902.png>)
## Membuat Custom Action (Ubah Status Publish)
Misalnya ingin mengubah status published langsung dari tabel tanpa masuk ke edit. <br>
1. Tambahkan Custom Action <br>
Action::make('status') <br>
->label('Status Change') <br>
![alt text](<screenshoot/Screenshot 2026-05-16 134403.png>)
2. Tambahkan Form Input pada Action <br>
Gunakan schema: <br>
![alt text](<screenshoot/Screenshot 2026-05-16 180340.png>)
Hasilnya seperti pada tampian berikut: <br>
![alt text](<screenshoot/Screenshot 2026-05-16 180103.png>)
![alt text](<screenshoot/Screenshot 2026-05-16 180125.png>)
3. Tambahkan Logic untuk Update Data <br>
![alt text](<screenshoot/Screenshot 2026-05-16 180426.png>)
4. Tambahkan Icon <br>
![alt text](<screenshoot/Screenshot 2026-05-16 180653.png>)
Tampilan: <br>
![alt text](<screenshoot/Screenshot 2026-05-16 180918.png>)
## Contoh Lengkap Custom Action 
![alt text](<screenshoot/Screenshot 2026-05-16 180809.png>)
## Fitur Tambahan Action 
Filament juga menyediakan: <br>
• requiresConfirmation() → menambahkan konfirmasi <br>
• color() → ubah warna tombol <br>
• visible() → tampil berdasarkan kondisi <br>
• url() → redirect ke halaman lain <br>
• openUrlInNewTab() → buka di tab baru <br>
##  Analisis & Diskusi
1. Mengapa action di tabel lebih efisien dibanding halaman edit? <br>
karena: <br>
a. Inline Processing: Tidak perlu navigasi ke halaman lain. User cukup klik action langsung dari tabel → proses selesai → tetap di halaman yang sama <br>
b. Lebih Cepat: Mengurangi loading time dan context switching. <br>
2. Apa perbedaan predefined action dan custom action? <br>
a. Predefined action: Action bawaan Filament yang tinggal pakai (EditAction, DeleteAction, ReplicateAction). suddah jadi dengan default behavior dan styling. <br>
b. Custom action: Action buatan sendiri pakai Action::make() untuk kebutuhan spesifik, seperti action "status change". <br>
3. Bagaimana cara menambahkan validasi dalam custom action? <br> 
Tambah rule validasi di field dalam schema(): <br>
dengan menaambahkan aturan validasi di field-nya dalam schema(). Contoh: <br>
![alt text](<screenshoot/Screenshot 2026-05-16 221002.png>)
Filament otomatis handle validasi sebelum jalankan action(). Kalau ada error, form balik ke modal tanpa execute action <br>
4. Kapan kita menggunakan Replicate? <br>
a. Duplikasi data dengan cepat: Klik tombol replicate → record ter-copy dengan semua data-nya <br>
b. Menghindari input ulang: Daripada create from scratch, replicate existing record lebih efisien <br>
c. Use Cases praktis: <br>
   - Membuat post serupa (sama template, beda konten) <br>
   - Duplikasi product catalog <br>
   - Clone settings/configuration <br>
   - Membuat variasi dari existing data <br>
## Kesimpulan
Pada pertemuan ini mahasiswa telah mempelajari: <br>
• Implementasi Table Actions <br>
• Delete & Replicate bawaan Filament <br>
• Custom Action dengan form input <br>
• Update data langsung dari tabel  <br>
Fitur ini sangat penting untuk meningkatkan efisiensi manajemen data di admin panel. <br>