<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $rView = 'backend.groups.';

    protected $model;

    public function __construct(Group $model)
    {
        return $this->model = $model;
    }

    public function index(){
        $teams = Team::all();
        $users = User::all();
        return view($this->rView.'index',compact('teams','users'));
    }

    public function store(Request $request)
    {
        $this->model->create($request->all());
        return back()->with('create', 'Bet Successfully');
    }

}
