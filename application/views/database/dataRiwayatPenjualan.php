<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Data Riwayat Penjualan </font>
    </center>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pembelian</th>
                    <th>Username</th>
                    <th>Total Pembelian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i=1;
                    foreach ($tampilRiwayat as $row) :    
                ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['tanggal_beli']; ?></td>
                    <td><?=  $row['Username']; ?></td>
                    <td><?= rupiah($row['total_harga']); ?></td>
                    <td style="width:137px;">
                        <a href="<?= base_url(); ?>database/deleteRiwayatPenjualan/<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php $i++;endforeach ?>
            <tbody>
        </table>
    </div>
</div>
