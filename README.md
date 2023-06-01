# PHP simple API by DanielBeeh

# Apa ini?
Framework ini dirancang untuk kebutuhan dasar pembuatan API, dengan beberapa fitur antara lain :
## 1. Sistem login
dengan menggunakan metode generateTokenByAuth(params), akan mengembalikan token dalam format JSON, untuk diperhatikan bahwa didalam tabel yang digunakan diperlukan field 'role' untuk dapat menggunakan metode ini
## 2. Pengamanan endpoint dengan sistem role
endpoint yang dibuat dapat dibatasi oleh role dari pengguna, jalankan "create secure endpoint.bat" untuk membuat endpoint ini
- saat program terbuka, ketikan url endpoint.
- akan ada file baru di folder "./endpoint/URL-FILE.php"
- terdapat array yang berisi role yang bisa mengakses endpoint ini, ubah sesuai dengan kebutuhan
gunakan metode getRoleFromToken(params) untuk mendapatkan role yang dimiliki oleh pemilik token
## 3. endpoint terbuka
Endpoint ini dapat diakses secara umum. jalankan "create open endpoint.bat" untuk membuat endpoint ini
## 4. Query ke JSON dengan mudah
Secara otomatis, endpoint yang dibuat akan mengembalikan file JSON, dengan perintah queryToJson(params) akan otomatis mengembalikan hasil query select dalam format json
## 5. CRUD database dengan mudah
