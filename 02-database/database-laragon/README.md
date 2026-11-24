# Database Management Using Laragon

## 1. Gambaran Umum

Dokumentasi ini berisi proses pembelajaran dan implementasi pengelolaan database menggunakan Laragon sebagai lingkungan pengembangan lokal.

Pembelajaran berfokus pada penggunaan MySQL sebagai sistem manajemen basis data serta penerapan struktur database pada proyek Laravel REST API menggunakan fitur Migration.

Database yang digunakan dalam pembelajaran ini adalah `belajar_laravel_api`.

## 2. Tujuan Pembelajaran

- Memahami konsep dasar database dan sistem manajemen basis data.
- Mengenal MySQL sebagai sistem manajemen basis data relasional.
- Memahami penggunaan Laragon sebagai lingkungan pengembangan lokal.
- Mempelajari cara membuat dan mengelola database.
- Memahami penggunaan Laravel Migration untuk membuat dan mengubah struktur tabel.
- Memahami tipe data, primary key, dan atribut pada tabel.
- Mengimplementasikan database untuk mendukung kebutuhan aplikasi REST API.

## 3. Tools dan Teknologi

| Tools / Teknologi | Kegunaan |
|---|---|
| Laragon | Lingkungan pengembangan lokal untuk menjalankan layanan web dan database |
| MySQL | Sistem manajemen basis data yang digunakan |
| phpMyAdmin | Antarmuka untuk mengelola database dan tabel |
| Laravel | Framework yang digunakan dalam pengembangan REST API |
| Laravel Migration | Fitur untuk membuat dan mengelola struktur database melalui kode |

## 4. Konfigurasi Database

Database yang digunakan dalam pembelajaran ini memiliki konfigurasi berikut:

| Konfigurasi | Nilai |
|---|---|
| Nama Database | `belajar_laravel_api` |
| Database Management System | MySQL |
| Host | `127.0.0.1` |
| Port | `3306` |
| Username | `root` |
| Password | Tidak menggunakan password pada konfigurasi lokal |

Konfigurasi koneksi database pada Laravel dilakukan melalui file `.env`.

**Catatan:** File `.env` tidak disertakan dalam repository karena berisi konfigurasi lokal dan informasi sensitif.

## 5. Struktur Database

Database belajar_laravel_api memiliki 11 tabel yang terdiri dari tabel utama aplikasi dan tabel pendukung Laravel.

| No. | Nama Tabel | Kegunaan |
|---|---|---|
| 1 | `users` | Menyimpan data pengguna, termasuk nama, email, password, dan role. |
| 2 | `password_reset_tokens` | Menyimpan token yang digunakan untuk proses pengaturan ulang password. |
| 3 | `sessions` | Menyimpan informasi sesi pengguna. |
| 4 | `products` | Menyimpan data produk, seperti nama, deskripsi, harga, dan stok. |
| 5 | `personal_access_tokens` | Menyimpan token autentikasi yang dikelola oleh Laravel Sanctum. |
| 6 | `cache` | Menyimpan data cache aplikasi. |
| 7 | `cache_locks` | Menyimpan informasi penguncian cache. |
| 8 | `jobs` | Menyimpan pekerjaan yang masuk ke dalam antrean (queue). |
| 9 | `job_batches` | Menyimpan informasi kelompok pekerjaan dalam antrean. |
| 10 | `failed_jobs` | Menyimpan informasi pekerjaan yang gagal dijalankan. |
| 11 | `migrations` | Mencatat daftar migration yang telah dijalankan pada database. |



### Struktur Tabel Utama

**a. Tabel `users`**

Digunakan untuk menyimpan informasi pengguna aplikasi.

Kolom utama:
- `id` — Primary Key.
- `name` — Nama pengguna.
- `email` — Alamat email dan memiliki nilai unik.
- `email_verified_at` — Waktu verifikasi email.
- `password` — Password pengguna.
- `remember_token` — Token untuk fitur pengingat sesi.
- `role` — Menentukan hak akses pengguna, yaitu `USER` atau `ADMIN`.
- `created_at` dan `updated_at` — Waktu pembuatan dan perubahan data.

**b. Tabel `products`**

Digunakan untuk menyimpan informasi produk.

Kolom utama:
- `id` — Primary Key.
- `name` — Nama produk.
- `description` — Deskripsi produk.
- `price` — Harga produk.
- `stock` — Jumlah stok produk.
- `created_at` dan `updated_at` — Waktu pembuatan dan perubahan data.

## 6. Implementasi Database

Pembuatan dan pengelolaan struktur database dilakukan menggunakan Laravel Migration.

Beberapa proses yang dipelajari meliputi:

1. Membuat database MySQL melalui lingkungan Laragon.
2. Menghubungkan database dengan proyek Laravel melalui konfigurasi `.env`.
3. Membuat tabel menggunakan file migration.
4. Menentukan kolom dan tipe data pada setiap tabel.
5. Menggunakan primary key dan atribut seperti `unique`, `nullable`, dan `default`.
6. Menambahkan kolom `role` pada tabel `users` melalui migration.
7. Menjalankan migration untuk menerapkan struktur tabel ke database.
8. Memeriksa hasil pembuatan tabel melalui phpMyAdmin.

## 7. Dokumentasi Pembelajaran

Dokumentasi visual dan hasil praktik disimpan dalam folder `dokumentasi`.

| Folder | Isi Dokumentasi |
|---|---|
| [ERD](./dokumentasi/erd.png) | Diagram hubungan dan struktur database. |
| [Screenshot](./dokumentasi/struktur.png) | Bukti tampilan database, tabel, dan hasil implementasi. |
| [Praktik](./dokumentasi/praktik.png) | Dokumentasi tahapan dan proses praktik pembelajaran. |

## 8. Hasil Pembelajaran

Melalui pembelajaran ini, diperoleh pemahaman mengenai pengelolaan database MySQL menggunakan Laragon serta penerapan Laravel Migration untuk membangun struktur database yang mendukung pengembangan aplikasi REST API.

Pembelajaran ini juga memberikan pengalaman dalam mengelola tabel, menentukan tipe data, menggunakan atribut kolom, serta memahami fungsi setiap tabel dalam sebuah aplikasi.