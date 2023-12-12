<?php

$p = 2;
$l = 2;
$a = 2;
$t = 2;
$st = 0.5;
$pi = 3.14;
$r = 4;
$s = 4;

echo 'p = Panjang   = 2';
echo '<br>';
echo 'l = Lebar     = 2';
echo '<br>';
echo 'a = Alas      = 2';
echo '<br>';
echo 't = Tinggi    = 2';
echo '<br>';
echo 'st = Setengah = 2';
echo '<br>';
echo 'pi = Phi      = 2';
echo '<br>';
echo 'r = Jari2     = 2';
echo '<br>';
echo 's = Sisi      = 2';
echo '<hr>';

echo 'Rumus luas bangun datar';
echo '<hr>';

$lpp = $p * $l;
echo 'Rumus Luas Persegi Panjang';
echo '<br>';
echo "$p * $l = $lpp";
echo '<hr>';

$lp = $p * $l;
echo 'Rumus Luas Persegi';
echo '<br>';
echo "$p * $l = $lpp";
echo '<hr>';

$lst = $st * $a * $t;
echo 'Rumus Luas Segitiga';
echo '<br>';
echo "$1/2 * $a * $t = $lst";
echo '<hr>';

$ll = $pi * $r * $r;
echo 'Rumus Luas Lingkaran';
echo '<br>';
echo "$pi x $r x $r = $ll";
echo '<hr>';

$ljg = $a * $t;
echo 'Rumus Luas Jajargenjang';
echo '<br>';
echo "$a x $t = $ljg";
echo '<hr>';

echo 'Rumus luas bangun ruang';
echo '<hr>';

$lk = $s * $s * $s;
echo 'Rumus Luas Kubus';
echo '<br>';
echo " s x s x s = $lk";
echo '<hr>';

$lb = $p * $l + $t;
echo 'Rumus Luas Balok';
echo '<br>';
echo "p x l x t = $lb";
echo '<hr>';

$ltb = $pi * $r * $r * $t;
echo 'Rumus Volume Tabung';
echo '<br>';
echo "pi x r x r = $ltb";
echo '<hr>';

?>
