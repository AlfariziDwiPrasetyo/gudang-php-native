<?php
    include "../controllers/Transaksi.php";
    include "../lib/functions.php";
    $obj = new TransaksiController();
    $msg = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form was submitted, process the update here
        $kode_transaksi  = $_POST['kode_transaksi'];
        $kode_barang     = $_POST['kode_barang'];
        $kode_pemasok    = $_POST['kode_pemasok'];
        $jumlah          = $_POST['jumlah'];
        $jenis_transaksi = $_POST['jenis_transaksi'];
        $tanggal         = $_POST['tanggal'];
        $created_at      = $_POST['created_at'];
        $updated_at      = $_POST['updated_at'];
        // Insert the database record using your controller's method
        $dat = $obj->addtransaksi($kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $created_at, $updated_at);
        $msg = getJSON($dat);
    }
    $theme = setTheme();
    getHeader($theme);
?>

<?php
    if ($msg === true) {
        echo '<div class="alert alert-success" style="display: block" id="message_success">Insert Data Berhasil</div>';
        echo '<meta http-equiv="refresh" content="2;url=' . base_url() . 'transaksi/">';
    } elseif ($msg === false) {
        echo '<div class="alert alert-danger" style="display: block" id="message_error">Insert Gagal</div>';
    } else {

    }

?>
        <div class="header icon-and-heading fs-1">
        <i class="zmdi zmdi-view-dashboard zmdi-hc-4x"></i>
            <h2><strong>transaksi</strong> <small>Add New Data</small> </h2>
        </div>
        <hr/>
        <form name="formAdd" method="POST" action="">

                <div class="form-group">
                    <label>Kode_transaksi:</label>
                    <input type="text" class="form-control" name="kode_transaksi"  />
                </div>

                <div class="form-group">
                    <label>Kode_barang:</label>
                    <input type="text" class="form-control" name="kode_barang"  />
                </div>

                <div class="form-group">
                    <label>Kode_pemasok:</label>
                    <input type="text" class="form-control" name="kode_pemasok"  />
                </div>

                <div class="form-group">
                    <label>Jumlah:</label>
                    <input type="text" class="form-control" name="jumlah"  />
                </div>

                <div class="form-group">
                    <label>jenis_transaksi:</label>
                    <select id="jenis_transaksi" name="jenis_transaksi" style="width:150px" class="form-control">
                        <option value="">--pilih--</option>
                        <option value="masuk">masuk</option><option value="keluar">keluar</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tanggal:</label>
                    <input type="text" class="form-control" name="tanggal"  />
                </div>

                <div class="form-group">
                    <label>Created_at:</label>
                    <input type="text" class="form-control" name="created_at"  />
                </div>

                <div class="form-group">
                    <label>Updated_at:</label>
                    <input type="text" class="form-control" name="updated_at"  />
                </div>

            <button class="save btn btn-large btn-info" type="submit">Save</button>
            <a href="index.php" class="btn btn-large btn-default">Cancel</a>
        </form>

<?php
    getFooter($theme, "<script src='../lib/forms.js'></script>");
?>
</body>
</html>
