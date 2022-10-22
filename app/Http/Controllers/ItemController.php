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
    

    public function index(Request $request){
        $items = Item::all();

        $keyword = $request->input('keyword');
        $query = Item::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%$keyword%")
            ->orWhere('detail', 'LIKE', "%$keyword%");
        }
        $items = $query->get();
        return view('items.index',compact('items','keyword'));

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