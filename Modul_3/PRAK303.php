<!DOCTYPE html>
<html>
<head>
    <title>PRAK303</title>
</head>
<body>
    <?php
    $bawah = "";
    $atas = "";
    if (isset($_POST['submit'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
    }
    ?>

    <form method="post">
        Batas Bawah : <input type="number" name="bawah" value="<?= $bawah; ?>"> 
        <br>
        Batas Atas : <input type="number" name="atas" value="<?= $atas; ?>"> 
        <br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $i = $bawah;
        $bintang = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
        
        do {
            if (($i + 7) % 5 == 0) {
                echo "<img src='$bintang' style='width: 20px; height: 20px; margin-right: 5px;'>";
            } else {
                echo "$i ";
            }
            $i++;
        } while ($i <= $atas);
    }
    ?>
</body>
</html>