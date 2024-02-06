<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\SubCategoryModel;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    public function list()
    {
        $data['getRecord'] = SubCategoryModel::getRecord();
        $data['header_title'] = "Sub Category";
        return view('admin.subcategory.list', $data);
    }
    public function add()
    {
        $data['getCategory'] = CategoryModel::getRecord();
        $data['header_title'] = "Add New Sub Category";
        return view('admin.subcategory.add', $data);
    }
    public function insert(Request $request)
    {
        request()->validate([
            'slug' => 'required|unique:sub_category'
        ]);

        $sub_category = new SubCategoryModel;
        $sub_category->name = trim($request->sub_category_name);
        $sub_category->category_id = trim($request->category_id);
        $sub_category->slug = trim($request->slug);
        $sub_category->status = trim($request->status);
        $sub_category->is_delete = 0;
        $sub_category->meta_title = trim($request->meta_title);
        $sub_category->meta_description = trim($request->meta_description);
        $sub_category->meta_keywords = trim($request->meta_keywords);
        $sub_category->created_by = Auth::user()->id;

        $sub_category->save();

        return redirect('admin/sub_category/list')->with('success', 'A New Sub Category has been created successfully');
    }
}
