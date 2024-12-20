<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $about = About::latest()->first();
        return view('client.about.index', compact('about'));
    }
    public function edit()
    {
        $about = About::latest()->first();
        return view('client.about.edit', compact('about'));
    }
    public function update(Request $request)
    {
        $about = About::create($request->all());
        return redirect()->route('introduce');
    }
}