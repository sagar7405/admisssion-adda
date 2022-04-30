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
$user=$_POST['First_Name'];
$f_name=$_POST['Fname'];
$fjob=$_POST['Fjob'];
$of_no=$_POST['O_number'];
$of_add=$_POST['O_ADDRESS'];
$m_name=$_POST['M_Name'];
$class=$_POST['class_Name'];
$med=$_POST['MID'];
$bday=$_POST['Birthday_day'];
$bmday=$_POST['Birthday_Month'];
$byday=$_POST['Birthday_Year'];
$email=$_POST['Email_Id'];
$moblie=$_POST['Mobile_Number'];
$gen=$_POST['Gender'];
$add=$_POST['Address'];
$add1=$_POST['City'];
$add2=$_POST['Pin_code'];
$add3=$_POST['State'];
$qua=$_POST['mark'];
;



$sql = "INSERT INTO `profilestu` (`First_Name`, `Fname`, `Fjob`, `O_number`, `O_ADDRESS`, `M_Name`, `class_Name`, `MID`, `Birthday_day`, `Birthday_Month`, `Birthday_Year`, `Email_Id`, `Mobile_Number`, `Gender`, `Address`, `City`, `Pin_code`, `State`, `mark`) VALUES ('$user', '$f_name', '$fjob', '$of_no', '$of_add', '$m_name', '$class', '$med', '$bday', '$bmday', '$byday', '$email', '$moblie', '$gen', '$add', '$add1', '$add2', '$add3', '$qua');";

if($con->query($sql) == true){
    echo "Successfully inserted";
    
    $insret=true;
}
$con->close();


?>