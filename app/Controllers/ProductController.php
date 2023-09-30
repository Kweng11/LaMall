<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class ProductController extends BaseController
{

    private $product;

    private $user;

    public function __construct()
    {
       $this->product = new \App\Models\ProductModel();
       $this->user = new \App\Models\UserModel();

    }
     public function productDetails($id)
     {
        $product = $this->product->find($id);
        if ($product)
        {
            $data = [
                'product' => $product
            ];

            return view ('productDetails', $data);
        } else{
            return redirect() ->to('/home');
        }
    }
     public function index()
    {
          $data =[
            'product' => $this->product->findAll();
          ];
          return view ('index',$data);
    }
    public function login()
    {
        $session = session();
        if (isset($_POST['login']))
        {
            return redirect()->to('/home');
        }
    }

     //admin pannel
  public function admin()
  {
    $data = [
      'product' => $this->product->findAll()
    ];
    return view('admin', $data);
  }
}
