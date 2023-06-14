<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users;
    private $user;
    public function index()
    {
        return view("admin.user.add");
    }

    public function create(Request $request)
    {
        User::newUser($request);
        return redirect("/add-user")->with('message', 'User info create successfully');
    }

    
    public function manage()
    {
        $this->user = User::all();
        
        return view("admin.user.manage", ["users" => $this->user]);
    }

    public function edit($id)
    {
        $this->user = User::find($id);
        return view("admin.user.edit", ["user" => $this->user]);
    }

    public function updete(Request $request, $id)
    {
        User::updatedUser($request, $id);
        return redirect("/manage-user")->with("message", "User info updete successfully");
    }

    public function delete($id)
    {
        $this->user = User::find($id);
        $this->user->delete();
        return redirect("/manage-user")->with("message", "User info delete successfully");
    }
}
