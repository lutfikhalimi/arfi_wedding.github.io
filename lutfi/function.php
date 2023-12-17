<?php

// Fungsi-fungsi untuk bangun datar

function luasPersegi($sisi)
{
    return $sisi * $sisi;
}

function kelilingPersegi($sisi)
{
    return 4 * $sisi;
}

function luasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

function kelilingSegitiga($sisi1, $sisi2, $sisi3)
{
    return $sisi1 + $sisi2 + $sisi3;
}

function luasLingkaran($jariJari)
{
    return M_PI * $jariJari * $jariJari;
}

// Fungsi-fungsi untuk bangun ruang

function volumeKubus($sisi)
{
    return $sisi * $sisi * $sisi;
}

function luasPermukaanKubus($sisi)
{
    return 6 * $sisi * $sisi;
}

function volumeBalok($panjang, $lebar, $tinggi)
{
    return $panjang * $lebar * $tinggi;
}

function luasPermukaanBalok($panjang, $lebar, $tinggi)
{
    return 2 * ($panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi);
}

function volumeTabung($jariJari, $tinggi)
{
    return M_PI * $jariJari * $jariJari * $tinggi;
}

// Contoh penggunaan
$sisiPersegi = 5;
$alasSegitiga = 6;
$tinggiSegitiga = 8;
$jariJariLingkaran = 4;
$sisiKubus = 3;
$panjangBalok = 4;
$lebarBalok = 5;
$tinggiBalok = 6;
$jariJariTabung = 2;
$tinggiTabung = 10;

echo '-------Menghitung Rumus Bangun Datar dan Bangun Ruang------- <hr>';
echo 'Luas Persegi: ' . luasPersegi($sisiPersegi) . '<hr>';
echo 'Keliling Persegi: ' . kelilingPersegi($sisiPersegi) . '<hr>';
echo 'Luas Segitiga: ' . luasSegitiga($alasSegitiga, $tinggiSegitiga) . '<hr>';
echo 'Keliling Segitiga: ' . kelilingSegitiga(3, 4, 5) . '<hr>';
echo 'Luas Lingkaran: ' . luasLingkaran($jariJariLingkaran) . '<hr>';
echo 'Volume Kubus: ' . volumeKubus($sisiKubus) . '<hr>';
echo 'Luas Permukaan Kubus: ' . luasPermukaanKubus($sisiKubus) . '<hr>';
echo 'Volume Balok: ' .
    volumeBalok($panjangBalok, $lebarBalok, $tinggiBalok) .
    '<hr>';
echo 'Luas Permukaan Balok: ' .
    luasPermukaanBalok($panjangBalok, $lebarBalok, $tinggiBalok) .
    '<hr>';
echo 'Volume Tabung: ' . volumeTabung($jariJariTabung, $tinggiTabung) . '<hr>';

?>
