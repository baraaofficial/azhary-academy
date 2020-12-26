<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notifications(Request $request)
    {
        $notifications = $request->user()->notifications()
            ->where(function ($query) use ($request)
        {$query
            ->where('is_read',0);})->latest()->limit(20)->get();

        if(empty($notifications->is_read) == 0) {
            $notifications->update(['is_read' => 1]);
        }

        return view('notification',compact('notifications'));
    }

    public function notificationsCount(Request $request)
    {
        $count = $request->user()->notifications()
            ->where(function ($query) use ($request)
            {$query->where('is_read',0);})->count();
        return view('notification',compact('count'));

    }

}
