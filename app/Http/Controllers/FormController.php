<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {

        $forms = Form::all()->sortByDesc('id');
        return view('client.form.index', compact('forms'));
    }
    //
    public function send(Request $request)
    {
        Form::create([
            ...$request->all(),
            "agree" => $request->agree === "on" ? 1 : 0,
        ]);
        return redirect()->route('index')->with('message', 'Gửi thông tin thành công \nChúc quý khách ngày mới tốt lành!');
    }
    public function markRead($id)
    {
        $form = Form::find($id);
        $form->update([
            'read_at' => now(),
        ]);
        return redirect()->back();
    }
}