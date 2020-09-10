<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;

class GetCoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $courses = Course::all();
        $subjects = Subject::all();
        Course::increment('visitor',1);

        return view('courses',compact('courses','subjects'));

    }

    public function list($id, $slug = null) {

        $course  = Course::where('id', $id)->firstOrFail();
        $payment = 0;
        if($payment == 0){
            $lessons = $course->lessons()->where('isFree', 1)->get();
        } else {
            $lessons = $course->lessons()->get();
        }
        $courses = Course::with('tags')->findOrFail($id);

        return view('lesson.list',compact('course','courses', 'lessons'));

    }
/*
    public function GetCheckOut($id ,Request $request) {

        $checkout = Course::findOrFail($id);
        if (request('id') && request('resourcePath')) {
            $payment_status = $this->getPaymentStatus(request('id'), request('resourcePath'));
            if (isset($payment_status['id'])) { //success payment id -> transaction bank id
                $showSuccessPaymentMessage = true;

                //save order in orders table with transaction id  = $payment_status['id']
                return view('getcheckout',compact('checkout'))->with(['success' =>  'تم الدفع بنجاح وعلية انت قادر على تشغيل الدورة']);
            } else {
                $showFailPaymentMessage = true;
                return view('getcheckout',compact('checkout'))->with(['fail'  => 'فشلت عميلة الدفع يرجي التحقق من البيانات وإعادة المحاوله']);
            }

        }


        return view('getcheckout',compact('checkout'));
    }

    private function getPaymentStatus($id, $resourcepath)
    {
        $url = "https://test.oppwa.com/";
        $url .= $resourcepath;
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return json_decode($responseData, true);

        }*/

    }
