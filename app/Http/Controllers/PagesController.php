<?php namespace App\Http\Controllers;

use Illuminate\Controller\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function index()
	{
		return view('pages.index');
	}

	public function abc()
	{
		return view('pages.abc');
	}
}


