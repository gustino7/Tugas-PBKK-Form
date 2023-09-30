<?php

namespace App\Http\Controllers;

use App\Models\Form;
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

        Form::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'jalan' => $request->jalan,
            'kecamatan' => $request->kecamatan, 
            'kota' => $request->kota, 
            'provinsi' => $request->provinsi, 
            'kodePos' => $request->kodePos, 
            'negara' => $request->negara, 
            'tanggalLahir' => $request->tanggalLahir, 
            'email' => $request->email, 
            'noHp' => $request->noHp, 
            'nisn' => $request->nisn, 
            'un' => $request->un, 
            'photo' => $imgName
        ]);
        $datas = Form::where('nisn', $request->nisn)->first();
        return view('submitted', ['datas' => $datas, 'success' => 'Form berhasil disimpan']);
    }
}
