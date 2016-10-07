<?php
namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function getAllCategories()
    {
        $categories = Category::all();
        return json_encode($categories);
    }

    public function insertCategory()
    {
        $cate = new Category;
        $cate->name = 'Infant Milk';
        //$cate->parent_id = 0;
        $cate->save();
        return 'ok';
    }
    public function onelineInsertCategory()
    {
        $cate = Category::create(['name' => 'Honey']);
        return json_encode($cate);
    }
}