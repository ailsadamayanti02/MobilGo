<?php
session_start();

if(!isset($_SESSION['id_pengguna'])) {
    echo "<script>alert('Anda Belum Melakukan Login. Silahkan Login Terlebih Dahulu')</script>";
    echo "<script>location='login.php'</script>";
}

include "koneksi.php";

$idpengguna = $_SESSION["id_pengguna"];
$querypengguna = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE id_pengguna = '$idpengguna'");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <style>
        .popup-container {
            position: relative;
            display: inline-block;
        }

        .popup-content {
            position: absolute;
            top: 100%;
            left: -160px; /* Sesuaikan sesuai kebutuhan Anda */
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
    <br>
    <br>
    <?php
    include "koneksi.php";

    $id = $_GET['id'];
$querymobil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id'");
$mobil      = mysqli_fetch_array($querymobil);


?>
    <section id="hero" class="bg-opacity-30 py-6 sm:py-6 lg:py-6 container">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 lg:grid-cols-2">
                <div>
                    <img src="../coba/assets/img/<?php echo $mobil['foto_produk']; ?>" class="w-full"  alt="" />
                </div>
                <div>
                    <img src="../coba/assets/img/<?php echo $mobil['foto_produk2']; ?>"  class="w-full" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->
<br>
<section id="Detail" class="container">
    
    <!-- <a href="sewa.html" class="text-black rounded-lg bg-kuning p-3 "style="background-color: rgb(253, 208, 44);">Sewa Sekarang</a> -->

    <div class="row">
    <?php 
    ?>
        <div class="d-flex justify-content-between mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="">
                <h3 class="text-center toyota"><?php echo $mobil['nama_produk']; ?></span></h3>
            </div>
        </div>
        <div class="row justify-content-start">
    <div class="col-2">
        <div class="col-10 bg-white p-2 rounded text-center">
            <div class="d-flex justify-content-center">
                <img src="images/kal-removebg-preview 1.png" alt="" />
            </div>
            <p><?php echo $mobil['tahun']; ?></p>
            <p class="mt-2 text-danger">Tahun Registrasi</p>
        </div>
    </div>
    <div class="col-2">
        <div class="col-10 bg-white p-2 rounded text-center">
            <div class="d-flex justify-content-center">
                <img src="images/directions_car.png" alt="" />
            </div>
            <p><?php echo $mobil['bahan_bakar']; ?></p>
            <p class="mt-2 text-danger">Bahan Bakar</p>
        </div>
    </div>
    <div class="col-2">
        <div class="col-10 bg-white p-2 rounded text-center">
            <div class="d-flex justify-content-center">
                <img src="images/Rectangle 111.png" alt="" />
            </div>
            <p><?php echo $mobil['kapasitas']; ?> Seats</p>
            <p class="mt-2 text-danger">Kapasitas </p>
        </div>
    </div>
    <div class="col-20 d-flex justify-content-end">
    <div class="rounded text-center">
        <p class="text-light">Rp <?php echo $mobil['harga_produk']; ?> / hari</p>
        <a href="javascript:void(0);" onclick="checkStock(<?php echo $mobil['stock']; ?>)" class="text-black rounded-lg bg-kuning p-3" style="background-color: rgb(253, 208, 44);">Sewa Sekarang</a>
    </div>
</div>
</div>

    </div>
    
    
    
        <div class="card mt-3" style="width: 18rem; ">
            <div class="card-header">Fasilitas</div>
            <div class="card-body" style="background-color: rgb(253, 208, 44);"
                 class="text-md"><?php echo $mobil['deskripsi']; ?>
                   
            </div>
        </div>

        <!-- <div class="flex space-x-2 mt-14 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="hitam w-60 md:mr-5">
                <div class="text-black p-3 text-xl rounded-t-lg bg-white font-semibold text-center center-element">
                    Fasilitas
                </div>
                
                <div class="tulisan" id="tulisan">
                    <h1 class="text-md">AC</h1>
                    <h1 class="text-md">Lampu Sein</h1>
                    <h1 class="text-md">Lampu kabut depan</h1>
                    <h1 class="text-md">Pengatur ketinggian Lampu</h1>
                    <h1 class="text-md">Cup Holder - depan</h1>
                    <h1 class="text-md">Cup Holder - belakang</h1>
                    <h1 class="text-md">Power Outlet</h1>
                </div>
            </div>
        </div> -->
</section>
    <!-- Detail End -->

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script>
    function checkStock(stock) {
        if (stock === 0) {
            alert('Maaf, stok mobil ini sudah habis. Silakan pilih mobil lain');
            // Redirect to the 'indexuser.php' page or any other desired page
            window.location.href = 'indexuser.php';
        } else {
            // Redirect to the 'sewa.php' page or perform any other action
            window.location.href = 'sewa.php?id=<?php echo $id ?>';
        }
    }
</script>
</body>

</html>