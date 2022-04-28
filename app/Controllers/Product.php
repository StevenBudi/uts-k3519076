<?php

namespace App\Controllers;

use App\Models\ProductModel;
use PhpParser\Node\Expr\ArrayItem;

class Product extends BaseController
{
    public function index()
    {
    	$model = new ProductModel();
    	$kunci = $this->request->getVar('cari');

        if ($kunci) {
            $query = $model->pencarian($kunci);
        } else {
            $query = $model;
        }

        $data['produk'] = $query->paginate(10);
        $data["path"] = "produk";

        echo view('product',$data);
    }

    public function detail($id)
    {
        $productModel = new ProductModel();
        $data = [
            "produk" => $productModel->where(['id' => $id])->first(),
        ];
        return view("detail", $data);
    }
}
