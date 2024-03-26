<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Pembayaran</title>
</head>
<body>
    <h1>Formulir Pembayaran</h1>
    
    <?php
    // Proses Formulir
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_pemilik = $_POST["nama_pengguna"];
        $nomor_rekening = $_POST["nomor_rekening"];
        $jumlah_transfer = $_POST["jumlah_transfer"];

        // Proses pembayaran (simulasi)
        echo "<p>Pembayaran berhasil!</p>";
        echo "<p>Terima kasih, $nama_pemilik, telah mentransfer Rp $jumlah_transfer ke rekening $nomor_rekening.</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nama_pemilik">Nama Pemilik:</label>
        <input type="text" name="nama_pemilik" required><br>

        <label for="nomor_rekening">Nomor Rekening:</label>
        <input type="text" name="nomor_rekening" required><br>

        <label for="jumlah_transfer">Jumlah Transfer (Rp):</label>
        <input type="number" name="jumlah_transfer" required><br>

        <input type="submit" value="Bayar">
    </form>
</body>
</html>
