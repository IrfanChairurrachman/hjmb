<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		return view('dashboard');
	}
	public function product()
	{
		echo "PRODUCT";
	}
	public function news()
	{
		echo "NEWS";
	}
}
