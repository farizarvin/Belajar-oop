<?php
include "Mahasiswa.php";
include "MahasiswaTransfer.php";

$daftar_nilai = [
    "A22.123" => ['sks' => 2, 'nilai' => 'A'],
    "A22.456" => ['sks' => 3, 'nilai' => 'C'],
    "A22.789" => ['sks' => 2, 'nilai' => 'B']
];

$mahasiswaTI = new MahasiswaTransfer($daftar_nilai);

$mahasiswaTI->setData("A11.2023.15467", "Fariz Hasim Arvianto", "2004-03-20");

echo "<pre>";
print_r($mahasiswaTI->getData());
echo "</pre>";

