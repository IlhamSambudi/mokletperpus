<?php
//memasukkan file config.php
    include('config.php');
    if(isset($_POST['submit'])){
        $kode_buku			= @$_POST['id_buku'];
        $judul_buku			= @$_POST['judul'];
        $penerbit	    	= @$_POST['penerbit'];
        $pengarang    	    = @$_POST['pengarang'];
        $ringkasan  	    = @$_POST['ringkasan'];
        $cover	            = @$_POST['cover'];
        $stok	            = @$_POST['stok'];
        $kategori	        = @$_POST['kategori'];
       
        
        $cek = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$kode_buku'") or die(mysqli_error($koneksi));
        
        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($koneksi, "INSERT INTO buku(id_buku, judul, penerbit,pengarang, ringkasan, cover, stok, id_kategori ) 
            VALUES('$kode_buku', '$judul_buku', '$penerbit','$pengarang' ,'$ringkasan','$cover','$stok','$kategori')") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menambahkan data."); document.location="tampiladmin.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, kode_buku sudah terdaftar.</div>';
        }
    }
