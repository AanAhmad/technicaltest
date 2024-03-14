# README

## Informasi Aplikasi Manajemen Pemesanan dan Monitoring Kendaraan

Aplikasi ini adalah sebuah sistem manajemen pemesanan kendaraan serta monitoring penggunaan kendaraan yang menggunakan teknologi berikut:

- **Database Version:** MariaDB 10.4.32
- **PHP Version:** 8.3.0
- **Framework:** Bootstrap v4.6.1

## Pengguna Default

Terdapat dua kategori pengguna yang telah ditetapkan secara default:

### Admin
- **Username:** admin
- **Password:** admin

### User (Penyetuju)
1. **Username:** rahaan
   - **Password:** rahaan

2. **Username:** gentah
   - **Password:** gentah

3. **Username:** wardimang
   - **Password:** wardimang

4. **Username:** ramamasur
   - **Password:** ramamasur

5. **Username:** lasmanan
   - **Password:** lasmanan


## Panduan Penggunaan Aplikasi

1. **Instalasi:**
   - Pastikan Anda memiliki platform pengembangan web yang telah terinstal di sistem Anda. Contoh platform yang umum digunakan adalah XAMPP, WAMP, MAMP, atau LAMP, yang mencakup Apache, MySQL/MariaDB, dan PHP.
   - Aktifkan Web Server dan DBMS.
   - Unduh atau clone repository aplikasi ini. Gunakan perintah:
     ```
     git clone https://github.com/AanAhmad/technicaltest.git
     ```
   - Pindahkan atau salin seluruh isi direktori aplikasi ke dalam direktori root web server Anda, contohnya `htdocs`.
   - Buka aplikasi pengelola database MySQL seperti phpMyAdmin.
   - Buatlah database baru di server Anda.
   - Impor struktur database dari file SQL yang disediakan di dalam direktori `db`. Anda dapat menggunakan antarmuka pengelola database atau perintah impor SQL yang disediakan oleh aplikasi pengelola database.
   - Konfigurasikan koneksi database di dalam config.php yang berada di `app/config`.
   - Pastikan perangkat Anda memiliki PHP versi 8.3.0 atau yang lebih tinggi.


2. **Login:**
   - Setelah instalasi masuk ke web browser dan masukan `YourHost/technicaltest/public` ke menu pencarian atau jika kamu menggunakan XAMPP masuk ke link berikut :
      http://localhost/technicaltest/public/
   - Masukkan username dan password yang sesuai untuk mengakses sistem.
   - Admin dapat menggunakan username "admin" dan password "admin".
   - Pengguna lain dapat menggunakan username dan password sesuai dengan informasi di atas.

4. **Navigasi:**
<<<<<<< HEAD
   - Setelah login, Anda akan diarahkan ke halaman dashboard.
   - Navigasi ke bagian yang diinginkan menggunakan menu yang tersedia.

5. **Fitur Aplikasi:**
    Fitur yang diberikan disesuaikan dengan kategori pengguna

    ##User##

   - User atau penyetuju dapat melakukan persetujuan di menu `Order` dan melakukan monitoring di menu `Dashboard`.
   - User juga dapat mendapatkan laporan pemesanan dengan masuk ke menu `Lihat Laporan` di atas tabel order.
   - Laporan dapat di export dalam bentuk Excel, Csv, atau PDF.
  
   ##Admin##
   - Admin dapat melakukan input data, update data, dan delete data.
   - Terdapat lima menu yang disediakan diantaranya : `Dashboard`, `Kendaraan`, `Booking`, `Driver`, dan `Bahan Bakar`.
   - Juga terdapat menu laporan yang terdapat di tabel `Booking` dengan mengklik tombol `Lihat Laporan` serta dapat di export dalam bentuk Excel, Csv, maupun PDF.

7. **Keluar:**
   - Pastikan untuk keluar dari aplikasi setelah selesai menggunakan dengan mengklik tombol logout yang ada di kanan atas aplikasi atau menutup jendela browser.
=======
   - Setelah login, Anda akan diarahkan ke halaman beranda yang menampilkan fitur-fitur yang tersedia.
   - Navigasi ke bagian yang diinginkan menggunakan menu yang tersedia.

5. **Fitur Aplikasi:**
   - Sesuai dengan tujuan aplikasi, gunakan fitur-fitur yang tersedia untuk manajemen pengguna sesuai kebutuhan.

6. **Keluar:**
   - Pastikan untuk keluar dari aplikasi setelah selesai menggunakan dengan mengklik tombol logout atau menutup jendela browser.
>>>>>>> e5c60aeaf9f7929495c3e3645fa1db45800f142a
