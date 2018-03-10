<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CodeReview14</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- favicon.ico -->
  <link href="favicon.ico" rel="shortcut icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div id="preloader"></div>
  <section id="hero">

    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <h1>Esmat's Empire</h1>
        </div>
        <h2>Welcome To Our Website </h2>
        <h1>Join Us Now </h1>
        <h3>Vienna Is Waiting For You</h3>
        <div class="actions">
          <a href="#about" class="btn-services">about Us</a>
          <a href="#events" class="btn-services">Show Events</a>
          <a href="login.php" class="btn-services">LogIn</a>
        </div>
      </div>
    </div>
  </section>

  <!--header-->
  <header id="header">
    <div class="container">
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#events">All Events</a></li>
          <li><a href="#me">Movie Events</a></li>
          <li><a href="#se">Sport Events</a></li>
          <li><a href="#mes">Music Events</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- #header -->

  <!--About Section-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Vienna Events</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Welcome to the Esmat's Empire, one of the most profetional Event managment in Vienna, worked from the year 2018  on most beutifull musics,movies and sport events.</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <h2 class="about-title">We provide great memorical program for you</h2>
          <p class="about-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--All Events Section-->
  <section id="events">
<div class="container wow fadeInUp">
<div class="row">
<div class="col-md-12">
<?php 

  require_once 'actions/db_connect.php';


            $sql = "SELECT * FROM events";

            $result = $connect->query($sql);

 
            echo "<div class='row'>";    
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "
                        <div class='col-md-4'>
                          <div style='height:560px;' class='thumbnail'>
                            <a href='detail.php?id=".$row['id']."'>
                              <img src='".$row['image']."' style='width:100%;height:200px;'>
                              <div class='caption'>
                                <p>".$row['name']."</p>
                                <p>".$row['description']."</p>
                                <hr>
                                <p>".$row['type']."</p>
                                <span><i class='fa fa-envelope'></i>".$row['email']."</span><br>
                               <span><i class='fa fa-phone'></i> ".$row['phonnumber']."</span><br>
                               <span><i class='fa fa-map-marker'></i>".$row['address']."</span>
                              </div>
                          </div>
                        </div>
";

                }

            }
            echo "</div>";

            ?>
          </div>
        </div>
</div>
</section>

  <!--  movie events Section-->
  <section id="me">
<div class="container wow fadeInUp">
<div class="row">
<div class="col-md-12">
<?php 

  require_once 'actions/db_connect.php';


            $sql = "SELECT * FROM events where type='movie'";

            $result = $connect->query($sql);

 
            echo "<div class='row'>";    
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "
                        <div class='col-md-3'>
                          <div style='height:560px;' class='thumbnail'>
                            <a href='detail.php?id=".$row['id']."'>
                              <img src='".$row['image']."' style='width:100%;height:200px;'>
                              <div class='caption'>
                                <p>".$row['name']."</p>
                                <p>".$row['description']."</p>
                                <hr>
                                <p>".$row['type']."</p>
                                <span><i class='fa fa-envelope'></i>".$row['email']."</span><br>
                               <span><i class='fa fa-phone'></i> ".$row['phonnumber']."</span><br>
                               <span><i class='fa fa-map-marker'></i>".$row['address']."</span>
                              </div>
                          </div>
                        </div>
";

                }

            }
            echo "</div>";

            ?>
          </div>
        </div>
</div>
</section>
 <section id="se">
<div class="container wow fadeInUp">
<div class="row">
<div class="col-md-12">
<?php 

  require_once 'actions/db_connect.php';


            $sql = "SELECT * FROM events where type='sport'";

            $result = $connect->query($sql);

 
            echo "<div class='row'>";    
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "
                        <div class='col-md-3'>
                          <div style='height:560px;' class='thumbnail'>
                            <a href='detail.php?id=".$row['id']."'>
                              <img src='".$row['image']."' style='width:100%;height:200px;'>
                              <div class='caption'>
                                <p>".$row['name']."</p>
                                <p>".$row['description']."</p>
                                <hr>
                                <p>".$row['type']."</p>
                                <span><i class='fa fa-envelope'></i>".$row['email']."</span><br>
                               <span><i class='fa fa-phone'></i> ".$row['phonnumber']."</span><br>
                               <span><i class='fa fa-map-marker'></i>".$row['address']."</span>
                              </div>
                          </div>
                        </div>
";

                }

            }
            echo "</div>";

            ?>
          </div>
        </div>
</div>
</section>

  <!-- mes Section-->
  <section id="mes">
<div class="container wow fadeInUp">
<div class="row">
<div class="col-md-12">
<?php 

  require_once 'actions/db_connect.php';


            $sql = "SELECT * FROM events where type='music' ";

            $result = $connect->query($sql);

 
            echo "<div class='row'>";    
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "
                        <div class='col-md-4'>
                          <div style='height:560px;' class='thumbnail'>
                            <a href='detail.php?id=".$row['id']."'>
                              <img src='".$row['image']."' style='width:100%;height:200px;'>
                              <div class='caption'>
                                <p>".$row['name']."</p>
                                <p>".$row['description']."</p>
                                <hr>
                                <p>".$row['type']."</p>
                                <span><i class='fa fa-envelope'></i>".$row['email']."</span><br>
                               <span><i class='fa fa-phone'></i> ".$row['phonnumber']."</span><br>
                               <span><i class='fa fa-map-marker'></i>".$row['address']."</span>
                              </div>
                          </div>
                        </div>
";

                }

            }
            echo "</div>";

            ?>
          </div>
        </div>
</div>
</section>


  <!--  Contact Section-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Are You In?</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">make a call and reserve a ticket</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Kettenbrückengasse 23 <br>wien, 1050</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>Admin@admin.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+436889600112</p>
            </div>

          </div>
        </div>

        
  </section>

  <!--Footer-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Esmat's Empire</strong>. All Rights Reserved
          </div>
          
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
