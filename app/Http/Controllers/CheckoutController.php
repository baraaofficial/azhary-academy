<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\CartCourse;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function submit_order(Request $request){
        $user_id   = Auth::user()->id;
        $data = new Cart();
        $data->snum        = $request->snum;
        $data->user_id     = $user_id;
        $data->course_id   = $request->course_id;
        $data->user_name   = $request->user_name;
        $data->user_email  = $request->user_email;
        $data->user_phone  = $request->user_phone;
        $data->total       = $request->total;
        $data->paid        = $request->paid;
        $data->f_response  = json_encode($request->f_response);
        $data->save();

        // get order id
        $cart_id = $data->id;
        foreach(session()->get('cart') as $cart_item){
            $item = new CartCourse();
            $item->user_id      = $user_id;
            $item->cart_id      = $cart_id;
            $item->course_id    = $cart_item['course_id'];
            $item->price        = $cart_item['price'];
            $item->course_name  = $cart_item['course_name'];
            $item->image        = $cart_item['image'];
            $item->save();
        }

        // delete all cart session
        session()->forget('cart');
        //return Redirect::to('cart')->with('success','yes');

        // response if order success
        $order_response['status'] = 200;
        $order_response['to_url'] = url('cart').'?success=yes';
        $order_response['info']   = 'لقد تم إستلام طلبك بنجاح ';

        return response()->json($order_response, 200);
    }

}
