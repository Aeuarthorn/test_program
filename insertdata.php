<?php
require('connectdb.php');

echo "ชื่อ : ".$_POST["fname"]."<br>";
echo "นามสกุล : ".$_POST["lname"];
echo "เพศ : ".$_POST["gender"];

$sql = "INSERT INTO employees(fname,lname,gender) VALUES('$fname','$lname','$gender')";

?>