<?php

session_start();

?>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <?php
     $msg = "";
     if(isset($_POST['login']) && !empty($_POST['username'])  && !empty($_POST['password'])){
         if($_POST['username'] == "admin" && $_POST['password'] == "admin"){
                $_SESSION['username'] = "admin";
                $_SESSION['password'] = "password";
                $msg = "You have entered valid username and password";
         }
            else{
                $msg = "You have entered invalid username and password";
            }
     }
    ?>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <center>
            <h1><?php echo $msg; ?></h1>
            <input type="text" name="username" placeholder="Username" required><br /><br />
            <input type="password" name="password" placeholder="password" required><br /><br />
            <input type="submit" name="login" value="Login"><br /><br />
            Click here to clean <a href="logout.php">Session.</a>
        </center>
    </form>
</body>

</html>