<?php
    
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    //masukin skrip koneksi ke file PHP yang ini
    include "koneksi.php";
    //Query String untuk ke Database
    $sql = "INSERT INTO tamu (nama, alamat) VALUES('$nama', '$alamat')";

    $query = mysqli_query($conn, $sql);
    #$query = mysql_query($sql);

    if($query){
        #Redirect langsung kembali ke index
        header("location: index.html");
    }else{
        #pesan Error kalau gagal insert
        echo "Gagal Insert";
    }
?>