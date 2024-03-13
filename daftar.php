<?php
include 'cekindex.php';

$message = '';

if (isset($_POST['daftar'])) {
    $no_identitas = $_POST['no_identitas'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pass = md5($password);
    $role = $_POST['role'];

    // Use correct MySQLi connection function and fix the SQL query
    $konek = mysqli_connect("localhost", "root", "", "sts_rfi");
    if (!$konek) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO user (no_identitas, nama, status, username, password, role) 
              VALUES ('$no_identitas','$nama','$status', '$username', '$password', '$role')";

    $result = mysqli_query($konek, $query);

    if ($result) {
        $message = 'Registration successful. Redirecting to login page...';
        header("refresh:3;url=login.php"); // Redirect after 3 seconds
    } else {
        $message = "Error: " . $query . "<br>" . mysqli_error($konek);
    }

    mysqli_close($konek);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Daftar</title>
</head>

<body>

    <div class="container mt-5"><br><br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>FORM DAFTAR</strong>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <label for="no_identitas" class="form-label">No Identitas</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-123" viewBox="0 0 16 16">
                                        <path
                                            d="M2.873 11.297V4.142H1.699L0 5.379v1.137l1.64-1.18h.06v5.961zm3.213-5.09v-.063c0-.618.44-1.169 1.196-1.169.676 0 1.174.44 1.174 1.106 0 .624-.42 1.101-.807 1.526L4.99 10.553v.744h4.78v-.99H6.643v-.069L8.41 8.252c.65-.724 1.237-1.332 1.237-2.27C9.646 4.849 8.723 4 7.308 4c-1.573 0-2.36 1.064-2.36 2.15v.057zm6.559 1.883h.786c.823 0 1.374.481 1.379 1.179.01.707-.55 1.216-1.421 1.21-.77-.005-1.326-.419-1.379-.953h-1.095c.042 1.053.938 1.918 2.464 1.918 1.478 0 2.642-.839 2.62-2.144-.02-1.143-.922-1.651-1.551-1.714v-.063c.535-.09 1.347-.66 1.326-1.678-.026-1.053-.933-1.855-2.359-1.845-1.5.005-2.317.88-2.348 1.898h1.116c.032-.498.498-.944 1.206-.944.703 0 1.206.435 1.206 1.07.005.64-.504 1.106-1.2 1.106h-.75z" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="no_identitas" name="no_identitas" required
                                    placeholder="Tambahkan No Identitas" aria-describedby="basic-addon3">
                            </div>

                            <label for="nama" class="form-label">Nama</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="nama" name="nama" required
                                    placeholder="Tambahkan Nama" aria-describedby="basic-addon3">
                            </div>

                            <label for="status" class="form-label">Status</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-dash-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5" />
                                        <path
                                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="status" name="status" required
                                    placeholder="Tambahkan Status" aria-describedby="basic-addon3">
                            </div>

                            <label for="username" class="form-label">Username</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="username" name="username" required
                                    placeholder="Tambahkan Username" aria-describedby="basic-addon3">
                            </div>

                            <label for="password" class="form-label">Password</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-lock-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                                    </svg>
                                </span>
                                <input type="password" class="form-control" id="password" name="password" required
                                    placeholder="Tambahkan Password" aria-describedby="basic-addon3">
                            </div>

                            <label for="role" class="form-label">Role</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="role" name="role" required
                                    placeholder="Tambahkan Role" aria-describedby="basic-addon3">
                            </div>
                            <!-- Add similar sections for other form fields -->

                            <div class="row mb-3">
                                <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                            </div>
                        </form>
                        <div class="row mb-3">
                            <?php echo $message; ?> <!-- Display the success or error message -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>