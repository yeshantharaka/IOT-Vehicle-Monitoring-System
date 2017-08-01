<?php


$con = mysqli_connect("localhost","root","") or die("not connected");

$db = mysqli_select_db($con,"watchdog") or die("no database found");

if($con){
    echo("connected");
} else{
    echo("error");
}

if($db){
    echo("connected");
} else{
    echo("error");
}

$query = mysqli_query($con , "SELECT * FROM users");


while ($details = mysqli_fetch_array($query)) {
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    if ($details[1] == $password and $details[0] == $uname) {
        header("Location: index.php");
		break;
    } else {
        header("Location: login.html");
    }
   
}


?>
