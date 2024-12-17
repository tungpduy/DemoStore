<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Về chúng tôi</title>
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
            font-family: Arial, sans-serif;
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
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
		footer{
            background-color: #333;
            padding: 1px;
            width:100%;
            color:white;
            align: center;
            text-align: center;
			
        }
    </style>
</head>
<body id="about">
	<?php include "includes/nav.php"?>
    <header>
        <h1>Về chúng tôi</h1>
    </header>
    <div class="container">
        <div class="section">
            <h2>Về trang web</h2>
            <p>Tại My Store, chúng tôi tin rằng công nghệ và giải trí là những phương tiện quan trọng để mở rộng tầm nhìn, nuôi dưỡng óc sáng tạo và đem lại niềm vui. Được thành lập bởi một nhóm những người đam mê công nghệ và giải trí, chúng tôi mong muốn xây dựng một cộng đồng trực tuyến nơi mọi người có thể dễ dàng tiếp cận với sách hay, micro chất lượng, game hấp dẫn và các thiết bị di động thông minh.</p>
        </div>
        <div class="section">
            <h2>Nhiệm vụ</h2>
            <p>Sứ mệnh của chúng tôi là cung cấp trải nghiệm mua sắm tuyệt vời với lựa chọn sản phẩm phong phú từ những thương hiệu uy tín hàng đầu.</p>
        </div>
    </div>
	<script src="script.js" ></script>
    <?php include"includes/footer.php"?>
</body>
</html>
