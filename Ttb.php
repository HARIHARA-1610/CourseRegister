<!DOCTYPE html>
<html lang="en">
<head>
<script language="javascript" type="text/javascript">
window.history.forward();
</script>
<link rel="stylesheet" href="course.css">
<style>
    .o{
        text-decoration:none;
        color:black;        border:2px;border-color:black;

        /* margin-left:px; */
    }.o1{        text-decoration:none;

        margin-left:190px;color:black;border-color:black;
        border:2px;
    }
</style>
</head>
<body >
<?php
$servername = "localhost";
$username = "HariHara";
$password = "Hari@12";
$database = "course_reg";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

session_start();
$un= $_SESSION['uname'];
$sql="SELECT `Student_Name` FROM `student` WHERE `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<form action="" method="POST">
<div id="nav"><br><br>
<a id="n"> STUDENT NAME :<?php echo $row['Student_Name']; ?></a><br><a id="k"> REGISTRATION NUMBER : <?php echo $un ?></a>

<a class="o1" href="view_R.php">VIEW COURSES</a>
<a class="o" href="#">MODIFY SLOTS</a>

    <a class="o" href="view_reg.php">DELETE COURSES</a>
    <a class="o" name="logout" href="login.php">LOGOUT <?php if(isset($_POST['logout'])){  session_destroy(); }  ?> </a>

</div></form>
    <form action="course.php" method="GET">
<div id="slot">


    <br><br><br><br>
    <br>

    <button type="submit" id="A1" name="A1">A1 <br> 
    <?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='A1' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$ro = mysqli_fetch_assoc($result);
echo $ro['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #L12{
        background-color:black;
    }#L1920{
        background-color:black;  
    }#L910{
        background-color:black;
    }#L2728{
        background-color:black;
    }
    </style>
    <?php
}
?> </button> <button type="submit" id="B1" name="B1">B1 <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='B1' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #L12{
        background-color:black;
    } #L1718{
        background-color:black;
    }#L910{
        background-color:black;
    }#L2728{
        background-color:black;
    }
    </style>
    <?php
}
?>  </button> <button type="submit"id="C1" name="C1">C1 <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='C1' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roo = mysqli_fetch_assoc($result);
echo $roo['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #L34{
        background-color:black;
    } #L1718{
        background-color:black;
    }#L2526{
        background-color:black;
    }#L3536{
    background-color:black;
    }
    </style>
    <?php
}
?> </button> <button type="submit" id="D1" name="D1">D1 <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='D1' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$rood = mysqli_fetch_assoc($result);
echo $rood['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #L34{
        background-color:black;}
    #L2526{
        background-color:black;
    }#L3334{
    background-color:black;
    }
    </style>
    <?php
}
?> </button>  <a>-</a>  <button type="submit" id="A2" name="A2">A2<br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='A2' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$rooa = mysqli_fetch_assoc($result);
echo $rooa['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #L56{
        background-color:black;}
    #L1314{
        background-color:black;
    }#L2324{
    background-color:black;
    }#L3132{
    background-color:black;
    }
    </style>
    <?php
}
?> </button> <button type="submit" id="B2" name="B2">B2 <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='B2' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roob = mysqli_fetch_assoc($result);
echo $roob['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #L56{
        background-color:black;}
    #L1314{
        background-color:black;
    }#L2122{
    background-color:black;
    }#L3132{
    background-color:black;
    }
    </style>
    <?php
}
?> </button>  <button type="submit" id="C2" name="C2">C2  <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='C2' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$rooco = mysqli_fetch_assoc($result);
echo $rooco['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #L78{
        background-color:black;}
    #L2122{
    background-color:black;
    }#L2930{
    background-color:black;
    }#L3940{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button type="submit" id="D2" name="D2">D2  <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='D2' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roodo = mysqli_fetch_assoc($result);
echo $roodo['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #L78{
        background-color:black;}
    #L2930{
    background-color:black;
    }#L3738{
    background-color:black;
    }
    </style>
    <?php
}
?></button><br>
    <button class="lab" id="L12" type="submit" name="L1+L2">L1+L2  <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L1+L2' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roola = mysqli_fetch_assoc($result);
echo $roola['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #A1{
        background-color:black;}
    #B1{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button class="lab" type="submit" id="L34" name="L3+L4">L3+L4  <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L3+L4' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolb = mysqli_fetch_assoc($result);
