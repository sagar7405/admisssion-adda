<?php 



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
$phone=$_POST['phone'];
$email=$_POST['Email'];

$add=$_POST['address'];
$City=$_POST['City'];
$pin=$_POST['Pincode'];

$sql = "INSERT INTO `stu22` (`name`, `phone`, `Email`, `address`, `City`, `Pin_Code`) VALUES ('sagat', '1233456667', 'bguiagugcvftdt@gmail.com', 'bjsbcbsk', 'nbschashi', '1133233'); ";

if($con->query($sql) == true){
    echo "Successfully inserted";
    header("Location: index.html");
    $insret=true;
}
$con->close();


?>