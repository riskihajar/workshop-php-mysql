<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kontak</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h2 class="page-title">Daftar Kontak</h2>
            </div>
            <div class="col-xs-6">
                <div class="text-right" style="padding-top: 20px;">
                    <a href="?aksi=tambah" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        </div>
        <hr>
        <?php
            if(isset($_GET['aksi'])){
                $aksi = $_GET['aksi'];

                /*
                    '1' == 1 => true
                    '1' === 1 => false
                 */

                if($aksi === 'tambah'){
                    include "kontak.form.php";
                }else if($aksi === 'ubah'){
                    include "kontak.form.php";
                }else if($aksi === 'hapus'){
                    /* Start hapus */
                    $id = $_GET['id'];
                    $query = "DELETE FROM kontak WHERE id=%d";
                    $result = mysql_query(sprintf($query, $id));

                    if($result){
                ?>
                    <div class="alert alert-info">Kontak berhasil di hapus</div>
                <?php
                    }

                    /* End Of Hapus */
                }
            }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = "SELECT * FROM kontak";
                $result = mysql_query($query);

                if(mysql_num_rows($result) > 0){
                    $nomor = 1;
                    while($kontak = mysql_fetch_object($result)){
            ?>
                <tr>
                    <td><?php echo $nomor++ ?></td>
                    <td><?php echo $kontak->nama ?></td>
                    <td><?php echo $kontak->email ?></td>
                    <td><?php echo $kontak->pesan ?></td>
                    <td><?php echo $kontak->tanggal ?></td>
                    <td>
                        <a href="?aksi=ubah&id=<?php echo $kontak->id ?>" class="btn btn-xs btn-default">Ubah</a>

                        <a href="?aksi=hapus&id=<?php echo $kontak->id ?>"
                            onclick="return confirm('Anda yakin akan menghapus kontak ini?')"
                            class="btn btn-xs btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php
                    }
                }else{
            ?>
            <tr>
                <th colspan="6">Tidak ada data</th>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
