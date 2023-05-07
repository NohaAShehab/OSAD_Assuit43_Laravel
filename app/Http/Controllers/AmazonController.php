<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmazonController extends Controller
{
    //

    function contactus(){
        return view("amazon.contactus");
    }

    function aboutus(){
        return view('amazon.aboutus');
    }

    function productsIndex(){
        $products = [
            ["name"=>'product1', 'price'=>100, 'description'=>"p1 description"],
            ["name"=>'product2', 'price'=>200, 'description'=>"p2 description"],
            ["name"=>'product3', 'price'=>300, 'description'=>"p3 description"]

        ];

        return view("amazon.products_index", ['products'=>$products]);
    }
}
