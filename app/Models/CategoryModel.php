<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    protected $table = 'category';

    static public function getRecord()
    {
        return CategoryModel::select('category.*', 'users.name as created_by_name')
            ->where('category.is_delete', '=', 0)
            ->join('users', 'users.id', '=', 'category.created_by')
            ->orderBy('category.id', 'desc')
            ->get();
    }

    static public function getSingle($id)
    {
        return CategoryModel::find($id);
    }
}
