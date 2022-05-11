<!-- Aim : WAP to Demonstrate Order By , Limit By &  Group by Clause  --> 


<html>
<head></head>
<body>
    <table border="1px" >
        <tr>
            <th> ID </th>
            <th> Employee Number   </th>
            <th> First Name  </th>
            <th> Last Name </th>
            <th> Salary </th>
            <th> Department </th>
        </tr>
        <?php
          if(mysqli_num_rows($result) > 0 ){
              while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                  $emp_no = $row['emp_no'];
                  $f_name = $row['f_name'];
                  $l_name = $row['l_name'];
                  $salary = $row['salary'];
                  $dept = $row['dept'];
                  echo "
                  <tr>
                  <td> $id </td>
                  <td> $emp_no </td>
                  <td> $f_name </td>
                  <td> $l_name </td>
                  <td> $salary </td>
                  <td> $dept </td>
                  </tr>
                  ";
              }
          }
        ?>
    </table>
</body>
</html>
