<?php namespace App\Http\Controllers;

use Illuminate\Controller\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function index()
	{
		return view('pages.index');
	}

	public function bmi()
	{
		return view('pages.bmi');
	}

	public function result()
	{
		
		$W = $_GET['weight'];
		$H = $_GET['height'];
		$S = $_GET['sex'];

		if($S == 'male')

		{
			$value = $W/($H/100)/($H/100);

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
			$value = $W/($H/100)/($H/100);

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



