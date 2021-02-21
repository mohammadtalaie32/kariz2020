<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminUserEditRequest;
use App\Http\Requests\AdminUserRequest;
use App\Models\User;
use App\Models\UserRolePivot;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view("admin.users",compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.add_users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserRequest $request)
    {
        //
        $input = $request->all();
        $input["password"] = bcrypt($request->password);
        User::create($input);
        $id = User::all()->last()->id;
        if(strtolower($input["roles"]) == "admin"){
            UserRolePivot::create(["user_id" => $id , "role_id" => 1]);
        }
        elseif(strtolower($input["roles"]) == "teacher"){
            UserRolePivot::create(["user_id" => $id , "role_id" => 2]);
        }
        elseif(strtolower($input["roles"])){

            UserRolePivot::create(["user_id" => $id ,"role_id" => 3]);
        }
        return redirect("/admin/add_users");

    }

    public function edit($id)
    {
        //
        $user = User::find($id);
        return view("admin.add_users.edit",compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUserEditRequest $request, $id)
    {
        //
        $input = $request->all();
        $user = User::find($id);
        $user->update(["name" => $input["name"] , "email" => $input["email"]]);
        $row = UserRolePivot::where("user_id" , "=" , $id);
        if(strtolower($input["roles"]) == "admin"){
            $row->update(["role_id" => 1]);
        }
        elseif(strtolower($input["roles"]) == "teacher"){
            $row->update(["role_id" => 2]);
        }
        elseif(strtolower($input["roles"]) == "student"){
            $row->update(["role_id" => 3]);
        }
        return redirect("/admin/add_users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
