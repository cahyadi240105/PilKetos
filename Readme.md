---
Pilketos |
# 🗳️ Website Pemilihan Ketua OSIS

**SMKN 1 Bintan Timur**

Website ini dikembangkan sebagai **proyek akhir** untuk mata pelajaran Pemrograman Web dan **Sistem Basis Data**. Tujuan dari sistem ini adalah menyediakan platform digital yang transparan dan efisien dalam menyelenggarakan pemilihan Ketua OSIS secara online.

⚠️ **Catatan:** Progres pengembangan saat ini telah mencapai **90%**.

---

## 📌 Fitur Utama

* ✅ Halaman login untuk admin, panitia, dan siswa
* ✅ Formulir pemilihan untuk siswa
* ✅ Daftar calon ketua OSIS beserta profil singkat
* ✅ Validasi pemilih berbasis NIS
* ✅ Rekap hasil pemilihan secara real-time
* 🔧 Panel admin untuk manajemen data pengguna & calon

---

## 🛠 Teknologi yang Digunakan

* **Frontend:** Bootstrap dan template
* **Backend:** PHP Native
* **Database:** MySQL

---

## 🚀 Cara Menjalankan Proyek

1. Clone atau unduh repositori ke folder `htdocs` (XAMPP/Laragon).
2. Buat database baru di `phpMyAdmin`, lalu impor file `osis.sql`.
3. Sesuaikan file koneksi database (`config/koneksi.php` atau sejenisnya).
4. Jalankan melalui browser dengan mengakses `localhost/osis-vote`.

---

## 🧭 Struktur Direktori (Contoh)

```
pilketos/
├── css/             
├── database/           
├── images/       
├── js/   
├── partials/        #strutur voting
├── index.php        #halaman login           
└── plugins/
....                 #file pendukung
```

---

## 👨‍💻 Pengembang

Proyek ini dikembangkan oleh Cahyadi Prasetyo sebagai bagian dari tugas akhir semester pada mata pelajaran Pemrograman Web dan Sistem Basis Data.

