<?php include("yheader.php"); ?>
<?php
$myForm = '<body>
<form action="pro_s5delete.php">
<input name="delid" value="1001">
<input type="submit" value="pro_s5delete.php">
</form>';
if (!isset($_GET['delid'])) { 
  echo $myForm;
  exit;
}
require("pro_s1connect.php");
$sql="delete from $tb ";
$sql.="where eid ='".$_GET['delid']."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  header("location: pro_s0index.php");
mysql_close($connect);
?>
</body>?>
<?php include ("yfooter.php"); ?>
