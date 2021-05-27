<?php namespace App\Controllers;
use App\Models\News_model;
use App\Models\Product_model;
use App\Models\Category_model;

class Page extends BaseController
{
	protected $helpers = [];
 
    public function __construct()
    {
        helper(['form']);
        $this->news_model = new News_model();
		$this->category_model = new Category_model();
        $this->product_model = new Product_model();
    }

	public function produk()
	{
		$data['products'] = $this->product_model->getProduct();
		return view('produk', $data);
	}
	public function berita()
	{
		$data['news'] = $this->news_model->getNews();
		return view('berita', $data);
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