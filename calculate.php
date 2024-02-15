<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai1 = $_POST["nilai1"];
        // Ambil nilai-nilai lainnya dari formulir
        // Lakukan perhitungan rata-rata
        $rata_rata = ($nilai1 ) / jumlah_nilai;
        echo "<h2>Rata-rata Nilai Raport Anda: $rata_rata</h2>";
    }
?>