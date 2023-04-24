<?php
$log="localhost";
$user="root";
$pass="";
$con= mysqli_connect($log,$user,$pass);
if(!$con){
    echo "Not Connected To Database";
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $gmail=$_POST['gmail'];
    $insta=$_POST['insta'];
    $gender=$_POST['MALE'];
    $year=$_POST['year'];
    $sql="INSERT INTO `utinder`.`utinder`(`name`, `gmail`, `year`,`gender`, `insta`) VALUES ('$name','$gmail','$year','$gender','$insta')";
    $done=mysqli_query($con,$sql);
    header("location:register2.html");
    
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: white">
    <form action="register.php" method="post">
        <h1>REGISTER HERE</h1>
        <p>ALL DETAILS ARE CONFIDENTIAL</p><br><br>
        <span><b>NAME: </b></span><input type="text" id="inpu" name="name" required><br><br>
        <span><b>GMAIL:</b></span><input type="email" id="inpu" name="gmail" required placeholder=""><br><br>
        <span><b>Year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span><input type="number" name="year" id="inpu"><br><br>
        <span><b>GENDER:</b></span>
        <input type="radio" name="MALE" value="MALE">MALE
        <input type="radio" name="MALE" value="FEMALE">FEMALE
        <br><br>
        <span><b>INSTAGRAM ID:</b></span><input type="text" name="insta" id="inpu" required><br>
        <br><br><input type="submit" value="Submit" id="tbn" name="submit">
        <input type="reset" id="tbn" value="Reset">
    </form>
</body>
</html>