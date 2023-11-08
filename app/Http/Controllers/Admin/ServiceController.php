<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(8);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
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

        if($request->hasFile('icon'))
            $requestData['icon'] = $this->upload_file();

        Service::create($requestData);

        return redirect()->route('admin.services.index')->with('success', 'Yangilik qo`shildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $this->unlink_file($service);

            $requestData['icon'] = $this->upload_file();
        }

        $service->update($requestData);

        return redirect()->route('admin.services.index')->with('success', 'Ma`lumot tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $this->unlink_file($service);

        $service->delete();

        return redirect()->route('admin.services.index')->with('danger', 'O`chirildi !');
    }

    // Extra functions

    public function unlink_file(Service $service){
        if(isset($service->icon) && file_exists(public_path('/icons/'.$service->icon)))
        {
            unlink(public_path('/icons/'.$service->icon));
        }
    }

    public function upload_file(){
        $file = request()->file('icon');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('icons/', $fileName);
        return $fileName;
    }
}
