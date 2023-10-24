<?php

$nama = readline("Masukkan Nama       : ");
$nilaiMutu = readline("Masukkan Nilai Mutu : ");

if(($nilaiMutu >= 80) && ($nilaiMutu < 100)){
    $hurufMutu = "A";
    $bobot     = 4.00;
}elseif(($nilaiMutu >= 75) && ($nilaiMutu < 80)){
    $hurufMutu = "A-";
    $bobot     = 3.75;
}elseif(($nilaiMutu >= 70) && ($nilaiMutu < 75)){
    $hurufMutu = "B+";
    $bobot     = 3.50;
}elseif(($nilaiMutu >= 65) && ($nilaiMutu < 70)){
    $hurufMutu = "B";
    $bobot     = 3.00;  
}elseif(($nilaiMutu >= 55) && ($nilaiMutu < 65)){
    $hurufMutu = "C";
    $bobot     = 2.00;
}elseif(($nilaiMutu >= 30) && ($nilaiMutu < 55)){
    $hurufMutu = "D";
    $bobot     = 1.00;
}elseif(($nilaiMutu > 0) && ($nilaiMutu < 30)){
    $hurufMutu = "E";
    $bobot     = 0.00;
}else{
    $hurufMutu ="T";
    $bobot     = 0.00;
}

echo "Nama        : " .$nama."\n";
echo "Nilai Mutu  : " .$nilaiMutu."\n";
echo "Huruf Mutu  : " .$hurufMutu."\n";
echo "Bobot Nilai : " .floatval($bobot);

?>