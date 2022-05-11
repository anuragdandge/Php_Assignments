<!--  Aim : WAP to Update dat From Database in PHP -->
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



$roll_no = $_POST['roll_no'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];

$update = "UPDATE `students` SET roll_no='$roll_no',f_name='$f_name',l_name='$l_name',email='$email' WHERE roll_no = '$roll_no'";

if(mysqli_query($con , $update)){echo"updated ";}
else{echo"Not  updated ";}


mysqli_close($con);
?>