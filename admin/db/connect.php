<?php
// Kết nối databases

$Server='MYSQL5045.site4now.net';
$Database='db_a78b0e_worldl';
$Uid='a78b0e_worldl';
$Password='1q2w3e4r';



$conn = mysqli_connect($Server, $Uid, $Password, $Database);
mysqli_set_charset($conn, 'UTF8');
if (!$conn) {
    echo "Kết nối thất bại." . mysqli_connect_error();
    die();
// } else {
//    echo "Kết nối thành công";
}
?>