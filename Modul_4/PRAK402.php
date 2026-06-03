<!DOCTYPE html>
<html>
    <head>
        <title>PRAK402</title>
        <style>
            tr {
                border: black;
            }

            table {
                border-collapse: collapse;
            }

            th {
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <?php
        $data = [
            [
                "nama" => "Andi",
                "NIM" => 2101001,
                "uts" => 87,
                "uas" => 65,
            ],
            [
                "nama" => "Budi",
                "NIM" => 2101002,
                "uts" => 76,
                "uas" => 79,
            ],
            [
                "nama" => "Tono",
                "NIM" => 2101003,
                "uts" => 50,
                "uas" => 41,
            ],
            [
                "nama" => "Jessica",
                "NIM" => 2101004,
                "uts" => 60,
                "uas" => 75,
            ],
        ];

        foreach ($data as $key => $value) {
            $a = $value['uts'];
            $b = $value['uas'];
            $data[$key]['rata-rata'] = ($a * 0.4) + ($b * 0.6);

            if ($data[$key]['rata-rata'] >= 80) {
                $data[$key]['huruf'] = 'A';
            } elseif ($data[$key]['rata-rata'] >= 70 && $data[$key]['rata-rata'] <= 79) {
                $data[$key]['huruf'] = 'B';
            } elseif ($data[$key]['rata-rata'] >= 60 && $data[$key]['rata-rata'] <= 69) {
                $data[$key]['huruf'] = 'C';
            } elseif ($data[$key]['rata-rata'] >= 50 && $data[$key]['rata-rata'] <= 59) {
                $data[$key]['huruf'] = 'D';
            } else {
                $data[$key]['huruf'] = 'E';
            }
        }
        ?>

        <table border="1" cellspacing="0" cellpadding="5">
            <tr bgcolor="#CCCDCC">
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>

            <?php foreach ($data as $a) : ?>
                <tr>
                <td><?= $a["nama"] ?></td>
                <td><?= $a["NIM"] ?></td>
                <td><?= $a["uts"] ?></td>
                <td><?= $a["uas"] ?></td>
                <td><?= $a["rata-rata"] ?></td>
                <td><?= $a["huruf"] ?></td>
                </tr>
            <?php endforeach; ?>
            
        </table>
    </body>
</html>