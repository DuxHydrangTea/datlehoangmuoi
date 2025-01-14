<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKEditorController extends Controller
{
    //
    public function CKEditorUploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $url = asset('images/' . $fileName);
            return response()->json([
                'fileName' => $fileName,
                'uploaded' => 1,
                'url' => $url,
            ]);
        }
    }

}