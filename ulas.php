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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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
    <style>
        /* Gaya CSS Anda */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
            text-align: center;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .group {
            position: relative;
        }

        .group .fa-bars {
            cursor: pointer;
        }

        .group .fa-bars:hover+.absolute {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
        }

        /* CSS untuk tombol hapus */
        .button-hapus {
            visibility: hidden;
            /* Menyembunyikan tombol hapus */
            background-color: #e74c3c;
            /* Warna latar belakang */
            color: #fff;
            /* Warna teks */
            padding: 10px 20px;
            /* Ukuran padding */
            border: none;
            /* Menghilangkan border */
            border-radius: 5px;
            /* Membuat sudut elemen melengkung */
            cursor: pointer;
            /* Mengubah kursor menjadi tangan saat dihover */
        }

        /* CSS untuk tampilan saat tombol ditampilkan */
        .button-container:hover .button-hapus {
            visibility: visible;
            /* Menampilkan tombol hapus saat elemen induk dihover */
        }

        .button-container {
            position: relative;
            display: inline-block;
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

    $querymobil = mysqli_query($koneksi, "SELECT ulasan.* , pengguna.nama_pengguna, pengguna.foto_profile FROM ulasan JOIN pengguna ON ulasan.id_pengguna = pengguna.id_pengguna");
    ?>

    <section class="py-10 sm:py-16 lg:py-24">
        <div class="flex flex-wrap justify-center space-x-2">
            <?php
            $count = 0;
            while ($mobil = mysqli_fetch_array($querymobil)) {
                if ($count % 4 == 0) {
                    echo '</div><div class="flex flex-wrap justify-center space-x-2 mb-5">';
                }
            ?>
                <div class="w-32 bg-white rou shadow flex flex-col">
                    <div class="flex items-center justify-between mb-4">
                        <img class="flex-shrink-0 object-cover w-8 h-8 rounded-full" src="images/user/Profile<?php echo $mobil['foto_profile'] ?>" alt="Profile" />
                        <div class="flex flex-col items-start">
                            <p class="text-base font-semibold text-gray-800"><?php echo $mobil['nama_pengguna']; ?></p>
                            <p class="text-sm text-gray-500"><?php echo $mobil['tanggal_ulasan']; ?></p>
                        </div>
                        <div class="button-container">
                            <i></i>
                            <?php
if ($mobil['id_pengguna'] == $_SESSION['id_pengguna']) {
    ?>
    <button onclick="confirmDelete(<?php echo $mobil['id_ulasan'] ?>)" class="button-hapus">Hapus</button>
    <?php
} else {
    echo '';
}
?>
                        </div>
                    </div>
                    <div class="flex-1">
                        <blockquote>
                            <p class="text-sm text-gray-800" style="margin-left: 10px;"><?php echo $mobil['pesan']; ?></p>
                        </blockquote>
                    </div>
                </div>
            <?php
                $count++;
            }
            ?>
        </div>
    </section>



    <div class="flex justify-center align-middle mt-10">
        <button class="trigger bg-kuning text-white p-3 rounded-lg" style="background-color: rgb(237, 173, 24); width: 200px;">
            <i class="fa fa-pencil"></i> Tulis Ulasan
        </button>
    </div>

    <div class="modal" id="modal">
        <div class="modal-content">
            <span class="close-button" id="close-button">&times;</span>
            <h1 class="text-xl">Ulasan</h1>
            <div class="mt-5">
                <h2>Coba Jelaskan Pengalaman Anda</h2>
            </div>
            <div class="mt-5">
                <form action="kirim-ulasan.php" method="post">
                    <textarea class="w-full resize-none h-16 bg-gray-200 border border-gray-400 rounded-md p-2" name="pesan" placeholder="Bagikan Pengalaman Anda" required></textarea>
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id_pengguna']; ?>">
                    <input type="hidden" name="tanggal_ulasan" value="<?php echo date('Y-m-d'); ?>">
                    <button class="bg-kuning text-white p-3 font-bold rounded-lg" style="background-color: rgb(237, 173, 24); width: 200px;" type="submit">
                        Kirim
                    </button>
                </form>
            </div>
        </div>
    </div>





    <script>
        const triggerButton = document.querySelector('.trigger');
        const modal = document.querySelector('#modal');
        const closeButton = document.querySelector('#close-button');

        triggerButton.addEventListener('click', function() {
            modal.style.display = 'block';
        });

        closeButton.addEventListener('click', function() {
            modal.style.display = 'none';
        });
    </script>

<script>
    function confirmDelete(idUlasan) {
        var confirmation = confirm("Yakin ingin menghapus?");

        if (confirmation) {
            // Redirect to the 'proses_hapus.php' page with the specified id
            window.location.href = 'proses_hapus.php?id=' + idUlasan;
        } else {
            // Do nothing or handle the cancellation
        }
    }
</script>


</body>

</html>