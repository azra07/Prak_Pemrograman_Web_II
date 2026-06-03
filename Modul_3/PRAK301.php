<!DOCTYPE html>
<html>
<head>
    <title>PRAK301</title>
</head>
<body>
    <?php
    $i = 1;
    $jumlah = ""; 
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['jumlah'];
    }
    ?>
    
    <form method="post">
        Jumlah Peserta : <input type="number" name="jumlah" value="<?= $jumlah ?>"> 
        <br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php if (isset($_POST['submit']))
        while ($i <= $_POST['jumlah']) {
            if ($i % 2 == 1) { 
                echo "<h2 style=\"color: red\">Peserta ke-" . $i . "</h2>";
            } else {
                echo "<h2 style=\"color: green\">Peserta ke-" . $i . "</h2>";
            }
            $i++;
        }
    ?>
</body>
</html>