<html lang="en">
<head>
<link rel="stylesheet" href="course.css">

</head>
<body>
    
<a href="Ttb.php" >BACK</a>

<?php
$x = $_REQUEST['id'];
$servername = "localhost";
$username = "HariHara";
$password = "Hari@12";
$database = "course_reg";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


$sql = "SELECT * FROM `courses` WHERE `Ser_NO`='$x'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<br>
<?php
$c= $row['Credits'];
$cou= $row['Course_ID'];
$s= $row['Slot'];
$pro= $row['Professor_Name'];
$Name= $row['Course_Name'];
session_start();
$un= $_SESSION['uname'];
$l=0;


$sql3 = "SELECT * FROM `courstu` WHERE `Slot`='$s' AND `Reg_ID`='$un' ";
$sqlit3 = "SELECT * FROM `courstu` WHERE `Course_ID`='$cou' AND `Reg_ID`='$un' ";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);
$resu = mysqli_query($conn, $sqlit3);
$row3 = mysqli_fetch_assoc($resu);
$num = mysqli_num_rows($result3);
$numb = mysqli_num_rows($resu);
if($num>=1 || $numb>=1){
?>
<div id="cou">
    <h3 id="H23"><?php echo "YOU CAN'T REGISTER MULTIPLE COURSES AT SAME SLOT OR SAME COURSE AT MULTIPLE TIMES";?> </h3>
    </div>
    <?php
exit;
}
else{

$sql2="INSERT INTO `courstu`(`Reg_ID`, `Course_ID`, `Slot`,`Credits`,`serno`,`Course_Name`,`Professor_Name`) VALUES ('$un','$cou','$s' , '$c','$x','$Name','$pro')";
$result2 = mysqli_query($conn, $sql2);
$rw = mysqli_fetch_assoc($result2);
if($result2){
    header('Location:Ttb.php');
}
else{
    header('Location:Ttb.php');

}
}
?>

</body>
</html>
