Cara menjalankan Website Toko Penjualan Paket data dan Pulsa

1. download projek "paket_data" dengan cara clone atau download zip dari github 
2. buka url ```http://localhost/phpmyadmin/index.php``` pastikan apache dan mysql pada xampp telah menyala
3. pilih menu ```import```
4. pilih file "paket_data.sql" yang berada di dalam projek. kemudian scroll kebawah klik ```Go```
5. buka cmd di dalam projek yang telah didownload
6. jalankan perintah berikut untuk menambahkan file .env
    ```
    copy .env.example .env
    ```
7. kemudian buka file setting .env dan lakukan beberapa edit pada bagian berikut
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=paket_data
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    DB_DATABASE = Nama database yang akan digunakan<br/>
    DB_USERNAME = username dari db yang akan digunakan<br/>
    DB_PASSWORD = password db yang akan digunakan


8. kemudian buka cmd di dalam projek yang telah di download
9. jalankan perintah
    ```
    php artisan key:generate
    ```
    kemudian
    ```
    php artisan serve
    ```
10. buka browser dan buka ```localhost:8000```
11. Akses Login
    ```
    Admin   : admin@gmail.com
    password: 12345678

    User    : zayn@gmail.com
    password: 12345678
    ```
