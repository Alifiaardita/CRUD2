<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


$buku = query("SELECT * FROM buku");

if (isset($_POST["cari"])) {
    $buku = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Halaman Admin</title>
</head>

<body>
    <h1 class="judul">Daftar buku</h1>



    <div class="bungkus">
        <div class="header">
            <a class="tambah" href="tambah.php">Tambah data buku</a>
            <form class="cari" action="" method="post">
                <div class="search-container">
                    <input type="text" placeholder="Cari" name="keyword" autocomplete="off" class="search-input">
                    <button type="submit" name="cari" class="search-button">Cari</button>
                </div>
            </form>
        </div>

        <div class="table-middle">
            <table class="table">

                <tr>
                    <th>No</th>
                    <th>Judul buku</th>
                    <th>pengarang</th>
                    <th>penerbit</th>
                    <th>Jenis buku</th>
                    <th>gambar</th>
                    <th>aksi</th>
                </tr>


                <?php $i = 1; ?>
                <?php foreach ($buku as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["pengarang"] ?></td>
                        <td><?= $row["penerbit"] ?></td>
                        <td><?= $row["jenis"] ?></td>
                        <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>

                        <!-- simbol ubah detail dan delete -->
                        <td>
                            <div style="display: flex; gap: 10px">

                                <a class="detail" href="detail.php?id=<?= $row["id"]; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="16" x2="12" y2="12"></line>
                                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    </svg></a>
                                <a class="ubah" href="ubah.php?id=<?= $row["id"]; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg></a>
                                <a class="hapus" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg></a>
                            </div>

                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>

            </table>
        </div>
        <div class="footer">
            <a class="logout " href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>logout</a>
        </div>

    </div>

</body>

</html>