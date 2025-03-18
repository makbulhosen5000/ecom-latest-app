<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Helper\ResponseHelper;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function brandList()
    {
        $data = Brand::all();
        return ResponseHelper::Out('success',$data,200);
    }
}
