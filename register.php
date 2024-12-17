<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        nav {
            display: grid;
            grid-template-columns: auto 1fr;
            align-items: center;
            grid-column-gap: 30px;
            grid-template-rows: 70px;
            box-shadow: 0 5px 5px rgba(0,0,0,0.15);
            position: sticky;
            top: 0;
            background-color: white;
            padding-left: 20px;
            padding-right: 20px;
            
        }
        nav .brand{
            font-size: 28px;
            font-weight: bold;
            color: #245990;
        }

        nav a{
            text-decoration: none;
            display: inline-block;
            padding: 10px 35px;
            transition: background-color 0.3s, color 0.3s;
            color: #245990;
            font-size: 18px;
        }
        nav a:hover,
        nav a.active{
            background-color: #4c6ccc;
            color:#fff;
            border-radius:3px;
        }
        nav .linkss{
            float:right;
        }
        
        body {
            font-family: Arial, sans-seri;
            margin: 0;
            padding: 0;
            
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-size: 20px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section h2 {
            color: #333;
        }
        .section p {
            line-height: 1.6;
        }
        footer{
            background-color: #333;
            padding: 1px;
            width:100%;
            color:white;
            align: center;
            text-align: center;
            position: fixed;
			bottom:0;
        }
        .login-form{
            font-family: Georgia;
        }
        .login-form form {
            width: 300px; /* Độ rộng của form */
            margin: 0 auto; /* Canh giữa form */
        }

        .login-form label {
            display: block;
            margin-bottom: -2px;
            margin-top:20px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            width: 130%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-form input[type="submit"] {
            background-color: #4c6ccc;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top:10px;
            font-size:16px;
        }

        .login-form input[type="submit"]:hover {
            background-color: #245990;
        }
      

/* Các quy tắc CSS khác của form */


    </style>
</head>
<body id="register">
    <?php include "includes/nav.php"?>
    <header>
        <h1>Đăng ký</h1>
    </header>
    <div class="container">
        <div class="section">
            <div class="login-form">
                <form action="" action="POST">
                    <label for="username">Tên đăng nhập: </label><br>
                    <input type="text" id="username" name="username" required><br>
                    <label for="email">Email: </label><br>
                    <input type="text" id="email" name="email" required><br>                   
                    <label for="pass">Mật khẩu: </label><br>
                    <input type="password" id="pass" name="pass" required><br>
                    <input type="Submit" value="Đăng ký">
                </form>
            </div>
        </div>
    </div>
        <script src="script.js" ></script>
        <?php include"includes/footer.php"?>
</body>
</html>