<?php

namespace App\Controllers;
use App\Models\Product_model;
use App\Models\Category_model;
use App\Models\News_model;
use App\Models\Info_model;
use App\Models\Auth_model;

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
		$this->admin_model = new Auth_model();
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
		$data['admin'] = $this->admin_model->getUser();
		// dd($data);
		return view('admin', $data);
	}

	public function info_edit()
	{
		$data['info'] = $this->info_model->getInfo();
		// dd($data);
		return view('admin/info_edit', $data);
	}

	public function info_update()
	{
		$validation =  \Config\Services::validation();

		$id = $this->request->getPost('info_id');

		$data = array(
            'info_id' => $this->request->getPost('info_id'),
            'info_name' => $this->request->getPost('info_name'),
            'info_contact1' => $this->request->getPost('info_contact1'),
            'info_contact2' => $this->request->getPost('info_contact2'),
            'info_email' => $this->request->getPost('info_email'),
            'info_alamat' => $this->request->getPost('info_alamat'),
        );
		// dd($data);
		if($validation->run($data, 'info') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('admin/info/edit/'.$id));
        } else{
			$ubah = $this->info_model->updateInfo($data, $id);
	
			if($ubah)
			{
				session()->setFlashdata('info', 'Updated Information successfully');
				return redirect()->to(base_url('admin')); 
			}
		}
	}

	public function admin_edit()
	{
		$data['admin'] = $this->admin_model->getUser();
		// dd($data['admin'][0]['name']);
		return view('admin/admin_edit', $data);
	}

	public function admin_update()
	{

		$validation =  \Config\Services::validation();

		$id = $this->request->getPost('id');
		$data['admin'] = $this->admin_model->getUser();

		$data = array(
            'id' => $id,
            'username' => $this->request->getPost('username'),
            'name' => $data['admin'][0]['name'],
            'email' => $data['admin'][0]['email'],
            'password' => $this->request->getPost('password'),
        );
		// dd($data);
		if($validation->run($data, 'admin') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('admin/edit/'.$id));
        } else{
			$ubah = $this->admin_model->updateUser($data, $id);
	
			if($ubah)
			{
				session()->setFlashdata('info', 'Updated Admin successfully');
				return redirect()->to(base_url('admin')); 
			}
		}
	}
}
