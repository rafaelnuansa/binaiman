<?php

namespace App\Http\Controllers\Api\Public;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $products = Product::latest()->with('product_category')->paginate(2);

        //return with Api Resource
        return new ProductResource(true, 'List Data Products', $products);
    }

    /**
     * show
     *
     * @param  mixed $slug
     * @return void
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if ($product) {
            //return with Api Resource
            return new ProductResource(true, 'Detail Data Product', $product);
        }

        //return with Api Resource
        return new ProductResource(false, 'Detail Data Product Tidak Ditemukan!', null);
    }

    public function homePage()
    {
        $products = Product::latest()->with('product_category')->take(6)->get();

        //return with Api Resource
        return new ProductResource(true, 'List Data Products HomePage', $products);
    }

    public function categories()
    {
        $categories = ProductCategory::all();
        //return with Api Resource
        return new ProductResource(true, 'List Data Product Categories', $categories);
    }
}