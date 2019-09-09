<?php
$con=new mysqli("localhost","root","","genysys");
$result=$con->query("SELECT * FROM studentprofile");

foreach ($result as $value)
{
	echo $value['ID'];
}
?>