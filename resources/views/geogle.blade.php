<html>
	<head>
		<meta charset="utf-8">
		<title>Geogleコピー</title>
		<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
	</head>
<header class="site-header">
	<a class="link1" href="https://about.google/?fg=1&utm_source=google-JP&utm_medium=referral&utm_campaign=hp-header">Geogleについて</a>
	<a class="link2" href="https://store.google.com/JP/?utm_source=hp_header&utm_medium=google_ooo&utm_campaign=GS100042&hl=ja-JP">ストア</a>
</header>

<body>
	<br>
	<div class="test">
		<p>G</p>
		<p>e</p>
		<p>o</p>
		<p>g</p>
		<p>l</p>
		<p>e</p>
	</div>
	<form action="/lltest/public/geogle/send" method="post">
		@csrf
		<input class="text1" type="text" name="firstValue" style="width:250px;height:35px">
		<input class="text2" type="text" name="secondValue" style="width:250px;height:35px">
		<input class="bottom" type="submit" value="送信" style="width: 70px;height: 40px">
	</form>
</body>

<footer class="site-footer">
	<p>日本</p>
</footer>

</html>
