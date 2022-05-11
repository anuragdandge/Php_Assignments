<!-- Aim : Write  a Program to Retrieve data From Database 
    Date  
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "assignments";

$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die(mysqli_connect_error() . " Not Connected to database !!!");
}

$select = " SELECT * FROM students";
$result = mysqli_query($con, $select);
?>
<html>
  <head></head>
  <body>
    <table border="1px">
      <tr>
        <th>Id</th>
        <th>Roll Number</th>
        <th>First Name</th>
        <th>last Name</th>
        <th>Email</th>
      </tr>
      <?php if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              $id = $row["id"];
              $roll_no = $row["roll_no"];
              $f_name = $row["f_name"];
              $l_name = $row["l_name"];
              $email = $row["email"];
              echo "
      <tr>
        <td>$id</td>
        <td>$roll_no</td>
        <td>$f_name</td>
        <td>$l_name</td>
        <td>$email</td>
      </tr>
      ";
          }
      } ?>
    </table>
  </body>
</html>
