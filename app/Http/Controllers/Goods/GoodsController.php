<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\GoodsModel;
use DB;
class GoodsController extends Controller
{
    //
    public function goodslist(){
//        $a = GoodsModel::get()->paginate(2);
//        dd($a);
        $a=DB::table('shop_goods')->paginate(8);

        return view('list.productlist',['a' =>$a]);
    }

    //详情
    public function goodsInfo($id){
        $b = GoodsModel::where(['goods_id'=>$id])->first();
//        var_dump($b);
        return view('list.shopsingle',['b'=>$b]);

    }

    public function wishlist(){
        return view('list.wishlist');

    }
}
