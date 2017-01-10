@extends('layout/style1')
@section('Hello')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="BmiController.php" method="post">
身高：<input type="text" name="height" size="7"></br>
體重：<input type="text" name="weight" size="7"></br>
性別：<input type="radio" name="sex" value="male">男
<input type="radio" name="sex" value="female">女</br>
<input type="submit" value="確定">
<input type="reset" name="reset" value="重設">
</form>

</body>
</html>

@stop