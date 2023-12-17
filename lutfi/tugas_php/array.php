<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
    <style>

        body {
            margin: 0;
            padding: 0; 
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin: 50px 200px 0;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        nav {
            background-color: #ffff00;
            color: #fff;
            padding: 20px;
            text-align: left;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #000000;
            font-weight: bold;
            font-size: 16px;
            padding-left: 20px;
        }

        tr:nth-child(even) {
            background-color: #abc4ff; /* Warna latar belakang untuk baris genap */
        }
    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
        </ul>
    </nav>
    

    <?php
    // Data daftar nilai dalam bentuk array
    $daftarNilai = [
        [
            'No',
            'Nama',
            'Tanggal Lahir',
            'Umur',
            'Alamat',
            'Kelas',
            'Nilai',
            'Hasil',
        ],
        [1, 'Pelita', '1997-12-27', '', 'Bandung', 'Laravel', 90, ''],
        [2, 'Najmina', '1998-10-07', '', 'Jakarta', 'Vue JS', 55, ''],
        [3, 'Anita', '1999-08-20', '', 'Semarang', 'Design', 80, ''],
        [4, 'Bayu', '1990-01-01', '', 'Bandung', 'Digital Marketing', 65, ''],
        [5, 'Nasa', '1995-04-10', '', 'Bandung', 'UI/UX Designer', 70, ''],
        [6, 'Rahma', '1993-09-15', '', 'Yogyakarta', 'Node JS', 85, ''],
        // Tambahkan data nilai lainnya sesuai kebutuhan
    ];

    // Hitung umur dan format tanggal lahir
    foreach ($daftarNilai as $key => $nilai) {
        if ($key > 0) {
            // Hitung umur
            $tanggalLahir = new DateTime($nilai[2]);
            $today = new DateTime();
            $umur = $today->diff($tanggalLahir)->format('%y tahun');
            $daftarNilai[$key][3] = $umur;

            // Format tanggal lahir
            $formattedTanggalLahir = $tanggalLahir->format('d F Y');
            $daftarNilai[$key][2] = $formattedTanggalLahir;

            // Tentukan hasil berdasarkan grade
            $grade = getGrade($nilai[6]);
            $daftarNilai[$key][7] = $grade;
        }
    }

    // Menampilkan data dalam tabel
    echo '<table>';
    foreach ($daftarNilai as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo '<td>' . $cell . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    // Fungsi untuk mendapatkan grade berdasarkan nilai
    function getGrade($nilai)
    {
        if ($nilai >= 90) {
            return 'A';
        } elseif ($nilai >= 80) {
            return 'B';
        } elseif ($nilai >= 70) {
            return 'C';
        } elseif ($nilai >= 55) {
            return 'D';
        } else {
            return 'E';
        }
    }
    ?>
</body>
</html>
