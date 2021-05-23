<?php namespace App\Controllers;

class Page extends BaseController
{
	public function produk()
	{
		return view('produk');
	}
	public function berita()
	{
		return view('berita');
	}
	// public function berita{id}()
	// {
	// 	return view('berita{id}');
	// }
    public function artikel()
	{
		return view('artikel');
	}
	// public function artikel{id}()
	// {
	// 	return view('artikel{id}');
	// }
	public function about()
	{
		return view('about');;
	}
	public function contact()
	{
		return view('contact');;
	}
	public function service()
	{
		return view('services');;
	}

}