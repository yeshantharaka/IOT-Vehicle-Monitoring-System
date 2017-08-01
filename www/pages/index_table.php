<?php


$con = mysqli_connect("localhost","root","") or die("not connected");

$db = mysqli_select_db($con,"monitor") or die("no database found");


$query = mysqli_query($con , "SELECT * FROM vehicle_log");
$count = 0;

while ($details = mysqli_fetch_array($query)) {
    $vehicle_no = $details['vehicle_no'];
    $arr_date = $details['arrival_date'];
    $arr_time = $details['arrival_time'];
    $leave_date = $details['leave_date'];
    $leave_time = $details['leave_time'];
    $weight = $details['weight_signature'];
    
}


?>
