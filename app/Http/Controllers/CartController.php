<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $data['page_title']  = 'عربة التسوق';
        $data['cart_items']  = session()->get('cart');
        $data['order_total'] = 0;
        $data['loop_num']    = 1;
        $data['cart_tab']    = 0;
        return view('cart',$data);
    }

    public function add_to_cart($course_id = NULL){
        // get course info
        $course_info = Course::find($course_id);
        // get cart items from session
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart){
            $cart = [
                $course_id => [
                    "course_id"   => $course_info->id,
                    "course_name" => $course_info->name,
                    "price"       => $course_info->price,
                    "image"       => $course_info->image
                ]
            ];
            $notify_msg = 'تم إضافة الدورة إلى عربة التسوق بنجاح';
        }else{
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$course_id])){
                $notify_msg = 'هذة الدورة موجود من قبل فى عربة التسوق';
            }else{
                // if item not exist in cart then add to cart with quantity = 1
                $cart[$course_id] = [
                    "course_id"   => $course_info->id,
                    "course_name" => $course_info->name,
                    "price"       => $course_info->price,
                    "image"       => $course_info->image
                ];
            }
            $notify_msg = 'تم إضافة الدورة إلى عربة التسوق بنجاح';
        }

        //put products to session cart
        session()->put('cart', $cart);

        // get cart items
        $cart_items = session()->get('cart');
        $list_items = '';
        $cart_total = 0;
        if(count($cart_items) > 0){
            foreach($cart_items as $item){
                $cart_total += $item['price'];
                $list_items .='
                <div class="top-cart-items">
                    <div class="top-cart-item clearfix">
                        <div class="top-cart-item-image">
                            <a href="'.url('/courses',$item['course_id']).'" title="'.$item['course_name'].'"><img src="'.url($item['image']).'" alt="'.$item['course_name'].'" /></a>
                        </div>
                        <div class="top-cart-item-desc">
                            <a href="'.url('/courses',$item['course_id']).'" title="'.$item['course_name'].'">'.$item['course_name'].'</a>
                            <span class="top-cart-item-price">'.$item['price'].'</span>
                        </div>
                    </div>
                </div>';
            }
        }

        if(count($cart_items) > 0){
            $response['status']    = 200;
            $response['list_items']= $list_items;
            $response['notify_msg']= $notify_msg;
            $response['num_items'] = count($cart_items);
            $response['cart_total']= $cart_total;
        }else{
            $response['status'] = 500;
        }
        return response()->json($response, 200, array('Content-Type'=>'application/json; charset=utf-8' ));
    }

    public function delete_from_cart($product_id = NULL){
        $cart = session()->get('cart');
        if(isset($_GET['remove_cart_item'])){
            if(isset($cart[$product_id])) {
                unset($cart[$product_id]);
                session()->put('cart', $cart);
            }
            return back()->with('Successfully','تم الحذف بنجاح');
        }else{
            if(isset($cart[$product_id])) {
                unset($cart[$product_id]);
                session()->put('cart', $cart);
            }
        }
        // get cart items

        $cart_items = session()->get('cart');
        $list_items = '';
        $cart_total = 0;
        if(count($cart_items) > 0){
            foreach($cart_items as $item){
                $cart_total += $item['price'];
                $list_items .='
                <div class="top-cart-items">
                    <div class="top-cart-item clearfix">
                        <div class="top-cart-item-image">
                            <a href="'.url('/courses',$item['course_id']).'" title="'.$item['course_name'].'"><img src="'.url($item['image']).'" alt="'.$item['course_name'].'" /></a>
                        </div>
                        <div class="top-cart-item-desc">
                            <a href="'.url('/courses',$item['course_id']).'" title="'.$item['course_name'].'">'.$item['course_name'].'</a>
                            <span class="top-cart-item-price">'.$item['price'].'</span>
                        </div>
                    </div>
                </div>';
            }
        }else{
            $list_items .='
            <div class="cart-product">
            <div class="cart-title clearfix">
                <strong>لا يوجد دورات فى عربة التسوق لديك </strong>
            </div>
        </div>';
        }

        $response['status']    = 200;
        $response['list_items']= $list_items;
        $response['notify_msg']= 'تم حذف الدورة من عربة التسوق بنجاح';
        $response['num_items'] = count($cart_items);
        $response['cart_total']= $cart_total;
        return response()->json($response, 200);

    }

}// end of main
