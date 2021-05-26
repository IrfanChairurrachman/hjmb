# HJMB WEB

## Proses Instalasi

1. Forking repo ini (optional)
2. Clone projek dari repo dengan command `git clone [url repo]` atau download dengan format zip.
3. Jalankan `composer install`.
4. Rename `.env.example.txt` menjadi `.env`.
5. Buat database dengan nama `hjmb_db` di phpmyadmin atau db yang kamu gunakan, kemudian konfigurasikan pada file `.env`.
6. Jalankan `php spark migrate` untuk migrasi schema db ke database.
7. Jalankan `php spark db:seed` dan lihat apakah data di db terisi. Jika tidak maka jalankan satu satu:
    - `php spark db:seed AdminSeeder`
    - `php spark db:seed ArticlesSeeder`
    - `php spark db:seed CategorySeeder`
    - `php spark db:seed NewsSeeder`
    - `php spark db:seed ProductsSeeder` (untuk produkseeder, categoryid sesuaikan dengan id category di table category db).
8. Jalankan `php spark migrate`.

## Mendapatkan Revisi dari Repo utama
1. Daftarkan remote upstream dengan `git remote add upstream https://github.com/IrfanChairurrachman/hjmb.git`
2. pull repo utama dengan branch lokal dengan perintah `git pull upstream main`.
