<?php
include "include/classes.php";
$id=$_GET['id'];
$y->deletecategory($c,$id);
header("location:category.php");
?>