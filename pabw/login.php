<?php

//Fungsi untuk mencegah inputan karakter yang tidak sesuai
function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//Cek apakah ada kiriman form dari method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();
    include "koneksi.php";
    $error_msg = "";
    $username = input($_POST["username"]);
    $password = input(md5($_POST["password"]));

    $sql = "SELECT * FROM user WHERE username='" . $username . "' AND password='" . $password . "' limit 1";
    $hasil = mysqli_query($conn, $sql);
    $jumlah = mysqli_num_rows($hasil);

    if ($jumlah > 0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["id_user"] = $row["id_user"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["nama"] = $row["nama"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["akses"] = $row["akses"];


        if ($_SESSION["akses"] = $row["akses"] == "User") {
            header("location:menu.php");
        }
    } else {
        $error_msg = "Username dan password salah";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>LOGIN FORM</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Source sans pro semibold;

        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #131419;
        }

        .form {
            position: relative;
            width: 350px;
            padding: 40px 40px 60px;
            background: #131419;
            border-radius: 10px;
            text-align: center;
            box-shadow: -5px -5px 10px rgba(255, 255, 255, 0.05),
                5px 5px 15px rgba(0, 0, 0, 0.05);

        }

        .form h2 {
            color: #c7c7c7;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        .form .input {
            text-align: left;
            margin-top: 40px;
        }

        .form .input .inputBox {
            margin-top: 20px;
        }

        .form .input .inputBox label {
            display: block;
            color: #868686;
            margin-bottom: 5px;
            font-size: 18px;
            ;
        }

        .form .input .inputBox input {
            width: 100%;
            height: 50px;
            background: #131419;
            border: none;
            outline: none;
            border-radius: 40px;
            padding: 5px 15px;
            color: #fff;
            font-size: 18px;
            color: #03a9f4;
            box-shadow: inset -2px -2px 2px 6px rgba(255, 255, 255, 0.1),
                inset 2px 2px 6px rgba(0, 0, 0, 0.8);
        }

        .form .input .inputBox input[type="submit"] {
            margin-top: 20px;
            box-shadow: -2px -2px 2px 3px rgba(255, 255, 255, 0.1),
                2px 2px 3px rgba(0, 0, 0, 0.8);
        }

        .form .input .inputBox input[type="submit"]:active {
            color: #006c9c;
            margin-top: 20px;
            box-shadow: inset -2px -2px 2px 6px rgba(255, 255, 255, 0.1),
                inset 2px 2px 6px rgba(0, 0, 0, 0.8);
        }

        .form .input .inputBox input::placeholder {
            color: #555;
            font-size: 18px;
        }

        .forget {
            margin-top: 30px;
            color: #555;
        }

        .forget a {
            color: hotpink;

        }
    </style>
</head>

<body>
    <div class="form">
        <h2>Login</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="input">
                <div class="inputBox">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Username..">
                </div>
                <div class="inputBox">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password..">
                </div>
                <div class="inputBox">
                    <input type="submit" value="Login">
                </div>
            </div>
        </form>
        <p class="forget">Belum punya akun ?<a href="register.php"> Klik disini</a></p>
</body>

</html>