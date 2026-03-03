# WedBook - Sistem Manajemen Tamu Digital
## Tugas Migration - Pemrograman Web Lanjut (Pertemuan 3)

Tema **Kelompok 1 / TI-2F**
Nur Alfiyanti
TI - 2F 
244107020055 - 21
---

##  Daftar File Migration

| No | Nama File | Keterangan |
|----|-----------|------------|
| 1 | `2024_01_01_000001_create_wedbook_users_table.php` | Manajemen pengguna (Super Admin, Admin, Scanner) |
| 2 | `2024_01_01_000002_create_events_table.php`   | Data acara - wedding, wisuda, dies natalis |
| 3 | `2024_01_01_000003_create_guests_table.php` | Data tamu + QR code unik |
| 4 | `2024_01_01_000004_create_rsvps_table.php` | Konfirmasi kehadiran tamu |
| 5 | `2024_01_01_000005_create_scan_logs_table.php` | Catatan scan check-in & souvenir |
| 6 | `2024_01_01_000006_create_guestbooks_table.php` | Buku tamu digital |
| 7 | `2024_01_01_000007_create_souvenir_logs_table.php` | Log pengambilan souvenir (anti double) |
| 8 | `2024_01_01_000008_create_broadcast_logs_table.php` | Log broadcast undangan (WA/Email/Cetak) |
| 9 | `2024_01_01_000009_create_event_scanners_table.php` | Penugasan panitia scanner ke acara |
| 10 | `2024_01_01_000010_create_notifications_table.php` | Notifikasi sistem |
| 11 | `2024_01_01_000011_create_settings_table.php` | Pengaturan platform |

> **Catatan:** Tabel `wedbook_users` sengaja dibuat terpisah dari tabel `users` bawaan Laravel agar tidak bentrok.

---

## Fitur yang Diimplementasikan

- **QR Code Unik** - Setiap tamu punya QR code sendiri untuk check-in
- **Anti Double Check-in** - Tamu tidak bisa check-in lebih dari sekali
- **Anti Double Souvenir** - Tamu hanya bisa ambil souvenir sekali
- **Broadcast Undangan** - Kirim undangan lewat WA, Email, atau cetak fisik
- **Role-based Access** - Ada 3 role: Super Admin, Admin (WO), Scanner (panitia)
- **Multi-event Support** - Bisa untuk wedding, wisuda, dies natalis, dll

---

## Bukti Migration Berhasil

 ![alt text](<screenshoot/Screenshot 2026-03-03 231145.png>)
*Gambar 1: Proses migration berjalan sukses di terminal*

 ![alt text](<screenshoot/Screenshot 2026-03-03 231046.png>)
*Gambar 2: Daftar tabel di database*

![alt text](<screenshoot/ERD Undangan Digital PBL.drawio.png>)
*Gambar 3: Struktur ERD*

---

