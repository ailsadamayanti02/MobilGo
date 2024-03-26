<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan Anda memiliki koneksi ke database
    include "koneksi.php"; // Sesuaikan dengan nama file koneksi Anda

    // Ambil data dari formulir
    $ulasan = $_POST["pesan"];
    $id = $_POST["id"];
    $tanggal_kirim = $_POST["tanggal_ulasan"]; // Mengambil tanggal pengiriman dari input tersembunyi

    // Masukkan data ke dalam tabel ulasan
    $query = "INSERT INTO ulasan (pesan, tanggal_ulasan, id_pengguna) VALUES ('$ulasan', '$tanggal_kirim', '$id')";

    if (mysqli_query($koneksi, $query)) {
        // Ulasan berhasil ditambahkan, tampilkan popup message dan redirect to the ulasan page
        echo "<script>alert('Ulasan berhasil ditambahkan!'); window.location = 'ulas.php';</script>";
    } else {
        // Gagal menambahkan ulasan, tampilkan popup message and redirect to the ulasan page
        echo "<script>alert('Gagal menambahkan ulasan: " . mysqli_error($koneksi) . "'); window.location = 'ulas.php';</script>";
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
}
?>
