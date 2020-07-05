<!DOCTYPE html>

<html>
	<head>
		<title>@yield('計算式')</title>
	</head>
	<body>
		<h1>変数</h1>
		<?php echo '<h2>変数2</h2>';?>
		<?php echo 1+1;?>
			<br>
		<?php
		  $Sx = 2;
		   echo ++$Sx;
		?>
		<?php
		  $Sy = 3;?>
		    {{++$Sy}}

			<br>

			<br>
		<form action="http://localhost/lltest/public/send" method="post">
			名前を入力してください。
			<input type="text" name="name1" value="">
			<input type="submit" value="送信">
		</form>
		<h3>ようこそ {{ $name2 }} さん。マイページ画面です。</h3>

	</body>
</html>