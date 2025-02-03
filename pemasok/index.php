<?php
    include "../controllers/Pemasok.php";
    include "../lib/functions.php";
    $obj   = new PemasokController();
    $rows  = $obj->getpemasokList();
    $theme = setTheme();
    getHeader($theme);
?>

<div class="header icon-and-heading">
<i class="zmdi zmdi-view-dashboard zmdi-hc-4x custom-icon"></i>
<h2><strong>Pemasok</strong> <small>List All Data</small> </h2>
</div>
<hr style="margin-bottom:-2px;"/>
    <div class="my-3 d-flex flex-row justify-content-end">
        <a style="margin:10px 0px;" class="btn btn-large btn-outline-success" href="add.php"><i class="fa fa-plus"></i>Add Data</a>
    </div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Kode Pemasok</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kontak</th>
            <th>Foto</th>
            <th width="140">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) {?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["kode_pemasok"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["alamat"]; ?></td>
            <td><?php echo $row["kontak"]; ?></td>
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
                <a class="btn btn-outline-info btn-sm" href="edit.php?id=<?php echo $row['id']; ?>">
                    <i class="fa fa-pencil"></i>
                </a>
                <a class="btn btn-outline-warning btn-sm" href="upload.php?id=<?php echo $row["id"]; ?>">
                    <i class="fa fa-camera"></i>
                </a>
                <a class="btn btn-outline-danger btn-sm" href="delete.php?id=<?php echo $row['id']; ?>">
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
