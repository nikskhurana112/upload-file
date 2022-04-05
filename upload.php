<?php

$name = time().$_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$path = "images/".$name;
$status = move_uploaded_file($tmp_name,$path);
if($status){
    header("Location:index.php");
    exit;
}

