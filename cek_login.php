<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from login2 where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: index.php");
}

else{
        header("location: error.html");
}
?>



