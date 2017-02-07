@extends('layout/style1')
@section('Hello')

<?php

$favorite = ['看電視','打電動','運動','逛街','打手槍'];

echo '猜猜小銘平常喜歡做的事：'.'<br>';

foreach ($favorite as $key => $gun) 
{
	echo $key.'：'.$gun.'<br>';
}
?>

<form action="/solution" method="get">
請輸入：<input type="text" name="right" size="5"></br>
<input type="submit" value="確定">
</form>


@stop