<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="notes";
$db_port=3306;

$conn = new mysqli($db_host,$db_user,$db_password,$db_name,$db_port);

//checking
if($conn->connect_error){
    die("connection fail");
// }else{
//     echo "connect";
}
    