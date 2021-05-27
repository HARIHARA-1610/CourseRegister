<html>
<head>
  <link rel="stylesheet" href="course.css">
</head>
<body>
<?php
$servername = "remotemysql.com";
$username = "yt8u76VtRK";
$password = "bcXvcwYCWA";
$database = "yt8u76VtRK";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
?>
<form action="" method="post">
<input type ="submit" name = "BACK" value ="BACK" style="height:30px;width:60px">
<div id="cou">
<button type="submit" id="l" name="PC"> Programme Core</button>
<button type="submit" id="l" name="PE"> Programme Elective </button>
<button type="submit" id="l" name="UC"> University Core</button>
<button type="submit"id="l" name="UE"> University Elective </button>
</div><br>
<?php 
if(isset($_POST['BACK'])){
  header("Location:Ttb.php");
}
?>

<?php
if(isset($_GET['A1'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='A1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>
<th>REGISTER </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}

?>


<?php
if(isset($_GET['B1'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='B1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
<?php 

}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
if(isset($rad)){
print_r($rad);
}
?>

<?php
if(isset($_GET['C1'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='C1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>


<?php
if(isset($_GET['D1'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='D1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>

<?php
if(isset($_GET['E1'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='E1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>
<?php
if(isset($_GET['F1'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='F1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>



<?php
if(isset($_GET['A2'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='A2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['B2'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='B2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>





<?php
if(isset($_GET['C2'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='C2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['D2'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='D2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['E2'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='E2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['F2'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='F2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>







<?php
if(isset($_GET['A1'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='A1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>


<?php
if(isset($_GET['B1'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='B1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>

<?php
if(isset($_GET['C1'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='C1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>


<?php
if(isset($_GET['D1'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='D1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>

<?php
if(isset($_GET['E1'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='E1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>
<?php
if(isset($_GET['F1'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='F1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>



<?php
if(isset($_GET['A2'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='A2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['B2'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='B2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>





<?php
if(isset($_GET['C2'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='C2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['D2'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='D2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['E2'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='E2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['F2'])){
if(isset($_POST['UC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='University Core' AND `Slot`='F2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>










<?php
if(isset($_GET['A1'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='A1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>


<?php
if(isset($_GET['B1'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='B1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>

<?php
if(isset($_GET['C1'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='C1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>


<?php
if(isset($_GET['D1'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='D1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>

<?php
if(isset($_GET['E1'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='E1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>
<?php
if(isset($_GET['F1'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='F1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>



<?php
if(isset($_GET['A2'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='A2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['B2'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='B2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>





<?php
if(isset($_GET['C2'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='C2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>

</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['D2'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='D2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['E2'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='E2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>






<?php
if(isset($_GET['F2'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='F2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>


<?php
if(isset($_GET['G1'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='G1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>




<?php
if(isset($_GET['G2'])){
if(isset($_POST['PE'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Elective' AND `Slot`='G2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>



<?php
if(isset($_GET['L1+L2'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='L1+L2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>









<?php
if(isset($_GET['G1'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='G1'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>




<?php
if(isset($_GET['G2'])){
if(isset($_POST['PC'])){
$sql = "SELECT * FROM `courses` WHERE `Curriculam_Name`='Programme Core' AND `Slot`='G2'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query


    // We can fetch in a better way using the while loop
    
        if($num> 0){
  ?>     
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

<tr>

<th> Course_Name </th>
<th> Course_ID</th>
<th> Professor_Name </th>
<th> Credits</th>
<th> Seats_Alloted </th>
<th> Slot </th>

</tr>

<?php 
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Course_Name"];?> </td>
<td><?php echo $row["Course_ID"];?> </td>

<td><?php echo $row["Professor_Name"];?> </td>
<td><?php echo $row["Credits"];?> </td>
<td><?php echo $row["Seats_Alloted"];?> </td>
<td><?php echo $row["Slot"];?> </td>
<td align="center"><a href="edit.php?id= <?php echo $row['Ser_NO']?>">ADD</a></td>
</tr>

<?php
}
}else{
  ?>
<h1>NO RESULTS FOUND </h1>
  <?php
}
}
}
?>

</form>
</table>
</body>
</html>
