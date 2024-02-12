<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {

        $data['header_title'] = "Product";
        return view('admin.product.list', $data);
    }
    public function add()
    {
   
        $data['header_title'] = "Add Product";
        return view('admin.product.add', $data);
    }
}
