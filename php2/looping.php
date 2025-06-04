<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Soal Looping</h1>
    <?php
    echo "<h2> Contoh Soal 1 </h2>";

    echo "<h3> Looping 1 </h3>";

    $i = 1;

    do {
        echo "$i - Angka Ganjil <br>";
        $i+=2;
    } while ($i <= 19);

    echo "<h3> Looping 2 </h3>";

    $a = 19;
    while($a >= 1){
        echo "$a - Angka Ganjil <br>";
        $a-=2;
    }

    echo "<h3> Looping 2 </h3>";
    echo "<h2> Contoh Looping 2 </h2>";


    $nilai = [59, 70, 78,67 ,20];

    echo "Nilai : " ;
    print_r($nilai);
    echo "<br>";

    foreach($nilai as $n){
        $item[]=$n % 4;
    }
    echo "Sisa bagi 4 Nilai : " ;
    print_r($item);
    echo "<br>";


    echo "<h2> Contoh Looping 3 </h2>";

    $biodata = [
        ["132121", "Rezky", "Teknik Infomatika"],
        ["132223", "Budi", "Sistem Informatika"],
        ["132334", "Ayu", "Managemen informatika"],
        ["132212", "Dewi", "Akuntasi"],
    ];

    foreach($biodata as $arrayIndex){
        $arrayAssosiatif = [
            "Stb" => $arrayIndex[0],
            "Nama" => $arrayIndex[1],
            "Jurusan" => $arrayIndex[2],
        ];
        print_r($arrayAssosiatif);
        echo "<br>";
    }

    echo "<h2> Contoh Looping 4 </h2>";
    
    for($j=1; $j<=5; $j++){
        for($k=$j; $k<=5; $k++){
            echo " * ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>