<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminFeedRequest;
use App\Models\Feed;
use Illuminate\Http\Request;

class AdminFeedController extends Controller
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
        return view('admin.feeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminFeedRequest $request)
    {
        //
        $input = $request->all();

        if(array_key_exists('picture', $input)) {
            $name = $request->file('picture')->getClientOriginalName();
            $name = basename($name);
            $request->file('picture')->move('images', $name);
            $input['picture'] = $name;
        }
        Feed::create($input);
        return redirect('/admin/feeds');
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
        $feed  = Feed::find($id);
        return view('admin.feeds.edit',compact('feed'));
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
    public function update(AdminFeedRequest $request, $id)
    {
        //
        if($this->is_inti($id) == true){
        $feed = Feed::find($id);
        $input = $request->all();
        if(array_key_exists('picture',$input)) {
            $name = $request->file('picture')->getClientOriginalName();
            $name = basename($name);
            $request->file('picture')->move('images', $name);
            $input['picture'] = $name;
        }
        $feed->update($input);
        return redirect('/admin/feeds');
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
        $feed  = Feed::find($id);
        $feed->delete();
        return redirect('/admin/feeds');
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



    public function search(Request $request)
    {
        $request->validate(['searched_feed'=>'required']);
        $input = $request->all();
        $feeds = Feed::all();
        $searched_feeds = [];
        $i = 0;
        //$List = preg_split('/[-\s ]/',$input['searched_feed']);

        if ($input['searched_feed'] != null) {
            foreach ($feeds as $feed) {
                if (str_contains($feed['title'], $input['searched_feed']) or (str_contains($input['searched_feed'], $feed['title'])) or $this->keyword($input['searched_feed'],$feed['title'])) {
                    $searched_feeds[$i] = $feed;
                    $i += 1;
                }
            }
            return view('admin.feeds.search', compact('searched_feeds'));
        } else {
            return view('admin.feeds.search', compact('searched_feeds'));
        }

    }
}
