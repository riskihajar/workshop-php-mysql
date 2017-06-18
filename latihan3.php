<?php

/* Perulangan */

/* For */
for($i=10; $i>=1; $i-=2){
    echo "Angka " . $i . "<br>";
}
echo "<br>";

/* While */
$i = 1;
while($i<=10){
    echo "Angka " . $i . "<br>";
    $i++;
}
echo "<br>";

/* Foreach */
$data = ['Rizky', 'Abong', 'Rifqi', 'Reza', 'Shandy'];
foreach($data as $nama){
    echo "Nama " . $nama . "<br>";
}
