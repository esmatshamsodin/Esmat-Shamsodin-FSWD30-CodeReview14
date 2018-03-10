<?php
require_once 'actions/db_connect.php';

if($_GET['id']) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM events WHERE id = {$id}";

    $result = $connect->query($sql);

    $data = $result->fetch_assoc();
    $connect->close();

?>

 
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
 


<center>

<fieldset>
    <legend>Detailes</legend>

    <div class='col-md-6'>
        <br>
                          <div class='thumbnail'>
                              <img src='<?php echo $data['image'] ?>' style='width:100%;height:250px;'>
                              <div class='caption'>
                                <p>Name : <?php echo $data['name'] ?></p>
                                <p>Description : <?php echo $data['description'] ?></p>
                                <p>Capacity : <?php echo $data['capacity'] ?></p>
                                <p>Url :<?php echo $data['URL'] ?></p>
                                <p>Date :<?php echo $data['startday'] ?></p>
                                <p>Time :<?php echo $data['starttime'] ?></p>
                                <p>Type :<?php echo $data['type'] ?></p>
                                <span><i class='fa fa-envelope'></i></span><span>Email :<?php echo $data['email'] ?></span><br>
                                 <span><i class='fa fa-phone'></i></span><span>Phone :<?php echo $data['phonnumber'] ?></span><br>
                                <span><i class='fa fa-map-marker'></i></span><span>Address : <?php echo $data['address'] ?></span><br>
                              </div>
                            </a>
                          </div>
                        </div>
       

            <tr>

                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><a href="home.php"><button class="btn-danger" width="100px;" type="button">Back</button></a></td>

            </tr>

        </table>

    </form>
</fieldset>
 
</center>


 

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


<?php

}

?>