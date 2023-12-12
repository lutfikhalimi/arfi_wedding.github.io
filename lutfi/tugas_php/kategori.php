<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan BMI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        p {
            text-align: center;
            padding-top: 20px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
<h2>Kalkulator BMI</h2>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="tinggi">Tinggi (cm):</label>
        <input type="number" name="tinggi" required>

        <label for="berat">Berat (kg):</label>
        <input type="number" name="berat" required>

        <button type="submit">Hitung BMI</button>
    </form>

    
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Mendapatkan nilai dari form atau input pengguna
        $nama = $_POST['nama'];
        $tinggi = $_POST['tinggi'];
        $berat = $_POST['berat'];

        // Menghitung BMI
        $tinggi_m = $tinggi / 100;
        $bmi = $berat / ($tinggi_m * $tinggi_m);

        // Menentukan kategori BMI
        if ($bmi < 18.5) {
            $kategori = 'Kurus';
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            $kategori = 'Normal';
        } elseif ($bmi >= 25 && $bmi < 30) {
            $kategori = 'Gemuk';
        } else {
            $kategori = 'Obesitas';
        }

        // Menampilkan hasil
        echo "<p>Hallo $nama, nilai BMI Anda adalah $bmi, Anda termasuk dalam kategori $kategori.</p>";
    } ?>
</body>
</html>
