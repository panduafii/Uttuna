<?php
include "koneksi.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    // Query untuk memeriksa informasi pengguna
    $query = "SELECT id_pengguna, username, password FROM pengguna WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($user_id, $db_username, $db_password);
    $stmt->fetch();
    // Verifikasi kata sandi
    if ($db_username && password_verify($password, $db_password)) {
        // Login berhasil, set session
        $_SESSION["user_id"] = $user_id;
        $_SESSION["username"] = $db_username;

        // Redirect ke halaman home atau halaman setelah login berhasil
        header("Location: ../index.php");
        exit();
    } else {
        // Login gagal, tampilkan pesan error
        header("Location: ../login1.php?error=1");
        exit();
    } 
}
$stmt->close();
$conn->close();
?>