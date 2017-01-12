<?php namespace App\Http\Controllers;

use Illuminate\Controller\Request;
use App\Http\Controllers\Controller;

class BmiController extends Controller
{
	$W = $_GET['weight'];
	$H = $_GET['height'];
	$S = $_GET['sex'];

	public function result()
	{

		if($S == 'male')

		{
			$bmi = $W/($H/100)/($H/100);

			echo 'BMI：'.$bmi.'</br>';

			if($bmi >= '28')
			{
				echo "評比：肥豬";
			}
			elseif($bmi < '28' && $bmi >= '24')
			{
				echo "評比：正常";
			}
			elseif($bmi < '24' && $bmi >= '20')
			{
				echo "評比：偏瘦";
			}
			else
			{
				echo "評比：瘦皮猴";
			}
		}

		else
		{
			$bmi = $W/($H/100)/($H/100);

			echo 'BMI：'.$bmi.'</br>';

			if($bmi >= '28')
			{
				echo "評比：肉肉Der";
			}
			elseif($bmi < '28' && $bmi >= '24')
			{
				echo "評比：還行";
			}
			elseif($bmi < '24' && $bmi >= '20')
			{
				echo "評比：太瘦";
			}
			else
			{
				echo "評比：皮包骨";
			}
		}
	}
}

?>