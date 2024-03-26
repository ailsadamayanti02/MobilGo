
<?php

session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $dbHost = "localhost";
    $dbName = "mobilgo";
    $dbUser = "root";
    $dbPass = "";

    try {
        $dbh = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Cari pengguna berdasarkan username
        $sql = "SELECT * FROM pengguna WHERE nama_pengguna = :nama_pengguna";
        $query = $dbh->prepare($sql);
        $query->bindParam(':nama_pengguna', $username, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);

        $md5 = md5($password);
        // Verifikasi password
        if ($md5 == $user['password']) {
            $_SESSION["id_pengguna"] = $user['id_pengguna'];
            $_SESSION["nama_pengguna"] = $user['nama_pengguna'];
           
            header('Location: indexuser.php');
        } else {
            // Password salah atau pengguna tidak ditemukan
            // Tampilkan pesan kesalahan atau tindakan lain yang sesuai
            echo "Login gagal. Cek kembali username dan password Anda.";
            echo $md5;
            echo $username;
        }
    } catch (PDOException $e) {
        // Tangani kesalahan koneksi database
        echo "Database connection failed: " . $e->getMessage();
    }
}
?>

<html>

<head>
    <style>
        /* Gaya CSS Anda */
    </style>
</head>

<body>
    <div class="center">
    <div style="width: 100%; height: 100%; position: relative; background: white"></div>
<img style="width: 645px; height: 813px; left: 92px; top: -20px; position: absolute" src="images/auth2.png" />
        <div style="width: 254px; height: 46px; left: 910px; top: 251px; position: absolute; color: #3F414E; font-size: 24px; font-family: Mulish; font-weight: 700; word-wrap: break-word">Welcome to MobilGo</div>
        <div style="width: 389px; height: 71px; left: 837px; top: 279px; position: absolute; color: #3F414E; font-size: 20px; font-family: Mulish; font-weight: 400; word-wrap: break-word">Temukan mobil untuk kenyamanan anda.</div>
        <div class="centered-element"></div>
        <form method="post">
    <!-- Input Teks -->
    <input type="text" id="Username" style="width: 247px; height: 31px; left: 909px; top: 400px; position: absolute; background: #FBFBFB; border-radius: 5px; border: 1px rgba(0, 0, 0, 0.38) solid" placeholder="Username" name="username">
    <input type="password" id="passwordInput" style="width: 247px; height: 31px; left: 909px; top: 460px; position: absolute; background: #FBFBFB; border-radius: 5px; border: 1px rgba(0, 0, 0, 0.38) solid" placeholder="Password" name="password">

    <!-- Tombol Masuk -->
    <button type="submit" id="masukButton" name="login" style="width: 90px; height: 40px; left: 909px; top: 555px; position: absolute; background: #211A2C; border-radius: 5px; border: 1px rgba(0, 0, 0, 0.38) solid; color: #FBFBFB; font-size: 16px; font-family: Mulish; font-weight: 600; word-wrap: break-word" >Masuk</button>
</form>

<!-- Form untuk Tombol "Daftar disini" -->
<form method="post" action="register.php">
    <div style="width: 236.54px; height: 24.29px; left: 913.92px; top: 681.20px; position: absolute; text-align: center">
        <p class="mt-2 text-base text-gray-600">Belum Punya Akun? <a href="register.php" title="" class="font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 focus:text-blue-700 hover:underline">Daftar</a></p>
    </div>
      </form>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>