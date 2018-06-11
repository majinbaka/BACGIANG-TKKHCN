<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Information;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;

class ThongTinController extends Controller
{
    public function edit($id)
    {
    	$info = Information::find($id);
        if (!$info){
            $info = new Information;
            $info->id = $id;
            $info->save();
        }
    	return view('admin.thongkekhcn', ['information' => $info]);
    }

    public function update($id)
    {
        $info = Information::find($id);
        $info->title = Input::get('title');
        $info->content = Input::get('content');
        $info->save();

        Session::flash('message', 'Cập nhật bài đăng thành công !');
        return Redirect::to('admin');
    }
}
