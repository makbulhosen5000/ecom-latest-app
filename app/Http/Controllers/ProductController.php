<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductReview;
use App\Models\ProductSlider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listProductByCategory(Request $request){
        $data = Product::where('category_id',$request->id)->with('brand','category')->get();
        return ResponseHelper::Out('success',$data,200);
    }
    public function listProductByBrand(Request $request){
        $data = Product::where(column: 'brand_id',operator: $request->id)->with('brand','category')->get();
        return ResponseHelper::Out('success',$data,200);
    }
    public function listProductByRemark(Request $request){
        $data = Product::where('remark',$request->remark)->with('brand','category')->get();
        return ResponseHelper::Out('success',$data,200);
    }
    public function listProductSlider(Request $request){
        $data = ProductSlider::all();
        return ResponseHelper::Out('success',$data,200);
    }
    public function productDetailsById(Request $request){               
        // relationship with product,brand,category Model
        $data = ProductDetail::where('product_id',$request->id)->with('product','product.brand','product.category')->get();
        return ResponseHelper::Out('success',$data,200);
    }
    public function listReviewByProduct(Request $request){
        $data = ProductReview::where(column: 'product_id',$request->product_id)
        ->with(relations: ['customerProfile'=>function($query){
            $query->select('id','cus_name');
        }])->get();
        return ResponseHelper::Out('success',$data,200);
    }


}
