<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id_paket = $_GET['id'];

    $query_insert_pemesanan = "INSERT INTO riwayat_pemesanan(id_paket) VALUES($id_paket)";
    
    if ($conn->query($query_insert_pemesanan) === TRUE) {
        echo "Pemesanan berhasil! Riwayat pemesanan telah ditambahkan.";
        header("Location: ../paket.php");
    } else {
        echo "Error: " . $conn->error;
    }

    // Tutup koneksi ke database
    $conn->close();
} else {
    echo "ID paket tidak valid.";
}
?>