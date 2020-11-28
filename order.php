<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "janvi";

$connection=mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if(isset($_POST['submit'])
){
    
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $product=$_POST['product'];
        $quantity=$_POST['quantity'];
        $message=$_POST['Address'];
        $total=$_POST['total'];      
        $mobile=$_POST['mobile'];
        $insert_in_tb="INSERT INTO orders (LastName,FirstName,Mobile,Product,Quantity,Total,Message) values ('$lname','$fname','$mobile','$product','$quantity','$total','$message')";
        $input=mysqli_query($connection,$insert_in_tb);
        if($input){echo "<h1>You Have Ordered successfully..Payment will be taken at the time of delivery.</h1>";}

 }
    
        ?>
<html>
<meta http-equiv="refresh" content="2;url='Home_page.php'">

</html>
