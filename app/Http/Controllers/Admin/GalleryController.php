<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::paginate(8);
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        $request->validate([
            'img' => 'mimes:png,jpg'
        ]);

        if($request->hasFile('img'))
            $requestData['img'] = $this->upload_file();

        Gallery::create($requestData);

        return redirect()->route('admin.galleries.index')->with('success', 'Rasm qo`shildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $this->unlink_file($gallery);

            $requestData['img'] = $this->upload_file();
        }

        $gallery->update($requestData);

        return redirect()->route('admin.galleries.index')->with('success', 'Ma`lumot tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $this->unlink_file($gallery);

        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('danger', 'O`chirildi !');
    }

    public function unlink_file(Gallery $gallery){
        if(isset($gallery->img) && file_exists(public_path('/images/'.$gallery->img)))
        {
            unlink(public_path('/images/'.$gallery->img));
        }
    }

    public function upload_file(){
        $file = request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('images/', $fileName);
        return $fileName;
    }
}
