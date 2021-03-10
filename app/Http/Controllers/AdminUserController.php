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
//            UserRolePivot::create(["user_id" => $id , "role_id" => 1]);
              $pivot = new UserRolePivot;
              $pivot->user_id = $id;
              $pivot->role_id = 1;
              $pivot->save();
        }
        elseif(strtolower($input["roles"]) == "teacher"){
//            UserRolePivot::create(["user_id" => $id , "role_id" => 2]);
            $pivot = new UserRolePivot;
            $pivot->user_id = $id;
            $pivot->role_id = 2;
            $pivot->save();
        }
        elseif(strtolower($input["roles"])){

//            UserRolePivot::create(["user_id" => $id ,"role_id" => 3]);
            $pivot = new UserRolePivot;
            $pivot->user_id = $id;
            $pivot->role_id = 3;
            $pivot->save();
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
        $user = User::find($id);
        $user->delete();
        $role = UserRolePivot::where("user_id" , "=" , $id)->delete();
        return redirect("/admin/add_users");
    }

    public function keyword($string1,$string2){
        similar_text($string1,$string2,$percent);
        if($percent >= 80){
            return true;
        }
        else{
            return false;
        }
    }

    public function search(Request $request){
        $request->validate(['searched_user'=>'required']);
        $input = $request->all();
        $users = User::all();
        $searched_users = [];
        $i = 0;
        if($input['searched_user'] != null) {
            foreach ($users as $user) {
                if (str_contains($user['name'], $input['searched_user']) or   (str_contains($input['searched_user'],$user['name'])) or $this->keyword($input['searched_user'],$user['name'])) {
                    $searched_users[$i] = $user;
                    $i += 1;
                }
            }
            return view('admin.add_users.search',compact('searched_users'));
        }

        else {
            return view('admin.add_users.search', compact('searched_users'));
        }
    }

}
