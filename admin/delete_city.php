<?php

include 'connection.php';

$id = $_GET["did"];
$delete = $obj->Query("Delete from city where city_id='$id'");
if($delete)
{
  header('location:view_allcity.php');
}
else
{
	echo "Error in Code";
}
?>