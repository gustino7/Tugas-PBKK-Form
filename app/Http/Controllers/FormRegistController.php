<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormRegistController extends Controller
{
    public function submit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'tanggalLahir' => 'required|AfterOrEqual:01/01/2007|BeforeOrEqual:12/31/2010',
            'kodePos' => 'required|numeric|digits:5',
            'noHp' => 'required|numeric|digits_between:10,14',
            'un' => 'required|numeric|between:2.50,99.99',
            'nisn' => 'required|numeric|digits:10',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imgName = "";
        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->extension();
            $imgName = date('Y-m-d-H-i-s') . "." . $extension;
            $request->file('photo')->storeAs(
                'public/images',
                $imgName
            );
        }
        $request['photo'] = $imgName;
        // dd($request->all());
        return view('submitted', ['data' => $request, 'photo' => $imgName, 'success' => 'Form berhasil disimpan']);
        
        // return redirect('/submitted')->with(['success'=> 'Form berhasil disimpan.', 'data' => $request, 'photo' => $imgName]);
    }
}
