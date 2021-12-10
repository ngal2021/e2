<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller 
{

    public function index() 
    {

        $products = $this->app->db()->all('products');

        return $this->app->view('products/index', ['products' => $products]);
    }

    public function show()
    {

        $sku = $this->app->param('sku');

        if(is_null($sku)) {
            $this->app->redirect('products');
        }

        $productQuery = $this->app->db()->findByColumn('products', 'sku', '=', $sku);

        // dd($product);

        if (empty($productQuery)) {
            return $this->app->view('products/missing');
        } else {
            $product = $productQuery[0];
        }

        $reviewQuery = $this->app->db()->findByColumn('reviews', 'product_id', '=', $sku);

        $reviewSaved = $this->app->old('reviewSaved');

        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product['id']);

        return $this->app->view('products/show', [
            'product' => $product,
            'reviewSaved' => $reviewSaved,
            'reviewQuery' => $reviewQuery,
            'reviews' => $reviews
        ]);
    }

    public function saveReview() 
    {
        $this->app->validate([
            'sku' => 'required',
            'product_id' => 'required',
            'name' => 'required',
            'review' => 'required|minLength:200'
        ]);
        
        # If the above validation checks fail
        # The user is redirected back to hwere they came from (/product)
        # Nome of the code that follows will be executed

        $product_id = $this->app->input('product_id');
        $sku = $this->app->input('sku');
        $name = $this->app->input('name');
        $review = $this->app->input('review');

        # Set up all the variables we need to make a connection
        $this->app->db()->insert('reviews', [
            'product_id'=> $product_id,
            'name' => $name,
            'review' => $review
        ]);

        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);
    }
    
    public function new()
    {
        $productSaved = $this->app->old('productSaved');
        $sku = $this->app->old('sku');

        return $this->app->view('products/new', [
            'productSaved' => $productSaved,
            'sku' => $sku,
        ]);
    }

    public function save() 
    {
        $this->app->validate([
            'name' => 'required',
            'sku' => 'required|alphaNumericDash',
            'description' => 'required',
            'price' => 'required|numeric',
            'available' => 'required|numeric',
            'weight' => 'required|numeric',
        ]);
        
        $this->app->db()->insert('products', $this->app->inputAll());
        
        $this->app->redirect('/product/new', [
            'productSaved' => true,
            'sku' => $this->app->input('sku')
        ]);
    }
}