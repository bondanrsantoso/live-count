<?php
    include "koneksi.php";
    $sql = "SELECT COUNT(*) AS jumlah FROM tamu";
    $query = mysqli_query($conn, $sql);
    #$query = mysql_query($sql);
    $hasil = mysqli_fetch_assoc($query);
    #$hasil = mysql_fetch_assoc($query);

    echo $hasil['jumlah'];
?>