<?php
session_start();

if(isset($_SESSION['usuario'])){
  switch ($_SESSION['usuario']) {
      
      case 1:
        header('Location:administrador.php');
      break;

      case 2:
        header('Location:home.php');
      break;

      case 3:
        header('Location:provedor.php');
      break;

    }
}

?>


<!DOCTYPE html>
<html>

<head>
  
  <title>Papeleria: La casa del Papel</title>

  <!-- Favicons--> 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <!-- =======================================================
  * Template Name: WeBuild - v4.3.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body >

  <!-- Logo o titulo -->
  <header id="header">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Papeleria</span></a></h1>
         <!--Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a><br>

        
      </div>


    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>La casa del papel</h1>
      <h2>"La creatividad es contagiosa, pásala".</h2>
      <!--<div class="countdown" data-count="2021/12/3" data-template="%w weeks %d days <br> %h:%m:%s"></div>-->

     <form action="validarlogin.php" method="POST" >
  
          <div>
            <label style="color:white">Email:</label>
            <input type="email" name="correo" class="form-control" id="correo" placeholder="Tu Email" ><br>
            <label style="color:white">Password: </label>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Tu Password" ><br>
            <!--<input type="submit" value="Entrar!">-->
            <input type="submit" class="btn btn-danger" value="Entrar!"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></input><br>

            
          </div>
        </div>

  </section><

  <main id="main">

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contactanos</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Direccion</h3>
              <address>Av. 16 de Septiembre #5043</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Numero telefonico</h3>
              <p><a href="tel: (656) 597 14 48">(656) 597 14 48</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="LaCasaDelPapel@gmail.com">LaCasaDelPapel@gmail.com</a></p>
            </div>
          </div>

        </div>

       
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>WeBuild</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <!-- Vendor JS Files -->
  <!--<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>-->

  <!-- Template Main JS File -->
  <!--<script src="assets/js/main.js"></script>-->

</body>

</html>