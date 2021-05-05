<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Sign In FORM</title>
    <style>
      *{
          margin: 0;
          padding:0 ;
          box-sizing: border-box;
          font-family: Source sans pro semibold;

      }
      body{
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          background-color: #131419;
      }
      .form{
          position: relative;
          width: 350px;
          padding: 5px 40px;
          background: #131419;
          border-radius: 10px;
          text-align: center;
          box-shadow: -5px -5px 10px rgba(255, 255, 255, 0.05),
                       5px 5px 15px rgba(0, 0, 0, 0.05);
          
      }
      .form h2{
          margin-top: 10px;
          color: #c7c7c7;
          font-weight: 500;
          text-transform: uppercase;
          letter-spacing: 4px;
      }
      .form .input{
          text-align: left;
          margin-top: 10px;
      }
      .form .input .inputBox{
          margin-top: 2px;
      }
      .form .input .inputBox label{
          display: block;
          color: #868686;
          margin-bottom: 5px;
          font-size: 18px;;
      }
      .form .input .inputBox input{
          width: 100%;
          height: 40px;
          background: #131419;
          border:none;
          outline: none;
          border-radius: 40px;
          padding: 5px 15px;
          color: #fff;
          font-size: 15px;
          color: #03a9f4;
          box-shadow: inset -2px -2px 2px 6px rgba(255, 255, 255, 0.1),
                      inset 2px 2px 6px rgba(0, 0, 0, 0.8);
      }
      .form .input .inputBox input[type="submit"]{
          margin-top: 10px;
          box-shadow:  -2px -2px 2px 3px rgba(255, 255, 255, 0.1),
                       2px 2px 3px rgba(0, 0, 0, 0.8);
      }
      .form .input .inputBox input[type="submit"]:active{
          color: #006c9c;
          margin-top: 20px;
          box-shadow: inset -2px -2px 2px 6px rgba(255, 255, 255, 0.1),
                       inset 2px 2px 6px rgba(0, 0, 0, 0.8);
      }.form .input .inputBox input::placeholder{
          color:#555;
          font-size: 18px;
      }
      .forget{
        margin-top: 30px;
        color: #555;
      }
      .forget a{
          color: hotpink;

      }
      #submit{
        margin-top: 10px;
      }
    </style>
</head>
<body>
<div class="form">
    <h2>Sign In</h2>
    <div class="input">
        <form action="simpan_register.php" method="POST">

        <div class="inputBox">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama.." required>
        </div>
        <div class="inputBox">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username.." required>
        </div>
        <div class="inputBox">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email.." required>
        </div>
        <div class="inputBox">
            <label>Password</label>
            <input type="password" name ="password" placeholder="Password.." required>
        </div>
        <div class="inputBox" id="submit">
            <input type="submit" value="Daftar">
        </div>
        <div class="inputBox">
        <input type="hidden" name="akses">    
    </div>
    </div>
    <p class="forget">Sudah punya akun ?<a href="login.php"> Klik disini</a></p>
    <br>
    </form>
</div>
</body>
</html>