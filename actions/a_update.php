<?php

 

require_once 'db_connect.php';

 

if($_POST) {

     $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $capacity= $_POST['capacity'];
    $email = $_POST['email'];
    $phonnumber = $_POST['phonnumber'];
    $address = $_POST['address'];
    $URL = $_POST['URL'];
    $type = $_POST['type'];
     $image = $_POST['image'];
     $startday=$_POST['startday'];
     $starttime=$_POST['starttime'];
 

    $sql = "UPDATE events SET  name = '$name', description = '$description', capacity = '$capacity', email='$email', phonnumber='$phonnumber', address='$address', URL='$URL', type='$type', image=' $image', startday='$startday',starttime = '$starttime'  WHERE id = {$id}";

    if($connect->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";

        echo "<a href='../home.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $connect->error;

    }

 

    $connect->close();

 

}

 

?>