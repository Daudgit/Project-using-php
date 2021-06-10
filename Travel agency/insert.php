<html>
<body>
<?php
$con=mysql_connect("localhost","root");
if(!$con)
{
die('Error: :'.mysql_error());
}
mysql_select_db("project",$con);
$sql="insert into stu(Name,Date of Birth,Email address,Password,Mobile No.,Address)values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[Address]',)";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
else
{
echo"Record inserted successfully";
}
mysql_close($con);
?>