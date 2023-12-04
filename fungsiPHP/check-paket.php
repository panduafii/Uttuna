<?php
include "koneksi.php";

$query = "SELECT * FROM paket_wisata";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>ID Paket: " . $row["id_paket"] . "</h2>";
        echo "<p>Jumlah Hari: " . $row["jumlah_hari"] . "</p>";
        echo "<p>Harga Paket: " . $row["harga_paket"] . "</p>";

        echo "<p>Destinasi:</p>";
        echo "<ul>";
        for ($i = 1; $i <= 5; $i++) {
            $destinasi = $row["destinasi" . $i];
            if (!empty($destinasi)) {
                echo "<li>" . $destinasi . "</li>";
            }
        }
        echo "</ul>";

        echo "<hr>";
    }
} else {
    echo "Tidak ada paket wisata yang tersedia.";
}

$conn->close();
?>