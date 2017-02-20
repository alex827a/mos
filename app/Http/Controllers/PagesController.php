<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Brand;
use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Http\Traits\BrandAllTrait;
use App\Http\Traits\CategoryTrait;
use App\Http\Traits\SearchTrait;
use App\Http\Traits\CartTrait;


class PagesController extends Controller {

    /**
     * Display things for main index home page.
     *
     * @return $this
     */
    public function index() {
        return view('pages.index');
    }

    public function insurance() {
        return view('insurance.index');
    }

    public function blog() {
        return view('blog.index');
    }

    public function blog1() {
        return view('blog.blog1');
    }

    public function blog2() {
        return view('blog.blog2');
    }

    public function cards() {
        return view('cards.index');
    }

    public function loans() {
        return view('loans.index');
    }

    public function store() {
        return view('store.index');
    }

    public function store_item($id) {
        return view('store.item');
    }

    public function payments() {
        return view('payments.index');
    }

    public function travel() {
        return view('travel.index');
    }

    public function deposit() {
        return view('deposit.index');
    }

    /**
     * Display Products by Category.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function displayProducts($id) {

        // Get the Category ID , so we can display the category name under each list view
        $categories = Category::where('id', '=', $id)->get();

        $categories_find = Category::where('id', '=', $id)->find($id);

        // If no category exists with that particular ID, then redirect back to Home page.
        if (!$categories_find) {
            return redirect('/');
        }

        // From Traits/CategoryTrait.php
        // ( Show Categories in side-nav )
        $category = $this->categoryAll();

        // From Traits/BrandAll.php
        // Get all the Brands
        $brands = $this->brandsAll();

        // From Traits/SearchTrait.php
        // ( Enables capabilities search to be preformed on this view )
        $search = $this->search();

        // Get the Products under the Category ID
        $products = Product::where('cat_id','=', $id)->get();

        // Count the products under a certain category
        $count = $products->count();

        // From Traits/CartTrait.php
        // ( Count how many items in Cart for signed in user )
        $cart_count = $this->countProductsInCart();

        return view('category.show', compact('products', 'categories','brands', 'category', 'search', 'cart_count'))->with('count', $count);
    }


    /** Display Products by Brand
     *
     * @param $id
     * @return $this
     */
    public function displayProductsByBrand($id) {

        // Get the Brand ID , so we can display the brand name under each list view
        $brands = Brand::where('id', '=', $id)->get();

        $brands_find = Brand::where('id', '=', $id)->find($id);

        // If no brand exists with that particular ID, then redirect back to Home page.
        if (!$brands_find) {
            return redirect('/');
        }

        // From Traits/CategoryTrait.php
        // ( Show Categories in side-nav )
        $category = $this->categoryAll();

        // From Traits/BrandAll.php
        // Get all the Brands
        $brand = $this->brandsAll();

        // From Traits/SearchTrait.php
        // ( Enables capabilities search to be preformed on this view )
        $search = $this->search();

        // Get the Products under the Brand ID
        $products = Product::where('brand_id', '=', $id)->get();

        // Count the products under a certain brand
        $count = $products->count();

        // From Traits/CartTrait.php
        // ( Count how many items in Cart for signed in user )
        $cart_count = $this->countProductsInCart();

        return view('brand.show', compact('products', 'brands', 'brand', 'category', 'search', 'cart_count'))->with('count', $count);
    }

}