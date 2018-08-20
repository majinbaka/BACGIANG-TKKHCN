<?php

namespace App\Http\Controllers;

use App\Category;
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
    	$vanbans = Document::select('code','publisher','category.name as name','publish_day','documents.id as id','signer','description','url')
        ->leftJoin('category','category.id','=','documents.category_id')
        ->get();
    	
    	return view('admin.vanbans.index', ['vanbans' => $vanbans]);
    }

    public function create()
    {
        $category = Category::all();
    	return view('admin.vanbans.create',compact('category'));
    }

    public function store(Request $request)
    {
	    $rules = array(
            'code' => 'required',
            'publisher' => 'required',
            'publish_day' => 'required',
            'category_id' => 'required',
//            'url' => 'required|mimes:doc,pdf,docx,zip,xls,xlsx',
        );
	    $extensions = ['doc','docx','pdf','zip','xls','xlsx'];
        $files = $request->file('url');
        foreach ($files as $file){
            $extension = $file->getClientOriginalExtension();
            if(!in_array($extension,$extensions)){
                return Redirect::to('admin/vanban/create')->withErrors(['The file must be a file of type: doc,pdf,docx,zip,xls,xlsx']);
            }
        }
	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()) {
	        return Redirect::to('admin/vanban/create')
	            ->withErrors($validator)
	            ->withInput();
	    } else {

	        $vanban = new Document;
            $vanban->code = Input::get('code');
            $vanban->publisher = Input::get('publisher');
            $vanban->description = Input::get('description');
            $vanban->signer = Input::get('signer');
            $vanban->publish_day = DateTime::createFromFormat('d/m/Y', Input::get('publish_day'))->format('Y-m-d');
            $vanban->category_id = Input::get('category_id');
            $vanban->save();
            $id = $vanban->id;
            $files = $request->file('url');
            $fileName = [];
            foreach ($files as $file){
                $input['fileName'] = $id.'_'.$file->getClientOriginalName();
                $destinationPath = public_path('/uploads');
                $file->move($destinationPath, $input['fileName']);
                $fileName[] = $input['fileName'];
            }
            $vanban->url = implode(";",$fileName);
            $vanban->save();
	        // redirect
	        Session::flash('message', 'Tạo thành công !');
	        return Redirect::to('admin/vanban');
	    }
	}

    public function edit($id)
    {
    	$vanban = Document::find($id);
        $category = Category::all();
    	return view('admin.vanbans.edit', ['vanban' => $vanban,'category'=>$category]);
    }

    public function update(Request $request, $id)
    {
    	$rules = array(
            'code' => 'required',
            'publisher' => 'required',
            'publish_day' => 'required',
            'category_id' => 'required',
//            'url' => 'mimes:doc,pdf,docx,zip,xls,xlsx',
	    );
        if ($request->file('url')){
            $extensions = ['doc','docx','pdf','zip','xls','xlsx'];
            $files = $request->file('url');
            foreach ($files as $file){
                $extension = $file->getClientOriginalExtension();
                if(!in_array($extension,$extensions)){
                    return Redirect::to('admin/vanban/create')->withErrors(['The file must be a file of type: doc,pdf,docx,zip,xls,xlsx']);
                }
            }
        }
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/vanban/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            $vanban = Document::find($id);
            if ($request->file('url')){
                $files = $request->file('url');
                $fileName = [];
                foreach ($files as $file){
                    $input['fileName'] = $id.'_'.$file->getClientOriginalName();
                    $destinationPath = public_path('/uploads');
                    $file->move($destinationPath, $input['fileName']);
                    $fileName[] = $input['fileName'];
                }
                $vanban->url = implode(";",$fileName);
            }
            $vanban->code = Input::get('code');
            $vanban->publisher = Input::get('publisher');
            $vanban->description = Input::get('description');
            $vanban->signer = Input::get('signer');
            $vanban->publish_day = DateTime::createFromFormat('d/m/Y', Input::get('publish_day'))->format('Y-m-d');
            $vanban->category_id = Input::get('category_id');

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
        if (file_exists( public_path() . '/uploads/'.$doc->url)) {
            return response()->download('uploads/'.$doc->url);
        } else {
            Session::flash('message', 'Văn bản không tồn tại');
            return Redirect::back();
        }     
    }
}
