<?php
$number1 = rand(1, 9);
$number2 = rand(1, 9);
$sum = $number1 + $number2;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the submitted username, password, and Captcha
  $username = $_POST['username'];
  $password = $_POST['password'];
  $Captcha = $_POST['Captcha'];

  // Your own credentials
  $correctUsername = 'admin';
  $correctPassword = 'admin';
  $correctCaptcha = $sum;

  // Check if the submitted username, password, and Captcha are correct
  if ($username === $correctUsername && $password === $correctPassword ) {
    // Redirect to the successful login page
    header('Location: admin/admin.php');
    exit;
  } else {
    // Redirect to the failed login page
    header('Location: admin/faillogin.php');
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Conectare</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="index.php">Proiect1</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
              <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
              <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

          <a href="#about" class="get-started-btn scrollto">Get Started</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8"> 
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 text-center">
                        <h1 class="hero-title">Date de <span class="highlight">conectare!</span></h1>
                    </div>
                </div>
            </div>
            

<form action="" method="post">
  <div class="form-group">
    <label for="username" class="text-primary" style="font-size: 20px;">Username:</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text bg-primary text-white">
          <i class="bi bi-person"></i>
        </span>
      </div>
      <input type="text" id="username" name="username" class="form-control" style="font-size: 18px;" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="text-primary" style="font-size: 20px;">Password:</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text bg-primary text-white">
          <i class="bi bi-lock"></i>
        </span>
      </div>
      <input type="password" id="password" name="password" class="form-control" style="font-size: 18px;" required>
    </div>
  </div>
              
  <br>
              
  <div class="text-center">
    <input type="hidden" name="correctsum" value="<?php echo $sum; ?>"/>
    <p class="text-white mb-4" style="font-size: 20px;"><?php echo $number1.' + '.$number2.' = '; ?></p>
  </div>
              
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text bg-primary text-white">
          <i class="bi bi-shield-check"></i>
        </span>
      </div>
      <input type="text" id="Captcha" name="Captcha" class="form-control" style="font-size: 18px;" required>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary btn-block py-2" style="font-size: 20px;">Login</button>
</form>



        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  

  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>