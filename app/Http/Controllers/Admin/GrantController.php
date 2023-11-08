<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grant;
use Illuminate\Http\Request;

class GrantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grants = Grant::paginate(3);
       // @dd($grants);
        return view('admin.grants.index', compact('grants'));
   
   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.grants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        Grant::create($requestData);

        return redirect()->route('admin.grants.index')->with('success', 'Yangilik qo`shildi');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $grants = Grant::find($id);

        return view('admin.grants.show', compact('grants'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grant $grant)
    {
        return view('admin.grants.edit', compact('grant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Grant::find($id)->update($request->all());

        return redirect()->route('admin.grants.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Grant::find($id)->delete();

        return redirect()->route('admin.grants.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }
}
