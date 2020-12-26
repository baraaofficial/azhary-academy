<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact_us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function index()
    {
        $contact_us = Contact_us::all();


        return view('admin-panel.contact_us.index',compact('contact_us'));
    }
    

    public function show($id)
    {
        $contact_us = Contact_us::findOrFail($id);
        if($contact_us->is_read == 0) {
            $contact_us->update(['is_read' => 1]);
        }
        return view('admin-panel.contact_us.show',compact('contact_us'));
    }


    public function destroy($id)
    {
        $contact_us = Contact_us::find($id);
        $contact_us->delete();

        return redirect(route('contactus.index'))->with(['delete' => 'تم حذف الرسالة بنجاح']);
    }
}
