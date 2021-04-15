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


    public function is_inti($value){


        if (!filter_var($value, FILTER_VALIDATE_INT) === false and (int)$value > 0) {
            return true;
        } else {
            return false;
        }
    }

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
        return redirect("/admin/add_users");

    }

    public function edit($id)
    {
        //
        if($this->is_inti($id) == true){
        $user = User::find($id);
        return view("admin.add_users.edit",compact('user'));
        }
        else{
            return redirect("/");
        }
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
        if($this->is_inti($id) == true){
        $input = $request->all();
        $user = User::find($id);
        $user->update(["name" => $input["name"] , "email" => $input["email"],"roles"=>$input["roles"]]);
 
        return redirect("/admin/add_users");
        }
        else{
            return redirect("/");
        }
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
        if($this->is_inti($id) == true){
        $user = User::find($id);
        $user->delete();
        return redirect("/admin/add_users");
        }
        else{
            return redirect("/");
        }
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
