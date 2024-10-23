<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($mysqli,"select * from users where
username='$username' and password='$password'");
$aName1 = mysqli_fetch_assoc($data);

$cek = mysqli_num_rows($data);
if($cek > 0){
$role = $aName1['role'];
print($role);
}else{
echo "<script type='text/javascript'>alert('Username dan Password yang anda masukkan salah');</script>";
header("Location = login.php");
}
?>