<html>
<head>
<title>123200143</title>
<<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="styleLogin.css">
<script src="https://kit.fontawesome.com/24023efca4.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <header class="mb-3 text-center">LOGIN
            <hr style="margin-top: 0px;">
        </header> 
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "error"){
                echo "Login gagal! username dan password salah!";
            }else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman";
            }
        }
?>
        <form action="cekLogin.php" method="POST">
			<div class="mb-3">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username">
			</div>
			<div class="mb-3">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			</div>
			<div class="mb-3">
				<input type="submit" class="btn btn-primary" name="login" value="Login">
			</div>
		</form>
</div>
</body>
</html>