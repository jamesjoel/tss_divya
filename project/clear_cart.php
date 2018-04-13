<?php
setcookie("cart", "", time()-100);
header("location:index.php");
?>