<?php
if(isset($_POST["n1"]))
{  $ne1=$_POST["num1"];
$ne2=$_POST["num2"];
$z=$ne1+$ne2;
echo "The sum is ".$z;}
if(isset($_POST["n2"]))
{  $ne1=$_POST["num1"];
$ne2=$_POST["num2"];
$z=$ne1-$ne2;
echo "The sub is ".$z;}
if(isset($_POST["n3"]))
{  $ne1=$_POST["num1"];
$ne2=$_POST["num2"];
$z=$ne1*$ne2;
echo "The mul is ".$z;}
if(isset($_POST["n4"]))
{  $ne1=$_POST["num1"];
$ne2=$_POST["num2"];
$z=$ne1/$ne2;
echo "The div is ".$z;}
if(isset($_POST["n5"]))
{
$d=$_POST["num3"];
$f=1;
for($n=1;$n<=$d;$n++)
{$f=$f*$n;}
echo "factorial is".$f;}
{if(isset($_POST["n6"]))
{
$n=$_POST["num3"];
$r=0;
while($n!=0)
{
$a=$n%10;
$r=$r*10+$a;
$n=(int)($n/10);}
echo "rev:-".$r;}

	}
?>