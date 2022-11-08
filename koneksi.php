<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "css_penentuanobjekwisata";

    $koneksi = mysqli_connect($host, $username, $password, $database);

    if($koneksi == true){
        echo "";
    } else {
        echo "Server not Connected";
    }
?>