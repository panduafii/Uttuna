<?php
include "koneksi.php";
    // Query untuk mengambil data riwayat pembelian paket wisata
    $query = "SELECT paket_wisata.*, 
    destinasi1.nama_destinasi AS destinasi1, destinasi2.nama_destinasi AS destinasi2, 
    destinasi3.nama_destinasi AS destinasi3, destinasi4.nama_destinasi AS destinasi4, 
    destinasi5.nama_destinasi AS destinasi5,
    destinasi1.foto_destinasi AS foto1, destinasi2.foto_destinasi AS foto2, 
    destinasi3.foto_destinasi AS foto3, destinasi4.foto_destinasi AS foto4, 
    destinasi5.foto_destinasi AS foto5
FROM riwayat_pemesanan
INNER JOIN paket_wisata ON riwayat_pemesanan.id_paket = paket_wisata.id_paket
LEFT JOIN destinasi destinasi1 ON paket_wisata.destinasi1 = destinasi1.id_destinasi
LEFT JOIN destinasi destinasi2 ON paket_wisata.destinasi2 = destinasi2.id_destinasi
LEFT JOIN destinasi destinasi3 ON paket_wisata.destinasi3 = destinasi3.id_destinasi
LEFT JOIN destinasi destinasi4 ON paket_wisata.destinasi4 = destinasi4.id_destinasi
LEFT JOIN destinasi destinasi5 ON paket_wisata.destinasi5 = destinasi5.id_destinasi";

    $result = $conn->query($query);

    // Periksa apakah terdapat data
    if ($result->num_rows > 0) {
        // Output data setiap baris
        while ($row = $result->fetch_assoc()) {
            $destinasiArray = [
                $row["destinasi1"],
                $row["destinasi2"],
                $row["destinasi3"],
                $row["destinasi4"],
                $row["destinasi5"]
            ];
            $destinasiArray = array_filter($destinasiArray, function($value) {
                return $value !== null;
            });
            echo "<tr>";
            echo "<td>" . $row["id_paket"] . "</td>";
            echo "<td>" . $row["harga_paket"] . "</td>";
            echo "<td>" . implode(", ", $destinasiArray) . "</td>";
            echo "<td>
        <form method='post' action='fungsiPHP/delete_script.php'>
            <input type='hidden' name='id_paket' value='" . $row["id_paket"] . "'>
            <button type='submit' name='delete'>Delete</button>
        </form>
    </td>";
            echo "</tr>";     
                
        }

        echo "</table>";
    } else {
        echo "Tidak ada data riwayat pembelian.";
    }

    // Tutup koneksi ke database
    $conn->close();
?>