<?php
include "koneksi.php";

$username = $_POST['username'];
$notelp_pengguna = $_POST['notelp_pengguna'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("insert into pengguna(username, email, password, notelp_pengguna) values(?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $email, $hashed_password, $notelp_pengguna);
$execval = $stmt->execute();
echo $execval;
echo "Registration successfully...";
header("Location: ../login1.php");
$stmt->close();
$conn->close();  		
?>