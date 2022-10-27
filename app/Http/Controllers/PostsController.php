<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    //     {
    //         return view('blog.index');
    //     }
    // }

    public function index()
    {
        $posts= Post::all();
        return view('blog.index',compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        {
            return view('blog.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $entries =$request->all();
        // dd($entries);

        // $title=$request->input('title');
        // dd($title);

        $request->validate([
            'title'=> 'required|unique:posts|max:255',
            'imagep' => 'required|image|mimes:jpg,png,jpg',
            'body'=>'required'
        ]);

    $title = $request-> input('title');
    $slug = Str::slug($title,'-');
    $body = $request-> input('body');

    //Image Upload
    $imagePath= 'storage/'.$request->file('imagep') -> store('postImages','public');

    //Post and Save Inputs.
    $post = new Post();
    $post -> title = $title;
    $post -> imagePath = $imagePath;
    $post -> body= $body;
    $post -> slug =$slug;
    $post -> save();
    
    return redirect()->back()->with('status' , 'Blog successfully saved.');



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
    public function edit()
    {
        //
        {
            return view('blog.edit');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
