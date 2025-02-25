````markdown
# Aplikasi Manajemen Data Mahasiswa

Aplikasi ini adalah sistem manajemen data mahasiswa yang dibangun menggunakan framework Laravel. Aplikasi ini memungkinkan pengguna untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data mahasiswa, seperti menambahkan, mengedit, menghapus, dan melihat daftar mahasiswa.

## Fitur

-   **Tambah Data Mahasiswa**: Menambahkan data mahasiswa baru (nama, NIM, email, nomor telepon, alamat).
-   **Edit Data Mahasiswa**: Memperbarui data mahasiswa yang sudah ada.
-   **Hapus Data Mahasiswa**: Menghapus data mahasiswa dari sistem.
-   **Pencarian**: Mencari data mahasiswa berdasarkan nama, NIM, atau email.
-   **Pagination**: Menampilkan data mahasiswa per halaman dengan navigasi pagination.

## Teknologi yang Digunakan

-   **Laravel 12**: Framework PHP untuk pengembangan aplikasi web.
-   **Bootstrap 5**: Framework CSS untuk tampilan antarmuka pengguna.
-   **MySQL**: Database untuk menyimpan data mahasiswa.

## Instalasi

Berikut adalah langkah-langkah untuk menginstal dan menjalankan proyek ini di lingkungan lokal Anda:

### 1. Clone Repository

Clone repository ini ke direktori lokal Anda:

```bash
git clone https://github.com/hndko/laravel12-crud.git
cd laravel12-crud
```
````

### 2. Install Dependencies

Jalankan perintah berikut untuk menginstal dependensi Laravel:

```bash
composer install
```

### 3. Setup Environment

Salin file `.env.example` dan ubah namanya menjadi `.env`. Kemudian, konfigurasi file `.env` dengan pengaturan database Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel12-crud
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Key

Jalankan perintah berikut untuk menghasilkan application key:

```bash
php artisan key:generate
```

### 5. Migrasi Database

Jalankan migrasi untuk membuat tabel di database:

```bash
php artisan migrate
```

### 6. Jalankan Aplikasi

Mulai server development Laravel:

```bash
php artisan serve
```

Buka browser dan akses `http://localhost:8000` untuk melihat aplikasi.

## Penggunaan

1. **Halaman Utama**:

    - Menampilkan daftar mahasiswa dengan pagination.
    - Tombol "Tambah Data" untuk menambahkan data mahasiswa baru.
    - Tombol "Edit" dan "Delete" untuk mengelola data mahasiswa.

2. **Tambah Data Mahasiswa**:

    - Klik tombol "Tambah Data" di halaman utama.
    - Isi formulir dan klik "Simpan".

3. **Edit Data Mahasiswa**:

    - Klik tombol "Edit" di samping data mahasiswa yang ingin diubah.
    - Perbarui data dan klik "Simpan".

4. **Hapus Data Mahasiswa**:

    - Klik tombol "Delete" di samping data mahasiswa yang ingin dihapus.
    - Konfirmasi penghapusan.

5. **Pencarian**:
    - Gunakan kolom pencarian di halaman utama untuk mencari data mahasiswa berdasarkan nama, NIM, atau email.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

1. Fork repository ini.
2. Buat branch baru (`git checkout -b fitur-baru`).
3. Commit perubahan Anda (`git commit -m 'Menambahkan fitur baru'`).
4. Push ke branch (`git push origin fitur-baru`).
5. Buat Pull Request.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---

Dibuat dengan ❤️ oleh [Handoko].

```

---

### **Cara Menggunakan README.md**
1. Simpan file di root direktori proyek Anda dengan nama `README.md`.
2. Sesuaikan konten seperti nama proyek, deskripsi, dan instruksi instalasi sesuai dengan proyek Anda.
3. Jika proyek Anda di-host di GitHub, file `README.md` akan otomatis ditampilkan di halaman utama repository.

---

### **Catatan**
- Pastikan untuk mengganti placeholder seperti `hndko/laravel12-crud`, `laravel12-crud`, `root`, dan `(blank)` dengan informasi yang sesuai.
- Jika Anda menggunakan teknologi tambahan (seperti Livewire, Vue.js, atau Inertia.js), tambahkan ke bagian **Teknologi yang Digunakan**.

Semoga ini membantu! Jika Anda memiliki pertanyaan lebih lanjut, silakan beri tahu saya. 😊
```
