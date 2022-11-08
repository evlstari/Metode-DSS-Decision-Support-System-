<?php
    include '../koneksi.php';

    // $idmatrix = $_POST['idMatrix'];
    $idalternatif = $_POST['idBobot'];
    $idbobot = $_POST['idAlternatif'];
    $value = $_POST['valuenya'];
   

    $sql = "INSERT INTO matrix_keputusan (idbobot, idobject, value) 
        VALUES ('".$idalternatif."','".$idbobot."','".$value."')";
        $input = $koneksi->query($sql);
        if ($input == true) {
            echo "<script>
                    window.alert('Data anda berhasil disimpan!');
                    window.location = '../PHP/FormMatrix.php' 
                </script>";
        }else{
            echo "<script>
                    window.alert('Data anda gagal disimpan!');
                    window.location = '../PHP/FormMatrix.php' 
                </script>";
        }
