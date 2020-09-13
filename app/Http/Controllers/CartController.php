<?php

namespace App\Http\Controllers;

use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;

use App\Models\Course;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {

        return view('cart');

    }

    public function store(Request $request) {

        Cart::add($request->id, $request->name, $request->price, 1)->associate('App\Models\Course');
        Cart::store($request->id, $request->name, $request->price, 1);
         return view('cart')->with('message','لقد أضفت دورة إلى السلة');
    }

    public function destroy($id){
        Cart::remove($id);
        return back()->with('message' ,'تم حذف المنتج');
    }
}
