<?php

include "koneksi.php";

// Ambil data pengguna dari database
$query = "SELECT * FROM pengguna WHERE username = '$username'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Ambil data pengguna dari hasil query
    $row = $result->fetch_assoc();
    $uname = $row['username'];
    $eml = $row['email'];
    $pwd = $row['password'];
    $phone = $row['notelp_pengguna'];
    // ... (Tambahkan kolom lain sesuai kebutuhan)
} else {
    // Handle jika data pengguna tidak ditemukan
    echo "Data pengguna tidak ditemukan.";
}

// Tutup koneksi ke database
$conn->close();
?>