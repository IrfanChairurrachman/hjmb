<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\Product_model;
use App\Models\Category_model;
  
class Product extends Controller
{
    protected $helpers = [];
 
    public function __construct()
    {
        helper(['form']);
        $this->category_model = new Category_model();
        $this->product_model = new Product_model();
    }
 
    public function index()
    {
        $data['products'] = $this->product_model->getProduct();
        // $data['products']['product_image'] = explode(',', $data['products']['product_image']);
        foreach($data['products'] as $key => $row){
            $data['products'][$key]['product_image'] = explode(',', $row['product_image']);
        }
        // dd($data['products']);
        echo view('admin/product', $data);
    }
    
    public function create()
    {
        $categories = $this->category_model->where('category_status', 'Active')->findAll();
        $data['categories'] = ['' => 'Pilih Category'] + array_column($categories, 'category_name', 'category_id');
        return view('admin/product_create', $data);
    }
    
    public function store()
    {
        $validation =  \Config\Services::validation();
    
        // get file upload
        // $image = $this->request->getFile('product_image');
        // $files = $this->request->getFileMultiple('product_images');
        // // random name file
        // dd($files);

        $listimg = array();
        if($files = $this->request->getFileMultiple('product_images'))
        {
            foreach($files as $img)
            {
                if ($img->isValid() && ! $img->hasMoved())
                {
                    $newName = $img->getRandomName();
                    $img->move(ROOTPATH . 'public/uploads', $newName);
                    array_push($listimg, $newName);
                }
            }
        }
        // dd($listimg);

        $images = implode(',', $listimg);

        // dd($images);

        // $name = $image->getRandomName();
    
        $data = array(
            'category_id'           => $this->request->getPost('category_id'),
            'product_name'          => $this->request->getPost('product_name'),
            'product_price'         => $this->request->getPost('product_price'),
            'product_status'        => $this->request->getPost('product_status'),
            'product_image'         => $images,
            'product_description'   => $this->request->getPost('product_description'),
        );
        // dd($data);
        if($validation->run($data, 'product') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('admin/product/create'));
        } else {
            // upload file 
            // $image->move(ROOTPATH . 'public/uploads', $name);
            // insert
            $simpan = $this->product_model->insertProduct($data);
            if($simpan)
            {
                session()->setFlashdata('success', 'Created Product successfully');
                return redirect()->to(base_url('admin/product')); 
            }
        }
    }
    public function show($id)
    {  
        $data['product'] = $this->product_model->getProduct($id);
        echo view('admin/product_show', $data);
    }
    
    public function edit($id)
    {  
        $categories = $this->category_model->where('category_status', 'Active')->findAll();
        $data['categories'] = ['' => 'Pilih Category'] + array_column($categories, 'category_name', 'category_id');
    
        $data['product'] = $this->product_model->getProduct($id);

        // $data['product']['product_image'] = explode(',', $data['product']['product_image']);

        // dd($data['product']['product_image']);
        echo view('admin/product_edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('product_id');
    
        $validation =  \Config\Services::validation();
    
        // get file
        $image = $this->request->getFile('product_image');
        // random name file
        $name = $image->getRandomName();
    
        $data = array(
            'category_id'           => $this->request->getPost('category_id'),
            'product_name'          => $this->request->getPost('product_name'),
            'product_price'         => $this->request->getPost('product_price'),
            'product_status'        => $this->request->getPost('product_status'),
            'product_image'         => $name,
            'product_description'   => $this->request->getPost('product_description'),
        );
        
        if($validation->run($data, 'product') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('admin/product/edit/'.$id));
        } else {
            // upload
            $image->move(ROOTPATH . 'public/uploads', $name);
            // update
            $ubah = $this->product_model->updateProduct($data, $id);
            if($ubah)
            {
                session()->setFlashdata('info', 'Updated Product successfully');
                return redirect()->to(base_url('admin/product')); 
            }
        }
    }
    public function delete($id)
    {
        $hapus = $this->product_model->deleteProduct($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted Product successfully');
            return redirect()->to(base_url('admin/product')); 
        }
    }

}
?>