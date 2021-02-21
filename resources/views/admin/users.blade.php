@extends("layouts.admin")

@section("content")


    <div class="row mb-3">
        <div class="col-md-2 mr-3 pt-3 pb-1" style="text-align:center;background-color:rebeccapurple;color:white;border-radius: 10px">
            <a href="/admin/add_users/create"> <h5>ایجاد کاربر جدید</h5></a>
        </div>


    </div>



{{--@foreach($users as $user)--}}
{{--    <div style="background-color:rebeccapurple;border-radius:10px;word-wrap:break-word;overflow:hidden;max-width:100%">--}}
{{--        <h3><a href="/admin/add_users/{{$user->id}}/edit" style="color:red"> {{$user->name}}</a></h3>--}}
{{--        <h3 style="color:white">{{$user->email}}</h3>--}}
{{--        <h3 style="color:black">{{($user->Role)[0]["role_name"]}}</h3>--}}

{{--    </div>--}}

{{--    <br>--}}
{{--@endforeach--}}
<?php
    $count = 1;
?>
    <div class="container">

        <table class="table table-hover table-striped table-info" id="table_content">
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
                   <td>{{($user->Role)[0]["role_name"]}}</td>
                   <td>{{$user->email}}</td>
                   <td><a href="/admin/add_users/{{$user->id}}/edit" style="color:#8b92a9"> {{$user->name}}</a></td>
                   <td>{{$count++}}</td>
               </tr>

           @endforeach
            </tbody>
        </table>
    </div>
@endsection
