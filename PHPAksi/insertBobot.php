<?php
    include '../koneksi.php';

    // $idbobot = $_POST['idBobot'];
    $idkriteria = $_POST['idKriteria'];
    $nilaibobot = $_POST['nilaiBobot'];

    $sql = "INSERT INTO bobotROC (idkriteria, valuebobot) 
        VALUES ('".$idkriteria."','".$nilaibobot."')";
        $input = $koneksi->query($sql);
        if ($input == true) {
            echo "<script>
                    window.alert('Data anda berhasil disimpan!');
                    window.location = '../PHP/FormBobot.php' 
                </script>";
        }else{
            echo "<script>
                    window.alert('Data anda gagal disimpan!');
                    window.location = '../PHP/FormBobot.php' 
                </script>";
        }