echo $roolb['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #C1{
        background-color:black;}
    #D1{
    background-color:black;
    }
    </style>
    <?php
}
?></button>   <a>-</a>   <button class="lab" type="submit" id="L56" name="L5+L6">L5+L6 <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L5+L6' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolc = mysqli_fetch_assoc($result);
echo $roolc['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #A2{
        background-color:black;}
    #B2{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button class="lab" type="submit" id="L78" name="L7+L8">L7+L8 <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L7+L8' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roold = mysqli_fetch_assoc($result);
echo $roold['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #C2{
        background-color:black;}
    #D2{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <br><br>
    <button type="submit" id="B1" name="B1">B1 <br><?php echo $row['Course_ID'];?></button> <button type="submit" id="A1" name="A1">A1 <br><?php echo $ro['Course_ID'];?></button> <button type="submit" id="F1" name="F1">F1 <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='F1' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roof = mysqli_fetch_assoc($result);
echo $roof['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #L1112{
        background-color:black;}
    #L1920{
        background-color:black;
    }
    </style>
    <?php
}
?></button> <button type="submit" id="E1" name="E1">E1 <br>
<?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='E1' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$rooee = mysqli_fetch_assoc($result);
echo $rooee['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #L1112{
        background-color:black;}
    #L3334{
        background-color:black;
    }
    </style>
    <?php
}
?></button> <a>-</a> <button type="submit" id="B2" name="B2">B2 <br><?php echo $roob['Course_ID'];?></button> <button type="submit" id="A2" name="A2">A2 <br><?php echo $rooa['Course_ID'];?></button> <button type="submit" d="F2" name="F2">F2</button> <button type="submit" id="E2" name="E2">E2</button><br>
    <button class="lab" type="submit" name="L9+L10" id="L910">L9+L10 <?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L9+10' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolee = mysqli_fetch_assoc($result);
echo $roolee['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #A1{
        background-color:black;}
    #B1{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button class="lab" id="L1112" type="submit" name="L11+L22">L11+L12 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L11+L12' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolfe = mysqli_fetch_assoc($result);
echo $roolfe['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #F1{
        background-color:black;}
    #E1{
    background-color:black;
    }
    </style>
    <?php
}
?></button>   <a>-</a>   <button class="lab" type="submit" id="L1314" name="L13+L14">L13+L14 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L13+L14' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolg = mysqli_fetch_assoc($result);
echo $roolg['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #B2{
        background-color:black;}
    #A2{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button class="lab" type="submit" id="L1516" name="L15+L16">L15+L16 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L15+L16' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolga = mysqli_fetch_assoc($result);
echo $roolga['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #F2{
        background-color:black;}
    #E2{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <br><br>
    <button type="submit" id="C1" name="C1">C1 <br><?php  echo $roo['Course_ID'];?></button> <button type="submit" id="B1" name="B1">B1  <br><?php echo $row['Course_ID'];?></button> <button type="submit" id="A1" name="A1">A1 <br><?php echo $ro['Course_ID'];?></button> <button type="submit" id="F1" name="F1">F1  <br><?php  echo $roof['Course_ID'];?></button> <a>-</a> <button type="submit" id="C2" name="C2">C2 <br><?php echo $rooco['Course_ID'];?></button> <button type="submit" id="B2" name="B2">B2 <br><?php echo $roob['Course_ID'];?></button> <button type="submit" id="A2" name="A2">A2  <br><?php echo $rooa['Course_ID'];?></button> <button type="submit" id="F2" name="F2">F2</button><br>
    <button class="lab" type="submit" id="L1718" name="L17+L18">L17+L18 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L17+L18' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolgb = mysqli_fetch_assoc($result);
echo $roolgb['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #C1{
        background-color:black;}
    #B1{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button class="lab" type="submit" id="L1920" name="L19+L20">L19+L20 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L19+L20' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolgc = mysqli_fetch_assoc($result);
echo $roolgc['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #F1{
        background-color:black;}
    #A1{
    background-color:black;
    }
    </style>
    <?php
}
?></button>   <a>-</a>   <button class="lab" type="submit" id="L2122" name="L21+L22">L21+L22 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L21+L22' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolgd = mysqli_fetch_assoc($result);
echo $roolgd['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #C2{
        background-color:black;}
    #B2{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button class="lab" type="submit" id="L2324" name="L23+L24">L23+L24 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L23+L24' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolge = mysqli_fetch_assoc($result);
