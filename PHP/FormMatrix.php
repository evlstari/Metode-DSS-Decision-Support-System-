<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.9.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Input Penilaian</h2>
          <p>Hallo, </br>
    
            Silahkan input penilaian wisata yang ingin anda kunjungi sesuai persepsi anda pada form dibawah ini!,
            Best Regard's Evi Lestari </p>
        </div>

        <div class="inputkriteria">
            <form action="../PHPAksi/insertMatrix.php" method="POST" enctype="multipart/form-data">
                <!-- <div class="mb-3">
                    <label for="kriteria" class="form-label">ID Matrix Keputusan</label>
                    <input type="text" name="idMatrix" class="form-control" id="kriteria" placeholder="ID Matrix Keputusan">
                </div> -->

                <label for="kriteria" class="form-label">Pilih Alternatif</label>
                <div class="form-floating">
                    <select class="form-select" name="idAlternatif" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Pilih Alternatif</option>
                        <?php
                        include '../koneksi.php';
                        $no = 1;
                        $query = "SELECT * FROM alternatifCase";
                        $result = $koneksi->query($query);
                        while ($row = $result->fetch_array()) { ?>
                            <option value="<?php echo $row['idObject']; ?>"><?php echo $row['idObject']; ?>. <?php echo $row['nmObject']; ?></option>
                        <?php } ?>
                    </select>
                    <label for="floatingSelect">Pilih Alternatif</label>
                </div>

                <label for="kriteria" class="form-label">Pilih Nilai Bobot</label>
                <div class="form-floating">
                    <select class="form-select" name="idBobot" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Pilih Nilai Bobot</option>
                        <?php
                        include '../koneksi.php';
                        $no = 1;
                        $query = "SELECT * FROM bobotROC";
                        $result = $koneksi->query($query);
                        while ($row = $result->fetch_array()) { ?>
                            <option value="<?php echo $row['idbobot']; ?>"><?php echo $row['idbobot']; ?>. <?php echo $row['valuebobot']; ?></option>
                        <?php } ?>
                    </select>
                    <label for="floatingSelect">Pilih Nilai Bobot</label>
                </div>
                
                <div class="mb-3">
                    <label for="kriteria" class="form-label" >Value</label>
                    <input type="text" class="form-control" id="kriteria" name="valuenya" placeholder="value">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

        <div class="tabel">
            <table class="table caption-top">
                <caption>Data Matrix Keputusan</caption>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Matrix</th>
                        <th scope="col">ID Bobot</th>
                        <th scope="col">ID Object</th>
                        <th scope="col">Value</th>
                        <!-- <th scope="col">ID Skala</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $query = "SELECT * FROM matrix_keputusan";
                    $result = $koneksi->query($query);
                    while ($row = $result->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $no++; ?>)</td>
                            <td><?php echo $row['id_nilaimatrix']; ?></td>
                            <td><?php echo $row['idbobot']; ?></td>
                            <td><?php echo $row['idobject']; ?></td>
                            <td><?php echo $row['value']; ?></td>
                          <!-- ini tadinya id skala -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
      </section>
  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>