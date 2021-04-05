<?php
session_start();
$id=$_GET['id'];
deletemenu($id);
?>
<a href="dashbord.php">برگشت به پنل ادمین</a>