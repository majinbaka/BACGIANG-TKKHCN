<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\LinkedWebsite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;

class LienketController extends Controller
{
    public function index()
    {
    	$links = LinkedWebsite::all();
    	
    	return view('admin.lienketwebsite.index', ['links' => $links]);
    }

    public function create()
    {
    	return view('admin.lienketwebsite.create');
    }

    public function store()
    {
	    $rules = array(
	        'title' => 'required',
	        'url' => 'required'
	    );

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()) {
	        return Redirect::to('admin/lienket/create')
	            ->withErrors($validator)
	            ->withInput();
	    } else {
	        // store
	        $link = new LinkedWebsite;
	        $link->title = Input::get('title');
	        $link->url = Input::get('url');
	        $link->save();

	        Session::flash('message', 'Tạo thành công !');
	        return Redirect::to('admin/lienket');
	    }
	}

    public function edit($id)
    {
    	$link = LinkedWebsite::find($id);

    	return view('admin.lienketwebsite.edit', ['link' => $link]);
    }

    public function update($id)
    {
    	$rules = array(
	        'title' => 'required',
	        'url' => 'required'
	    );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/lienket/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $link = LinkedWebsite::find($id);
            $link->title = Input::get('title');
	        $link->url = Input::get('url');
	        $link->save();

            // redirect
            Session::flash('message', 'Cập nhật liên kết thành công !');
            return Redirect::to('admin/lienket');
        }
    }

    public function destroy($id)
    {
    	$link = LinkedWebsite::find($id);
        $link->delete();

        Session::flash('message', 'Xóa liên kết thành công !');
        return Redirect::to('admin/lienket');
    }
}
