<?php
include 'connect.php'; // Include file koneksi database

// Fungsi untuk menghitung harga paket
function hitungHargaPaket($services)
{
    $harga = 0;
    if (isset($services['accommodation']) && $services['accommodation'] === 'true') {
        $harga += 1000000; // Penginapan
    }
    if (isset($services['transportation']) && $services['transportation'] === 'true') {
        $harga += 1200000; // Transportasi
    }
    if (isset($services['food']) && $services['food'] === 'true') {
        $harga += 500000; // Servis/Makan
    }
    return $harga;
}

// Memproses data form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $days = $_POST['days'];
    $participants = $_POST['participants'];
    $services = array(
        'accommodation' => isset($_POST['accommodation']) ? 'true' : 'false',
        'transportation' => isset($_POST['transportation']) ? 'true' : 'false',
        'food' => isset($_POST['food']) ? 'true' : 'false'
    );

    // Menghitung harga paket
    $harga_paket = hitungHargaPaket($services);

    // Menghitung total tagihan
    $total_tagihan = $harga_paket * $days * $participants;

    // Menyimpan data ke database
    try {
        $stmt = $conn->prepare("INSERT INTO daftar_pesanan 
            (name, phone, date, jumlah_peserta, jumlah_hari, akomodasi, transportasi, service, harga_paket, total_tagihan)
            VALUES (:name, :phone, :date, :jumlah_peserta, :jumlah_hari, :akomodasi, :transportasi, :service, :harga_paket, :total_tagihan)");

        // Bind parameter using bindValue()
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':phone', $phone);
        $stmt->bindValue(':date', $date);
        $stmt->bindValue(':jumlah_peserta', $participants, PDO::PARAM_INT);
        $stmt->bindValue(':jumlah_hari', $days, PDO::PARAM_INT);
        $stmt->bindValue(':akomodasi', $services['accommodation'] === 'true' ? 1 : 0, PDO::PARAM_INT);
        $stmt->bindValue(':transportasi', $services['transportation'] === 'true' ? 1 : 0, PDO::PARAM_INT);
        $stmt->bindValue(':service', $services['food'] === 'true' ? 1 : 0, PDO::PARAM_INT);
        $stmt->bindValue(':harga_paket', $harga_paket, PDO::PARAM_INT);
        $stmt->bindValue(':total_tagihan', $total_tagihan, PDO::PARAM_INT);

        // Execute query
        $stmt->execute();

        echo "Pesanan berhasil!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
