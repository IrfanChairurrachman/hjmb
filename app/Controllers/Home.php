<?php

namespace App\Controllers;
use App\Models\Product_model;
use App\Models\Category_model;
use App\Models\News_model;

class Home extends BaseController
{
	protected $helpers = [];
 
    public function __construct()
    {
        helper(['form']);
        $this->news_model = new News_model();
		$this->category_model = new Category_model();
        $this->product_model = new Product_model();
    }

	public function index()
	{
		$data['news'] = $this->news_model->getNews();
		$data['products'] = $this->product_model->getProduct();
		return view('index', $data);
	}
	public function admin()
	{
		return view('dashboard');
	}
}
