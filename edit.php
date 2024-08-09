<?php
include 'connect.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $days = $_POST['days'];
    $accommodation = isset($_POST['accommodation']) ? 1 : 0;
    $transportation = isset($_POST['transportation']) ? 1 : 0;
    $food = isset($_POST['food']) ? 1 : 0;
    $participants = $_POST['participants'];

    // Calculate total
    $total = ($accommodation * 1000000) + ($transportation * 1200000) + ($food * 500000);
    $total *= $days * $participants;

    $sql = "UPDATE daftar_pesanan SET name = ?, phone = ?, date = ?, jumlah_hari = ?, akomodasi = ?, transportasi = ?, service = ?, jumlah_peserta = ?, total_tagihan = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $phone, $date, $days, $accommodation, $transportation, $food, $participants, $total, $id]);

    header('Location: listPesanan.php');
}

// Fetch order to edit
$id = $_GET['id'];
$sql = "SELECT * FROM daftar_pesanan WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$order = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Pesanan</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section id="editOrder" class="m-5">
        <h2 class="mb-4">Edit Pesanan</h2>
        <form method="POST" action="edit.php">
            <input type="hidden" name="id" value="<?php echo $order['id']; ?>">
            <div class="form-group">
                <label for="name">Nama Pemesan:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $order['name']; ?>" required>
            </div>

            <div class="form-group">
                <label for="phone">No HP/Telp:</label>
                <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $order['phone']; ?>" required>
            </div>

            <div class="form-group">
                <label for="date">Tanggal:</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo $order['date']; ?>" required>
            </div>

            <div class="form-group">
                <label for="days">Jumlah Hari:</label>
                <input type="number" class="form-control" id="days" name="days" min="1" value="<?php echo $order['jumlah_hari']; ?>" required>
            </div>

            <div class="form-group">
                <span>Pelayanan Paket Perjalanan:</span><br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="accommodation" name="accommodation" value="true" <?php if ($order['akomodasi']) echo 'checked'; ?>>
                    <label class="form-check-label" for="accommodation">Penginapan (Rp 1.000.000)</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="transportation" name="transportation" value="true" <?php if ($order['transportasi']) echo 'checked'; ?>>
                    <label class="form-check-label" for="transportation">Transportasi (Rp 1.200.000)</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="food" name="food" value="true" <?php if ($order['service']) echo 'checked'; ?>>
                    <label class="form-check-label" for="food">Servis/Makan (Rp 500.000)</label>
                </div>
            </div>

            <div class="form-group">
                <label for="participants">Jumlah Peserta:</label>
                <input type="number" class="form-control" id="participants" name="participants" min="1" value="<?php echo $order['jumlah_peserta']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Pesanan</button>
        </form>
    </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Nusantara Trip</p>
    </footer>

</body>

</html>