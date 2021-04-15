@extends("layouts.admin")
@section("content")
    @if(count($searched_users) > 0)
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
                @foreach($searched_users as $searched_user)
                    <tr id="row_content" onclick="window.location.href = ('/admin/add_users/{{$searched_user->id}}/edit');">
                        <td style="color:white">{{$searched_user->roles}}</td>
                        <td style="color:white">{{$searched_user->email}}</td>
                        <td style="color:white"> {{$searched_user->name}}</td>
                        <td style="color:white">{{$count++}}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <h2 style="color:white">هیچ کاربری با این نام پیدا نشد</h2>
    @endif


@endsection
