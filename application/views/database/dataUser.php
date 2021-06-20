<div class="container" style="margin-top:20px">
    <center><font size="6">Data Users</font></center>
    <hr>
    <a href="database.php?page=tambahUser"><button class="btn btn-dark right">Tambah Data</button></a>
    <div class="table-responsive">
    <table class="table table-striped jambo_table bulk_action">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Saldo</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                    $no=1;
                    foreach($tampilUser as $row) :
                ?>
                    <tr>
                        <td style="width:25px;"><?= $no; ?></td>
                        <td style="width:110px;"><?= $row['username']; ?></td>
                        <td style="width:110px;"><?= $row['email']; ?></td>
                        <td style="width:110px;"><?= $row['password']; ?></td>
                        <td style="width:110px;"><?= rupiah($row['saldo']); ?></td>
                        <td style="width:110px;"><?= $row['role']; ?></td>
                        <td style="width:110px;">
                            <a href="<?= base_url(); ?>database/editUser/<?= $row['id']; ?>" class="btn btn-secondary btn-sm">Edit</a>
                            <a href="<?= base_url(); ?>database/deleteUser/<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php $no++;endforeach;?>
        <tbody>
    </table>
</div>