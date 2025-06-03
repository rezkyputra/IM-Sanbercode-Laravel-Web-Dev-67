<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Soal Array</h1>
    <?php
    echo "<h3>Soal 1</h3>";

    $trainer = ["Rezky", "Budi", "Ayu", "Dwi", "Johan"];

    print_r($trainer);

    echo "<h3>Soal 2</h3>";

    echo "Total Trainer : " . count($trainer);
    echo "<ul>";
    echo "<li>" . $trainer[0] . "</li>";
    echo "<li>" . $trainer[1] . "</li>";
    echo "<li>" . $trainer[2] . "</li>";
    echo "<li>" . $trainer[3] . "</li>";
    echo "<li>" . $trainer[4] . "</li>";
    echo "</ul>";

    echo "<h3>Soal 3</h3>";

    $biodata = [
        ["id" => "001", "name" => "Rezky", "kota" => "Makassar"],
        ["id" => "002", "name" => "Budi", "kota" => "Jakarta"],
        ["id" => "003", "name" => "Ayu", "kota" => "Surabaya"],
        ["id" => "004", "name" => "Dwi", "kota" => "Bali"],
    ];

    echo "<pre>";
    print_r($biodata);
    echo "</pre>";

    ?>
</body>
</html>