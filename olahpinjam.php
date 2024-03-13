<?php
include_once("database.php");

if (isset($_POST["submit"])) {
    if (tambah_peminjaman($_POST)) {
        echo "<script>
            document.location.href='peminjaman.php'
        </script>";
    }
}
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $edit_data = get_barang_by_id($edit_id);
} else {
    $edit_data = null;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

<figure class="text-center mt-3">
                <blockquote class="blockquote"><br>
                    <p>Data User Peminjam Yang Dimasukan</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    CRUD : Create, Read, Update, And Delete <cite title="Source Title"></cite>
                </figcaption>
            </figure>

    <!-- content -->
    <div class="container mt-5">
        <form action="" method="post">
            

            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
            </div>
            <div class="mb-3">
                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
            </div>
            <div class="mb-3">
                <label for="no_identitas" class="form-label">No Identitas</label>
                <input type="number" class="form-control" id="no_identitas" name="no_identitas">
            </div>
            <div class="mb-3">
                <label for="kode_barang" class="form-label">kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>

            <div class="mb-3">
                <label for="keperluan" class="form-label">Keperluan</label>
                <input type="text" class="form-control" id="keperluan" name="keperluan">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>

            <div class="mb-3">
                <label for="id_login" class="form-label">ID Login</label>
                <input type="text" class="form-control" id="id_login" name="id_login">
            </div>

            <div class="mb-3 row">
                <input type="hidden" name="edit_id"
                    value="<?php echo isset($edit_data['id']) ? $edit_data['id'] : ''; ?>">
                <button type='submit' name="submit" class='btn btn-primary'>
                    <?php echo isset($edit_data['id']) ? 'Edit Data' : 'Tambah Data'; ?>
                </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>