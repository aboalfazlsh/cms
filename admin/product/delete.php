<?php
session_start();
$id=$_GET['id'];
deleteproduct_cat($id);
?>
<a href="dashbord.php">برگشت به پنل ادمین</a>