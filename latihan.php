<?php

// $teman = array("Cemol", "Pakpeng", "Ucon",);

// foreach ($teman as $anak_kojok) {
//     echo $anak_kojok . "\n";
// }

// echo date("l, d-M-Y") . "\n";

// echo time();

// date(jam,menit,detik,bulan,tanggal,tahun);
// 

// function perkalian($angka1, $angka2)
// {
//     $a = $angka1;
//     $b = $angka2;
//     $hasil = $a*$b;
//     return $hasil;
// }

// $akhir = perkalian(23, 44);
// echo "perkalian 23*44 adalah $akhir";
// echo "\n";


$nama = array();
array_push($nama, "Yusron");
array_push($nama, "Amri");
array_push($nama, "Kamal");
array_push($nama, "Nopal");
array_push($nama, "Bayu");
array_push($nama, "Uje");
array_push($nama, "Ilham");
array_push($nama, "Hulek");
array_push($nama, "Sulton");

echo "Nama-nama secara urut yang masuk kedalam nominasi sebagai calon 'Ketua MOBA periode tahun 2020/2022' adalah sebagai berikut: ";
sort($nama);
foreach($nama as $caketmoba){
    echo $caketmoba . ", ";
}   echo "\n";

echo "Selanjutnya adalah pemilihan calon 'Ketua MOBA periode tahun 2020/2022' yang dipilih secara random." . "\n";
echo "Dan adapun nama yang terpilih sebagai calon 'Ketua MOBA periode tahun 2020/2022' adalah ";
echo strtoupper($nama[rand(0, count($nama))]);
echo "\n";
?>