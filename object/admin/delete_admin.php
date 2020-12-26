<?php
include "include/classes.php";
$id=$_GET['id'];
$x->deleteadmin($c,$id);
header("location:index.php");





?>