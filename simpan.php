<?php
include 'koneksi.php';

        $namaorang = $_POST['nama'];
        $pesan = $_POST['pesan'];
       
        //memasukkan data      
        $sql = "insert into bukutamu(nama, pesan) values ('$namaorang', '$pesan')";
        mysqli_query($koneksi, $sql);

        ?>
        Terima Kasih <?php echo $namaorang ?>, pesan anda: <?php echo $pesan ?><br /><br />
        <a href="index.php">Kembali ke Form</a>