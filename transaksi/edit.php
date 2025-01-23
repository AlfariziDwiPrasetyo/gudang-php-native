<?php
    include "../controllers/Transaksi.php";
    include "../lib/functions.php";
    $obj = new TransaksiController();
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    $msg = null;
    if (isset($_POST["submitted"]) == 1 && $_SERVER["REQUEST_METHOD"] == "POST") {
        // Form was submitted, process the update here
        $id              = $_POST['id'];
        $kode_transaksi  = $_POST['kode_transaksi'];
        $kode_barang     = $_POST['kode_barang'];
        $kode_pemasok    = $_POST['kode_pemasok'];
        $jumlah          = $_POST['jumlah'];
        $jenis_transaksi = $_POST['jenis_transaksi'];
        $tanggal         = $_POST['tanggal'];
        $created_at      = $_POST['created_at'];
        $updated_at      = $_POST['updated_at'];
        // Update the database record using your controller's method
        $dat = $obj->updatetransaksi($id, $kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $created_at, $updated_at);
        $msg = getJSON($dat);
    }
    $rows  = $obj->getTransaksi($id);
    $theme = setTheme();
    getHeader($theme);
?>

    <?php
        if ($msg === true) {
            echo '<div class="alert alert-success" style="display: block" id="message_success">Update Data Berhasil</div>';
            echo '<meta http-equiv="refresh" content="2;url=' . base_url() . 'transaksi/">';
        } elseif ($msg === false) {
            echo '<div class="alert alert-danger" style="display: block" id="message_error">Update Gagal</div>';
        } else {

        }

    ?>
        <div class="header icon-and-heading">
        <i class="zmdi zmdi-view-dashboard zmdi-hc-4x custom-icon"></i>
        <h2><strong>transaksi</strong> <small>Edit Data</small> </h2>
        </div>
        <hr style="margin-bottom:-2px;"/>
        <form name="formEdit" method="POST" action="">
            <input type="hidden" class="form-control" name="submitted" value="1"/>
            <?php foreach ($rows as $row): ?>

                    <div class="form-group">
                        <label>id:</label>
                        <input type="text" class="form-control" id="id" name="id"
                            value="<?php echo $row['id']; ?>" readonly/>
                    </div>

                    <div class="form-group">
                        <label>kode_transaksi:</label>
                        <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi"
                            value="<?php echo $row['kode_transaksi']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>kode_barang:</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang"
                            value="<?php echo $row['kode_barang']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>kode_pemasok:</label>
                        <input type="text" class="form-control" id="kode_pemasok" name="kode_pemasok"
                            value="<?php echo $row['kode_pemasok']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>jumlah:</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah"
                            value="<?php echo $row['jumlah']; ?>" />
                    </div>

                <div class="form-group">
                    <label>Jenis_transaksi:</label>
                    <select id="jenis_transaksi" name="jenis_transaksi" style="width:150px"
                        class="form-control show-tick" required>
                    <option value="<?php echo $row['jenis_transaksi']; ?>">
                    <?php echo $row['jenis_transaksi']; ?></option>
                        <option value="masuk">masuk</option><option value="keluar">keluar</option>
                    </select>
                </div>

                    <div class="form-group">
                        <label>tanggal:</label>
                        <input type="text" class="form-control" id="tanggal" name="tanggal"
                            value="<?php echo $row['tanggal']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>created_at:</label>
                        <input type="text" class="form-control" id="created_at" name="created_at"
                            value="<?php echo $row['created_at']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>updated_at:</label>
                        <input type="text" class="form-control" id="updated_at" name="updated_at"
                            value="<?php echo $row['updated_at']; ?>" />
                    </div>


            <?php endforeach; ?>
            <button class="save btn btn-large btn-info" type="submit">Save</button>
            <a href="index.php" class="btn btn-large btn-default">Cancel</a>
        </form>

<?php
    getFooter($theme, "<script src='../lib/forms.js'></script>");
?>
</body>
</html>
