<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CategoryController extends Controller
{
    public function list()
    {
        $data['getRecord'] = CategoryModel::getRecord();
        $data['header_title'] = "Category";
        return view('admin.category.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add New Category";
        return view('admin.category.add', $data);
    }
    public function insert(Request $request)
    {
        request()->validate([
            'slug' => 'required|unique:category'
        ]);

        $category = new CategoryModel;
        $category->name = trim($request->category_name);
        $category->slug = trim($request->slug);
        $category->status = trim($request->status);
        $category->is_delete = 0;
        $category->meta_title = trim($request->meta_title);
        $category->meta_description = trim($request->meta_description);
        $category->meta_keywords = trim($request->meta_keywords);
        $category->created_by = Auth::user()->id;

        $category->save();

        return redirect('admin/category/list')->with('success', 'A New Category has been created successfully');
    }
    public function edit($id)
    {
        $data['getRecord'] = CategoryModel::getSingle($id);
        $data['header_title'] = "Edit Category";
        return view('admin.category.edit', $data);
    }
    public function update($id, Request $request)
    {
        request()->validate([
            'slug' => 'required|unique:category,slug,'.$id
        ]);

        $category = CategoryModel::getSingle($id);
        $category->name = trim($request->category_name);
        $category->slug = trim($request->slug);
        $category->status = trim($request->status);
        $category->is_delete = 0;
        $category->meta_title = trim($request->meta_title);
        $category->meta_description = trim($request->meta_description);
        $category->meta_keywords = trim($request->meta_keywords);
        $category->created_by = Auth::user()->id;

        $category->save();

        return redirect('admin/category/list')->with('success', 'Category updated successfully');
    }
    public function delete($id)
    {
        $user = CategoryModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect()->back()->with('success', 'Admin deleted successfully');
    }
}
