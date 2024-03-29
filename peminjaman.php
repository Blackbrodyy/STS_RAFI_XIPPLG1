<!doctype html>
<?php
include 'cekindex.php';

?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>admin</title>
</head>

<body>

    <div class="container">

        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <img src="logo-bn.png" alt="" style="width: 80px;">
                    <a class="navbar-brand" href="#" style="padding: start 100px;"><strong>SMK BAKTI NUSANTARA
                            666</strong></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="admin.php">Barang</a>
                            </li>

                            </li>
                        </ul>
                        <a href="logout.php" class="btn btn-dark">LOGOUT</a>
                    </div>
                </div>
            </nav>
            <figure class="text-center mt-3">
                <blockquote class="blockquote">
                    <p>Data Peminjaman User Yang Dimasukan</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    CRUD : Create, Read, Update, And Delete <cite title="Source Title"></cite>
                </figcaption>
            </figure>

            <a href="olahpinjam.php" type="button" class="btn btn-primary">Tambah</a><br><br>
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">No Identias</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Keperluan</th>
                        <th scope="col">Status</th>
                        <th scope="col">ID Login</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM Peminjaman";
                    $sql = mysqli_query($konek, $query);
                    $no = 1;
                    while ($data = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo $no ?>
                            </th>
                            <td>
                                <?php echo $data['id']; ?>
                            </td>
                            <td>
                                <?php echo $data['tgl_pinjam']; ?>
                            </td>
                            <td>
                                <?php echo $data['tgl_kembali']; ?>
                            </td>
                            <td>
                                <?php echo $data['no_identitas']; ?>
                            </td>
                            <td>
                                <?php echo $data['kode_barang']; ?>
                            </td>
                            <td>
                                <?php echo $data['jumlah']; ?>
                            </td>
                            <td>
                                <?php echo $data['keperluan']; ?>
                            </td>
                            <td>
                                <?php echo $data['status']; ?>
                            </td>
                            <td>
                                <?php echo $data['id_login']; ?>
                            </td>
                            <td>
                                <a href="delete.php?id=<?php echo $data['id']; ?>">
                                    <button type="button" class="btn btn-danger">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </a>
                            </td>


                        </tr>
                        <?php
                        $no++;
                    } ?>
                </tbody>
            </table>
        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>