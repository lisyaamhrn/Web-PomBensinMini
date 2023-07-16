<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $transactionDate = $_POST['transactionDate'];
    $customerName = $_POST['customerName'];
    $fuelType = $_POST['fuelType'];
    $fuelAmount = $_POST['fuelAmount'];
    $paymentAmount = $_POST['paymentAmount'];

    // Menentukan harga per liter berdasarkan jenis bahan bakar
    $pricePerLiter = 0;
    switch ($fuelType) {
        case 'Pertalite':
            $pricePerLiter = 8000;
            break;
        case 'Pertamax':
            $pricePerLiter = 10000;
            break;
        case 'Pertamax Turbo':
            $pricePerLiter = 12000;
            break;
        case 'Dexlite':
            $pricePerLiter = 9000;
            break;
        // Tambahkan kasus lainnya sesuai dengan jenis bahan bakar yang tersedia
        default:
            // Default harga per liter jika tidak ada jenis bahan bakar yang cocok
            $pricePerLiter = 0;
            break;
    }

    $totalHarga = $fuelAmount * $pricePerLiter;
    $kembalian = $paymentAmount - $totalHarga;

    $strukContent = "==================================\n";
    $strukContent .= "       Toni Mini Pom Bensin       \n";
    $strukContent .= "==================================\n\n";
    $strukContent .= "Tanggal           : " . $transactionDate . "\n";
    $strukContent .= "Nama Pelanggan    : " . $customerName . "\n";
    $strukContent .= "Jenis Bahan Bakar : " . $fuelType . "\n";
    $strukContent .= "Jumlah Liter      : " . $fuelAmount . "\n";
    $strukContent .= "Harga per Liter   : " . $pricePerLiter . "\n\n";
    $strukContent .= "Total Harga       : " . $totalHarga . "\n";
    $strukContent .= "----------------------------------\n\n";
    $strukContent .= "Pembayaran        : " . $paymentAmount . "\n";
    $strukContent .= "Kembalian         : " . $kembalian . "\n\n";
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