<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $id = Auth::id();
        $keyword = $request->input('keyword');
        $query = Item::query();
        $query->where('user_id','=', $id );
   
        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%$keyword%")
            ->orWhere('detail', 'LIKE', "%$keyword%");
        }
      
        $items = $query->get();
       
        return view('home',compact('items','keyword'));
    }
}
