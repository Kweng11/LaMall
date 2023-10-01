<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
  private $mall;
public function __construct()
{
$this->mall = new \App\Models\ProductModel();
}

public function MallDetails($id)
{
$mall = $this->mall->find($id);
if ($mall) {
  $data = [
    'mall' => $mall
  ];
  return view('mallhome', $data);
} else {
  return redirect()->to('/home');
}

}
//Return datas
public function home()
{
$data = [
  'mall' => $this->mall->findAll()
];
return view('MallDetails', $data);
}
  }
//Return datas
