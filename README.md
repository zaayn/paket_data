Cara menjalankan Website Toko Penjualan Paket data dan Pulsa

1. download projek "paket_data" dengan cara clone atau download zip dari github 
2. buka cmd pada lokasi projek telah didownload
3. jalankan perintah berikut untuk menambahkan file .env
    ```
    copy .env.example .env
    ```
4. kemudian buka file setting .env dan lakukan beberapa edit pada bagian berikut
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=paket_data
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    DB_DATABASE = Nama database yang akan digunakan
    DB_USERNAME = username dari db yang akan digunakan
    DB_PASSWORD = password db yang akan digunakan

5. buka url ```http://localhost/phpmyadmin/index.php``` pastikan apache dan mysql pada xampp telah menyala