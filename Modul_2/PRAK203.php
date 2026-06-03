<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK203</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nilai : <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"></td>
            </tr>
            <tr><td>Dari :</td></tr>
            <tr><td><input type="radio" name="suhu" value="Celcius" <?= (isset($_POST['suhu']) && $_POST['suhu'] == 'Celcius') ? 'checked' : '' ?>> Celcius</td></tr>
            <tr><td><input type="radio" name="suhu" value="Fahrenheit" <?= (isset($_POST['suhu']) && $_POST['suhu'] == 'Fahrenheit') ? 'checked' : '' ?>> Fahrenheit</td></tr>
            <tr><td><input type="radio" name="suhu" value="Rheamur" <?= (isset($_POST['suhu']) && $_POST['suhu'] == 'Rheamur') ? 'checked' : '' ?>> Rheamur</td></tr>
            <tr><td><input type="radio" name="suhu" value="Kelvin" <?= (isset($_POST['suhu']) && $_POST['suhu'] == 'Kelvin') ? 'checked' : '' ?>> Kelvin</td></tr>
        </table>

        <table>
            <tr><td>Ke :</td></tr>
            <tr><td><input type="radio" name="suhuKonversi" value="Celcius" <?= (isset($_POST['suhuKonversi']) && $_POST['suhuKonversi'] == 'Celcius') ? 'checked' : '' ?>> Celcius</td></tr>
            <tr><td><input type="radio" name="suhuKonversi" value="Fahrenheit" <?= (isset($_POST['suhuKonversi']) && $_POST['suhuKonversi'] == 'Fahrenheit') ? 'checked' : '' ?>> Fahrenheit</td></tr>
            <tr><td><input type="radio" name="suhuKonversi" value="Rheamur" <?= (isset($_POST['suhuKonversi']) && $_POST['suhuKonversi'] == 'Rheamur') ? 'checked' : '' ?>> Rheamur</td></tr>
            <tr><td><input type="radio" name="suhuKonversi" value="Kelvin" <?= (isset($_POST['suhuKonversi']) && $_POST['suhuKonversi'] == 'Kelvin') ? 'checked' : '' ?>> Kelvin</td></tr>
            <tr><td><button type="submit" name="konversi">Konversi</button></td></tr>
        </table>

        <?php
        if (isset($_POST["konversi"])) {
            $nilaiFloat = $_POST["nilai"];
            $hasil = 0;
            $derajatSuhu = "";

            if ($_POST["suhu"] == "Celcius") {
                if ($_POST["suhuKonversi"] == "Celcius") { $hasil = $nilaiFloat; $derajatSuhu = "C"; }
                else if ($_POST["suhuKonversi"] == "Fahrenheit") { $hasil = ($nilaiFloat * (9 / 5)) + 32; $derajatSuhu = "F"; }
                else if ($_POST["suhuKonversi"] == "Rheamur") { $hasil = ($nilaiFloat * (4 / 5)); $derajatSuhu = "R"; }
                else if ($_POST["suhuKonversi"] == "Kelvin") { $hasil = ($nilaiFloat + 273.15); $derajatSuhu = "K"; }
            } else if ($_POST["suhu"] == "Fahrenheit") {
                if ($_POST["suhuKonversi"] == "Celcius") { $hasil = ($nilaiFloat - 32) * (5 / 9); $derajatSuhu = "C"; }
                else if ($_POST["suhuKonversi"] == "Fahrenheit") { $hasil = $nilaiFloat; $derajatSuhu = "F"; }
                else if ($_POST["suhuKonversi"] == "Rheamur") { $hasil = ((4 / 9) * ($nilaiFloat - 32)); $derajatSuhu = "R"; }
                else if ($_POST["suhuKonversi"] == "Kelvin") { $hasil = (($nilaiFloat + 459.67) * (5 / 9)); $derajatSuhu = "K"; }
            } else if ($_POST["suhu"] == "Rheamur") {
                if ($_POST["suhuKonversi"] == "Celcius") { $hasil = ($nilaiFloat / 0.8); $derajatSuhu = "C"; }
                else if ($_POST["suhuKonversi"] == "Fahrenheit") { $hasil = (($nilaiFloat * 2.25) + 32); $derajatSuhu = "F"; }
                else if ($_POST["suhuKonversi"] == "Rheamur") { $hasil = $nilaiFloat; $derajatSuhu = "R"; }
                else if ($_POST["suhuKonversi"] == "Kelvin") { $hasil = (($nilaiFloat / 0.8) + 273.15); $derajatSuhu = "K"; }
            } else if ($_POST["suhu"] == "Kelvin") {
                if ($_POST["suhuKonversi"] == "Celcius") { $hasil = ($nilaiFloat - 273.15); $derajatSuhu = "C"; }
                else if ($_POST["suhuKonversi"] == "Fahrenheit") { $hasil = ($nilaiFloat * (9 / 5) - 459.67); $derajatSuhu = "F"; }
                else if ($_POST["suhuKonversi"] == "Rheamur") { $hasil = ((4 / 5) * ($nilaiFloat - 273)); $derajatSuhu = "R"; }
                else if ($_POST["suhuKonversi"] == "Kelvin") { $hasil = $nilaiFloat; $derajatSuhu = "K"; }
            }
            
            echo "<table><tr><td><h1>Hasil Konversi : " . number_format($hasil, 1) . "°$derajatSuhu</h1></td></tr></table>";
        }
        ?>
    </form>
</body>
</html>