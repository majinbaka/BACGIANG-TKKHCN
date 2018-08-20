<?php

namespace App\Http\Controllers;

use App\Banners;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function index(){
        $list = Banners::all();
        return view('admin.banners.index',compact('list'));
    }

    public function create(){
        return view('admin.banners.create');
    }

    public function store(Request $request){
        $requestData = $request->all();
        $rules = array(
            'url' => 'required|image',
            'target_link'=>'required|url',
            'status'=>'required|in:1,2'
        );

        $validator = Validator::make($requestData, $rules);

        if ($validator->fails()) {
            return Redirect::to('admin/banner/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $item = new Banners();
            $item->target_link = $requestData['target_link'];
            $item->status = $requestData['status'];
            $item->save();
            $id = $item->id;
            $file = $request->file('url');
            $input['fileName'] = $id.'_'.$file->getClientOriginalName();
            $destinationPath = public_path('/banner');
            $file->move($destinationPath, $input['fileName']);
            $item->url = $input['fileName'];
            $item->save();
            // redirect
            Session::flash('message', 'Tạo thành công !');
            return Redirect::to('admin/banner');
        }
    }

    public function edit($id){
        $banner = Banners::findOrFail($id);
        return view('admin.banners.edit',compact('banner'));
    }

    public function update(Request $request,$id){
        $requestData = $request->all();
        $rules = array(
            'url' => 'image',
            'target_link'=>'required|url',
            'status'=>'required|in:1,2'
        );

        $validator = Validator::make($requestData, $rules);

        if ($validator->fails()) {
            return Redirect::to('admin/banner/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            $item = Banners::findOrFail($id);
            $item->target_link = $requestData['target_link'];
            $item->status = $requestData['status'];
            if($request->file('url')){
                $file = $request->file('url');
                $input['fileName'] = $id.'_'.$file->getClientOriginalName();
                $destinationPath = public_path('/banner');
                $file->move($destinationPath, $input['fileName']);
                $item->url = $input['fileName'];
            }
            $item->save();
            // redirect
            Session::flash('message', 'Sửa thành công !');
            return Redirect::to('admin/banner');
        }
    }

    public function destroy($id){
        $banner = Banners::find($id);
        $banner->delete();
        Session::flash('message', 'Xóa thành công !');
        return Redirect::to('admin/banner');
    }
}
