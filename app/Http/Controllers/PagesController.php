<?php namespace App\Http\Controllers;

use Illuminate\Controller\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function index()
	{
		$hey = "Hello,Everybody";
		return view('pages.index',compact('hey'));
	}

	public function bmi()
	{
		return view('pages.bmi');
	}

	public function favorite()
	{
		$favorite = ['看電視','打電動','運動','逛街','打手槍'];

		foreach ($favorite as $key => $gun) 
		{
			echo = '猜猜小銘平常喜歡做的事：'.'br'
			echo = '$key'.'：'.'$gun'.'br';
		}

		<<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>

		<form action="/guess" method="get">
		請輸入：<input type="text" name="right" size="5"></br>
		<input type="submit" value="確定">
		</form>
		
		</body>
		</html>>
		
		$R = $_GET['right'];

		if($R == '打電動')
			$ture = '答對了！';
		else
			$ture = '可惜，答錯了';

		return view('pages.guess',compact('ture'));
	}

	public function result()
	{
		
		$W = $_GET['weight'];
		$H = $_GET['height'];
		$S = $_GET['sex'];
		$value = $W/($H/100)/($H/100);

		if($S == 'male')

		{
			$result = 'BMI：'.$value;

			if($value >= '28')
			{
				$answer = "評比：肥豬";
			}
			elseif($value < '28' && $value >= '24')
			{
				$answer = "評比：正常";
			}
			elseif($value < '24' && $value >= '20')
			{
				$answer = "評比：偏瘦";
			}
			else
			{
				$answer = "評比：瘦皮猴";
			}
		}

		else
		{
			$result = 'BMI：'.$value;

			if($value >= '28')
			{
				$answer = "評比：肉肉Der";
			}
			elseif($value < '28' && $value >= '24')
			{
				$answer = "評比：還行";
			}
			elseif($value < '24' && $value >= '20')
			{
				$answer = "評比：太瘦";
			}
			else
			{
				$answer = "評比：皮包骨";
			}
		}
	return view('pages.result',compact('result','answer'));
	}
}



