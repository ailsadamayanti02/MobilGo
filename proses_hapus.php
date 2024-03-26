<?php

include "koneksi.php";


if (isset($_GET['id'])){
    $delete = mysqli_query($koneksi, "DELETE FROM ulasan WHERE id_ulasan = '".$_GET['id']."' ");
    echo '<script>window.location="ulas.php"</script>';
}

?>