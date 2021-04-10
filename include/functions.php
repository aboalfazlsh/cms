<?php
function config(){
    $localhost="localhost";
    $username="root";
    $password="";
    $database="CMS";
    $connect=mysqli_connect($localhost,$username,$password,$database);
    mysqli_set_charset($connect,"utf8");
    mysqli_query($connect,"SET NAMES 'utf8'");
    return $connect;
}
function addmenu($data){
    $connect=config();
    $sql="INSERT INTO menu_tbl (title,url,sort,status,chid) VALUE ('$data[title]','$data[url]','$data[sort]','$data[status]','$data[parent]') ";
    mysqli_query($connect,$sql);
}
function submenu(){
    $connect=config();
    $sql="SELECT * FROM menu_tbl WHERE chid='0'";
    $row=mysqli_query($connect,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}
function listmenuadmin(){
    $connect=config();
    $sql="SELECT * FROM menu_tbl";
    $row=mysqli_query($connect,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}
function selectparentmenu($chid){
    $connect=config();
    $sql="SELECT * FROM menu_tbl WHERE id='$chid'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res['title'];
}
function deletemenu($id){
    $connect=config();
    $sql="DELETE FROM menu_tbl WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
}
function showmenu($id){
    $connect=config();
    $sql="SELECT * FROM menu_tbl WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;

}
function editmenu($data,$id){
    $connect=config();
    $sql="UPDATE menu_tbl SET title='$data[title]',url='$data[url]',sort='$data[sort]',status='$data[status]',chid='$data[parent]' WHERE id='$id'";
    mysqli_query($connect,$sql);
    echo "Menu changed successfully ";
}
function listmenudefault()
{
    $connect = config();
    $sql = "SELECT * FROM menu_tbl WHERE status='1' AND chid='0' ORDER BY sort ASC";
    $row = mysqli_query($connect, $sql);
    while ($res = mysqli_fetch_assoc($row)) {
        $result[] = $res;
    }
    return $result;
}
?>