<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{

    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');   
    }

    public function edit($id)
    {
        $data = [
            'product' => $this->product->findAll(),
            'pro' => $this->product->where('id' , $id)->first(),
        ];
        return view ('products' , $data);
    }

    public function save()
    {
        $id=$_POST['id'];
        $data = [
        'id' => $this ->request-> getVar('id'), 
        'ProductName' => $this ->request-> getVar('ProductName'), 
        'ProductDescription' => $this ->request-> getVar('ProductDescription'), 
        'ProductCategory' => $this ->request-> getVar('ProductCategory'), 
        'ProductQuantity' => $this ->request-> getVar('ProductQuantity'), 
        'ProductPrice' => $this ->request-> getVar('ProductPrice')
        ];

        if($id!=null){
            $this->product->set($data)->where('id' , $id)->update();
        }
        else{
            $this->product->insert($data);
        }
        return redirect()->to('/product');
    }

    public function product($product) 
    {
        echo $product;
    }

    public function Stephen()
    {
       $data['product'] = $this->product->FindAll();
       return view ('products', $data);
    }

    public function index()
    {
        //
    }
}
