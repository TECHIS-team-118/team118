<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller{
  
    public function index(){
        $items = Item::all();
        return view('items.index',compact('items'));
    }

    public function register(){  
        return view('items.register');
    }

    //商品登録
    public function create(Request $request){
        $user_id=Auth::id();
        Item::create([
         'name'=>$request->name,
         'status'=>$request->status,
         'type'=>$request->type,
         'detail'=>$request->detail,
         'user_id'=>$user_id
        ]);

        return redirect()->route('home');
    }

    //商品編集
    public function edit($id){
        // find Item
        $item = Item::find($id);

        return view('items.edit',compact('item'));
    }

    public function update(Request $request,$id){
        $item=Item::find($id);
        
        $item->update([
            'name'=>$request->name,
            'status'=>$request->status,
            'type'=>$request->type,
            'detail'=>$request->detail,
            ]);

        return redirect()->route('home');
    }
}