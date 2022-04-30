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
$user=$_POST['aname'];
$email=$_POST['aEmail'];
$password=$_POST['aPassword'];

$sql = "INSERT INTO `db_admission`.`admin` ( `aname`, `aEmail`, `aPassword`) VALUES ('$user', '$email', '$password');";

if($con->query($sql) == true){
    echo "Successfully inserted";
    header("Location: index.html");
    $insret=true;
}
$con->close();


?>