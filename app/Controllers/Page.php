<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		return view('about');
	}
    
    public function contact()
	{
		echo " ";
	}
    
    public function faqs()
	{
		echo "ini kurubah";
	}

}