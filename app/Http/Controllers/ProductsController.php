<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    //

    public function index() {

       /* $products = [0=> ["name"=>"Lettuce Dress", "category"=>"Women Clothing","price"=>"600"],
        1=> ["name"=>"Casual Mini Pink Dress", "category"=>"Women Clothing","price"=>"750"],
        2=> ["name"=>"Bangkok-inspired Floral Dress", "category"=>"Women Clothing","price"=>"800"]]; */


        $products = Product::all();

        return view("allproducts", compact("products"));
    }

}
