<!DOCTYPE html>
<html>
<head>
    <title>PRAK302</title>
</head>
<body>
    <?php
    $tinggi = "";
    $alamat = "";
    $max = 0;
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['jumlah'];
        $alamat = $_POST['alamat'];
        $max = $tinggi;
    }
    ?>

    <form method="post">
        Tinggi : <input type="text" name="jumlah" value="<?= $tinggi; ?>"> 
        <br>
        Alamat Gambar : <input type="text" name="alamat" value="<?= $alamat; ?>"> 
        <br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>

    <?php if (isset($_POST['submit'])){
        $i = 1;
        while ($i <= $max) {
            $j = 1;
            $k = $max;

            while ($j < $i) {
                echo "<img style='width: 25px; opacity: 0;' src='" . $alamat . "' alt=''>";
                $j++;
            }
            
            while ($k >= $i) {
                echo "<img style='width: 25px;' src='" . $alamat . "' alt=''>";
                $k--;
            }
            echo "<br>";
            $i++; 
        }
    }
    ?>
</body>
</html>