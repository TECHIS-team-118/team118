<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;

class ItemController extends Controller
{
    /**
     * @param Request $request
     * @return Response
    */
    

    public function index(){
        $items = Item::all();
        return view('items.index',compact('items'));
    }

    public function register(Request $request)
        {  
            
            return view('items.register');
        }
        //商品登録
    public function postRegister(Request $request)
        {
            Item::create([
            'name'=>$request->name,
            'status'=>$request->status,
            'type'=>$request->type,
            'detail'=>$request->detail,
            ]);
            return redirect()->route('items');
        }   
}