<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Data Menu </font>
    </center>
    <hr>
    <a href="database.php?page=tambahMenu"><button class="btn btn-dark right">Tambah Data</button></a>
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Makanan</th>
                    <th>Harga</th>
                    <th>Ukuran</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i=1;
                    foreach ($tampilMenu as $row) :    
                ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?=  rupiah($row['harga']); ?></td>
                    <td><?= $row['ukuran']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td><img src="<?= base_url(); ?>upload/<?= $row['gambar']; ?>" width="70"></td>
                    <td style="width:137px;">
                        <a href="<?= base_url(); ?>database/editMenu/<?= $row['id']; ?>" class="btn btn-secondary btn-sm">Edit</a>
                        <a href="<?= base_url(); ?>database/deleteMenu/<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php $i++;endforeach ?>
            <tbody>
        </table>
    </div>
</div>
