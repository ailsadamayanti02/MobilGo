<?php
if (isset($_POST['register'])) {
    // Ambil data yang diinputkan dari formulir
    $username = $_POST['nama_pengguna'];
    $jk = $_POST['jenis_kelamin'];
    $no_telp = $_POST['telepon_pengguna'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];

    $dbHost = "localhost";
    $dbName = "mobilgo";
    $dbUser = "root";
    $dbPass = "";

    try {
        $dbh = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Hash password menggunakan bcryp

        // Setelah data tersimpan, Anda dapat melakukan tindakan lain, seperti mengirim pengguna ke halaman lain atau menampilkan pesan sukses.
        header('Location:login.php');
    } catch (PDOException $e) {
        // Tangani kesalahan koneksi database
        echo "Database connection failed: " . $e->getMessage();
    }
}

$host = "localhost";
$username = "root";
$password = "";
$database = "mobilgo";

$koneksi = mysqli_connect($host, $username, $password, $database);
?>
