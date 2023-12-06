<?php
include "koneksi.php";

$query = "SELECT paket_wisata.*, destinasi1.nama_destinasi AS destinasi1, destinasi2.nama_destinasi AS destinasi2, destinasi3.nama_destinasi AS destinasi3, destinasi4.nama_destinasi AS destinasi4, destinasi5.nama_destinasi AS destinasi5,
        destinasi1.foto_destinasi AS foto1, destinasi2.foto_destinasi AS foto2, destinasi3.foto_destinasi AS foto3, destinasi4.foto_destinasi AS foto4, destinasi5.foto_destinasi AS foto5
          FROM paket_wisata 
          LEFT JOIN destinasi destinasi1 ON paket_wisata.destinasi1 = destinasi1.id_destinasi
          LEFT JOIN destinasi destinasi2 ON paket_wisata.destinasi2 = destinasi2.id_destinasi
          LEFT JOIN destinasi destinasi3 ON paket_wisata.destinasi3 = destinasi3.id_destinasi
          LEFT JOIN destinasi destinasi4 ON paket_wisata.destinasi4 = destinasi4.id_destinasi
          LEFT JOIN destinasi destinasi5 ON paket_wisata.destinasi5 = destinasi5.id_destinasi";
          
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<a href="isipaket.php?id=' . $row["id_paket"] . '">';
        echo '<div class="paket">';
        echo '<div class="hari"><img src="gambar/clock.png" alt=""><span>' .' '. $row["jumlah_hari"] . ' Hari</span></div>';
        echo '<div class="harga"><b>Rp' . number_format($row["harga_paket"]) . '</b></div>';
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
        echo '<div class="lokasi">' . implode(", ", $destinasiArray). '</div>';

        echo '<img class="g1" src="' . $row["foto1"] . '" alt="Foto Destinasi 1">';
        echo '<img class="g2" src="' . $row["foto2"] . '" alt="Foto Destinasi 2">';
        echo '<img class="g3" src="' . $row["foto3"] . '" alt="Foto Destinasi 3">';

        echo '</div>';
        echo '</a>';
    }
} else {
    echo "Tidak ada paket wisata yang tersedia.";
}

$conn->close();
?>