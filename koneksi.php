<?php
$host = 'localhost';
$user = 'root';
$pw = '';
$db = 'db_rental';

$conn = mysqli_connect($host, $user, $pw , $db );
// if($conn){
//     echo "Koneksi sukses";
// }

mysqli_select_db($conn, $db);

?>