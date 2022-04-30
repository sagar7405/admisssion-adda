<?php
$insret=false;
$server="localhost";
$username="root";
$password="";
$db_name="db_admission";

$con = mysqli_connect($server,$username,$password,$db_name);

if($con){
    echo "connection scesss";
}
else{
    echo "loose";
}
$user=$_POST['name'];
$email=$_POST['Email'];
$password=$_POST['Password'];

$sql = "INSERT INTO `db_admission`.`tbl_member` ( `name`, `Email`, `Password`) VALUES ('$user', '$email', '$password');";

if($con->query($sql) == true){
    echo "Successfully inserted";
    header("Location: index.html");
    $insret=true;
}
$con->close();


?>