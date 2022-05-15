<!-- WAP to create HTML form with all inputs -->

<html>
    <head><title>Assign 6</title></head>
    <body>
        <form method="POST">
        <input type="email" placeholder="Email" name="email" ><br/>
        <input type="color" name="color"><br/>
        <input type="date" name="date"><br/>
        <input type="password" placeholder="Password" name="password"><br/>
        <input type="text" placeholder="Text" name="text" ><br/>
        <input type="number" name="number"> <br/>
        <input type="range" max="10" min="1" name="range"><br/>
        <input type="time" placeholder="Time" name="time"><br/>
        <input type="radio" value="male" name="gender"> Male <input type="radio" value="female" name="gender"> Female <br/>
        <input type="checkbox" name="item" value="item1"> Item 1 <input type="checkbox" name="item" value="item2"> Item 2 <br/>
        <input type="file" name="file" name="file"> 
        <input type="del" value="delete" name="delete">
        <input type="hidden" name="hidden" placeholder="hidden">  
        <input type="url" name="url" placeholder="url">  
        <input type="submit" name="submit" placeholder="submit">  
        </form> 
    </body>
</html>

<?php
$email = $_POST['email'];echo $email."<br/>";
$color = $_POST['color'];echo $color."<br/>";
$date = $_POST['date'];echo $date."<br/>";
$password = $_POST['password'];echo $password."<br/>";
$text = $_POST['text'];echo $text."<br/>";
$number = $_POST['number']; echo $number."<br/>";
$range = $_POST['range']; echo $range."<br/>";
$time = $_POST['time']; echo $time."<br/>";
$gender = $_POST['gender']; echo $gender."<br/>";
$item = $_POST['item']; echo $item."<br/>";
$file = $_POST['file']; echo $file."<br/>";
$delete = $_POST['delete']; echo $delete."<br/>";
$url = $_POST['url']; echo $url."<br/>";


?>