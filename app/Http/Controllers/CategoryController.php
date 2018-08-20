<?php

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function index(){
        $list = Category::all();
        return view('admin.loaivanban.index',compact('list'));
    }

    public function create(){
        return view('admin.loaivanban.create');
    }

    public function store(Request $request){
        $requestData = $request->all();
        $rules = array(
            'name' => 'required|unique:category',
        );

        $validator = Validator::make($requestData, $rules);

        if ($validator->fails()) {
            return Redirect::to('admin/category/create')
                ->withErrors($validator)
                ->withInput();
        } else {

            $item = new Category();
            $item->name = $requestData['name'];
            $item->save();

            // redirect
            Session::flash('message', 'Tạo thành công !');
            return Redirect::to('admin/category');
        }
    }

    public function edit($id){
        $item = Category::findOrFail($id);
        return view('admin.loaivanban.edit',compact('item'));
    }

    public function update(Request $request, $id){
        $requestData = $request->all();
        $rules = array(
            'name' => 'required|unique:category,name,'.$id,
        );

        $validator = Validator::make($requestData, $rules);

        if ($validator->fails()) {
            return Redirect::to('admin/category/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            $item = Category::findOrFail($id);
            $item->name = $requestData['name'];
            $item->save();

            // redirect
            Session::flash('message', 'Sửa thành công !');
            return Redirect::to('admin/category');
        }
    }

    public function destroy($id){
        $item = Category::find($id);
        $item->delete();

        // redirect
        Session::flash('message', 'Xóa thành công !');
        return Redirect::to('admin/category');
    }
}
