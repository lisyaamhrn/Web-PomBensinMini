<!DOCTYPE html>
<html>
<head>
    <title>Struk Pom Bensin Mini</title>
</head>
<body>
    <h1>Struk Pom Bensin Mini</h1>

    <?php
    // Mengecek apakah file data.txt ada
    if (file_exists('data.txt')) {
        // Membaca konten struk dari file txt
        $strukContent = file_get_contents('data.txt');

        // Menampilkan konten struk dalam elemen <pre> untuk mempertahankan format teks
        echo '<pre>' . $strukContent . '</pre>';

        // Menampilkan tautan download struk
        echo '<p><a href="data.txt" download>Download Struk</a></p>';
    } else {
        echo '<p>Maaf, struk pembelian tidak tersedia saat ini.</p>';
    }
    ?>

</body>
</html>
