<?php

include 'connection.php';

$id = $_GET["did"];
$delete = $obj->Query("Delete from child where child_id='$id'");
if($delete)
{
  header('location:view_child.php');
}
else
{
	echo "Error in Code";
}
?>