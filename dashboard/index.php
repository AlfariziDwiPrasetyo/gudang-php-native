<?php
    include "../lib/auth.php";
    include "../lib/functions.php";
    include "../controllers/Barang.php";
    include "../controllers/Pemasok.php";
    include "../controllers/Transaksi.php";
    $barang         = new BarangController();
    $pemasok        = new PemasokController();
    $transaksi      = new TransaksiController();
    $totalBarang    = $barang->getTotalBarang();
    $totalTransaksi = $transaksi->getTotalTransaksi();
    $totalPemasok   = $pemasok->getTotalPemasok();
    $theme          = setTheme();
    getHeader($theme);
?>

<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-3">
    <div class="col-sm">
        <div class="card radius-10 text-white bg-danger">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1 text-white">Total Barang</p>
                        <h4 class="mb-0 text-white"><?php echo number_format($totalBarang); ?></4>
                    </div>
                    <div class="ms-auto text-white fs-2">
                        <ion-icon role="img" class="md hydrated" name="grid"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-sm">
        <div class="card radius-10 text-white bg-warning">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1 text-white">Total Pemasok</p>
                        <h4 class="mb-0 text-white"><?php echo number_format($totalPemasok); ?></4>
                    </div>
                    <div class="ms-auto text-white fs-2">
                        <ion-icon role="img" class="md hydrated" name="people-circle"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-sm">
        <div class="card radius-10 text-white bg-dark">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1 text-white">Total Transaksi</p>
                        <h4 class="mb-0 text-white"><?php echo number_format($totalTransaksi); ?></4>
                    </div>
                    <div class="ms-auto text-white fs-2">
                        <ion-icon role="img" class="md hydrated" name="card"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<?php
    getFooter($theme, '');
?>
