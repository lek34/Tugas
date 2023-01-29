<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktorial</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
        echo "<table> 
        <tr><th class='judul'><b>Tabel Faktorial</b></th></tr>";
        echo "</table>";

        echo "<br>";
        
        echo "<table border=1>
        <tr class='merah'>
        <th>Faktorial</th>
        <th>Hasil</th>
        </tr>";

        $faktorial = 1;
        for ($i=1; $i <= 10; $i++) { 
            $warna = "";
            $faktorial = $faktorial * $i;
            if ($i % 2 != 0) {
                $warna = "kuning";
            } elseif ($i % 2 == 0) {
                $warna = "biru";
            }
            echo "<tr class='$warna'>
            <td class='lbrkiri'>" . $i . "</td>
            <td class='lbrkanan'>" . $faktorial . " </td>
            </tr>";
        }
        
        echo "</table>";
    ?>
</body>
</html>