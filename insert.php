<?php
$na="localhost";
$us="root";
$pass="";
$db="mydatabase";
$con=new mysqli($na,$us,$pass,$db);
if($con==TRUE)
echo "Connected";
//for inserting data
    $quot=$_POST['quote']);
    $da=$_POST['date']);
    $name=$_POST['author']);
    $qu="insert into mytable(quote,date,author)values('$quot','$da','$name')";
    $qu=mysqli_query($con,$qu);
    if($qu==TRUE)
    {
      echo "<br>Inserted";
    }else{echo "<br>Error";}
 ?>
