<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;

class TinTucController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	
    	return view('admin.tintucs.index', ['posts' => $posts]);
    }

    public function create()
    {
    	return view('admin.tintucs.create');
    }

    public function store()
    {
	    $rules = array(
	        'title' => 'required',
	        'short_description' => 'required',
	        'content' => 'required'
	    );

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()) {
	        return Redirect::to('admin/tintuc/create')
	            ->withErrors($validator)
	            ->withInput();
	    } else {
	        // store
	        $post = new Post;
	        $post->title = Input::get('title');
	        $post->short_description = Input::get('short_description');
	        $post->content = Input::get('content');
	        $post->save();

	        // redirect
	        Session::flash('message', 'Tạo thành công bài đăng !');
	        return Redirect::to('admin/tintuc');
	    }
	}

    public function edit($id)
    {
    	$post = Post::find($id);

    	return view('admin.tintucs.edit', ['post' => $post]);
    }

    public function update($id)
    {
    	$rules = array(
	        'title' => 'required',
	        'short_description' => 'required',
	        'content' => 'required'
	    );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/tintuc/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $post = Post::find($id);
            $post->title = Input::get('title');
	        $post->short_description = Input::get('short_description');
	        $post->content = Input::get('content');
	        $post->save();

            // redirect
            Session::flash('message', 'Cập nhật bài đăng thành công !');
            return Redirect::to('admin/tintuc');
        }
    }

    public function destroy($id)
    {
    	$post = Post::find($id);
        $post->delete();

        // redirect
        Session::flash('message', 'Xóa bài đăng thành công !');
        return Redirect::to('admin/tintuc');
    }
}
