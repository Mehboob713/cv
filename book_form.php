<?php

   $connection = mysqli_connect('localhost','root','','travel_agency');

      
       $name = $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $birth =  $_POST['birth'];
    $cnic =  $_POST['cnic'];
    $address =  $_POST['address'];
    $location =  $_POST['location'];
    $child =  $_POST['child'];
    $guests =  $_POST['guest'];
    $gender =  $_POST['radio'];
    $arival =  $_POST['arival'];
    $leaving =  $_POST['leaving'];
    
      $request = mysqli_query($connection,"INSERT INTO `book_form`(`id`, `name`, `email`, `phone`, `birth`, `cnic`, `address`, `location`, `child`, `guest`, `gender`, `arival`, `leaving`) VALUES ('','$name','$email','$phone','$birth','$cnic','$address','$location','$child','$guests','$gender','$arival','$leaving')");
if($request)
{
    header('location:book.php');   
}

   
?>