<?php
    include "../controllers/Barang.php";
    include "../lib/functions.php";
    $obj   = new BarangController();
    $rows  = $obj->getbarangList();
    $theme = setTheme();
    getHeader($theme);
?>

<div class="header icon-and-heading">
<i class="zmdi zmdi-view-dashboard zmdi-hc-4x custom-icon"></i>
<h2><strong>Barang</strong> <small>List All Data</small> </h2>
</div>
<hr style="margin-bottom:-2px;"/>
<a style="margin:10px 0px;" class="btn btn-large btn-info" href="add.php"><i class="fa fa-plus"></i> Create New Data</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Kode Barang</th>
            <th>Nama</th>
            <th>Satuan</th>
            <th>Stok</th>
            <th>Foto</th>
            <th width="140">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) {?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["kode_barang"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["satuan"]; ?></td>
            <td><?php echo $row["stok"]; ?></td>
            <td>
            <?php
                if ($row["foto"] != "") {
                    echo '<img src="../images/thumbs/' . $row["foto"] . '" width="100" height="100">';
                } else {
                    echo '&nbsp;';
                }
                ?>
            </td>
            <td class="text-center" width="200">
                <a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $row['id']; ?>">
                    <i class="fa fa-pencil"></i>
                </a>
                <a class="btn btn-success btn-sm" href="upload.php?id=<?php echo $row["id"]; ?>">
                    <i class="fa fa-camera"></i>
                </a>
                <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id']; ?>">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
<?php
    getFooter($theme, "");
?>
