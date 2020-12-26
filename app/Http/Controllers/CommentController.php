<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

trait Comment {

    public function commentStore(Request $request){
        $requestArray = $request->all() + ["user_id" => auth()->user()->id];
        Comment::create($requestArray);
        return redirect()->route('lesson.single' , ['id' => $requestArray['lesson_id'] , '#comments']);
    }

    public function commentDelete($id){
        $row  = Comment::findOrFail($id);
        $row->delete();
        return redirect()->route('lesson.single' , ['id' => $row->lesson_id , '#comments']);
    }

    public function commentUpdate($id , Request $request){
        $row  = Comment::findOrFail($id);
        $row->update($request->all());
        return redirect()->route('lesson.single' , ['id' => $row->lesson_id , '#comments']);
    }
}
