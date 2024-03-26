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
    <!-- script ================================================== -->
    <script src="js/modernizr.js"></script>
    

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

        @media print {
        #printButton {
            display: none;
}
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
    $querymobil = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_transaksi='$id'");
    $mobil      = mysqli_fetch_array($querymobil);
    ?> <!-- Your absolute positioned elements -->
    <div style="left: 654px; top: 221px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Mulish; font-weight: 700; word-wrap: break-word">Pembayaran Berhasil</div>
    <div style="width: 320px; height: 416px; left: 576px; top: 351px; position: absolute; background: white; border-radius: 10px"></div>
    <div style="width: 285px; height: 0px; left: 594px; top: 604px; position: absolute; border: 1px #DFDFDF solid"></div>
    <div style="width: 142px; height: 16.11px; left: 563px; top: 451.52px; position: absolute; text-align: right; color: black; font-size: 12px; font-family: Mulish; font-weight: 400; word-wrap: break-word">Data Sewa Pelanggan : </div>
    <div style="width: 54px; height: 15.10px; left: 587px; top: 478.70px; position: absolute; text-align: right; color: black; font-size: 12px; font-family: Mulish; font-weight: 400; word-wrap: break-word">Customer </div>
    <div style="width: 31px; height: 15.10px; left: 593px; top: 502.83px; position: absolute; text-align: right; color: black; font-size: 12px; font-family: Mulish; font-weight: 400; word-wrap: break-word">Mobil</div>
    <div style="width: 80px; height: 15.10px; left: 582px; top: 526.97px; position: absolute; text-align: right; color: black; font-size: 12px; font-family: Mulish; font-weight: 400; word-wrap: break-word">Tanggal Sewa</div>
    <div style="width: 93px; height: 15.10px; left: 585px; top: 552.10px; position: absolute; text-align: right; color: black; font-size: 12px; font-family: Mulish; font-weight: 400; word-wrap: break-word">Tanggal Kembali</div>
    <div style="width: 177px; height: 18.12px; left: 645px; top: 409.36px; position: absolute; text-align: center; color: #211A2C; font-size: 14px; font-family: Mulish; font-weight: 700; word-wrap: break-word">Penyewaan Mobil Berhasil</div>
    <div style="width: 46px; height: 46.32px; left: 710px; top: 357px; position: absolute; background: #FDC300; border-radius: 9999px"></div>
    <div style="width: 29px; height: 29.20px; left: 719px; top: 366.06px; position: absolute; background: white; border-radius: 9999px"></div>
    <div style="width: 12.61px; height: 10.79px; left: 727.20px; top: 374.95px; position: absolute; background: #FDC300"></div>
    <div style="width: 116px; left: 595.50px; top: 643.14px; position: absolute; color: #211A2C; font-size: 16px; font-family: Mulish; font-weight: 700; word-wrap: break-word">Total Biaya</div>
    <div style="width: 78px; left: 802.50px; top: 645.14px; position: absolute; text-align: right; color: #211A2C; font-size: 16px; font-family: Mulish; font-weight: 700; word-wrap: break-word">Rp. <?php echo $mobil['harga_produk']; ?></div>
    <div style="width: 116px; height: 15.10px; left: 596px; top: 577px; position: absolute; color: #211A2C; font-size: 12px; font-family: Mulish; font-weight: 400; word-wrap: break-word">Metode Pickup</div>
    <div style="width: 116px; height: 15.10px; left: 596px; top: 604.45px; position: absolute; color: #211A2C; font-size: 12px; font-family: Mulish; font-weight: 400; word-wrap: break-word">Metode Pembayaran</div>
    <div style="left: 825px; top: 549px; position: absolute; text-align: right; color: #211A2C; font-size: 12px; font-family: Mulish; font-weight: 700; word-wrap: break-word"><?php echo $mobil['tanggal_selesai']; ?></div>
    <div style="left: 824px; top: 573px; position: absolute; text-align: right; color: #211A2C; font-size: 12px; font-family: Mulish; font-weight: 700; word-wrap: break-word"><?php echo $mobil['metode_pickup']; ?></div>
    <div style="left: 825px; top: 527px; position: absolute; text-align: right; color: #211A2C; font-size: 12px; font-family: Mulish; font-weight: 700; word-wrap: break-word"><?php echo $mobil['tanggal_mulai']; ?></div>
    <div style="left: 825px; top: 503px; position: absolute; text-align: right; color: #211A2C; font-size: 12px; font-family: Mulish; font-weight: 700; word-wrap: break-word"><?php echo $mobil['nama_produk']; ?></div>
    <div style="left: 785px; top: 476px; position: absolute; text-align: right; color: #211A2C; font-size: 12px; font-family: Mulish; font-weight: 700; word-wrap: break-word"><?php echo $mobil['nama_pengguna']; ?></div>
    <div style="width: 78px; left: 803px; top: 604px; position: absolute; text-align: right; color: #211A2C; font-size: 12px; font-family: Mulish; font-weight: 700; word-wrap: break-word"><?php echo $mobil['metode_pembayaran']; ?></div>
    <div style="width: 62px; height: 26px; left: 819px; top: 717px; position: absolute">
        <div style="width: 62px; height: 26px; left: 0px; top: 0px; position: absolute; background: #FDC300; border-radius: 5px"></div>
        <div style="left: 17px; top: 3px; position: absolute; text-align: right; font-size: 16px; font-family: Mulish; font-weight: 700; word-wrap: break-word">
            <a href="riwayat.php" style="text-decoration: none; color: black;">OK</a>
            <button id="printButton" style="margin-left: 10px; background-color: red; color: white;">Cetak PDF</button>

        </div>

    </div>

  <!-- Sertakan html2pdf.js dari CDN dengan atribut defer -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.js"></script>


<script>
    // Fungsi untuk menangani pembuatan dan pengunduhan PDF
    function generatePDF() {
        console.log('Button clicked'); // Tambahkan baris ini untuk debugging

        // Sembunyikan tombol sebelum menghasilkan PDF
        document.getElementById('printButton').style.display = 'none';

        // Gunakan html2pdf.js untuk menghasilkan PDF
        html2pdf(document.body, {
            // Tambahkan opsi apa pun di sini jika diperlukan
        }).then(() => {
            // Tampilkan tombol lagi setelah PDF dihasilkan
            document.getElementById('printButton').style.display = 'block';
        });
    }

    // Tambahkan event listener klik pada tombol Cetak PDF
    document.getElementById('printButton').addEventListener('click', generatePDF);
</script>



</body>

</html>

