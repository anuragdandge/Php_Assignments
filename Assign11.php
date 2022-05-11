<!-- Write a Program to set cookies and access cookies and delete cookies  -->
<!-- Accessing  -->
<!-- <html>

<head></head>

<body>
    <?php
    echo "Name = ".$_COOKIE["name"];
    echo "<br>";
    echo "Age = ".$_COOKIE['age'];
    echo "<br>";
    ?>
</body>

</html> -->

<!-- Setting  -->
<!-- <html>

<head></head>

<body>
    <?php
    setcookie("name","anurag",time()+3600,"/","",0);
    setcookie("age",20,time()+3600,"/","",0);
    ?>
</body>

</html> -->

<!-- Deleting  -->

<?php
setcookie("name", "", time() - 3600,"/","",0);
setcookie("age", "", time() - 3600,"/","",0);
?>
<html>

<head></head>

<body>
    <?php
   if(isset($_COOKIE["name"]))
       echo "Welcome  ".$_COOKIE["name"]. "<br/>";
   else
         echo "Sorry Name is not recognized <br/>";
   if(isset($_COOKIE["age"]))
       echo "Your Age is ".$_COOKIE["age"]. "<br/>";
   else
         echo "Sorry Age is not recognized <br/>";
    ?>
    <?php echo " Deleted Cookies ";?>
</body>

</html>