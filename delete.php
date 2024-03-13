<?php
include 'cekindex.php';

// Periksa apakah parameter 'id' telah diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari tabel Peminjaman dengan prepared statement
    $query = "DELETE FROM barang WHERE id = ?";
    
    // Prepare the statement
    $stmt = mysqli_prepare($konek, $query);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, 'i', $id);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo '<script>alert("Data berhasil dihapus."); window.location.href="admin.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data."); window.location.href="admin.php";</script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);

} else {
    echo '<script>alert("ID tidak valid."); window.location.href="admin.php";</script>';
}
?>

<?php
include 'cekindex.php';

// Periksa apakah parameter 'id' telah diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari tabel Peminjaman dengan prepared statement
    $query = "DELETE FROM peminjaman WHERE id = ?";
    
    // Prepare the statement
    $stmt = mysqli_prepare($konek, $query);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, 'i', $id);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo '<script>alert("Data berhasil dihapus."); window.location.href="peminjaman.php";</script>';
    } else {
        echo '<script>alert("Gagal menghapus data."); window.location.href="peminjaman.php";</script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);

} else {
    echo '<script>alert("ID tidak valid."); window.location.href="peminjaman.php";</script>';
}
?>
