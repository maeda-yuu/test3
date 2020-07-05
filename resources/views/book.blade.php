<html>
	<head>
		<meta charset="utf-8">
		<title>本貸出</title>
		<link rel="stylesheet" href="{{ asset('/css/bookstyle.css') }}">
	</head>
	<header class="book-header">
		<p class="midashi">レンタル状況</p>
	</header>
	<body>
		<p class="title1">データ検索</p>
		<form class="search" action="/lltest/public/book/search" method="post">
			@csrf
			<div class="searchProject1">ID</div>
			<input class="search1" type="text" name="firstSearch" style="width:250px;height:25px">
			<div class="attention1">※必須入力</div>
			<br>
			<div class="searchProject2">タイトル</div>
			<input class="search2" type="text" name="secondSearch" style="width:250px;height:25px">
			<br>
			<div class="searchProject3">ページ</div>
			<input class="search3" type="text" name="thirdSearch" style="width:250px;height:25px">
			<br>
			<div class="searchProject4">貸出者</div>
			<input class="search4" type="text" name="fourthSearch" style="width:250px;height:25px">
			<br>
			<div class="searchProject5">貸出日</div>
			<input class="search5" type="text" name="fifthSearch" style="width:250px;height:25px">
			<br>
			<div class="searchProject6">ステータス</div>
			<input class="search6" type="text" name="sixthSearch" style="width:250px;height:25px">
			<input class="bottom1" type="submit" value="検索"  style="width:70px;height:40px">
		</form>

		<p class="title2">データ追加</p>
		<form class="insert" action="/lltest/public/book/insert" method="post">
			@csrf
			<div class="insertProject1">ID</div>
			<input class="insert1" type="text" name="firstInsert" style="width:250px;height:25px">
			<div class="attention2">※必須入力</div>
			<br>
			<div class="insertProject2">タイトル</div>
			<input class="insert2" type="text" name="secondInsert" style="width:250px;height:25px">
			<br>
			<div class="insertProject3">ページ</div>
			<input class="insert3" type="text" name="thirdInsert" style="width:250px;height:25px">
			<br>
			<div class="insertProject4">貸出者</div>
			<input class="insert4" type="text" name="fourthInsert" style="width:250px;height:25px">
			<br>
			<div class="insertProject5">貸出日</div>
			<input class="insert5" type="text" name="fifthInsert" style="width:250px;height:25px">
			<br>
			<div class="insertProject6">ステータス</div>
			<input class="insert6" type="text" name="sixthInsert" style="width:250px;height:25px">
			<input class="bottom2" type="submit" value="追加"  style="width:70px;height:40px">
		</form>

		<p class="title3">データ削除</p>
		<form class="delete" action="/lltest/public/book/delete" method="post">
			@csrf
			<div class="deleteProject1">ID</div>
			<input class="delete1" type="text" name="firstDelete" style="width:250px;height:25px">
			<div class="attention3">※必須入力</div>
			<br>
			<div class="deleteProject2">タイトル</div>
			<input class="delete2" type="text" name="secondDelete" style="width:250px;height:25px">
			<br>
			<div class="deleteProject3">ページ</div>
			<input class="delete3" type="text" name="thirdDelete" style="width:250px;height:25px">
			<br>
			<div class="deleteProject4">貸出者</div>
			<input class="delete4" type="text" name="fourthDelete" style="width:250px;height:25px">
			<br>
			<div class="deleteProject5">貸出日</div>
			<input class="delete5" type="text" name="fifthDelete" style="width:250px;height:25px">
			<br>
			<div class="deleteProject6">ステータス</div>
			<input class="delete6" type="text" name="sixthDelete" style="width:250px;height:25px">
			<input class="bottom3" type="submit" value="削除"  style="width:70px;height:40px">
		</form>

	</body>
	<footer class="book-footer">
		<p>@Japan</p>
	</footer>
</html>
