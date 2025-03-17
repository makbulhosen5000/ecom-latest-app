<?php

namespace App\Http\Controllers;

=

use App\Helper\ResponseHelper;
use App\Models\Brand;

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
