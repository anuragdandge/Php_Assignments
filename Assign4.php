<!-- Aim : WAP to Demonstrate Order By , Limit By &  Group by Clause  --> 
<?php

 $con = mysqli_connect("localhost", "root", "", "classicmodels");
 if(!$con){
     die("Error".mysqli_connect_error());
 }
 
 $limitBy = "SELECT firstName,lastName FROM employees LIMIT 2";
 $limitResult = mysqli_query($con, $limitBy);


  $orderBy = "SELECT * FROM employees ORDER BY lastName LIMIT 5 ";
  $orderResult = mysqli_query($con, $orderBy);


  $groupBy = "SELECT COUNT(employeeNumber),jobTitle FROM employees GROUP BY jobTitle DESC ";
  $groupResult = mysqli_query($con, $groupBy);
?>

<html>
<head></head>
<body>
    <table border="1px" >
        <tr>
            <th> First Name  </th>
            <th> Last Name </th>
            <th> Employee Number </th>
            <th> Job Title  </th>
        </tr>
        <?php
          if(mysqli_num_rows($orderResult) > 0 ){
              while($row = mysqli_fetch_assoc($groupResult)){
                  echo "
                  <tr>
                  <td> ".$row['firstName']." </td>
                  <td> ".$row['lastName']."</td>
                  <td> ".$row['COUNT(employeeNumber)']." </td>
                  <td> ".$row['jobTitle']."</td>
                  </tr>
                  ";
              }
          }
        ?>
    </table>
</body>
</html>
