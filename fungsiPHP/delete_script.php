<?php
if (isset($_POST['delete'])) {
    // Gantilah parameter koneksi sesuai dengan konfigurasi server Anda
    include "koneksi.php";
    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil ID paket dari formulir
    $id_paket_to_delete = $_POST['id_paket'];

    // Query untuk menghapus data
    $query_delete = "DELETE FROM riwayat_pemesanan WHERE id_paket = $id_paket_to_delete"; // Ganti nama_tabel dengan nama tabel yang sesuai

    if ($conn->query($query_delete) === TRUE) {
        echo "Data berhasil dihapus.";
        header("Location: ../history.php");
        
    } else {
        echo "Error: " . $conn->error;
    }

    // Tutup koneksi ke database
    $conn->close();
}
?>