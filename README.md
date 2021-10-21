# Sistem Pembayaran BPP & Non-BPP

### Instalasi
1. Clone atau download repository ini
2. Salin semua file dan folder yang ada di dalam folder project kedalam htdocs xampp anda
3. Buat database mysql baru dengan nama **_sistem_pembayaran_**
4. Kemudian import file **sistem_pembayaran.sql** ke dalam database anda
4. Buka file **config.php** yang ada didalam folder **_app/core_**
5. Edit bagian ini dengan posisi dari project anda terhadap folder htdocs
    ``` php
    define('URL', 'http://localhost/{nama_folder_project}');
    ```
    dan bagian koneksi ke database sesuaikan dengan configurasi xampp anda
    ```php
    // Config Database
    define('DB_HOST', 'localhost');
    define('DB_PORT', 3306);
    define('DB_USER', 'root');
    define('DB_PASS', '');
    ```
<br>

### Halaman Website
1. **Login**

    ![Login](/screenshot/login_img.png)

2. **Dashboard (Sementara)**

    ![Dashboard](/screenshot/dashboard_img.png)