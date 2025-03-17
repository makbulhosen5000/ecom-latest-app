<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Helper\ResponseHelper;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function categoryList()
    {
        $data = Category::all();
        return ResponseHelper::Out('success',$data,200);
    }
}
