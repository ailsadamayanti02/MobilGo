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
</head>

<body style="background-color: rgb(38, 33, 44);">
    <header class="fixed w-full">
        <nav style="background-color: rgb(38, 33, 44);">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="#" class="flex items-center">
                    <img src="images/ikon-removebg-preview (1).png" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">MobilGo</span>
                </a>
                <div class="flex items-center lg:order-2">
                    
                    <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a> -->
                    <a href="login.php" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800" style="background-color: rgb(253, 208, 44);">LOGIN/REGISTER</a>

                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
<br>
<div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
        <li>
            <a href="index.php" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-white lg:dark:hover-text-white dark:hover:bg-gray-700 dark:hover-text-white lg:dark:hover:bg-transparent dark:border-gray-700">Home</a>
        </li>
        <li>
            <a href="daftarmobil.php" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-white lg:dark:hover-text-white dark:hover:bg-gray-700 dark:hover-text-white lg:dark:hover-bg-transparent dark:border-gray-700">Daftar Mobil</a>
        </li>
        <li>
            <a href="ulasan.php" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-white lg:dark:hover-text-white dark:hover:bg-gray-700 dark:hover-text-white lg:dark:hover-bg-transparent dark:border-gray-700">Ulasan</a>
        </li>
        <li>
            <a href="hubungikami.php" class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-white lg:dark:hover-text-white dark:hover:bg-gray-700 dark:hover-text-white lg:dark:hover-bg-transparent dark:border-gray-700">Hubungi Kami</a>
        </li>
    </ul>
</div>
            </div>
        </nav>
    </header>
    <br>
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

    <div class="container mt-4">
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
            <div class="col-6">
                <div class="rounded text-end">
                <p class="text-light">Rp <?php echo $mobil['harga_produk']; ?></p>
                <p class=" text-light">/hari</p>
                    <a href="login.php?id=<?php echo $id ?>" class="text-black rounded-lg bg-kuning p-3 "style="background-color: rgb(253, 208, 44);">Login Untuk Sewa</a>
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
</body>

</html>