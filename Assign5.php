<!-- WAP to Delete Data from DB -->

<?php

$con = mysqli_connect("localhost","root","","assignments");

if(!$con){
    die (mysqli_connect_error()." Connect Error !");
}

$delete = " DELETE  FROM students WHERE id=1";

if(mysqli_query($con , $delete)){
    echo "Deleted Successfully";
}else{
    echo "Failed  Deleted  ";
}

?>