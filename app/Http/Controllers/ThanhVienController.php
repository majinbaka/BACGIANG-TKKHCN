<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;

class ThanhVienController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	
    	return view('admin.thanhviens.index', ['users' => $users]);
    }

    public function create()
    {
    	return view('admin.thanhviens.create');
    }

    public function store()
    {
	    $rules = array(
	        'username' => 'required',
            'password' => 'required',
            'donviname' => 'required',
	        'email' => 'required|email|unique:users'
	    );

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()) {
	        return Redirect::to('admin/thanhvien/create')
	            ->withErrors($validator)
	            ->withInput(Input::except('password'));
	    } else {
	        // store
	        $user = new User;
            $user->name = Input::get('name');
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->donviname = Input::get('donviname');
	        $user->address = Input::get('address');
	        $user->password = Hash::make(Input::get('password'));
	        $user->save();

	        // redirect
	        Session::flash('message', 'Tạo thành công thành viên !');
	        return Redirect::to('admin/thanhvien');
	    }
	}

    public function edit($id)
    {
    	$user = User::find($id);

    	return view('admin.thanhviens.edit', ['thanhvien' => $user]);
    }

    public function update($id)
    {
    	$rules = array(
            'username' => 'required',
            'donviname' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users,email,'.$id.'|max:255'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/thanhvien/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            if (Input::get('password') != "")
            {
                $user = User::find($id);
                $user->name = Input::get('name');
                $user->username = Input::get('username');
                $user->email = Input::get('email');
                $user->donviname = Input::get('donviname');
                $user->address = Input::get('address');
                $user->password = Hash::make(Input::get('password'));
                $user->save();
            }
            else{
                $user = User::find($id);
                $user->name = Input::get('name');
                $user->username = Input::get('username');
                $user->donviname = Input::get('donviname');
                $user->address = Input::get('address');
                $user->email = Input::get('email');
                $user->save();
            }
            // redirect
            Session::flash('message', 'Sửa thông tin thành viên thành công !');
            return Redirect::to('admin/thanhvien');
        }
    }

    public function destroy($id)
    {
    	$user = User::find($id);
        $user->delete();

        Session::flash('message', 'Xóa thành viên thành công !');
        return Redirect::to('admin/thanhvien');
    }
}