<?php

session_start();

if(!isset($_SESSION["login"])) {
    header ("Location: login.php");
    exit;
}

    require 'functions.php';

    //cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"])) {
      

       

        //cek data apakah data berhasil ditambahkan atau tidak
        if (tambah($_POST) > 0 ){
            echo 
                
            "<script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>"
            ;
        } else{
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Ubuntu:wght@700&display=swap');

html{
    background-color: #ACB1D6;
}

body{
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

  input[type=text], input[type=file], select, option {
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

.foto{
    text-align: center;
}

    </style>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data buku</title>
</head>
<body>
    <h1>Tambah data buku</h1>
    <div>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
                <label for="nama">Judul Buku :</label>
                <input type="text" name="nama" id="nama"
                required>
        </div>
        <div>
                <label for="pengarang">pengarang :</label>
                <input type="text" name="pengarang" id="pengarang"
                required>
        </div>
        <div>
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit"
                required >
        </div>
        <div>
                <label for="jenis">Jenis Buku :</label>
                <input type="text" name="jenis" id="jenis"
                required>
        </div>
           
        <div>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar">
        </div>   
           
            <br>
        <a class ="back" href="index.php">back</a>
         <button class="tambah" type="submit" name="submit">Simpan</button>
         
            
        </ul>
        </form>
        </div>
</body>
</html>