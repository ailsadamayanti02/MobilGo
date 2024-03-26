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

        .bg-white {
  width: 100%;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}
    </style>
</head>
<body

style="background-color: rgb(38, 33, 44);">
    <header class="fixed w-full">
        <nav style="background-color: rgb(38, 33, 44);">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="#" class="flex items-center">
                    <img src="images/ikon-removebg-preview (1).png" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">MobilGo</span>
                </a>
                <div class="popup-container flex items-center lg:order-2 relative group cursor-pointer hover:flex" >
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
 <br>
 <!-- Product Start -->
 <div class="content">
        <div class="justify-center mt- container font-mulish">
            <div class="md:flex mt-5 items-center px-5 space-y-4 md:space-y-0 md:space-x-9">
                <?php
                include "koneksi.php";
                $nama = $_SESSION['nama_pengguna'];
                // Perbarui kueri untuk hanya mengambil transaksi yang sudah dikonfirmasi admin
                $query = "SELECT * FROM transaksi WHERE nama_pengguna='$nama'";
                $hasil = mysqli_query($koneksi, $query);
                $no = 1;
                $jum = mysqli_num_rows($hasil);
                if ($jum > 0) {
                    while ($data = mysqli_fetch_assoc($hasil)) {
                        $id_transaksi = $data['id_transaksi'];
                ?>
    <div class="w-full md:w-1/6" style="width: 40.66667%;"> <!-- Lebar -->
        <div
          class="text-white p- rounded-lg"
          style="background-color: black"
        >
          <?php echo $data['tanggal_mulai']; ?>
        </div>
        <div class="bg-kuning p-3 pb-10" style="background:  rgb(255, 221, 4); padding: 1rem;">
          <div class="flex justify-between font-bold">
            <h1 class="mb-3"><?php echo $data['nama_produk']; ?></h1>
            <h1 class="mb-3">Rp. <?php echo $data['harga_produk']; ?></h1>
          </div>
          <div class="flex font-sm space-x-2">
            <div>
              <img src="images/Rectangle 162.png" alt="" />
            </div>
            <div>
              <img src="images/Rectangle 63.png" alt="" />
              <h1>Metode Pembayaran Transfer <?php echo $data['metode_pembayaran']; ?> </h1>
            </div>
          </div>
        </div>
        <div class="text-black p-3 rounded-b-lg bg-white">
    <div class="text-center text-blue-700">
        <?php
        if ($data['status'] === 'Ditolak') {
            echo "Pesanan Anda Ditolak";
        }
        else if ($data['status'] === 'Belum Konfirmasi'){
            echo "Tunggu Konfirmasi Admin";
        }
        else {
            echo '<a href="coba.php?id=' . $id_transaksi . '"><u>Lihat Detail</u></a>';
        }
        ?>
    </div>
</div>


      </div>
      <br>
      <?php
      }
    }
    ?>
    
        </div>
      </div>
    </div>
  </div>
  <!-- Product End -->