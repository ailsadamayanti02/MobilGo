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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <style>
      
        button, input, optgroup, select, textarea {
            margin-right: -40px;
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
               <br>   
                <div class="flex items-center lg:order-2">
                    
                    <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a> -->
                    <a href="login.php" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800" style="background-color: rgb(253, 208, 44);">LOGIN/REGISTER</a>

                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
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

   <!-- Start block -->
   <section class="bg-black dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-2xl font-extrabold leading-none tracking-tight md:text-3xl xl:text-4xl text-white">Temukan mobil untuk <br>kenyamanan anda</h1>
                <!-- Form pencarian -->
               <form method="get">
    <div class="input-icons mt-10">
    <div class="search-container">
            <input class="input-field" type="text" placeholder="Cari Mobil" name="cari" id="searchInput" />
            <button type="submit" class="search-button">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</form>


            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="images/hero-mobil.png" alt="hero image">
            </div>
        </div>
    </section>
<!-- End block -->

       <!-- Recommend Start -->
       <section id="recommend" class="font-mulish container">
    <div class="flex justify-center space-x-5 md:space-x-10 text-white">
        <div class="text-center font-bold">
            <h1>Rekomendasi Untuk Kamu</h1>
        </div>
        <div class="text-center">
            <a href="daftarmobil.php" class="inline-block">
                <h1 class="inline">Lihat Semua</h1>
                <img src="images/arrow.png" alt="" class="inline" />
            </a>
        </div>
    </div>
</section>
    <!-- Recommend End -->
    

    <br>
    <br>

    <?php
include "koneksi.php";

$querymobil = mysqli_query($koneksi, "SELECT * FROM produk");
?>

<!-- Mobil recommendation -->
<div class="flex flex-wrap justify-center space-x-2">
    <?php 
    $count = 0;
    while ($mobil = mysqli_fetch_array($querymobil)) { 
        if ($count % 4 == 0) {
            echo '</div><div class="flex flex-wrap justify-center space-x-2 mb-5">';
        }
    ?>
    <div class="w-32 bg-white rounded-lg shadow flex flex-col">
    <a href="dtl.php?id=<?php echo $mobil['id_produk']; ?>"><u><img src="../coba/assets/img/<?php echo $mobil['foto_produk']; ?>" class="object-cover p-1 mx-auto rounded-lg h-24 w-full" alt="" style="width: 300px;" /></u></a>
           
            
        </a>
        <div class="px-2 pb-1">
                <h5 class="text-base font-semibold tracking-tight text-[#211A2C]"><?php echo $mobil['nama_produk']; ?></h5>
            </div>
            <div class="flex justify-center flex-wrap space-x-2 mb-1">
                <div class="text-center inline-block">
                    <img src="images/user.png" alt="" class="inline w-4" />
                    <h1 class="inline"><?php echo $mobil['kapasitas']; ?></h1>
                </div>
                <div class="text-center inline-block">
                    <img src="images/date.png" alt="" class="inline w-4" />
                    <h1 class="inline"><?php echo $mobil['tahun']; ?></h1>
                </div>
                <div class="text-center inline-block">
                    <img src="images/car.png" alt="" class="inline w-4" />
                    <h1 class="inline"><?php echo $mobil['bahan_bakar']; ?></h1>
                </div>
            </div>
            <div class="flex items-center justify-between px-2 pb-1">
                <div class="text-xs font-bold text-[#211A2C]">Rp. <?php echo $mobil['harga_produk']; ?></div>
             
            </div>
    </div>
    <?php 
    $count++;
    } 
    ?>
</div>
       
<!-- End Mobil recommendation -->


    
          
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>
</html>