<?php
$servesname="localhost";
$username="root";
$password="";
$dbname="motor";

    $conn=new mysqli($servesname,$username,$password,$dbname);
    if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}

else
 
 if (isset($_POST['save'])){  
$motor1=$_POST['motor1'];
$motor2=$_POST['motor2'];
$motor3=$_POST['motor3'];
$motor4=$_POST['motor4'];
$motor5=$_POST['motor5'];
$motor6=$_POST['motor6'];
  

$sql="INSERT INTO motors1(motor1,motor2,motor3,motor4, motor5,motor6)value($motor1,$motor2,$motor3,$motor4,$motor5,$motor6)";

if($conn->query($sql)===true)
{
    echo"New record created successfully";

}
else{
     echo"Error:".$sql."<br>".$conn->error;


}
 }
 else if (isset($_POST['run'])){
     $sql="SELECT*FROM'motors1'";
     if($conn->query($sql)){
         echo"Item successfuly added";
     }else{
         die();
     }
 

$conn->close();
 }
  ?>
    
     
        


    
