<?php
include_once("database.php");

if (isset($_POST["submit"])) {
    if (tambah_barang($_POST)) {
        echo "<script>
            document.location.href='admin.php'
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
                    <p>Data Barang Yang Ditambahkan</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    CRUD : Create, Read, Update, And Delete <cite title="Source Title"></cite>
                </figcaption>
            </figure>

    <!-- content -->
    <div class="container mt-5">
        <form action="" method="post">

            <div class="mb-3">
                <label for="kode_brg" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="kode_brg" name="kode_brg">
            </div>
            <div class="mb-3">
                <label for="nama_brg" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_brg" name="nama_brg">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori">
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>

            <div class="mb-3 row">
                <input type="hidden" name="edit_id"
                    value="<?php echo isset($edit_data['id']) ? $edit_data['id'] : ''; ?>">
                <button type='submit' name="submit" class='btn btn-primary'>
                    <?php echo isset($edit_data['id']) ? 'Edit Data' : 'Tambah Data'; ?>
                </button>
        </form>
    </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>