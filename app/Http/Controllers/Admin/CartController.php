<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Course;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('cartCourse.user')->where('paid',1)->orderBy('id','DESC')->limit(30)->get();
        $PaidInvoices = Cart::with('cartCourse.user')->where('paid',0)->orderBy('id','DESC')->limit(30)->get();
        $invoices = Course::withCount(['paymentCourse' => function($que){
            return $que->whereHas('cart', function($q){
                return $q->where('paid', 1);
            });
        }])->get();



        return view('admin-panel.cart.index',compact('carts','invoices','PaidInvoices'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $model = Cart::findOrFail($id);
        return view('admin-panel.cart.edit', compact('model'));
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->update($request->all());

        return redirect()->route('invoices.index')->with(['message' => 'تم تعديل فاتورة' .' '. $cart->user_name .' ' . ' بنجاح ']);

    }

    public function destroy($id)
    {
        $carts = Cart::findOrFail($id);
        $carts->delete();

        return redirect()->route('invoices.index')->with(['delete' => 'تم حذف فاتورة' . ' ' . $carts->user_name . ' ' . ' بنجاح']);

    }
}
