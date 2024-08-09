<?php include 'navbar.php';

$paket = isset($_GET['paket']) ? $_GET['paket'] : 'Tidak ada paket yang dipilih';
$jumlah_orang = isset($_GET['orang']) ? $_GET['orang'] : 1;
$jumlah_hari = isset($_GET['hari']) ? $_GET['hari'] : 1;
$penginapan = isset($_GET['penginapan']) && $_GET['penginapan'] === 'true' ? true : false;
$transportasi = isset($_GET['transportasi']) && $_GET['transportasi'] === 'true' ? true : false;
$makan = isset($_GET['makan']) && $_GET['makan'] === 'true' ? true : false;

?>

<section id="pemesanan" class="m-5">
    <h2 class="mb-4">Form Pemesanan Paket Wisata</h2>
    <div id="alert-container"></div> <!-- Alert container -->

    <form id="orderForm" method="POST">
        <div class="form-group">
            <label for="name">Nama Pemesan:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="phone">No HP/Telp:</label>
            <input type="number" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="date">Tanggal:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="days">Jumlah Hari:</label>
            <input type="number" class="form-control" id="days" name="days" min="1" value="<?php echo $jumlah_hari; ?>" required>
        </div>

        <div class="form-group">
            <span>Pelayanan Paket Perjalanan:</span><br>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="accommodation" name="accommodation" value="true" <?php if ($penginapan) echo 'checked'; ?>>
                <label class="form-check-label" for="accommodation">Penginapan (Rp 1.000.000)</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="transportation" name="transportation" value="true" <?php if ($transportasi) echo 'checked'; ?>>
                <label class="form-check-label" for="transportation">Transportasi (Rp 1.200.000)</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="food" name="food" value="true" <?php if ($makan) echo 'checked'; ?>>
                <label class="form-check-label" for="food">Servis/Makan (Rp 500.000)</label>
            </div>
        </div>

        <div class="form-group">
            <label for="participants">Jumlah Peserta:</label>
            <input type="number" class="form-control" id="participants" name="participants" min="1" value="<?php echo $jumlah_orang; ?>" required>
        </div>

        <div class="form-group">
            <label for="total">Total Harga:</label>
            <input type="text" class="form-control" id="total" name="total" readonly>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Pesan</button>
    </form>
</section>

<?php
include 'footer.php';
?>