<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Siswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
            margin: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #00ffff;
        }

        tr:nth-child(even) {
            background-color: #abc4ff; /* Warna latar belakang untuk baris genap */
        }
        h2 {
            text-align: left;
            margin-left: 30px;
        }

    </style>
</head>
<body>
    <h2>Tabel Siswa</h2>
    
    <?php
    // Membuat tabel dengan nomor 1-10, nama 1-10, dan kelas 10-1
    echo '<table>';
    echo '<tr><th>No</th><th>Nama</th><th>Kelas</th></tr>';

    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>';
        echo '<td>' . $i . '</td>';
        echo '<td>Nama ' . $i . '</td>';
        echo '<td>Kelas ' . (11 - $i) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    ?>
</body>
</html>
