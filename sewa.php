<?php
session_start();

if (!isset($_SESSION['id_pengguna'])) {
    echo "<script>alert('Anda Belum Melakukan Login. Silahkan Login Terlebih Dahulu')</script>";
    echo "<script>location='login.php'</script>";
}

include "koneksi.php";

$idpengguna = $_SESSION["id_pengguna"];
$querypengguna = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id_pengguna = '$idpengguna'");
$datapengguna = mysqli_fetch_array($querypengguna);


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

        .payment-container {
    padding: 0px; /* Padding untuk memberikan ruang di sekitar elemen */

        }.button-style-with-background {
            background-color: white; /* Latar belakang putih */
            display: inline-block; /* Membuat tautan menjadi blok inline untuk mengikuti lebar kontennya */
            padding: 10px; /* Padding untuk memberikan ruang di sekitar konten */
            border-radius: 0px; /* Menggunakan border-radius untuk sudut yang lebih lembut */
            text-decoration: none; /* Menghapus dekorasi tautan bawaan */
            color: black; /* Warna teks hitam */
            width: 600px; /* Mengatur panjang background sesuai kebutuhan */
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
    <?php
    include "koneksi.php";

    $id = $_GET['id'];
    $querymobil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id'");
    $mobil      = mysqli_fetch_array($querymobil);
    ?>

    <section id="hero" class="bg-opacity-30 py-10 sm:py-16 lg:py-24 container font-mulish">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid items-start justify-center grid-cols-1 gap-12 lg:grid-cols-2">
                <div id="myElement">
                    <img class="w-96" src="../coba/assets/img/<?php echo $mobil['foto_produk']; ?>" alt="" />
                    <div class="bg-white p-7 rounded-lg w-72 lg:w-auto ml-4">
                        <h1 class="mb-3 text-md font-bold"><?php echo $mobil['nama_produk']; ?></h1>
                        <h1 class="mb-3 text-xl font-bold">Rp. <?php echo $mobil['harga_produk']; ?> / Hari</h1>
                        <div class="flex mb-5 justify-between">
                            <div class="text-center inline-block">
                                <img src="images/user.png" alt="" class="inline" />
                                <h1 class="inline"><?php echo $mobil['kapasitas']; ?> Seats</h1>
                            </div>
                            <div class="text-center inline-block">
                                <img src="images/date.png" alt="" class="inline" />
                                <h1 class="inline"><?php echo $mobil['tahun']; ?></h1>
                            </div>
                            <div class="text-center inline-block">
                                <img src="images/car.png" alt="" class="inline" />
                                <h1 class="inline"><?php echo $mobil['bahan_bakar']; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-sm-10">
                    <form method="post" enctype="multipart/form-data" name="sewa">
                        <div class="form-group">
                            <label style="color: white;">Tanggal Mulai</label><br>
                            <input type="date" required class="form-control" name="tanggal_mulai" placeholder="From Date (dd/mm/yyyy)" style="width: 600px;" onchange="calculateDurationAndPrice()">
                        </div>
                        <br>
                        <div>
                            <label for="selesai" id="selesai" style="color: white;">Tanggal Selesai</label><br>
                            <input id="selesai" required class="input-field text-black" type="date" name="tanggal_selesai" style="width: 600px" onchange="calculateDurationAndPrice()">
                        </div>
                        <br>
                        <div>
                            <label for="durasi" id="durasiLabel" style="color: white;">Durasi (hari)</label><br>
                            <input id="durasi" class="input-field text-black" type="number" name="durasi" style="width: 600px;" required readonly>
                        </div>
                        <br>
                        <div>
                            <label for="pickup" id="pickup" style="color: white;">Metode Pickup</label><br>
                            <select name="metode_pickup" class="input-field text-black" id="metode" style="width: 600px;">
                                <option value="default">Pilih Metode Pickup</option>
                                <option value="AmbilSendiri">Ambil sendiri</option>
                                <option value="Diantarkan">Diantarkan</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="harga_produk" id="hargaLabel" style="color: white;">Harga Produk</label><br>
                            <input id="harga_produk" class="input-field text-black" type="text" name="harga_produk" style="width: 600px;" readonly>
                        </div>
                        <br>
                        <div style="margin-top: 10px;">
                            <label for="nomor_rekening" style="color: white;">Nomor Rekening</label><br>
                            <input id="nomor_rekening" class="input-field text-black" type="text" name="no_rek" style="width: 600px;">
                        </div>
                        <br>
                        <div>
                            <label for="metode" id="metode" style="color: white;">Metode Pembayaran</label><br>
                            <select name="metode_pembayaran" class="input-field text-black" id="metode" style="width: 600px;" onchange="redirectOnChange(this)">
                                <option value="default">Pilih Metode Pembayaran</option>
                                <option value="BCA">BCA</option>
                                <option value="BRI">BRI</option>
                                <option value="Mandiri">Mandiri</option>
                            </select>
                        </div>
                        <br>
                        <div style="margin-top: 10px;">
                            <label for="file_produk" style="color: white;">Kirim Bukti Pembayaran</label><br>
                            <input type="file" id="file_produk" name="bukti" required>
                        </div>


                </div>

                <script>
                    function redirectOnChange(select) {
                        const selectedValue = select.value;
                        if (selectedValue !== 'default') {
                            // your switch statement remains the same
                        }
                    }

                    function calculateDurationAndPrice() {
                        var startDate = new Date(document.getElementsByName('tanggal_mulai')[0].value);
                        var endDate = new Date(document.getElementsByName('tanggal_selesai')[0].value);
                        var timeDiff = Math.abs(endDate.getTime() - startDate.getTime());
                        var duration = Math.ceil(timeDiff / (1000 * 3600 * 24));

                        document.getElementsByName('durasi')[0].value = duration;

                        // Harga awal
                        var hargaAwal = 350000;
                        var harga = hargaAwal * duration;

                        document.getElementsByName('harga_produk')[0].value = harga;
                    }
                </script>

                <br>
                <input type="submit" name="submit" value="Sewa Sekarang" class="bg-[#FDC300] mt-5 w-full rounded-lg text-black font-bold p-2" style="background-color: rgb(237, 173, 24); width: 600px;">
                <input type="hidden" name="nama" value="<?php echo isset($_SESSION["pengguna"]['nama_pengguna']) ? $_SESSION["pengguna"]['nama_pengguna'] : ''; ?>">
                <input type="hidden" name="mobil" value="<?php echo $mobil['nama_produk']; ?>">
                </form>
            </div>

        </div>
        </div>
        </div>
    </section>

    <?php


    if (isset($_POST['submit'])) {
        $mulai = $_POST['tanggal_mulai'];
        $selesai = $_POST['tanggal_selesai'];
        $durasi = $_POST['durasi'];
        $metode_pickup = $_POST['metode_pickup'];
        $harga_produk = $_POST['harga_produk'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
        $nama = $_SESSION['nama_pengguna'];
        $mobil = $_POST['mobil'];
        $id_user = $_SESSION['id_pengguna'];
        $norek = $_POST['no_rek'];
        $bukti= $_FILES['bukti']['name'];
        $file_tmp = $_FILES['bukti']['tmp_name'];
        move_uploaded_file($file_tmp, '../coba/assets/img/'.$bukti);
     

        // Lakukan validasi data jika diperlukan

        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'mobilgo';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "INSERT INTO transaksi (tanggal_mulai, nama_produk, nama_pengguna, tanggal_selesai, durasi, metode_pickup, harga_produk, no_rek, metode_pembayaran, bukti , id_pengguna) VALUES ('$mulai', '$mobil', '$nama', '$selesai', '$durasi', '$metode_pickup', '$harga_produk', '$norek', '$metode_pembayaran','$bukti','$id_user')";

        if ($conn->query($sql) === TRUE) {
            $id_transaksi = $conn->insert_id;
            $query_produk = "SELECT stock FROM produk WHERE nama_produk = '$mobil'";
            $result_produk = mysqli_query($conn, $query_produk);
            $jumlah_pembelian = 1;

            if ($result_produk) {
                $produk = mysqli_fetch_assoc($result_produk);

                // Periksa apakah stok mencukupi
                if ($produk['stock'] >= $jumlah_pembelian) {
                    // Kurangi stok
                    $stok_baru = $produk['stock'] - $jumlah_pembelian;

                    // Update stok di database
                    $query_update_stok = "UPDATE produk SET stock = $stok_baru WHERE nama_produk = '$mobil'";
                    $result_update_stok = mysqli_query($conn, $query_update_stok);

                    if ($result_update_stok) {
                        echo "<script>alert('Tunggu konfirmasi admin untuk mendapat struk/bukti sewa di riwayat pemesanan anda')</script>";
    ?>
                        <meta http-equiv="refresh" content="1; url=indexuser.php?id=<?php echo $id_transaksi; ?>">
    <?php
                    } else {
                        echo "<script>alert('Transaksi berhasil, tetapi ada masalah dalam mengupdate stok')</script>";
                    }
                } else {
                    echo  "<script>alert('Stok tidak mencukupi. Transaksi gagal')</script>";
                }
            } else {
                echo "Produk tidak ditemukan.";
            }

            echo "Data berhasil dimasukkan ke database";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>