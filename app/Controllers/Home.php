<?php

namespace App\Controllers;
use App\Models\Product_model;
use App\Models\Category_model;
use App\Models\News_model;
use App\Models\Info_model;

class Home extends BaseController
{
	protected $helpers = [];
 
    public function __construct()
    {
        helper(['form']);
        $this->news_model = new News_model();
		$this->category_model = new Category_model();
        $this->product_model = new Product_model();
		$this->info_model = new Info_model();
    }

	public function index()
	{
		$data['news'] = $this->news_model->getNews();
		$data['products'] = $this->product_model->getProduct();
		return view('index', $data);
	}
	public function admin()
	{
		$data['info'] = $this->info_model->getInfo();
		// dd($data);
		return view('admin', $data);
	}
	public function info_edit()
	{
		$data['info'] = $this->info_model->getInfo();
		// dd($data);
		return view('admin/info_edit', $data);
	}
}
