<?php
$xc = $_REQUEST['sid'];
session_start();
$un= $_SESSION['uname'];
$servername = "remotemysql.com";
$username = "yt8u76VtRK";
$password = "bcXvcwYCWA";
$database = "yt8u76VtRK";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


$sql = "DELETE FROM `courstu` WHERE `Ser_No`='$xc' AND `Reg_ID`='$un'";

$result = mysqli_query($conn, $sql);
if($result){
    header('Location:view_reg.php');
}else{
    echo "not success";
}
?>
