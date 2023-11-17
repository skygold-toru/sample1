<!DOCTYPE html>
<html style="background: greenyellow;">
<head>
	<meta charset="utf-8">
	<title>Verify Submit</title>
	<style type="text/css">
			body{
			margin: 0;
			width: 100%;
			text-align: center;
		}
	</style>
</head>
<body>
	<form action="submit.php" method="post">
  			名前<br><input type="text" name="name"><br>
  			メールアドレス<br><input type="email" name="email"><br>
  			メッセージ<br><input type="text" name="message"><br>
  			<input type="submit" value="Submit">
    </form>

    <?php
    	echo $_POST['name'].'<br>';
    	echo $_POST['email'].'<br>';
    	echo $_POST['message'].'<br>';
    ?>
</body>
</html>