<?php
    include '../koneksi.php';

    // $idkriteria = $_POST['idKriteria'];
    $namakriteria = $_POST['namaKriteria'];

    $sql = "INSERT INTO kriteria ( nmKriteria) 
        VALUES ('".$namakriteria."')";
        $input = $koneksi->query($sql);
        if ($input == true) {
            echo "<script>
                    window.alert('Data anda berhasil disimpan!');
                    window.location = '../PHP/FormKriteria.php' 
                </script>";
        }else{
            echo "<script>
                    window.alert('Data anda gagal disimpan!');
                    window.location = '../PHP/FormKriteria.php' 
                </script>";
        }
