<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function is_inti($value){


        if (!filter_var($value, FILTER_VALIDATE_INT) === false and (int)$value > 0) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCourseRequest $request)
    {
        //

        $input = $request->all();

        if(array_key_exists('picture', $input)) {
            $name = $request->file('picture')->getClientOriginalName();
            $name = basename($name);
            $request->file('picture')->move('images', $name);
            $input['picture'] = $name;
        }
        Course::create($input);
        return redirect('/admin/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if($this->is_inti($id) == true){
        $course = Course::find($id);
        return view('admin.courses.edit',compact('course'));
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
    public function update(AdminCourseRequest $request, $id)
    {
        //
        if($this->is_inti($id) == true){
        $course = Course::find($id);
        $input = $request->all();
        if(array_key_exists('picture',$input)) {
            $name = $request->file('picture')->getClientOriginalName();
            $name = basename($name);
            $request->file('picture')->move('images', $name);
            $input['picture'] = $name;
        }
        $course->update($input);
        return redirect('/admin/courses');
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
        if($this->is_inti($id)){
        $course  = Course::find($id);
//        if($course['picture'] != 'Null') {
//            unlink('images/' . $course->picture);
//        }
        $course->delete();
        return redirect('/admin/courses');
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
        $request->validate(['searched_course'=>'required']);
        $input = $request->all();
        $courses = Course::all();
//        if($input['searched_course'] != null){
//            $searched_courses = $courses->where('name','=',$input['searched_course']);
//            if(count($searched_courses) == 0 ){
//                $searched_courses = $courses->where('teacher','=',$input['searched_course']);
//            }
//            return view('admin.courses.search',compact('searched_courses'));
//        }
//        else{
//            $searched_courses = $courses->where('name','=',$input['searched_course']);
//            return view('admin.courses.search',compact('searched_courses'));
//        }
        $searched_courses = [];
        $i = 0;
        if($input['searched_course'] != null) {
            foreach ($courses as $course) {
                if (str_contains($course['name'], $input['searched_course']) or (str_contains($course['teacher'], $input['searched_course'])) or str_contains($input['searched_course'],$course['name']) or str_contains($input['searched_course'],$course['teacher']) or $this->keyword($input['searched_course'],$course['name']) or $this->keyword($input['searched_course'],$course['teacher'])) {
                    $searched_courses[$i] = $course;
                    $i += 1;
                }
            }
            return view('admin.courses.search',compact('searched_courses'));
        }
        else {
            return view('admin.courses.search', compact('searched_courses'));
        }
    }
}
