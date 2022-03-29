<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>ชื่อผู้ใช้</label>
     	<input type="text" name="uname" placeholder="ชื่อผู้ใช้"><br>

     	<label>รหัสผ่าน</label>
     	<input type="password" name="password" placeholder="รหัสผ่าน"><br>

		 <label>มีแค่เพื่อนๆ M3/1-64 เท่านั้นที่รู้รหัส</label>

     	<button type="submit">Login</button>
     </form>
</body>
</html>