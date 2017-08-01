<html>
<body>

<?php
	$con = mysqli_connect("localhost","root","") or die("not connected");

	$db = mysqli_select_db($con,"monitor") or die("no database found");
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
?>
<br />

<?php
    $query = mysqli_query($con , "SELECT * FROM users");

    while ($row = mysqli_fetch_array($query)){
        $name = $row['username'];
        $pw = $row['password'];

        echo $name . ':' . $pw . 'br /';
    }

?>


</body>
</html>