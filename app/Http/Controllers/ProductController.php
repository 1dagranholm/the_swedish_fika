<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductResourceCollection;
use App\Product;


class ProductController extends Controller {

    public function showAll() {
        $products = Product::show();
        return view('products', [
            'product' => $products]);
    }

    public function showAllProductsApi(Product $products) {
        $products = Product::show();
        return $products;
    }
    
    public function showProductApi(Product $products) {
        return $products;
    }

    /**
     * @param Product $product
     * @return ProductResource
     */
    
    public function show(Product $product) : ProductResource {
        return new ProductResource($product);
    }

    public function index() : ProductResourceCollection {
        return new ProductResourceCollection(Product::paginate());
    }
}
