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

$number = $_POST['number'];
$com_name = $_POST['com_name'];
$e_mail = $_POST['e_mail'];
$tel = $_POST['tel'];
$s = "INSERT INTO contact ( Vehicle_number, Owner, E_mail, Telephone_number)VALUES ( '$number', '$com_name', '$e_mail', $tel)";
echo($s);
$query = mysqli_query($con , "INSERT INTO contact ( Vehicle_number, Owner, E_mail, Telephone_number)VALUES ( '$number', '$com_name', '$e_mail', $tel)");
header("Location: forms.html");


//$query = mysqli_query($con , "INSERT INTO contact (con_key, Vehicle_number, Owner, E_mail, Telephone_number)
//VALUES (NULL, 'AB 2327', 'acb company', 'abc@gmail,com', '0770192171')");
// header("Location: index.php");


/*while ($details = mysqli_fetch_array($query)) {
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    if ($details[1] == $password and $details[0] == $uname) {
        header("Location: index.php");
		break;
    } else {
        header("Location: login.html");
    }
   
/}*/
mysqli_close($con);

?>
