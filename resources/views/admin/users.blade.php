@extends("layouts.admin")

@section("content")
    <div>
        <form method = "POST" action="/admin/add_users/searched">
            {{csrf_field()}}
            <input style="margin-right:0px;padding-right:20px;padding-left: 20px" type="text" name="searched_user" name="browser" placeholder="نام کاربر جست و جو کنید ..." list="browsers" class="animate">
            <input hidden type="submit" value="جستجو" class="btn btn-primary" >
        </form>
    </div><br><br><br>

    <div class="row mb-3">
        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/add_users/create"> <h5>ایجاد کاربر جدید</h5></a>
        </div>


    </div>




<?php
    $count = 1;
?>
    <div class="container">

        <table class="table table-hover table-striped table-dark" id="table_content">
            <thead>
            <tr id="head_content">
                <th>Role</th>
                <th>Email</th>
                <th>User Name</th>
                <th>Id</th>
            </tr>
            </thead>
            <tbody>
           @foreach($users as $user)
               <tr id="row_content" onclick="window.location.href = ('/admin/add_users/{{$user->id}}/edit');">
                   <td style="color:white">{{$user->roles}}</td>
                   <td style="color:white">{{$user->email}}</td>
                   <td style="color:white"> {{$user->name}}</td>
                   <td style="color:white">{{$count++}}</td>
               </tr>

           @endforeach
            </tbody>
        </table>
    </div>
@endsection
