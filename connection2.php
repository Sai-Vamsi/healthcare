<?php
$con=new mysqli("localhost","root","","studentprofile");
$result=$con->query("SELECT * FROM studentprofile");

foreach ($result as $value)
{
	echo $value['ID'];
}
?>