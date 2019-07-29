<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\GoodsModel;
class IndexController extends Controller
{
    //
    public function index(){
//        echo '123';
//        echo phpinfo();die;
        $a = GoodsModel::where(['is_new' => 2])->get();

        $b = GoodsModel::where(['is_up'=>2])->get();
//        var_dump($b);
        return view('index.index',['a' =>$a,'b' => $b]);
    }
}
