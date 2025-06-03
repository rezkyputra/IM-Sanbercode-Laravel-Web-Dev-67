<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Soal String</h1>
    <?php
    echo "<h3> Contoh Soal 1 </h3>";
    $kalimat1 = "Selamat Datang di Sanbercode";

    echo "Kalimat 1 : " . $kalimat1 . " <br>";
    echo "Panjang Kalimat 1 : " . strlen($kalimat1) . "<br>";
    echo "Jumlah Kata Kalimat 1 : " . str_word_count($kalimat1) . "<br>";

    echo "<h3> Contoh Soal 2 </h3>";
    $kalimat2 = "hai hello world";

    echo "Kata 1 Kalimat 2 : " . substr($kalimat2, 0, 3) . "<br>";
    echo "Kata 2 Kalimat 2 : " . substr($kalimat2, 4, 5) . "<br>";
    echo "Kata 3 Kalimat 2 : " . substr($kalimat2, 10, 5) . "<br>";

    echo "<h3> Contoh Soal 3 </h3>";
    $kalimat3 = "Etiam iaculis ultrices odio vitae dictum. Curabitur et nibh quam. Integer lacinia lacus vitae nibh suscipit, vel ornare nisi porta.";

    echo "Kalimat 3 : " . $kalimat3 . "<br>";
    echo "Kalimat 3 ganti : " . str_replace("dictum", "World", $kalimat3) . "<br>";
    ?>
</body>
</html>