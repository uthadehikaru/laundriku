# Aplikasi Laundry

Laundriku adalah aplikasi berbasis Laravel yang dirancang khusus untuk memudahkan pengelolaan layanan laundry. Dengan antarmuka yang intuitif dan fitur-fitur yang komprehensif, Laundriku membantu pemilik usaha laundry untuk mengoptimalkan operasional mereka, meningkatkan efisiensi, dan memberikan layanan terbaik kepada pelanggan. Aplikasi ini menggabungkan teknologi modern dengan kebutuhan spesifik industri laundry, menciptakan solusi yang powerful namun mudah digunakan.

Beberapa fitur utama yang ditawarkan oleh Laundriku meliputi:
- Manajemen pesanan yang efisien
- Pelacakan status cucian secara real-time
- Pengelolaan data pelanggan
- Sistem harga yang fleksibel
- Integrasi dengan WhatsApp untuk komunikasi yang lebih baik
- Panel admin yang komprehensif untuk kontrol penuh atas operasional

## Spesifikasi Kebutuhan Software

Untuk menjalankan aplikasi ini, Anda memerlukan:

- PHP 8.1 atau lebih tinggi
- Composer
- Node.js dan NPM
- MySQL atau SQLite
- Web server (misalnya Apache atau Nginx)
- Laravel 10.x

## Instalasi

Ikuti langkah-langkah berikut untuk mengatur Aplikasi Laundry di komputer lokal Anda:

1. Klon repositori:
   ```
   git clone https://github.com/uthadehikaru/laundriku
   ```

2. Masuk ke direktori proyek:
   ```
   cd laundriku
   ```

3. Instal dependensi PHP:
   ```
   composer install
   ```

4. Buat salinan file `.env.example` dan ubah namanya menjadi `.env`:
   ```
   cp .env.example .env
   ```

5. Generate kunci aplikasi:
   ```
   php artisan key:generate
   ```

6. Jika anda ingin menggunakan database mysql, konfigurasi pengaturan database Anda di file `.env` (optional):
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_anda
   DB_USERNAME=username_database_anda
   DB_PASSWORD=password_database_anda
   ```

7. Jalankan migrasi database:
   ```
   php artisan migrate --seed
   ```

8. Mulai server pengembangan:
    ```
    php artisan serve
    ```

9. Kunjungi `http://localhost:8000` di browser web Anda untuk mengakses aplikasi.

## Konfigurasi

- Atur nomor WhatsApp Anda di file `.env`:
  ```
  WHATSAPP_NUMBER=nomor_whatsapp_anda
  ```

- Konfigurasi URL embed Google Maps di file `.env`:
  ```
  MAP_EMBED_URL=url_embed_google_maps_anda
  ```

## Fitur

- Manajemen pesanan pelanggan
- Konfigurasi jenis layanan dan harga
- Pelacakan status pesanan
- Dashboard admin untuk gambaran umum bisnis

## Lisensi

Aplikasi Laundry ini adalah perangkat lunak open-source yang dilisensikan di bawah [lisensi MIT](https://opensource.org/licenses/MIT).
