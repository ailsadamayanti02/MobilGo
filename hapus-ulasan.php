<?php
session_start();

if (!isset($_SESSION['pengguna'])) {
    // Redirect atau tangani pengguna yang belum login
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_ulasan'])) {
    include 'koneksi.php'; // Sesuaikan dengan nama file koneksi Anda

    $ulasanId = $_POST['id_ulasan'];
    $userId = $_SESSION['pengguna']['id_pengguna']; // Gantilah dengan kolom yang sesuai pada tabel pengguna

    // Verifikasi apakah pengguna adalah pemilik ulasan
    $query = "SELECT * FROM ulasan WHERE id_ulasan = $ulasanId AND  id_pengguna = $userId";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Pengguna adalah pemilik ulasan, maka hapus ulasan
        $deleteQuery = "DELETE FROM ulasan WHERE id_ulasan = $ulasanId";
        if (mysqli_query($koneksi, $deleteQuery)) {
            // Penghapusan berhasil
            echo 'Ulasan telah dihapus.';
        } else {
            // Gagal menghapus ulasan
            echo 'Gagal menghapus ulasan.';
        }
    } else {
        // Pengguna bukan pemilik ulasan
        echo 'Anda tidak memiliki izin untuk menghapus ulasan ini.';
    }
} else {
    // Permintaan tidak valid
    echo 'Permintaan tidak valid.';
}
