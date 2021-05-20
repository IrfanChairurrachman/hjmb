<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		return view('about');
	}
    
    public function contact()
	{
		echo "contact page";
	}
    
    public function faqs()
	{
		echo "Faqs page";
	}

}