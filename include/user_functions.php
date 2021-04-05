<?php
include_once 'functions.php';
session_start();
function user_login($data){
    $connect=config();
    $sql="SELECT * FROM admin_tbl WHERE username='$data[username]'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    //var_dump($row);
    echo "<br>";
    //var_dump($data);
    if ($res['username']==$data['username']){
        if ($res['password']==$data['password']){
            $_SESSION['id']=$res['id'];
            header("location:dashbord.php");

        }

    }




}


?>