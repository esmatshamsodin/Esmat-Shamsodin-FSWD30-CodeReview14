
        <?php
         ob_start();
         session_start();

         require_once 'dbconnect.php';

         // if session is not set this will redirect to login page
         if( !isset($_SESSION['user']) ) {
          header("Location: index.php");
          exit;
         }

         // select logged-in users detail
         $res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
         $userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
        ?>
            
<!DOCTYPE html>
<html>
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
  <style>
    table {

            width: 100%;

            margin-top: 20px;
            border-style: solid;
            border-width: 3px;


        }

  </style>
</head>

<body id="home">
<div id="preloader"></div>
  <section id="hero">

    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <h1>Esmat's Empire</h1>
          <h2>Wellcome Admin</h2>
          
        </div>
        
        <div class="actions">
          <a href="#about" class="btn-services">about Us</a>
          <a href="#events" class="btn-services">Show Events</a>
          <a class="btn btn-primary btn-md" href="logout.php?logout">Sign Out</a>
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
  

   
      
        <br>
        <div class="col-md-12">
          <?php require_once 'actions/db_connect.php'; ?>
          <a href="create.php"><button class="btn-success" type="button">Add Table</button></a>
          <table class="table" style="background-color: lightgray;">
                    <thead >
                        <tr>
                           <th>id</th>
                            <th>name</th>
                            <th>description</th>
                            <th>capacity</th>
                            <th>email</th>
                            <th>phonnumber</th>
                            <th>address</th>
                            <th>URL</th>
                            <th>type</th>
                            <th>image</th>
                            <th>startday</th>
                            <th>starttime</th>
                            <th>Action</th>
                        </tr>

                    </thead>

               <tbody>


              <?php

              $sql = "SELECT * FROM events where id>0";

              $result = $connect->query($sql);

   
              if($result->num_rows > 0) {

                  while($row = $result->fetch_assoc()) {

                      echo "<tr>

                          <td>".$row['id']."</td>
                          <td>".$row['name']."</td>

                          <td>".$row['description']."</td>
                          <td>".$row['capacity']."</td>
                          <td>".$row['email']."</td>
                          <td>".$row['phonnumber']."</td>
                          <td>".$row['address']."</td>
                          <td>".$row['URL']."</td>
                          <td>".$row['type']."</td>
                          <td><img src='".$row['image']."' width='50px' heigh='50px'</td>
                          <td>".$row['startday']."</td>
                          <td>".$row['starttime']."</td>
                          <td><a  href='update.php?id=".$row['id']."'><button style='width:100px;' class='btn btn-warning' type='button'>Edit</button></a>

                              <a  href='delete.php?id=".$row['id']."'><button style='width:100px;' class='btn btn-danger' type='button'>Delete</button></a>
                          </td>

                      </tr>";

                  }

              } else {

                  echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

              }

              ?>
            </tbody>
        </table>
         





  
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
  <!-- #footer -->
</body>
</html>

<?php ob_end_flush(); ?>

