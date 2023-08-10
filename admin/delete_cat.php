<?php

include 'connection.php';

$id = $_GET["did"];
$delete = $obj->Query("Delete from category where cat_id='$id'");
if($delete)
{
  header('location:view_allcat.php');
}
else
{
	echo "Error in Code";
}
?>