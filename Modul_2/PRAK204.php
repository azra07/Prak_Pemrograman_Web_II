<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK204</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="nilai">Nilai :</label>
                    <input type="text" name="nilai" id="nilai" value="<?= isset($_POST['nilai']) ? htmlspecialchars($_POST['nilai']) : ''; ?>">
                </td>
            </tr>
            <tr>
                <td><button type="submit" name="konversi">Konversi</button></td>
            </tr>
        </table>

        <?php
        if (isset($_POST["konversi"])) {
            $nilai = $_POST["nilai"];
            $hasil = "";

            if ($nilai == 0) $hasil = "Nol";
            else if ($nilai > 0 && $nilai < 10) $hasil = "Satuan";
            else if ($nilai == 10) $hasil = "Puluhan";
            else if ($nilai > 10 && $nilai < 20) $hasil = "Belasan";
            else if ($nilai >= 20 && $nilai < 100) $hasil = "Puluhan";
            else if ($nilai >= 100 && $nilai < 1000) $hasil = "Ratusan";
            else $hasil = "Anda Menginput Melebihi Limit Bilangan";

            echo "<table><tr><td><h1>Hasil: $hasil</h1></td></tr></table>";
        }
        ?>
    </form>
</body>
</html>