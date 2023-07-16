// Mengambil referensi ke elemen form transaksi
const transactionForm = document.getElementById('transactionForm');

// Menangani submit form
transactionForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form dikirim secara langsung

    // Mengambil nilai input dari form
    const transactionDate = document.getElementById('transactionDate').value;
    const customerName = document.getElementById('customerName').value;
    const fuelType = document.getElementById('fuelType').value;
    const fuelAmount = document.getElementById('fuelAmount').value;
    const pricePerLiter = document.getElementById('pricePerLiter').value;

    // Menampilkan data transaksi
    console.log('Tanggal: ' + transactionDate);
    console.log('Nama Pelanggan: ' + customerName);
    console.log('Jenis Bahan Bakar: ' + fuelType);
    console.log('Jumlah Liter: ' + fuelAmount);
    console.log('Harga per Liter: ' + pricePerLiter);

    // Di sini Anda dapat melanjutkan dengan pemrosesan transaksi yang sesuai, seperti menghitung total harga dll.
    // Anda juga dapat mengirim data transaksi ke server untuk pengolahan lebih lanjut.
});
