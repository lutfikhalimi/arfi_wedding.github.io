<?php
// Fungsi untuk membuat segitiga
function printSegitiga($tinggi)
{
    for ($i = 0; $i <= $tinggi; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "$j ";
        }
        echo '<br>';
    }
}

// Contoh pemanggilan fungsi dengan tinggi segitiga 8
printSegitiga(8);
?>
