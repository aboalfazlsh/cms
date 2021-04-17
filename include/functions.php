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

//start menu function
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
function listsubmenudefault($id)
{
    $connect = config();
    $sql = "SELECT * FROM menu_tbl WHERE status='1' AND chid='$id' ORDER BY sort ASC";
    $row = mysqli_query($connect, $sql);
    if (mysqli_num_rows($row)>0) {
        while ($res = mysqli_fetch_assoc($row)) {
            $result[] = $res;
        }
        return $result;
    }
}

//end Menu function

//start product_cat
function addproduct_cat($data){
    $connect=config();
    $sql="INSERT INTO product_cat (title,sort,status) VALUE ('$data[title]','$data[sort]','$data[status]') ";
    mysqli_query($connect,$sql);
}
function listproduct_cat(){
$connect=config();
$sql="SELECT * FROM product_cat";
$row=mysqli_query($connect,$sql);
while($res=mysqli_fetch_assoc($row)){
    $result[]=$res;
}
return $result;
}
function editproducat_cat($data,$id){
    $connect=config();
    $sql="UPDATE product_cat SET title='$data[title]',sort='$data[sort]',status='$data[status]' WHERE id='$id'";
    mysqli_query($connect,$sql);
    echo "Menu changed successfully ";
}
function showproduct_cat($id){
    $connect=config();
    $sql="SELECT * FROM product_cat WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;

}
function deleteproduct_cat($id){
    $connect=config();
    $sql="DELETE FROM product_cat WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
}
//end product_cat
?>