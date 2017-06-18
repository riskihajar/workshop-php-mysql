<?php
    $result = false;
    if($_POST){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        if($_GET['aksi'] === 'tambah'){
            $query = "INSERT INTO kontak(nama, email, pesan, tanggal) VALUES('%s', '%s', '%s', NOW())";
            $result = mysql_query(sprintf($query, $nama, $email, $pesan));
        }else if($_GET['aksi'] === 'ubah'){
            $query = "UPDATE kontak SET nama='%s', email='%s', pesan='%s' WHERE id=%d";
            $result = mysql_query(sprintf($query, $nama, $email, $pesan, $_GET['id']));
        }

    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM kontak WHERE id=%d";
        $result = mysql_query(sprintf($query, $id));
        $data = mysql_fetch_object($result);

        $nama = $data->nama;
        $email = $data->email;
        $pesan = $data->pesan;
    }

    $aksi = '?aksi='. $_GET['aksi'];
    if($_GET['aksi'] === 'ubah'){
        $aksi .= '&id=' . $_GET['id'];
    }
?>
<div class="col-xs-6 col-xs-offset-3">
    <?php if($result): ?>
        <div class="alert alert-success">Kontak Berhasil disimpan</div>
    <?php endif ?>
    <form class="form-horizontal" action="<?php echo $aksi ?>" method="post">
        <div class="form-group">
            <label for="nama" class="control-label col-xs-3">Nama</label>
            <div class="col-xs-9">
                <input type="text" name="nama" class="form-control" value="<?php echo $nama ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="control-label col-xs-3">Email</label>
            <div class="col-xs-9">
                <input type="text" name="email" class="form-control" value="<?php echo $email ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="pesan" class="control-label col-xs-3">Pesan</label>
            <div class="col-xs-9">
                <textarea name="pesan" class="form-control" rows="8"><?php echo $pesan ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-9 col-xs-offset-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="?" class="btn btn-default">Batal</a>
            </div>
        </div>
    </form>
</div>
