<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id_paket = $_GET['id'];

    // Query untuk mendapatkan informasi paket dan destinasi
    $query = "SELECT paket_wisata.*, destinasi1.nama_destinasi AS destinasi1, destinasi1.desk_destinasi AS desk_destinasi1, destinasi1.foto_destinasi AS foto1,
              destinasi2.nama_destinasi AS destinasi2, destinasi2.desk_destinasi AS desk_destinasi2, destinasi2.foto_destinasi AS foto2,
              destinasi3.nama_destinasi AS destinasi3, destinasi3.desk_destinasi AS desk_destinasi3, destinasi3.foto_destinasi AS foto3,
              destinasi4.nama_destinasi AS destinasi4, destinasi4.desk_destinasi AS desk_destinasi4, destinasi4.foto_destinasi AS foto4,
              destinasi5.nama_destinasi AS destinasi5, destinasi5.desk_destinasi AS desk_destinasi5, destinasi5.foto_destinasi AS foto5
              FROM paket_wisata 
              LEFT JOIN destinasi destinasi1 ON paket_wisata.destinasi1 = destinasi1.id_destinasi
              LEFT JOIN destinasi destinasi2 ON paket_wisata.destinasi2 = destinasi2.id_destinasi
              LEFT JOIN destinasi destinasi3 ON paket_wisata.destinasi3 = destinasi3.id_destinasi
              LEFT JOIN destinasi destinasi4 ON paket_wisata.destinasi4 = destinasi4.id_destinasi
              LEFT JOIN destinasi destinasi5 ON paket_wisata.destinasi5 = destinasi5.id_destinasi
                WHERE paket_wisata.id_paket = $id_paket";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<b>Lokasi: </b>";
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
        
        echo "<b>Durasi Berkunjung: </b>";
        echo $row["jumlah_hari"] . " Hari<br><br><br><br><br>";
        
        for ($i = 1; $i <= 5; $i++) {
            $destinasiKey = "destinasi" . $i;
            $deskDestinasiKey = "desk_destinasi" . $i;
            $fotoKey = "foto" . $i;
        
            if (!empty($row[$destinasiKey])) {
                echo '<div class="destinasi">';
                echo '<h2><b>' . $row[$destinasiKey] . '</b></h2>';
                echo '<img class="gambardest" src="' . $row[$fotoKey] . '" alt="">';
                echo '<p>' . $row[$deskDestinasiKey] . '</p>';
                echo '<div class="fasilitas">';
                echo '<b>Fasilitas yang tersedia: </b>';
                echo '<table>';
                echo '<tr>';
                echo '<td> Toilet Umum </td>';
                echo '<td> Mushola </td>';
                echo '<td> Area Parkir </td>';
                echo '<td> Rumah Makan </td>';
                echo '<td> Tempat Sampah </td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><img src="gambar/wc.png" alt="wc"></td>';
                echo '<td> <img src="gambar/mosque.png" alt="msc"></td>';
                echo '<td><img src="gambar/parked-car.png" alt="pk"></td>';
                echo '<td><img src="gambar/restaurant.png" alt="rs"></td>';
                echo '<td><img src="gambar/trash-can.png" alt="tc"></td>';
                echo '</tr>';
                echo '</table><br>';
                echo '</div>';
                echo '<b>Jam Operasional: </b>';
                echo '<span>24 jam</span><br><br>';
                
                echo '<br><br><br><br>';
                echo '</div>';
            }
        }
        echo '<div class="harga">';
        echo '<b>Rp. ' . number_format($row["harga_paket"]) . '</b>';
        echo '<button id="showPopupBtn"><b>Checkout</b><img src="gambar/check-it-out.png" alt=""></button>';
        echo '</div>';
        
    } else {
        echo "Paket wisata tidak ditemukan.";
    }
} else {
    echo "ID paket tidak ditemukan dalam parameter URL.";
}

$conn->close();
?>