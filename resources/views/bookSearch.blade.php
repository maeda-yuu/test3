<html>
	<head>
		<meta charset="utf-8">
		<title>在庫検索</title>
	</head>
	<body>
		<div class="first">
			@foreach ($value as $tvalue)
   		    <p>{{$tvalue->id}}</p>
   		    <p>{{$tvalue->bookname}}</p>
   		    <p>{{$tvalue->page}}</p>
   		    <p>{{$tvalue->lender}}</p>
   		    <p>{{$tvalue->loandate}}</p>
   		    <p>{{$tvalue->status}}</p>
		    @endforeach
		</div>
	</body>


</html>
