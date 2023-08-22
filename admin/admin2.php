<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KnightOne Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KnightOne
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top ">
      <br/>
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <a href="../login.php" class="get-started-btn scrollto">Go Back</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

<?php
require_once 'connection.php';
$sql1 = "DROP PROCEDURE IF EXISTS GetFlori";
$sql2="CREATE PROCEDURE GetFlori()
     BEGIN
     SELECT * FROM flori;
     END;";
$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();
$sql='CALL GetFlori()';
$q = $con->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
?>
      
      
  <br/><br/><br/><br/>
 
      <style>
    .table-wrapper {
        display: flex;
        justify-content: center;
    }

    table {
        /* Add any other desired styles for the table */
    }

    table td {
        background-color: white; /* Set the background color of table cells to blue */
        padding: 15px; /* Adjust the padding to reduce the space between columns */
    }
    
    
</style>

<div class="table-wrapper">
    <table>
        <tr>
            <th>Nume</th>
            <th>Culoare</th>
            <th>Marime</th>
            <th>Pret</th>
        </tr>
        <?php while ($res = $q->fetch()): ?>
            <tr>
                <td><?php echo $res['nume']; ?></td>
                <td><?php echo $res['culoare']; ?></td>
                <td><?php echo $res['marime']; ?></td>
                <td><?php echo $res['pret']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>


<div class="d-flex justify-content-center mt-4">
  <a href="insert2.php" class="btn btn-primary">Insert</a> 
  
  <a href="update.php" class="btn btn-primary mx-2">Update</a>
  <a href="delete.php" class="btn btn-primary">Delete</a>
  <a href="getFlower.php" class="btn btn-primary mx-2">getFlower</a>
</div>
<br/><br/>



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>KnightOne</h3>
      <p>Viata de facultate a fost buna si rea. Miss you all <3</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>KnightOne</span></strong>. All Rights Reserved To Varvaroi Cristian-Alexandru M533
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>