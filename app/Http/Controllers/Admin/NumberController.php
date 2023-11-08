<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function index($id){

        $number = Number::find($id)->first();
        return view('admin.numbers', compact('number'));
    }

    public function update(Request $request, $id){
        Number::find($id)->update($request->all());
        return back()->with('success', 'Ma`lumotlar o`zgartirildi');
    }
}
