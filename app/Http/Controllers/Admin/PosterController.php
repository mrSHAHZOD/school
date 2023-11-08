<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poster;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posters = Poster::latest()->paginate(8);
        return view('admin.posters.index', compact('posters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
        ]);

        Poster::create($request->all());

        return redirect()->route('admin.posters.index')->with('success', 'E`lon qo`shildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Poster $poster)
    {
        return view('admin.posters.show', compact('poster'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poster $poster)
    {
        return view('admin.posters.edit', compact('poster'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poster $poster)
    {
        $poster->update($request->all());

        return redirect()->route('admin.posters.index')->with('success', 'Ma`lumot tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poster $poster)
    {
        $poster->delete();

        return redirect()->route('admin.posters.index')->with('danger', 'O`chirildi !');
    }
}
