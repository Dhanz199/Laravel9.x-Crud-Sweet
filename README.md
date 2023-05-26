<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel adalah kerangka kerja (framework) aplikasi web berbasis PHP yang populer. Dikembangkan oleh Taylor Otwell, Laravel dirancang untuk memudahkan pengembangan aplikasi web dengan menyediakan sintaks yang ekspresif dan elegan. Dengan menggunakan Laravel, pengembang dapat mempercepat proses pembuatan aplikasi web yang kompleks dengan menyediakan berbagai fitur dan alat yang siap pakai.

Berikut adalah beberapa fitur dan konsep penting dalam Laravel:

1. Routing: Laravel menyediakan sistem routing yang fleksibel untuk mengatur permintaan HTTP ke berbagai tindakan dalam aplikasi.
2. MVC: Laravel mengikuti pola desain MVC (Model-View-Controller) yang memisahkan logika aplikasi, tampilan, dan logika basis data menjadi komponen-komponen terpisah, sehingga mempermudah pengembangan dan pemeliharaan kode.
3. ORM (Object-Relational Mapping): Laravel menyediakan ORM yang disebut Eloquent, yang memungkinkan pengembang untuk berinteraksi dengan basis data menggunakan objek dan metode-metode pemodelan, daripada menulis kueri SQL langsung.
4. Migration: Laravel menyediakan fitur migrasi yang memungkinkan pengembang untuk mengelola skema basis data secara terstruktur dan mudah diubah melalui kode.
5. Sistem Template: Laravel menggunakan Blade sebagai sistem template untuk memisahkan logika tampilan dari logika aplikasi, dengan menyediakan sintaks yang kuat dan fitur-fitur seperti warisan (inheritance) template dan komponen-komponen reusable.
6. Keamanan: Laravel memiliki fitur keamanan bawaan seperti proteksi dari serangan injeksi SQL, serangan lintas situs (XSS), dan serangan penolakan layanan (DDoS). Laravel juga menyediakan sistem otentikasi dan otorisasi yang kuat.
7. Caching: Laravel mendukung caching untuk meningkatkan kinerja aplikasi dengan menyimpan hasil pemrosesan yang mahal secara biaya, seperti hasil kueri basis data, dalam cache.
8. Pengujian: Laravel menyediakan berbagai alat pengujian yang terintegrasi untuk memudahkan pengujian otomatis dalam aplikasi, termasuk pengujian unit dan pengujian fitur.
Laravel sangat populer di komunitas pengembang web karena kombinasi antara kemudahan penggunaan, fleksibilitas, dan fitur-fitur yang lengkap.

## Cara Instalasi

Sebelum anda mendownload folder zip ini, sebaiknya anda perhatikan langkah-langkahnya agar anda bisa langsung menggunakannya :

Berikut adalah langkah - langkahnya :

1. Download dahulu folder zip ini setelah didownload, lalu extract folder zip ini dimana saja.
2. Copy dan Paste file yang bernama (".env.example") lalu di rename dengan nama (".env") *Tanpa tanda kutip.
3. Selanjutnya, buka terminal (Bisa menggunakan terminal di vs code atau klik kanan git bash here *Jika sudah instalasi Git).
4. Setelah terbuka di vs code, lalu buka terminal ketik beberapa perintah ini : 
    - composer update
    - npm install sweetalert2 (*Note Karna saya menggunakan sweetAlertV2)
5. Jika nmr 4 sudah, pasti didalam folder kalian terdapat (vendor) dan (node_modules)
6. Masih di dalam terminal vscode, ketikkan perintah diterminal tersebut :
    - php artisan config:cache
    - php artisan view:clear
    - php artisan cache:clear
    - php artisan key:generate (*Note untuk mendapatkan generate key yg baru di .env)
    - php artisan serve (*Note untuk menjalan program ini)
7. Setelah semuanya beres, lalu buka dibrowser kalian.
    *Jika Error ulangi langkah ke 6. Happy Coding :)

## ScreenShot



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).




