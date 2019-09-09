<?php
include_once('connection1.php');
$query="SELECT name FROM studentprofile
        WHERE name="Rehan"";
$result=mysql_query($query);
?>
<html>
<head>
<title></title>
<head>
<body>
<?php
while($rows=mysql_fetch_assoc($result))
{<?php echo $rows.[ID]; ?>
}
?>
</body>
</html>
