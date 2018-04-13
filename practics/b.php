<?php
// print_r($_FILES);
$x=$_FILES['image']['name'];
$y=$_FILES['image']['tmp_name'];
move_uploaded_file($y, "up/".$x);
?>