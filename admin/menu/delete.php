<?php
$id=$_GET['id'];
deletemenu($id);
header("location:dashbord.php?m=menu&p=list");
?>