<?php 
$conn = mysqli_connect("localhost","root","","todolist");
if (mysqli_connect_errno()) {
    echo"error bung". mysqli_connect_error();
}else{
    echo "berhasil terhubung";
}