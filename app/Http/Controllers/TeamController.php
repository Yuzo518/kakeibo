<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    function index(){
        $teams = Team::all();
        return view("teams.index",compact("teams"));
    }

    public function create(){
        return view("teams.create");
    }

    public function store(Request $request){
        $team = new Team();
        $team->fill($request->all());
        $team->save();
        return redirect()->route("teams.index");
    }

    function show(Team $team){
        return view("teams.show",compact("team"));
    }

    public function edit(Team $team){
        return view("teams.edit", compact("team"));
    }

    public function update(Request $request, Team $team){
        $team->fill($request->all());
        $team->save();
        return redirect()->route("teams.show",$team);
    }

    public function destroy(Team $team){
        $team->delete();
        return redirect()->route('teams.index');
    }
}
