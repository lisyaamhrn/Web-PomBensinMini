<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $transactionDate = $_POST['transactionDate'];
    $customerName = $_POST['customerName'];
    $fuelType = $_POST['fuelType'];
    $fuelAmount = $_POST['fuelAmount'];
    $pricePerLiter = $_POST['pricePerLiter'];

    $totalHarga = $fuelAmount * $pricePerLiter;

    $strukContent = "==================================\n";
    $strukContent .= "       Toni Mini Pom Bensin       \n";
    $strukContent .= "==================================\n\n";
    $strukContent .= "Tanggal           : " . $transactionDate . "\n";
    $strukContent .= "Nama Pelanggan    : " . $customerName . "\n";
    $strukContent .= "Jenis Bahan Bakar : " . $fuelType . "\n";
    $strukContent .= "Jumlah Liter      : " . $fuelAmount . "\n";
    $strukContent .= "Harga per Liter   : " . $pricePerLiter . "\n";
    $strukContent .= "Total Harga       : " . $totalHarga . "\n\n";
    $strukContent .= "----------------------------------\n\n";
    $strukContent .= "Terima kasih atas kunjungan Anda!\n";
    $strukContent .= "Selamat berkendara.\n\n";
    $strukContent .= "==================================\n";

    $strukFile = fopen('data.txt', 'w');
    fwrite($strukFile, $strukContent);
    fclose($strukFile);

    // Redirect ke halaman hasil struk
    header("Location: hasilStruk.php");
    exit;
} else {
    // Redirect ke halaman utama jika form tidak dikirim
    header("Location: index.html");
    exit;
}
?>
