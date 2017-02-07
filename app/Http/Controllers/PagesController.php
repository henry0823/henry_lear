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

	public function guess()
	{
		$R = $_GET['right'];

		if($R == '打電動' or $R == '1')
		{
			$ture = '好聰明，答對了！';
		}
		elseif($R == '打手槍' or $R == '4')
		{
			$ture = '怎麼可能會是打手槍呢！';
		}
		else
		{
			$ture = '可惜，答錯了';
		}

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