echo $roolge['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #F2{
        background-color:black;}
    #A2{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <br><br>
    <button type="submit" id="D1" name="D1">D1<br><?php echo $rood['Course_ID'];?> </button> <button type="submit" id="C1" name="C1">C1 <br><?php  echo $roo['Course_ID'];?></button> <button type="submit" id="B1" name="B1">B1  <br><?php echo $row['Course_ID'];?></button> <button type="submit" id="A1" name="A1">A1<br><?php echo $ro['Course_ID'];?></button> <a>-</a> <button type="submit" id="D2" name="D2">D2<br><?php echo $roodo['Course_ID'];?></button>    <button type="submit" id="C2" name="C2">C2 <br><?php echo $rooco['Course_ID'];?></button> <button type="submit" id="B2" name="B2">B2<br><?php echo $roob['Course_ID'];?></button> <button type="submit" id="A2" name="A2">A2 <br><?php echo $rooa['Course_ID'];?></button><br>
    <button class="lab" type="submit" id="L2526" name="L25+L26">L25+L26 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L25+L26' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolgf = mysqli_fetch_assoc($result);
echo $roolgf['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #D1{
        background-color:black;}
    #C1{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button class="lab" type="submit" id="L2728" name="L27+L28">L27+L28 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L27+L28' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolggg = mysqli_fetch_assoc($result);
echo $roolggg['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #A1{
        background-color:black;}
    #B1{
    background-color:black;
    }
    </style>
    <?php
}
?></button>   <a>-</a>   <button class="lab" type="submit" id="L2930" name="L29+L30">L29+L30  <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L29+L30' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolggl = mysqli_fetch_assoc($result);
echo $roolggl['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #D2{
        background-color:black;}
    #C2{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button class="lab" id="L3132" type="submit" name="L31+L32">L31+L32 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L31+L32' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolgm = mysqli_fetch_assoc($result);
echo $roolgm['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #B2{
        background-color:black;}
    #A2{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <br><br>

    <button type="submit" id="E1" name="E1">E1<br><?php echo $rooee['Course_ID'];?> </button> <button type="submit" id="D1" name="D1">D1 <br><?php echo $rood['Course_ID'];?></button> <button type="submit" id="C1" name="C1">C1 <br><?php  echo $roo['Course_ID'];?></button> <button type="submit" id="G1" name="G1">G1</button> <a>-</a> <button type="submit" id="E2" name="E2">E2</button> <button type="submit" id="D2" name="D2">D2<br><?php echo $roodo['Course_ID'];?></button> <button type="submit" id="C2" name="C2">C2 <br><?php echo $rooco['Course_ID'];?></button> <button type="submit" id="G2" name="G2">G2</button><br>
    <button class="lab" type="submit" id="L3334" name="L33+L34">L33+L34 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L33+L34' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolkm = mysqli_fetch_assoc($result);
echo $roolkm['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #E1{
        background-color:black;}
    #D1{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button class="lab" type="submit" id="L3536" name="L35+L36">L35+L36 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L35+L36' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolkn = mysqli_fetch_assoc($result);
echo $roolkn['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #C1{
        background-color:black;}
    #G1{
    background-color:black;
    }
    </style>
    <?php
}
?></button>   <a>-</a>   <button class="lab" id="L3738" type="submit" name="L37+L38">L37+L38 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L37+L38' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolmn = mysqli_fetch_assoc($result);
echo $roolmn['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #D2{
        background-color:black;}
    #E2{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <button class="lab" id="L3940" type="submit" name="L39+L40">L39+L40 <br><?php
$sql = "SELECT Course_ID FROM `courstu` WHERE `Slot`='L39+L40' AND `Reg_ID`='$un'";
$result = mysqli_query($conn, $sql);
$roolgad = mysqli_fetch_assoc($result);
echo $roolgad['Course_ID'];
$num = mysqli_num_rows($result);
if($num>=1){
    ?>
    <style>
    #C2{
        background-color:black;}
    #G2{
    background-color:black;
    }
    </style>
    <?php
}
?></button> <br><br>
</div>
</form>
</body>
<script src="login.js"></script>
</html>