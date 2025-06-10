<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Pendaftaran</h1>
    <a href="/">Kembali</a>
    <form action="/welcome" method="POST">
        @csrf
        <label >Full Name</label> <br>
        <input type="text" name="fname" > <br> <br>
        
        <label >Biodata</label> <br>
        <textarea name="bio"></textarea> <br> <br>

        <input type="submit" value="Kirim"/>
    </form>
</body>
</html>