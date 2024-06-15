# Proyek E-Commerce

## Deskripsi
Proyek ini adalah aplikasi e-commerce berbasis web yang memungkinkan pengguna untuk menambah, mengedit, menghapus, dan mencari produk dengan mudah. Aplikasi ini juga dilengkapi dengan fitur keranjang belanja yang dapat diakses melalui modal popup, memberikan pengalaman belanja yang interaktif dan menyenangkan bagi pengguna.

## Fitur Utama
1. **Manajemen Produk:**
   - **Tambah Produk:** Pengguna dapat menambah produk baru melalui form dalam modal popup.
   - **Edit Produk:** Pengguna dapat mengedit informasi produk yang ada melalui modal popup yang menampilkan detail produk yang dipilih.
   - **Hapus Produk:** Produk dapat dihapus dari daftar dengan satu klik.
   - **Pencarian Produk:** Pengguna dapat mencari produk dengan memasukkan kata kunci di kolom pencarian.

2. **Keranjang Belanja:**
   - **Tambah ke Keranjang:** Produk dapat ditambahkan ke keranjang belanja dari daftar produk.
   - **Lihat Keranjang:** Pengguna dapat melihat isi keranjang belanja melalui modal popup yang menampilkan semua item yang telah ditambahkan.
   - **Hapus dari Keranjang:** Item dapat dihapus dari keranjang belanja dengan satu klik.
   - **Checkout:** Fitur untuk melanjutkan ke proses pembayaran (placeholder untuk implementasi lebih lanjut).

## Teknologi yang Digunakan
- **Frontend:** HTML, CSS (Bootstrap), JavaScript
- **Backend:** Node.js dengan Express.js
- **Database:** Pilihan Anda (contoh: MongoDB, PostgreSQL, dll.)
- **AJAX:** Axios untuk komunikasi asynchronous dengan server

## Penggunaan
1. **Navigasi:**
   - Gunakan navbar untuk menavigasi antara halaman "Home" dan "Cart".
   - Klik tombol "Add Product" untuk menambah produk baru.

2. **Manajemen Produk:**
   - Isi form dalam modal popup untuk menambah atau mengedit produk.
   - Gunakan tombol "Edit" dan "Delete" pada kartu produk untuk mengedit atau menghapus produk.

3. **Keranjang Belanja:**
   - Klik tombol "Add to Cart" pada kartu produk untuk menambah produk ke keranjang.
   - Klik link "Cart" di navbar untuk membuka modal popup keranjang belanja dan melihat item yang telah ditambahkan.
   - Hapus item dari keranjang melalui tombol "Remove" di modal popup.

## Instalasi dan Menjalankan Proyek
1. **Clone repository:**
    ```bash
    git clone https://github.com/username/repository-name.git
    cd repository-name
    ```

2. **Install dependencies:**
    ```bash
    npm install
    ```

3. **Start the server:**
    ```bash
    npm start
    ```

4. **Buka aplikasi di browser:**
    ```
    http://localhost:3000
    ```
5**Jika terdapat error**
    ```
    coba extrak file rarnya
    ```

## API Endpoints
- **GET /products:** Mendapatkan daftar semua produk.
- **POST /add-product:** Menambah produk baru.
- **POST /update-product:** Mengupdate produk yang ada.
- **DELETE /delete-product/:id:** Menghapus produk berdasarkan ID.
- **POST /add-to-cart:** Menambah produk ke keranjang belanja.
- **GET /cart:** Mendapatkan daftar semua item dalam keranjang belanja.
- **POST /remove-from-cart:** Menghapus produk dari keranjang belanja berdasarkan ID.

## Catatan
Aplikasi ini masih dalam tahap pengembangan. Fitur checkout belum diimplementasikan dan dapat disesuaikan sesuai kebutuhan lebih lanjut.

## Kontribusi
Jika Anda ingin berkontribusi, silakan fork repository ini dan ajukan pull request dengan perubahan Anda. Semua kontribusi akan sangat dihargai.

## Lisensi
Proyek ini dilisensikan di bawah MIT License. Lihat file `LICENSE` untuk informasi lebih lanjut.


