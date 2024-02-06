<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    use HasFactory;

    protected $table = 'sub_category';

    static public function getRecord()
    {
        return SubCategoryModel::select('sub_category.*', 'users.name as created_by_name', 'category.name as category_name')
            ->where('category.is_delete', '=', 0)
            ->join('category', 'category.id', '=', 'sub_category.category_id')
            ->join('users', 'users.id', '=', 'category.created_by')
            ->orderBy('sub_category.id', 'desc')
            ->paginate(20);
    }

}
