<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function cart(Request $request){
        $goods_id = $request ->input('goods_id');
        $goods_num = $request  -> input('goods_num');
        echo $goods_id;
        echo '<hr/>';
        echo $goods_num;
        return view('list.cart');
    }

}
