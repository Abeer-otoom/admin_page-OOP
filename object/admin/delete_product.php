<?php
include "include/classes.php";
$id=$_GET['id'];
$z->deleteproduct($c,$id);
header("location:product.php");






?>