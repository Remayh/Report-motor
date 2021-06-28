# Report-motor
motor control interface.

Create a control interface that contains 6 motors to control the report.
## Motors1.html
Using HTML to design the control interface and link it to  css, js, php code.

The control interface consists of 6 report engines measuring 180 and two buttons (run, save to database).

Calling with css code through:

 link rel="stylesheet" href="style.css"
 
 js code :
 
 script src="java1.js"></script
      
php code:

form action="php.php" method="POST"

## style.css

Use css to choose control interface formats such as height, size and color and then connect to the html.

## jave.js

It is responsible for the movements of the motor and recording the lowest value and the highest value

var slider1= document.getElementById("myRange1");
var output1=document.getElementById("demo1");
output1.innerHTML=slider1.nodeValue;
slider1.oninput=function(){
        output1.innerHTML=this.value
        
 The code is repeated on the number of motors.
 
 ## php.php
 
 Create php code and link it to the database so that the  motors are run and saved in the database.
 
To connect the database with php code:

$conn=new mysqli($servesname,$username,$password,$dbname);

The  motors numbers are then recorded in the database.

![W](https://user-images.githubusercontent.com/85842623/123629611-23ba5f80-d81d-11eb-8e5e-fab617e9fc1b.jpeg)

## php1.php

php code to print engine history from database


