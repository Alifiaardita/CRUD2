<?php

session_start();
    require 'functions.php';

    if (isset($_POST["register"])) {

        if(registrasi($_POST) > 0){
            echo "<script>
            alert('user baru berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>";
        }else{
            echo mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">


<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');

*{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: "Poppins", sans-serif;
}

body{
   background: #dfe9f5;

}

.form-box{
   width: 330px;
   padding: 2rem 1rem;
   margin: 50px auto;
   background-color: #fff;
   border-radius: 10px;
   text-align: center;
   box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

h1 {
   font-size: 2rem;
   color: #07001f;
   margin-bottom: 1.2rem;

}

form input{
   width: 92%;
   outline: none;
   border: 1px solid #fff;
   padding: 12px 20px;
   margin-bottom: 10px;
   border-radius: 20px;
   background: #e4e4e4;
}

button{
   font-size: 1rem;
   margin-top: 1.8rem;
   padding: 10px 0;
   border-radius: 20px;
   outline: none;
   border: none;
   width: 90%;
   color: #fff;
   cursor: pointer;
   background: rgb(17, 107, 143);
}

button:hover{
   background: rgba(17, 107, 143, 0.8);

}

input:focus{
   border: 1px solid rgb(192, 192, 192);
}




    </style>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylereg.css">
    <title>Halaman Registrasi</title>
</head>
<body>
    <form action="" method="post">

    <section>
    <div class="form-box">
        <div class="form-value">
            <form action="" method="post">
                <h1>Register</h1>
                <div class="inputbox">
                    <input type="text" placeholder="username" name="username" id="username" required>
                </div>
                <div class="inputbox">
                    <input type="password" placeholder="password" name="password" id="password" required>
                </div>
                <div class="inputbox">
                    <input type="password" placeholder="konfirmasi password" name="password2" id="password2" required>
                </div>
            </form>

                <button type="submit" name="register">Register</button>
                <div class="member">
                    <p>have an account? <a href="login.php">Login here</a></p>
                </div>
            
        </div>
    </div>
   </section>

    </form>

</body>
</html>