<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::paginate(8);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $requestData = $request->all();

        $request->validate([
            'title_uz' => 'required',
            'img' => 'mimes:png,jpg'
        ]);

        if($request->hasFile('img'))
            $requestData['img'] = $this->upload_file();

        News::create($requestData);

        return redirect()->route('admin.news.index')->with('success', 'Yangilik qo`shildi');

    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $this->unlink_file($news);

            $requestData['img'] = $this->upload_file();
        }

        $news->update($requestData);

        return redirect()->route('admin.news.index')->with('success', 'Ma`lumot tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $this->unlink_file($news);

        $news->delete();

        return redirect()->route('admin.news.index')->with('danger', 'O`chirildi !');
    }

    public function unlink_file(News $news){
        if(isset($news->img) && file_exists(public_path('/images/'.$news->img)))
        {
            unlink(public_path('/images/'.$news->img));
        }
    }

    public function upload_file(){
        $file = request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('images/', $fileName);
        return $fileName;
    }
}
