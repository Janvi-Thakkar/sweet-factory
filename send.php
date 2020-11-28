
<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "janvi";

$connection=mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if(isset($_POST['submit'])
){
$name=$_POST['Name'];
$people=$_POST['People'];
$date=$_POST['date'];
$message=$_POST['Message'];
$number=$_POST['Number'];
$insert_in_tb="INSERT INTO contact (Name,persons,Dates,Message,Mobile) values ('$name','$people','$date','$message','$number')";
$input=mysqli_query($connection,$insert_in_tb);
if($input){echo "<h1>Thank for reaching us out..We will contact you shortly..</h1>";}
}
?>
<html>
<meta http-equiv="refresh" content="2;url='Home_page.php'">

</html>