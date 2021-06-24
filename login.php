<!DOCTYPE html>
<html lang="en">

<head>
<script language="javascript" type="text/javascript">
window.history.forward();
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        padding-left: 400px;
        padding-top: 130px;
        background-color:;
        background-image:url(https://analyticsinsight.b-cdn.net/wp-content/uploads/2021/01/Cloud-Computing-1024x576.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-attachment:fixed;
        
    }
    div{
        height: 110px;
        width: 250px;
        background-color:#4f595f;
        opacity: 0.3;
        padding:50px ;
        border-radius: 20px;
    }
    input{
        height: 20px;
        width: 250px;
        border-radius: 3px;
        border-width:0.01cm;
    }
    a{
        padding-right: 35px;
        color: rgb(18, 84, 141);
    }
    button{
        background-color: blue;
        height: 25px;
        width: 80px;
        border-radius: 10px;
        color: aliceblue;
    }
  h2{
      padding-left: 20px;
  }
</style>

<body>
    <h2>LOGIN</h2>
    <div>
<form action="login.php" method="GET">
   <input type="text" id="uname" placeholder="username" name="uname1"><br><br>
    <input type="password" id="pwd" placeholder="password" name="pwd1"><br><br>
<a href="#">Forgetten Password</a>  
  <button type="submit" name = "submit"  onclick="sub()">Sign-in</button>
    </div>
    </form>
</body>
<?php
$servername = "remotemysql.com";
$username = "yt8u76VtRK";
$password = "bcXvcwYCWA";
$database = "yt8u76VtRK";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

session_start();
if(isset($_GET['submit'])){
    
    $un=$_GET['uname1'];
    $pw=$_GET['pwd1'];
        $sql_query = "select count(*) as cntUser from student where Reg_ID='".$un."' and password='".$pw."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $un;
            header('Location: Ttb.php');
        }else{
            echo "Invalid username Or password";
        }
}

?>
<script src="login.js">
</script>
</html>

