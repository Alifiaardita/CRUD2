<?php

session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

//ambil data di URL
$id = $_GET["id"];

//query data buku berdasarkan id
$pst = query("SELECT * FROM buku WHERE id = $id")[0];



?>


<!DOCTYPE html>
<html lang="en">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Ubuntu:wght@700&display=swap');

    html {
        background-color: #ACB1D6;
    }

    body {
        font-family: "Poppins";
    }

    h1 {
        text-align: center;
    }

    a {
        text-decoration: none;
    }

    div {
        width: 60%;
        border-radius: 5px;
        background-color: #DBDFEA;
        padding: 20px;
        margin: 0 auto;
    }

    input[type=text],
    input[type=file],
    select,
    option {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .back {
        background-color: #fc0606;
        color: white;
        border: none;
        padding: 6px 15px;
        border-radius: 20px;
        cursor: pointer;
    }

    .back:hover {
        background-color: #690000;
    }

    .tambah {
        background-color: #04AA6D;
        color: white;
        border: none;
        padding: 6px 15px;
        border-radius: 20px;
        cursor: pointer;
        font-family: "Poppins";
    }

    .tambah:hover {
        background-color: #006943;
    }

    .foto {
        text-align: center;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Detail</title>
</head>

<body>


    <h1 class="">Detail Data Buku</h1>

    <div class="foto"><img src="img/<?= $pst["gambar"]; ?>" width="250" alt=""></div>
    <div class="detail">
        <div>
            <p>Judul Buku : <?= $pst["nama"] ?></p>
        </div>
        <div>
            <p>Pengarang : <?= $pst["pengarang"] ?></p>
        </div>
        <div>
            <p>Penerbit : <?= $pst["penerbit"] ?></p>
        </div>
        <div>
            <p>Jenis Buku : <?= $pst["jenis"] ?></p>
        </div>

        <div>
            <a class="back" href="index.php">back</a>
        </div>
    </div>

</body>

</html>