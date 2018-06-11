<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Document;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
use DateTime;

class VanbanController extends Controller
{
    public function index()
    {
    	$vanbans = Document::all();
    	
    	return view('admin.vanbans.index', ['vanbans' => $vanbans]);
    }

    public function create()
    {
    	return view('admin.vanbans.create');
    }

    public function store(Request $request)
    {
	    $rules = array(
            'code' => 'required',
            'publisher' => 'required',
            'publish_day' => 'required',
            'category' => 'required',
            'url' => 'required|mimes:doc,pdf,docx,zip,xls,xlsx',
        );

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()) {
	        return Redirect::to('admin/vanban/create')
	            ->withErrors($validator)
	            ->withInput();
	    } else {
	        
            $image = $request->file('url');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['imagename']);

	        $vanban = new Document;
            $vanban->code = Input::get('code');
            $vanban->publisher = Input::get('publisher');
            $vanban->url = $input['imagename'];
            $vanban->description = Input::get('description');
            $vanban->signer = Input::get('signer');
            $vanban->publish_day = DateTime::createFromFormat('d/m/Y', Input::get('publish_day'))->format('Y-m-d');
            $vanban->category = Input::get('category');
            $vanban->save();

	        // redirect
	        Session::flash('message', 'Tạo thành công !');
	        return Redirect::to('admin/vanban');
	    }
	}

    public function edit($id)
    {
    	$vanban = Document::find($id);

    	return view('admin.vanbans.edit', ['vanban' => $vanban]);
    }

    public function update(Request $request, $id)
    {
    	$rules = array(
            'code' => 'required',
            'publisher' => 'required',
            'publish_day' => 'required',
            'category' => 'required',
            'url' => 'mimes:doc,pdf,docx,zip,xls,xlsx',
	    );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/vanban/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            $image = $request->file('url');
            $vanban = Document::find($id);
            if ($request->file('url')){
                $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                $image->move($destinationPath, $input['imagename']);    
                $vanban->url = $input['imagename'];
            }
            $vanban->code = Input::get('code');
            $vanban->publisher = Input::get('publisher');
            $vanban->description = Input::get('description');
            $vanban->signer = Input::get('signer');
            $vanban->publish_day = DateTime::createFromFormat('d/m/Y', Input::get('publish_day'))->format('Y-m-d');
            $vanban->category = Input::get('category');

	        $vanban->save();

            // redirect
            Session::flash('message', 'Cập nhật thành công !');
            return Redirect::to('admin/vanban');
        }
    }

    public function destroy($id)
    {
    	$vanban = Document::find($id);
        $vanban->delete();

        // redirect
        Session::flash('message', 'Xóa thành công !');
        return Redirect::to('admin/vanban');
    }

    public function download($id){
        $doc = Document::find($id);

        return response()->download('uploads/'.$doc->url);
    }
}
