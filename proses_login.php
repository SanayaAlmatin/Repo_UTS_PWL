<?php 
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$q = mysqli_query($conn,"select * from pelanggan where username = '".$username."' and password = '".($password)."'");
$r = mysqli_fetch_array ($q);
if (mysqli_num_rows($q) > 0) {
    $_SESSION['id_pelanggan'] = $r['id_pelanggan'];
    $_SESSION['nama_pelanggan'] = $r['nama_pelanggan'];
    $_SESSION['username'] = $r['username'];
    $_SESSION['password'] = $r['password'];
    $_SESSION['status_login']=true;
    header('location:./pelanggan/index.php');
}else {
    echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
}
?>

