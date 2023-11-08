<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::paginate(8);
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $requestData = $request->all();

        

        if($request->hasFile('img'))
            $requestData['img'] = $this->upload_file();

        Team::create($requestData);

        return redirect()->route('admin.teams.index')->with('success', 'Rahbariyat a`zosi qo`shildi');

    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('admin.teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $this->unlink_file($team);

            $requestData['img'] = $this->upload_file();
        }

        $team->update($requestData);

        return redirect()->route('admin.teams.index')->with('success', 'Ma`lumot tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $this->unlink_file($team);

        $team->delete();

        return redirect()->route('admin.teams.index')->with('danger', 'O`chirildi !');
    }

    public function unlink_file(Team $team){
        if(isset($team->img) && file_exists(public_path('/images/'.$team->img)))
        {
            unlink(public_path('/images/'.$team->img));
        }
    }

    public function upload_file(){
        $file = request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('images/', $fileName);
        return $fileName;
    }
}
