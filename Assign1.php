 <!-- Aim : Write A Program to create Table & Insert values from form in Php. -->
 <!-- 14/03/2022 -->
<html>
    <head></head>
    <body>
        <form method="POST">
          <input type="text" name="roll_no" placeholder="Enter Roll Number "/> <br/>
          <input type="text" name="f_name" placeholder="Enter First Name  "/><br/>
          <input type="text" name="l_name" placeholder="Enter last Name  "/><br/>
          <input type="email" name="email" placeholder="Enter Email  "/><br/>
          <input type="submit" value="Submit " />

        </form>
    </body>
</html>


<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "assignments";


$con = mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die(mysqli_connect_error()." Not Connected to database !!!");
}


$rollno = $_POST['roll_no'];
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$email = $_POST['email'];
$insert = "INSERT INTO students (roll_no, f_name, l_name, email) VALUES ('$rollno','$fname','$lname','$email')";
$create = "CREATE TABLE newTable (value1 int NOT NULL , value2 VARCHAR(255),value3 VARCHAR(255),value4 VARCHAR(255))";
if(mysqli_query($con , $insert)){echo"Inserted ";}
else{echo"Not  Inserted ";}
// if(mysqli_query($con , $create)){echo"Created ";}
// else{echo"Not  Created ";}
mysqli_close($con);
?>

