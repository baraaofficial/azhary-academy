<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Tag;
use App\Models\User;
use App\Models\VisitorHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{


    public function index()
    {
        VisitorHome::increment('visitor',1);
        return view('home');
    }

    public function commentUpdate($id , Request $request){
        $comment = Comment::findOrFail($id);
        if(($comment->user_id == auth()->user()->id) || auth()->user()->group == 'admin'){
            $comment->update(['comment' => $request->comment]);
        }
        return redirect()->route('lesson.single' ,['id' => $comment->lesson_id,'#comment'])->with(['message' => 'تم إضافة التعليق بنجاح']);
    }

    public function commentStore($id , Request $request){
        $lesson = Lesson::findOrFail($id);
        Comment::create([
            'user_id' => auth()->user()->id,
            'lesson_id' => $lesson->id,
            'comment' => $request->comment
        ]);
        return redirect()->route('lesson.single' ,['id' => $lesson->id,'#comment'])->with(['message' => 'تم إضافة التعليق بنجاح']);
    }

    public function commentDelete($id){
        $row  = Comment::findOrFail($id);
        $row->delete();
        return redirect()->route('lesson.single' ,['id' => $row->lesson_id,'#comment'])->with(['message' => 'تم إضافة التعليق بنجاح']);

    }
    public function profile($id , $slug = null){
        $user = User::findOrFail($id);
        return view('admin' , compact('user'));
    }

    public function profileUpdate(Request $request){
        $user = User::findOrFail(auth()->user()->id);
        $array = [];
        if($request->email != $user->email){
            $email = User::where('email' , $request->email)->first();
            if($email == null){
                $array['email'] =  $request->email;
            }
        }
        if($request->name != $user->name){
            $array['name'] =  $request->name;
        }

        if($request->phone != $user->phone){
            $array['phone'] =  $request->phone;
        }

        if($request->bio != $user->bio){
            $array['bio'] =  $request->bio;
        }

        if($request->password != ''){
            $array['password'] =  Hash::make($request->password);
        }

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 398)->save( 'uploads/users/'.$filename );
            $user->image = $filename;
            $user->save();
        }
        if(!empty($array)){
            $user->update($array);
        }
        return redirect()->route('profile.index' , ['id' => $user->id ]);
    }


}
