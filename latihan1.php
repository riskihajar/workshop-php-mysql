<?php

    $nama = "Rizky";
    $alamat = "Jln. Juanda 2";

    /* Cetak Menggunakan Echo */
    echo $nama . '<br>' . $alamat;

    echo "<br>";

    /* Penggunaan Quote / Tanda Petik */
    echo 'Nama "' . $nama . '"<br>';
    echo "Nama '" . $nama . "'<br>";

    echo "Nama \"" . $nama . "\"<br>"; // sama hal nya menggunakan petik ' (satu)

    /* Variable Snake Case */
    $nama_depan = "Rizky";
    $nama_belakang = "Hajar";

    $nama = $nama_depan . " " . $nama_belakang;
    echo $nama;

    echo "<br>";
    echo 'Isi dari variable $nama adalah "' . $nama . '"';
    echo "<br>";
    echo "Nama Saya $nama";
    echo "<br>";
    /* Template */
    $isi = sprintf("Nama Saya %s, Umur %d, Alamat %s", $nama, 24, $alamat);

    echo $isi;
?>

<p>Ini text html</p>

<?php
    //
?>
