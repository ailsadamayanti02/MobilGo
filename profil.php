<?php
session_start();

if (!isset($_SESSION['id_pengguna'])) {
    echo "<script>alert('Anda Belum Melakukan Login. Silahkan Login Terlebih Dahulu')</script>";
    echo "<script>location='login.php'</script>";
}

include "koneksi.php";

$idpengguna = $_SESSION["id_pengguna"];
$querypengguna = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id_pengguna = '$idpengguna'");
$datapengguna = mysqli_fetch_assoc($querypengguna);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landwind - Tailwind CSS Landing Page Demo</title>
    <!-- Meta SEO -->
    <meta name="title" content="Landwind - Tailwind CSS Landing Page">
    <meta name="description" content="Get started with a free and open-source landing page built with Tailwind CSS and the Flowbite component library.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Themesberg">
    <!-- Social media share -->
    <meta property="og:title" content="Landwind - Tailwind CSS Landing Page">
    <meta property="og:site_name" content="Themesberg">
    <meta property="og:url" content="https://demo.themesberg.com/landwind/">
    <meta property="og:description" content="Get started with a free and open-source landing page for Tailwind CSS built with the Flowbite component library featuring dark mode, hero sections, pricing cards, and more.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/github/landwind/og-image.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@themesberg">
    <meta name="twitter:creator" content="@themesberg">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="./output.css" rel="stylesheet">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<style>
    .popup-container {
        position: relative;
        display: inline-block;
    }

    .popup-content {
        position: absolute;
        top: 100%;
        left: -160px;
        /* Sesuaikan sesuai kebutuhan Anda */
        width: 200px;
        border: 1px solid #ccc;
        background-color: #fff;
        padding: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        opacity: 0;
        visibility: hidden;
        transform: scale(0);
        transition: all 0.3s;
    }

    .popup-container:hover .popup-content {
        opacity: 1;
        visibility: visible;
        transform: scale(1);
    }
</style>
</head>

