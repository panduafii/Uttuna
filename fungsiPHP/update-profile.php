<?php
include "koneksi.php";

session_start();
$session_username = $_SESSION['username'];
$new_email = $_POST['email'];
$new_phone = $_POST['phone'];
$new_username = $_POST['username'];

// Perbarui data pengguna termasuk username baru
$query_update_profile = "UPDATE pengguna SET email = '$new_email', notelp_pengguna = '$new_phone', username = '$new_username' WHERE username = '$session_username'";

if ($conn->query($query_update_profile) === TRUE) {
    // Perbarui session dengan username yang baru
    $_SESSION['username'] = $new_username;

    echo "Profil berhasil diperbarui";
    header("Location: ../index.php");
} else {
    echo "Error updating profile: " . $conn->error;
}

$conn->close();
?>