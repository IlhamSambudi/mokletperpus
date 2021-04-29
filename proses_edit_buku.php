<?php
include('config.php');

$id = @$_GET['id_buku'];

$JudulBuku = @$_POST['JUDUL'];
$Penerbit = @$_POST['PENERBIT'];
$Pengarang = @$_POST['PENGARANG'];
$Ringkasan = @$_POST['RINGKASAN'];
$Cover= @$_POST['COVER'];
$Stok = @$_POST['STOK'];
$Kategori = @$_POST['KATEGORI'];


$sql = mysqli_query($koneksi, "UPDATE `buku` SET judul='$JudulBuku', penerbit='$Penerbit',pengarang='$Pengarang',ringkasan='$Ringkasan',cover='$Cover',  stok='$Stok',id_kategori='$Kategori' where id_buku='$id'");
if ($sql) {
    echo '<script>alert("Berhasil menyimpan data."); document.location="tampiladmin.php?id_buku='.$id.'";</script>';
} else {
    echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
}
    // header('location:tampil_buku.php');
