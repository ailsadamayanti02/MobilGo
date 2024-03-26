
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register with MobilGo</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
  <section class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <div style="width: 100%; height: 100%; position: relative; background: white"></div>
          <img style="width: 645px; height: 813px; left: -92px; top: 40px; position: absolute" src="images/auth2.png" />
            
          </div>
          <div class="col-md-6">
            <h2 class="text-center mt-4">Welcome to MobilGo</h2>
            <form action="" method="POST" class="mt-4" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nama_pengguna">Nama Lengkap</label>
                <input type="text" name="nama_pengguna" id="nama_pengguna" class="form-control" placeholder="Masukkan Nama Anda" required>
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
              
                <select name="jenis_kelamin" class="form-control" id="metode"  >
                      <option value="default">Pilih Jenis Kelamin</option>
                      <option value="Laki Laki">Laki Laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="telepon_pengguna">Nomor Telepon</label>
                <input type="number" name="telepon_pengguna" id="telepon_pengguna" class="form-control" placeholder="Masukkan Nomor Telepon Anda" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Anda" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Anda" required>
              </div>
              <div class="form-group">
                <label for="foto_ktp">Foto KTP</label>
                <input type="file" name="foto_ktp" id="foto_ktp" class="form-control-file" accept="image/*" required>
              </div>
              <div class="form-group">
                <label for="foto_kk">Foto KK</label>
                <input type="file" name="foto_kk" id="foto_kk" class="form-control-file" accept="image/*" required>
              </div>
              <div class="form-group">
                <label for="foto_profile">Foto Profile</label>
                <input type="file" name="foto_profile" id="foto_profile" class="form-control-file" accept="image/*" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda" required>
                <p style="text-align: left; margin-top: 10px; color: red; margin-left: 5px; font-weight: bold; font-style: italic;">* Pembayaran hanya melalui BCA</p>

              </div>
             
              <button type="submit" name="register" class="btn btn-primary btn-block mt-4">Register</button>
            </form>
            
            <p class="mt-4 text-center">Sudah Punya Akun? <a href="login.php" class="text-info">Masuk</a></p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Tambahkan Bootstrap JavaScript dan jQuery (opsional) jika diperlukan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  </body>
</html>

<?php

include "koneksi.php";

function uploadGambar($file, $targetDir) {
  $fileName = basename($file["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

  if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
    return $fileName;
  } else {
    return false;
  }
}

// Fungsi untuk menambahkan pengguna baru
function tambahPengguna($koneksi, $nama_pengguna, $telepon_pengguna, $email, $alamat, $foto_ktp, $foto_kk, $foto_profile, $jenis_kelamin, $password) {
  $sql = "INSERT INTO pengguna (nama_pengguna, telepon_pengguna, email, alamat, foto_ktp, foto_kk, foto_profile, jenis_kelamin, password)
          VALUES ('$nama_pengguna', '$telepon_pengguna', '$email', '$alamat', '$foto_ktp', '$foto_kk', '$foto_profile', '$jenis_kelamin', '$password')";

  if (mysqli_query($koneksi, $sql)) {
    return true;
  } else {
    return false;
  }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama_pengguna = $_POST["nama_pengguna"];
  $telepon_pengguna = $_POST["telepon_pengguna"];
  $email = $_POST["email"];
  $alamat = $_POST["alamat"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $password = md5($_POST["password"]);

  // Unggah gambar ke server
  $foto_ktp = uploadGambar($_FILES["foto_ktp"], "images/user/KTP");
  $foto_kk = uploadGambar($_FILES["foto_kk"], "images/user/KK");
  $foto_profile = uploadGambar($_FILES["foto_profile"], "images/user/Profile");

  if ($foto_ktp && $foto_kk && $foto_profile) {
    // Tambahkan pengguna ke database
    if (tambahPengguna($koneksi, $nama_pengguna, $telepon_pengguna, $email, $alamat, $foto_ktp, $foto_kk, $foto_profile, $jenis_kelamin, $password)) {
      echo "Pengguna berhasil ditambahkan.";
      header('Location: login.php');
    } else {
      echo "Gagal menambahkan pengguna.";
    }
  } else {
    echo "Gagal mengunggah gambar.";
  }
}

?>