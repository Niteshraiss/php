<?php
$na="localhost";
$us="root";
$pass="Samitanitesh";
$db="lifeinspirers";
$con=new mysqli($na,$us,$pass,$db);
if($con==TRUE)
echo "Connected";

    $quot=mysqli_real_escape_string($con,$_POST['quote']);
    $da=mysqli_real_escape_string($con,$_POST['date']);
    $name=mysqli_real_escape_string($con,$_POST['author']);
    echo $quot;
    echo $da;
    echo $name;
    $qu="insert into myquotes(quote,date,author)values('$quot','$da','$name')";
    $qu=mysqli_query($con,$qu);
    if($qu==TRUE)
    {
      echo "<br>Inserted";
    }else{echo "<br>Error";}
 ?>
