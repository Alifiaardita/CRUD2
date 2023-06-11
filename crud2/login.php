<?php
session_start();
require 'functions.php';

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}



if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}



if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;

            //cek remember
            if (isset($_POST['remember'])) {

                //buat cookie

                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username'], time() + 60));
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background: #dfe9f5;

    }

    .form-box {
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

    form input {
        width: 92%;
        outline: none;
        border: 1px solid #fff;
        padding: 12px 20px;
        margin-bottom: 10px;
        border-radius: 20px;
        background: #e4e4e4;
    }

    button {
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

    button:hover {
        background: rgba(17, 107, 143, 0.8);

    }

    input:focus {
        border: 1px solid rgb(192, 192, 192);
    }

    .terms {
        margin-top: 1rem;


    }

    .terms input {
        height: 1em;
        width: 1em;
        vertical-align: middle;
        cursor: pointer;
    }

    .terms label {
        font-size: 0.7rem;
    }
</style>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman login</title>
</head>

<body>
    <section>
        <div class="form-box">
            <form action="" method="post">
                <h1>Login</h1>
                <div class="inputbox">
                    <input type="text" placeholder="username" name="username" id="username">
                </div>
                <div class="inputbox">
                    <input type="password" placeholder="password" name="password" id="password">
                </div>
                <div class="terms">
                    <input type="checkbox" name="remember" id="remember" style="margin: 0;">
                    <label for="checkbox">Remember Me</label>

                </div>
                <button type="submit" name="login">login</button>
                <div class="register">
                    <p>Don't have a account? <a href="registrasi.php">Register</a></p>
                </div>
            </form>

        </div>
    </section>

    <?php if (isset($error)) :
        echo "
                <script>
                    alert('username atau password salah');
                    document.location.href = 'index.php';
                </script>";
    ?>
    <?php endif; ?>

    </form>
</body>

</html>