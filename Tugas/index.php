<?php

include "Mahasiswa.php";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2023.00001', 'kami', 'Teknik Informatika');
print_r($mahasiswaTI->getData());
echo "<br>";

$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A12.2023.00001', 'kamu', 'Sistem Informasi');
print_r($mahasiswaSI->getData());
echo "<br>";

$mahasiswamene = new Mahasiswa();
$mahasiswamene->setData('B11.2023.00002', 'kame', 'Manajemen');
print_r($mahasiswamene->getData());
echo "<br>";

$mahasiswafk = new Mahasiswa();
$mahasiswafk->setData('F11.2023.00003', 'kamo', 'Kedokteran');
print_r($mahasiswafk->getData());
echo "<br>";

echo "<br>Data Mahasiswa: <br>";
$mahasiswaTI->printData();
$mahasiswaSI->printData();
$mahasiswamene->printData();
$mahasiswafk->printData();

