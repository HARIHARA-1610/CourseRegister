<html lang="en">
<head>
 <link rel="stylesheet" href="course.css">
</head>
<body>
  

<?php
session_start();


$servername = "localhost";
$username = "HariHara";
$password = "Hari@12";
$database = "course_reg";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

$un= $_SESSION['uname'];
?>

<a href="Ttb.php">BACK</a>

<?php
$sql = "SELECT * FROM `courstu` WHERE `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
// Find the number of records returned
$num = mysqli_num_rows($result);
$x = 0;
// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop

if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> S.NO</th>
<th> Course-ID</th>
<th> Course_Name</th>
<th>Professsor_Name</th>
<th> Slot </th>
<th>Credits</th>
<th>DELETE</th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{


?>
<tr>
<td><?php echo $row["Ser_NO"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Professor_Name"];?> </td>

<td><?php echo $row["Slot"];?> </td>
<td><?php echo $row["Credits"]; $x+=$row['Credits']?> </td>
<td align="center"><a href="delete.php?sid=<?php echo $row['Ser_NO']?>">DELETE</a></td>

</tr>
<?php
}?>  <div id="cou">
<h3> REGISTRATION NUMBER : <?php echo $un ?> </h3><h3>TOTAL CREDITS REGISTERED : <?php echo $x; ?></h3></div><br>
<?php
}

else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}

$msql="UPDATE `student` SET `Total_Credits`='$x' WHERE `Reg_ID`='$un' ";
$reesult = mysqli_query($conn, $msql);
?>
</body>
</html>