<?php
//khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="b";//ten database
//tao ket noi csdl
$conn= new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="update test set HoTen='Thuong2004',SoDT='09379137373' where Ma=3";
//thuc hien insert
if($conn->query($sql)===TRUE){
    echo "Da update thanh cong";
}
else
{
    echo "Co loi: ".$conn->error;
}
$conn->close();//dong ket noi

?>