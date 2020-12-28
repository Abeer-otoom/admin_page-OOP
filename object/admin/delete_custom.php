<?php
include "include/classes.php";
$id=$_GET['id'];
$v->deletecustom($c,$id);
header("location: customer.php");





?>