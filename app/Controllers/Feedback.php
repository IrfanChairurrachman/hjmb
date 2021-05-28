<?php

namespace App\Controllers;
use App\Models\Category_model;
use App\Models\Feedback_model;

class Feedback extends BaseController
{
    protected $helpers = [];
 
    public function __construct()
    {
        helper(['form']);
        $this->fb_model = new Feedback_model();
    }
	public function index()
	{
        $data['fb'] = $this->fb_model->getFb();
        echo view('admin/feedback', $data);
		// return view('admin/category');
	}

    public function show($id)
    {  
        $data['fb'] = $this->fb_model->getFb($id);
        echo view('admin/feedback_show', $data);
    }

    public function create()
    {
        return view('admin/category_create');
    }
    
    public function store()
    {
        $data = array(
            'fb_id'     => $this->request->getPost('fb_id'),
            'fb_name'   => $this->request->getPost('fb_name'),
            'fb_subject'   => $this->request->getPost('fb_subject'),
            'fb_email'   => $this->request->getPost('fb_email'),
            'fb_message'   => $this->request->getPost('fb_message'),
        );

        // dd($data);
        $simpan = $this->fb_model->insertFb($data);
        if($simpan)
        {
            session()->setFlashdata('success', 'Created Feedback successfully');
            return redirect()->to(base_url('/contact')); 
        }
        // if($validation->run($data, 'category') == FALSE){
        //     session()->setFlashdata('inputs', $this->request->getPost());
        //     session()->setFlashdata('errors', $validation->getErrors());
        //     return redirect()->to(base_url('admin/category/create'));
        // } else {
        //     $model = new Category_model();
        //     $simpan = $model->insertFb($data);
        //     if($simpan)
        //     {
        //         session()->setFlashdata('success', 'Created Category successfully');
        //         return redirect()->to(base_url('admin/category')); 
        //     }
        // }
    }
    
    public function delete($id)
    {
        $hapus = $this->fb_model->deleteFb($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted Category successfully');
            return redirect()->to(base_url('admin/feedback')); 
        }
    }

}