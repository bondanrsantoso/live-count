<?php
    $conn = mysqli_connect('localhost', 'root', '', 'bukuTamuSDRC');
    #$conn = mysql_connect('alamatnya', 'username', 'password', 'namaDatabase');
    if(!$conn){
        die("<h1>Database Error</h1>");
    }
?>