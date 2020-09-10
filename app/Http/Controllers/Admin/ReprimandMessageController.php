<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReprimandMessage;
use Illuminate\Http\Request;

class ReprimandMessageController extends Controller
{

    public function index()
    {
        $reprimand_message = ReprimandMessage::all();
        return view('admin-panel.reprimand_message.index',compact('reprimand_message'));
    }

    public function create()
    {
        return view('admin-panel.reprimand_message.create');
    }


    public function store(Request $request)
    {
        $rules = [
            'body'              => 'required|min:3|max:255',
        ];
        $message = [
            // validation Name

            'body.required'     => 'عنوان الرسالة مطلوب',
            'body.min'          => 'يجب ان يكون عنوان الرسالة اكثر من 3 أحرف',
            'body.max'          => 'يجب أن يكون عنوان الرسالة اقل من 255 حرف',
        ];
        $this->validate($request, $rules,$message);

        $reprimand_message = ReprimandMessage::create($request->all());
        return redirect()->route('reprimand-message.index')->with(['message' => 'تم إنشاء رسالة بعنوان '.' '.$reprimand_message->body .' '. ' بنجاح']);

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $model = ReprimandMessage::findOrFail($id);
        return view('admin-panel.reprimand_message.edit', compact('model'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'body'             => 'required|min:3|max:255',
        ];
        $message = [
            // validation Body

            'body.required'     => 'عنوان الرسالة  مطلوب',
            'body.min'          => 'يجب ان يكون عنوان الرسالة اكثر من 3 أحرف',
            'body.max'          => 'يجب أن يكون عنوان الرسالة اقل من 255 حرف',

        ];
        $this->validate($request, $rules,$message);

        $reprimand_message = ReprimandMessage::findOrFail($id);
        $reprimand_message->update($request->all());

        return redirect()->route('reprimand-message.index')->with(['message' => 'تم تعديل الرسالة عنوان '.' '. $reprimand_message->body .' '. ' بنجاح']);

    }


    public function destroy($id)
    {
        $reprimand_message = ReprimandMessage::findOrFail($id);
        $reprimand_message->delete();

        return redirect()->route('reprimand-message.index')->with(['delete' => 'تم حذف الرسالة بعنوان '.' '.$reprimand_message->body .' '. ' بنجاح']);

    }
}
