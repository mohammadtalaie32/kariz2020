@extends("layouts.admin")
@section("content")

    <fieldset style="border: 2px solid lightgray;padding:30px;max-width:100%;">
        <form method="POST" action="/admin/add_users/update/{{$user->id}}" id="users">
            {{csrf_field()}}
            <label for="name" style="font-size:200%"> نام کاربر : </label>
            <br>
            <input type="text" size="50" name="name" style="font-size:150%;border:2px solid gray;border-radius:10px;max-width:100%" value="{{$user->name}}" required>
            <br><br>
            <label for="email" style="font-size:200%"> ایمیل کاربر : </label>
            <br>
            <input type="email" size="50" name="email" style="font-size:150%;border:2px solid gray;border-radius:10px;max-width:100%" value="{{$user->email}}" required>


            <br><br>

            <label for="roles">نقش کاربر : </label><br>
            @if($user->roles == "admin")
            <select id="roles" name="roles" form="users" class="browser-default custom-select">
                <option value="admin" id="id1" selected>Admin</option>
                <option value="teacher" id="id2">Teacher</option>
                <option value="student" id="id3">Student</option>

            </select>


            @elseif($user->roles == "teacher")
                <select id="roles" name="roles" form="users" class="browser-default custom-select">
                    <option value="admin" id="id1">Admin</option>
                    <option value="teacher" id="id2" selected>Teacher</option>
                    <option value="student" id="id3">Student</option>

                </select>


            @elseif($user->roles == "student")
                <select id="roles" name="roles" form="users" class="browser-default custom-select">
                    <option value="admin" id="id1">Admin</option>
                    <option value="teacher" id="id2" >Teacher</option>
                    <option value="student" id="id3" selected>Student</option>

                </select>
            @endif
            <br><br>
            <input type = "submit" value="به روزرسانی کاربر  " class="btn btn-primary" style="font-size:200%;max-width:100%">


        </form>
        
        <form method="DELETE" action="/admin/add_users/delete/{{$user->id}}">
            {{csrf_field()}}
            <input type="submit" value="حذف کردن کاربر " class="btn btn-info" style="font-size:200%;float:right">
        </form>

    </fieldset>


@endsection
