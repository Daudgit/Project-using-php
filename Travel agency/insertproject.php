<html>
<body>
<?php
$con=mysql_connect("localhost","root");
if(!$con)
{
die('Error: :'.mysql_error());
}
mysql_select_db("project",$con);
$sql="insert into hotel value('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo"Record inserted successfully";
mysql_close($con);
?>
</body>
</html>