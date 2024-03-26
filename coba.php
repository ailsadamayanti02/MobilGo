
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

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/vendor.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--Bootstrap ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Raleway:wght@400;700&display=swap"
        rel="stylesheet">


    <!-- script ================================================== -->
    <script src="js/modernizr.js"></script>
    <style>
          @media print {
        #printButton {
            display: none;
        }
    }
    </style>
</head>



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

<body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">
    <section id="service-2">
        <div class=" services-sub container my-5 pb-5">
            <div class="services-components pt-4 pb-3">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center mb-5">
                        <div class="card">
                            <div class="card-header text-center">
                                <h6>Penyewaan Motor Berhasil</h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    
                                    <p>Data Sewa Pelanggan:</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Customer</p>
                                    <p><?php echo $mobil['nama_pengguna']; ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Mobil</p>
                                    <p><?php echo $mobil['nama_produk']; ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Tanggal Sewa</p>
                                    <p class="mb-0"><?php echo $mobil['tanggal_mulai']; ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Tanggal Kembali</p>
                                    <p class="mb-0"><?php echo $mobil['tanggal_selesai']; ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Metode Pickup</p>
                                    <p class="mb-0"><?php echo $mobil['metode_pickup']; ?></p>
                                </div>
                               
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Metode Pembayaran</p>
                                    <p>Transfer <?php  echo $mobil['metode_pembayaran']; ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Status Pembayaran</p>
                                    <p class="mb-0"><?php echo $mobil['status']; ?></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Status Pengembalian</p>
                                    <p class="mb-0"><?php echo $mobil['status_pengembalian']; ?></p>
                                </div>
                                <br>
                                <br>
                                 <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Total Biaya</p>
                                    <p class="mb-0 text-warning">Rp. <?php echo $mobil['harga_produk']; ?></p>

                                </div>
                                <div class="text-center">
                                <p class="mb-0 text-danger">Gunakan bukti pembayaran ini saat mengambil mobil.</p>

                                </div>
                                 
                            </div>
                        </div>
                    </div>
                    <button id="printButton" style="width: 20%" class="btn btn-primary">Unduh dalam PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


   



    <!-- script ================================================== -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>

    


<!-- Include html2pdf.js from CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.js"></script>

<!-- JavaScript for handling the PDF generation and download -->
<script>
    // Function to handle the PDF generation and download
    function generatePDF() {
        // Hide the button before generating the PDF
        document.getElementById('printButton').style.display = 'none';

        // Select the element that you want to convert to PDF
        const element = document.getElementById('service-2');

        // Use html2pdf.js to generate the PDF
        html2pdf(element, {
            // Add any options here if needed
        }).then(() => {
            // Show the button again after the PDF is generated
            document.getElementById('printButton').style.display = 'block';
        });
    }

    // Add a click event listener to the Print button
    document.getElementById('printButton').addEventListener('click', generatePDF);
</script>
</body>

</html>