<body style="background-color: rgb(38, 33, 44);">
    <header class="fixed w-full">
        <nav style="background-color: rgb(38, 33, 44);">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="#" class="flex items-center">
                    <img src="images/ikon-removebg-preview (1).png" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">MobilGo</span>
                </a>
                <div class="popup-container flex items-center lg:order-2 relative group cursor-pointer hover:flex">
                    <img src="images/user/Profile<?php echo $datapengguna['foto_profile']; ?>" alt="" style="width: 60px; height: 60px; border-radius: 50%;">
                    <div class="popup-content">
                        <div>
                            <a href="profil.php">Ubah Profil</a>
                        </div>
                        <div>
                            <a href="riwayat.php">Riwayat Pemesanan</a>
                        </div>
                        <div>
                            <a href="index.php">Logout</a>
                        </div>
                    </div>
                </div>

                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="indexuser.php" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-white lg:dark:hover-text-white dark:hover:bg-gray-700 dark:hover-text-white lg:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                        </li>
                        <li>
                            <a href="mobil.php" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-white lg:dark:hover-text-white dark:hover:bg-gray-700 dark:hover-text-white lg:dark:hover-bg-transparent dark:border-gray-700">Daftar Mobil</a>
                        </li>
                        <li>
                            <a href="ulas.php" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-white lg:dark:hover-text-white dark:hover:bg-gray-700 dark:hover-text-white lg:dark:hover-bg-transparent dark:border-gray-700">Ulasan</a>
                        </li>
                        <li>
                            <a href="kontak.php" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-white lg:dark:hover-text-white dark:hover:bg-gray-700 dark:hover-text-white lg:dark:hover-bg-transparent dark:border-gray-700">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <!-- Hero Start -->
    <form action="" method="POST" enctype="multipart/form-data">
        <section id="hero" class="bg-opacity-30 py-10 sm:py-16 lg:py-24 container">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center justify-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <img src="images/user/Profile<?php echo $datapengguna['foto_profile']; ?>" width="150px" height="120px" alt="iiii">
                        <input class="text-white mt-5" type="file" name="foto_profile" value="<?php echo $datapengguna['foto_profile']; ?>" />



                    </div>
                    <div>
                        <div>
                            <label for="nama" id="nama" style="color: white;">Nama Lengkap</label><br>
                            <input id="nama" class="input-field text-black" type="text" name="nama_pengguna" style="width: 600px; color: black;" value="<?php echo $datapengguna['nama_pengguna']; ?>" />
                        </div>

                        <br>
                        <div>
    <label for="jkel" id="jkel" class="text-white">Jenis Kelamin</label><br>
    <select class="input-field text-black" name="jenis_kelamin" id="jkel" style="width: 600px; color: black;">
        <option value="laki-laki" style="color: black;" <?php echo ($datapengguna['jenis_kelamin'] == 'laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
        <option value="perempuan" style="color: black;" <?php echo ($datapengguna['jenis_kelamin'] == 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
    </select>
</div>


                        <br>
                        <div>
                            <label for="telp" id="telp" style="color: white;">Nomor Telepon</label><br>
                            <input id="telp" class="input-field text-black" type="text" name="telepon_pengguna" style="width: 600px; color: black;" value="<?php echo $datapengguna['telepon_pengguna']; ?>" />
                        </div>
                        <br>
                        <div>
                            <label for="alamat" id="alamat" style="color: white;">Alamat</label><br>
                            <input id="alamat" class="input-field text-black" type="text" name="alamat" style="width: 600px; color: black;" value="<?php echo $datapengguna['alamat']; ?>" />
                        </div>
                        <br>
                        <div>
                            <label for="email" id="email" style="color: white;">Email</label><br>
                            <input id="email" class="input-field text-black" type="text" name="email" style="width: 600px; color: black;" value="<?php echo $datapengguna['email']; ?>" />
                        </div>
                        <br>

                    </div>
                    <br>
                    <br>
                    <div class="md:flex flex-row md:space-x-5 space-y-2 md:space-y-0">
                        <div class="space-y-2 rounded-lg w-60">
                        <label for="email" id="email" style="color: white;">Foto KTP</label><br>
                            <img src="images/user/KTP<?php echo $datapengguna['foto_ktp']; ?>" width="150px" height="120px" alt="iiii">
                           
                        </div>

                        <div class="space-y-2 rounded-lg w-60">
                        <label for="email" id="email" style="color: white;">Foto KK</label><br>
                            <img src="images/user/KK<?php echo $datapengguna['foto_kk']; ?>" width="150px" height="120px" alt="iiii">
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" class="bg-[#FDC300] rounded-lg text-black font-bold p-2" style="background-color: rgb(237, 173, 24); width: 200px; " name="submit">
                        Simpan Perubahan
                    </button>
    </form>

    <?php

    include "koneksi.php";

    // function uploadGambar($file, $targetDir) {
    //   $fileName = basename($file["name"]);
    //   $targetFilePath = $targetDir . $fileName;
    //   $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    //   if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
    //     return $fileName;
    //   } else {
    //     return false;
    //   }
    // }


    // Fungsi untuk menambahkan pengguna baru
    // function tambahPengguna($koneksi, $nama_pengguna, $telepon_pengguna, $email, $alamat, $foto_ktp, $foto_kk, $foto_profile, $jenis_kelamin, $password) {
    //   $sql = "UPDATE pengguna SET nama_pengguna = '$nama_pengguna', telepon_pengguna = '$telepon_pengguna', email='$email', alamat='$alamat', foto_ktp='$foto_ktp', foto_kk='$foto_kk', foto_profile='$foto_profile', jenis_kelamin='$jenis_kelamin', password='$password')
    //           WHERE id_pengguna = '$id'";

    //   if (mysqli_query($koneksi, $sql)) {
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }

    // Handle form submission
    if (isset($_POST['submit'])) {
        $id = $_SESSION['id_pengguna'];
        $nama_pengguna = $_POST["nama_pengguna"];
        $telepon_pengguna = $_POST["telepon_pengguna"];
        $email = $_POST["email"];
        $alamat = $_POST["alamat"];
        $jenis_kelamin = $_POST["jenis_kelamin"];

        // Unggah gambar ke server
        // $foto_ktp = $_FILES['foto_ktp']['name'];
        // $foto_kk = $_FILES['foto_kk']['name'];
        // $foto_profile = $_FILES['foto_kk']['name'];



        if (!empty($_FILES['foto_profile']['name'])) {
            $uploadDirProfile = 'images/user/Profile/';
            $foto_profile = $_FILES['foto_profile']['name'];
            move_uploaded_file($_FILES['foto_profile']['tmp_name'], $uploadDirProfile . $foto_profile);
        } else {
            $foto_profile = $datapengguna['foto_profile']; // Gunakan foto profil yang lama
        }
        $query = "UPDATE pengguna SET nama_pengguna = '$nama_pengguna', telepon_pengguna = '$telepon_pengguna', email='$email', alamat='$alamat', foto_profile='$foto_profile', jenis_kelamin='$jenis_kelamin' WHERE id_pengguna = '$id'";
        $hasil = mysqli_query($koneksi, $query);

        if ($hasil) {
            echo "<script>alert('Perubahan berhasil disimpan')</script>";
        } else {
            echo "<script>alert('Gagal menyimpan perubahan')</script>";
        }
    }
    // if (!empty($foto_ktp) && !empty($foto_kk) && !empty($foto_profile)) {
    //     $uploadDirKtp = 'images/user/KTP';
    //     $uploadDirKK = 'images/user/KK';
    //     $uploadDirProfile = 'images/user/Profile';
    //     move_uploaded_file($_FILES['foto_ktp']['tmp_name'], $uploadDirKtp . $foto_ktp);
    //     move_uploaded_file($_FILES['foto_kk']['tmp_name'], $uploadDirKK . $foto_kk);
    //     move_uploaded_file($_FILES['foto_profile']['tmp_name'], $uploadDirProfile . $foto_profile);
    // } else {
    //     // If no new images were uploaded, use the old ones
    //     $foto_ktp = $datapengguna['foto_ktp'];
    //     $foto_kk = $datapengguna['foto_kk'];
    //     $foto_profile = $datapengguna['foto_profile'];
    // }

    // $foto_ktp = $_FILES["foto_ktp"]['name'];
    // $tmp_name = $_FILES['foto_ktp']['tmp_name'];
    // move_uploaded_file($tmp_name, 'images/user/KTP' . $foto_ktp);

    // $foto_KK = $_FILES["foto_kk"]['name'];
    // $tmp_name_KK = $_FILES['foto_kk']['tmp_name'];
    // move_uploaded_file($tmp_name_KK, 'images/user/KK' . $foto_KK);

    // $foto_profile = $_FILES['foto_profile']['name'];
    // $tmp_name_profile = $_FILES['foto_profile']['tmp_name'];
    // move_uploaded_file($tmp_name_profile, 'images/user/Profile' . $foto_profile);

    //     $query = "UPDATE pengguna SET nama_pengguna = '$nama_pengguna', telepon_pengguna = '$telepon_pengguna', email='$email', alamat='$alamat', foto_ktp='$foto_ktp', foto_kk='$foto_kk', foto_profile='$foto_profile', jenis_kelamin='$jenis_kelamin'
    //                         WHERE id_pengguna = '$id' ";
    //     $hasil = mysqli_query($koneksi, $query);
    //     if ($hasil) {
    //         echo "berhasil";
    //         
    ?>
    <!-- <meta http-equiv="refresh" content="1; url=profil.php"> -->
    <?php
    //     } else {
    //         echo "Gagal update";
    //     }
    //   $foto_kk = uploadGambar($_FILES["foto_kk"], "images/user/KK");
    //   $foto_profile = uploadGambar($_FILES["foto_profile"], "images/user/Profile");

    //   if ($foto_ktp && $foto_kk && $foto_profile) {
    //     // Tambahkan pengguna ke database
    //     if (tambahPengguna($koneksi, $nama_pengguna, $telepon_pengguna, $email, $alamat, $foto_ktp, $foto_kk, $foto_profile, $jenis_kelamin, $password)) {
    //       echo "Pengguna berhasil ditambahkan.";
    //     } else {
    //       echo "Gagal menambahkan pengguna.";
    //     }
    //   } else {
    //     echo "Gagal mengunggah gambar.";
    //   }
    // }

    ?>


    </div>
    </div>
    </div>
    </section>
    <!-- Hero End -->