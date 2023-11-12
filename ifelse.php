<?php

$nilai = 65;

if ($nilai > 80){
    $grade = "Selamat anda lolos";
} elseif ($nilai < 80){
    $grade = "Maaf coba lagi";
} 

echo "Nilai Anda = $nilai \n";
echo "Grade : $grade";

?>