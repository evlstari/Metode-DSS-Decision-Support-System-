<?php
    include '../koneksi.php';

    // $idalternatif = $_POST['idalternatif'];
    $nama = $_POST['namawisata'];
    $lokasi = $_POST['lokwisata'];
    // $jeniskelamin = $_POST['jeniskelamin'];
    // $alamat = $_POST['alamat'];
    // $jenjangpendidikan = $_POST['jenjangpendidikan'];

    $sql = "INSERT INTO alternatifCase ( nmObject, lokObject) 
        VALUES ('".$nama."','".$lokasi."')";
        $input = $koneksi->query($sql);
        if ($input == true) {
            echo "<script>
                    window.alert('Data anda berhasil disimpan!');
                    window.location = '../PHP/FormAlternatif.php' 
                </script>";
        }else{
            echo "<script>
                    window.alert('Data anda gagal disimpan!');
                    window.location = '../PHP/FormAlternatif.php' 
                </script>";
        }
