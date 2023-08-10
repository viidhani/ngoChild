<?php

include 'connection.php';
$id = $_GET["did"];
$delete = $obj->Query("Delete from area where area_id='$id'");
if($delete)
{
  header('location:view_allarea.php');
}
else
{
	echo "Error in Code";
}
?>