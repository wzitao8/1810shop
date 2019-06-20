<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    //
    public function goodslist(){
        return view('list.productlist');
    }

    //详情
    public function goodsInfo(){
        return view('list.shopsingle');

    }

    public function wishlist(){
        return view('list.wishlist');

    }
}
