<?php

$servername = 'localhost';
$database = 'perpus';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die('connection failed: ' . mysqli_connect_error());
}

$sql = 'SELECT nama, telp, alamat, tgl_pinjam, tgl_kembali FROM anggota
JOIN peminjaman ON anggota.`id_anggota`=peminjaman.`id_anggota`';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'anggota||' .
            $row['nama'] .
            '||' .
            $row['telp'] .
            '||' .
            $row['alamat'] .
            '||' .
            $row['tgl_pinjam'] .
            '||' .
            $row['tgl_kembali'] .
            '<br>';
    }
} else {
    echo '0 results';
}
$conn->close();

?>
