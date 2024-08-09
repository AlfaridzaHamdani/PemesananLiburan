<?php
include 'navbar.php';
include 'connect.php';

// Fetch orders from database
$sql = "SELECT * FROM daftar_pesanan";
$stmt = $conn->prepare($sql);
$stmt->execute();
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Initialize local number variable
$no = 1;
?>

<section id="orderList" class="m-5">
    <h2 class="mb-4">Daftar Pesanan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th> <!-- Changed from ID to No -->
                <th>Nama Pemesan</th>
                <th>No HP/Telp</th>
                <th>Tanggal</th>
                <th>Jumlah Hari</th>
                <th>Pelayanan</th>
                <th>Jumlah Peserta</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) { ?>
                <tr>
                    <td><?php echo $no++; ?></td> <!-- Increment local number variable -->
                    <td><?php echo $order['name']; ?></td>
                    <td><?php echo $order['phone']; ?></td>
                    <td><?php echo $order['date']; ?></td>
                    <td><?php echo $order['jumlah_hari']; ?></td>
                    <td>
                        <?php
                        $services = [];
                        if ($order['akomodasi']) $services[] = 'Penginapan';
                        if ($order['transportasi']) $services[] = 'Transportasi';
                        if ($order['service']) $services[] = 'Makanan';
                        echo implode(', ', $services);
                        ?>
                    </td>
                    <td><?php echo $order['jumlah_peserta']; ?></td>
                    <td>Rp <?php echo number_format($order['total_tagihan'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $order['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?php echo $order['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>
<?php include 'footer.php'; ?>