<?php 
session_start();
include "../koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$q2 = mysqli_query($conn,"select * from petugas where username='".$username."' and password='".($password)."'");
$row = mysqli_fetch_array ($q2);
    if (mysqli_num_rows($q2) > 0) {
    $_SESSION['id_petugas'] = $row['id_petugas'];
    $_SESSION['nama_petugas'] = $row['nama_petugas'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['status_login_admin']=true;
    header('location: index.php');
}else {
    echo "<script>alert('Username dan Password tidak benar');location.href='login_admin.php';</script>";
}
?>

