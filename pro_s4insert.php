
<body>
	<?php include("yheader.php"); ?>
<form action="pro_s4insert.php">
<input name="nid" value="1004">
<input name="nname" value="kmit">
<input type="submit" value="s4insert.php">
</form>
<?php
if (!isset($_GET['nid']) || !isset($_GET['nname'])) exit;
require("pro_s1connect.php");
$sql="insert into $tb values('".$_GET['nid']."','".$_GET['nname']."')";
if(!$result=mysql_db_query($db,$sql)) 
  echo "$sql : failed";
else
  echo "$sql : succeeded";
mysql_close($connect);
?>
?>
<?php include ("yfooter.php"); ?>
</body>