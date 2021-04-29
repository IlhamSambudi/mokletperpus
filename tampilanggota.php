<?php
include 'navbaranggota.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>PERPUSTAKAAN</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php
    include 'config.php';
    ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f9fcfb;

        }

        .bs-example {
            margin: 20px;
        }

        .teks {
            font-family: "allim Personal Use Only";
            font-size: 40px;
            display: block;
            background: -webkit-linear-gradient(#ff7bb0, #ff0b55);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .teks1 {
            color: black;
            font-family: "Comic Sans MS";
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top:20px ">
        <h2 class="teks">Daftar Buku</h2>
        <hr>
        <table class="table table-striped table-hover table-sm table-bordered">
            <thead class="thead-dark">
                <tr class="teks1">
                    <th>NO.</th>
                    <th>ID</th>
                    <th>JUDUL BUKU</th>
                    <th>PENERBIT</th>
                    <th>PENGARANG</th>
                    <th>RINGKASAN</th>
                    <th>COVER</th>
                    <th>STOK</th>
                    <th>KATEGORI</th>
                 
                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel t_buku urut berdasarkan id yang paling besar
                $sql = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku DESC") or die(mysqli_error($koneksi));
                //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                if (mysqli_num_rows($sql) > 0) {
                    //membuat variabel $no untuk menyimpan nomor urut
                    $no = 1;
                    //melakukan perulangan while dengan dari dari query $sql
                    while ($data = mysqli_fetch_assoc($sql)) {
                ?>


                        <tr class="teks1">
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['id_buku']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['penerbit']; ?></td>
                            <td><?php echo $data['pengarang']; ?></td>
                            <td><?php echo $data['ringkasan']; ?></td>
                            <td><?php echo $data['cover']; ?></td>
                            <td><?php echo $data['stok']; ?></td>
                            <td><?php echo $data['id_kategori']; ?></td>
                           
                        </tr>
                <?php

                        $no++;
                    }
                } else {
                    echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
                }
                ?>
            <tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>

</html>