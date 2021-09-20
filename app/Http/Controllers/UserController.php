<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    function index(){
        $users = User::all();
        $teams = $this->createTeams();
        return view("users.index",compact("users","teams"));
    }

    function show(User $user){
        $teams = $this->createTeams();
        return view("users.show",compact("user","teams"));
    }

    public function edit(User $user){
        $teams = $this->createTeams();
        return view("users.edit", compact("user","teams"));
    }

    public function update(Request $request, User $user){
        $user->name    = $request->input("name");
        $user->teams_id = $request->input("teams_id");
        $user->save();
        return redirect()->route("users.show",$user );
    }

    private function createTeams(){
        $teams_db = Team::all();
        $teams = [];
        foreach($teams_db as $team){
            $teams[$team->id] = $team->name;
        }
        return $teams;
    }
}
