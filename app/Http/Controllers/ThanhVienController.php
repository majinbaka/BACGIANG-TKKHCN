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
use App\Bieumau1;
use App\Bieumau2;
use App\Bieumau3;
use App\Bieumau4;
use App\Bieumau5;
use App\Bieumau6;
use App\Technology;
use App\Element;
use DateTime;
use App\YearReport;

class ThanhVienController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('admin.thanhviens.index', ['users' => $users]);
    }

    public function pheduyet()
    {
        $users = User::where('check' , 0)->get();
        
        return view('admin.thanhviens.pheduyet', ['users' => $users]);
    }

    public function show($id)
    {
        $lists = User::listYear();
        $user = User::find($id);
        
        return view('admin.thanhviens.show', ['lists' => $lists, 'user' => $user]);
    }

    public function create()
    {
    	return view('admin.thanhviens.create');
    }

    public function store()
    {
	    $rules = array(
	        'username' => 'required|unique:users',
            'password' => 'required',
            'donviname' => 'required',
	        'email' => 'required|email|unique:users'
	    );

        $message = array(
            'username.unique:users' => 'Tên đăng nhập phải là duy nhất',
            'username.required' => 'Thiếu tên đăng nhập', 
            'password.required' => 'Thiếu tên mật khẩu', 
            'donviname.required' => 'Thiếu tên đơn vị', 
            'email.required' => 'Thiếu Email', 
            'email.email' => 'email chưa đúng định dạng', 
            'email.unique:users' => 'email phải là duy nhất'
        );

	    $validator = Validator::make(Input::all(), $rules, $message);

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

    public function showStatus($year, $id, $check)
    {
        $ry = YearReport::where('year', $year)->where('user_id', $id)->where('type', 1)->first();

        if ($ry && $check == "true")
        {
            $ry->status = 1;
            $ry->save();
        }
        else if($ry && $check == "false")
        {
            $ry->status = 0;
            $ry->save();
        }
        else if (!$ry){
            $ry = new YearReport;
            $ry->year= $year;
            $ry->user_id = $id;
            $ry->type = 1;
            $ry->status = $check == "true" ? 1 : 0;
            $ry->save();
        }

        return "";
    }

    public function showBieu($year, $id, $type){
        $user = User::find($id);
        if ($type == 1)
        $bieumau = Bieumau1::where('user_id', $user->id)->where('reporter_year', $year)->first();
        else if ($type == 2)
        $bieumau = Bieumau2::where('user_id', $user->id)->where('reporter_year', $year)->first();
        else if ($type == 3)
        $bieumau = Bieumau3::where('user_id', $user->id)->where('reporter_year', $year)->first();
        else if ($type == 4)
        $bieumau = Bieumau4::where('user_id', $user->id)->where('reporter_year', $year)->first();
        else if ($type == 5)
        $bieumau = Bieumau5::where('user_id', $user->id)->where('reporter_year', $year)->first();
        else if ($type == 6)
        $bieumau = Bieumau6::where('user_id', $user->id)->where('reporter_year', $year)->first();

        if ($bieumau){
           return view('admin.thanhviens.xembieumau'.$type)->with('bieumau', $bieumau);
        }
        else
        {
            return Redirect::route('thanhviens.show', ['id' => $id])->with('message', 'Không có biểu mẫu');
        }
    }

    public function editBieu($year, $id, $type){
        $user = User::find($id);
        if ($type == 1)
        $bieumau = Bieumau1::where('user_id', $user->id)->where('reporter_year', $year)->first();
        else if ($type == 2)
        $bieumau = Bieumau2::where('user_id', $user->id)->where('reporter_year', $year)->first();
        else if ($type == 3)
        $bieumau = Bieumau3::where('user_id', $user->id)->where('reporter_year', $year)->first();
        else if ($type == 4)
        $bieumau = Bieumau4::where('user_id', $user->id)->where('reporter_year', $year)->first();
        else if ($type == 5)
        $bieumau = Bieumau5::where('user_id', $user->id)->where('reporter_year', $year)->first();
        else if ($type == 6)
        $bieumau = Bieumau6::where('user_id', $user->id)->where('reporter_year', $year)->first();

        if ($bieumau){
           return view('admin.thanhviens.suabieumau'.$type)->with('bieumau', $bieumau);
        }
        else
        {
            return Redirect::route('thanhviens.show', ['id' => $id])->with('message', 'Không có biểu mẫu để sửa');
        }
    }

    public function update($id)
    {
    	$rules = array(
            'username' => 'required|unique:users,username,'.$id.'|max:255',
            'donviname' => 'required',
            'email' => 'required|email|unique:users,email,'.$id.'|max:255',
        );

        $message = array(
            'username.unique:users' => 'Tên đăng nhập phải là duy nhất',
            'username.required' => 'Thiếu tên đăng nhập', 
            'donviname.required' => 'Thiếu tên đơn vị', 
            'email.required' => 'Thiếu Email', 
            'email.email' => 'email chưa đúng định dạng', 
            'email.unique:users' => 'email phải là duy nhất'
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
                $user->password = Hash::make(Input::get('password'));
                $user->save();
            }
            else{
                $user = User::find($id);
                $user->name = Input::get('name');
                $user->username = Input::get('username');
                $user->donviname = Input::get('donviname');
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
        $bieu = Bieumau1::where('user_id', $id)->get();
        foreach ($bieu as $k) {
            $k->delete();
        }
        $bieu = Bieumau2::where('user_id', $id)->get();
        foreach ($bieu as $k) {
            $k->delete();
        }
        $bieu = Bieumau3::where('user_id', $id)->get();
        foreach ($bieu as $k) {
            $k->delete();
        }
        $bieu = Bieumau4::where('user_id', $id)->get();
        foreach ($bieu as $k) {
            $k->delete();
        }
        $bieu = Bieumau5::where('user_id', $id)->get();
        foreach ($bieu as $k) {
            $k->delete();
        }
        $bieu = Bieumau6::where('user_id', $id)->get();
        foreach ($bieu as $k) {
            $k->delete();
        }
        $user->delete();

        Session::flash('message', 'Xóa thành viên thành công !');
        return Redirect::to('admin/thanhvien');
    }

    public function bieumau1Update($year, $id)
    {
        $user = User::find($id);
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');
        $establish_day = DateTime::createFromFormat('d/m/Y', $params['establish_day']);
        if ($establish_day) $establish_day = $establish_day->format('Y-m-d');
        $certificate_date = DateTime::createFromFormat('d/m/Y', $params['certificate_date']);
        if ($certificate_date) $certificate_date = $certificate_date->format('Y-m-d');

        if (!array_key_exists('receiver', $params)) $params['receiver'] = null;
        if (!array_key_exists('lab_number', $params)) $params['lab_number'] = null;

        $bieumau = Bieumau1::where("user_id", $user->id)->where('reporter_year', $year)->first();
        $bieumau->detachTechnologies();
        $bieumau->detachElements();
        $bieumau->name = $params['reporter_element_name'];
        $bieumau->publish_day = $publish_day;
        $bieumau->receiver = is_array($params['receiver']) ? implode(',', $params['receiver']) : $params['receiver'];
        $bieumau->reporter = $params['reporter_element_name'];
        $bieumau->reporter_element_name = $params['reporter_element_name'];
        $bieumau->reporter_transfer_name = $params['reporter_transfer_name'];
        $bieumau->reporter_eng_name = $params['reporter_eng_name'];
        $bieumau->address = $params['address'];
        $bieumau->city = $params['city'];
        $bieumau->phone = $params['phone'];
        $bieumau->email = $params['email'];
        $bieumau->fax = $params['fax'];
        $bieumau->website = $params['website'];
        $bieumau->establish_code = $params['establish_code'];
        $bieumau->establish_day = $establish_day;
        $bieumau->establish_lever = $params['establish_lever'];
        $bieumau->tax_number = $params['tax_number'];
        $bieumau->certificate_number = $params['certificate_number'];
        $bieumau->certificate_date = $certificate_date;
        $bieumau->certificate_grant = $params['certificate_grant'];
        $bieumau->manager = $params['manager'];
        $bieumau->manager_city = $params['manager_city'];
        $bieumau->type_company = $params['type_company'];
        $bieumau->type_econom = $params['type_econom'];
        $bieumau->money = $params['money'];
        $bieumau->lab_number = is_array($params['lab_number']) ? implode(',', $params['lab_number']) : $params['lab_number'];
        $bieumau->lab_number_sub = $params['lab_number_sub'];
        $bieumau->lab_range = $params['lab_range'];
        $bieumau->lab_description = $params['lab_description'];
        $bieumau->report_info = $params['report_info'];
        $bieumau->save();

        $i = 1;
        while (array_key_exists('nametech'.$i, $params)) {
            if ($params['nametech'.$i] == "" && $params['yeartech'.$i] == "" && $params['codetech'.$i] == "" && 
                $params['countrytech'.$i] == "" && $params['usedtech'.$i] == "" && $params['moneytech'.$i] == ""
            ) {++$i;continue;}
            $tech = new Technology;
            $tech->bieumau1_id = $bieumau->id;
            $tech->name = $params['nametech'.$i];
            $tech->year = $params['yeartech'.$i];
            $tech->code = $params['codetech'.$i];
            $tech->country = $params['countrytech'.$i];
            $tech->use_year = $params['usedtech'.$i];
            $tech->money = $params['moneytech'.$i];
            $tech->save();
            ++$i;
        }

        $j = 1;
        while (array_key_exists('bosselement'.$j, $params)) {
            if ($params['nameelement'.$j] == "" && $params['bosselement'.$j] == "" && $params['contactelement'.$j] == ""
            ) {++$j;continue;}
            $element = new Element;
            $element->bieumau1_id = $bieumau->id;
            $element->name = $params['nameelement'.$j];
            $element->leader = $params['bosselement'.$j];
            $element->address = $params['contactelement'.$j];
            $element->save();
            ++$j;
        }

        return Redirect::route('thanhviens.show', ['id' => $id])->with('message', 'Cập nhập thành công');
    }

    public function bieumau2Update($year, $id)
    {
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        $user = User::find($id);
        $bieumau = Bieumau2::where("user_id", $user->id)->where('reporter_year', $year)->first();
        $bieumau->publish_day = $publish_day;
        $bieumau->total = http_build_query($params['total']);
        $bieumau->female_total = http_build_query($params['female_total']);
        $bieumau->nation_vn = http_build_query($params['nation_vn']);
        $bieumau->nation_kinh = http_build_query($params['nation_kinh']);
        $bieumau->nation_other = http_build_query($params['nation_other']);
        $bieumau->nation_foregin = http_build_query($params['nation_foregin']);
        $bieumau->class_khtn = http_build_query($params['class_khtn']);
        $bieumau->class_khkt = http_build_query($params['class_khkt']);
        $bieumau->class_khyd = http_build_query($params['class_khyd']);
        $bieumau->class_khnn = http_build_query($params['class_khnn']);
        $bieumau->class_khxh = http_build_query($params['class_khxh']);
        $bieumau->class_khnv = http_build_query($params['class_khnv']);
        $bieumau->class_other = http_build_query($params['class_other']);
        $bieumau->save();
        return Redirect::route('thanhviens.show', ['id' => $id])->with('message', 'Cập nhập thành công');
    }

    public function bieumau3Update($year, $id)
    {
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        $user = User::find($id);
        $bieumau = Bieumau3::where("user_id", $user->id)->where('reporter_year', $year)->first();
        $bieumau->publish_day = $publish_day;
        $bieumau->total = http_build_query($params['total']);
        $bieumau->pay_improve_khcn = http_build_query($params['pay_improve_khcn']);
        $bieumau->pay_khcn = http_build_query($params['pay_khcn']);
        $bieumau->pay_salary_total = http_build_query($params['pay_salary_total']);
        $bieumau->pay_salary = http_build_query($params['pay_salary']);
        $bieumau->pay_machine = http_build_query($params['pay_machine']);
        $bieumau->pay_normal = http_build_query($params['pay_normal']);
        $bieumau->pay_mission = http_build_query($params['pay_mission']);
        $bieumau->mission_lv1 = http_build_query($params['mission_lv1']);
        $bieumau->mission_lv2 = http_build_query($params['mission_lv2']);
        $bieumau->mission_lv3 = http_build_query($params['mission_lv3']);
        $bieumau->mission_lv4 = http_build_query($params['mission_lv4']);
        $bieumau->mission_lv5 = http_build_query($params['mission_lv5']);
        $bieumau->pay_lab = http_build_query($params['pay_lab']);
        $bieumau->pay_maintain = http_build_query($params['pay_maintain']);
        $bieumau->pay_univer = http_build_query($params['pay_univer']);
        $bieumau->pay_improve_other = http_build_query($params['pay_improve_other']);
        $bieumau->pay_other = http_build_query($params['pay_other']);
        $bieumau->save();
    
        return Redirect::route('thanhviens.show', ['id' => $id])->with('message', 'Cập nhập thành công');
    }
    public function bieumau4Update($year, $id)
    {
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        $user = User::find($id);
        $bieumau = Bieumau4::where("user_id", $user->id)->where('reporter_year', $year)->first();
        $bieumau->publish_day = $publish_day;
        $bieumau->total = http_build_query($params['total']);
        $bieumau->subject_lv1 = http_build_query($params['subject_lv1']);
        $bieumau->subject_lv2 = http_build_query($params['subject_lv2']);
        $bieumau->subject_lv3 = http_build_query($params['subject_lv3']);
        $bieumau->subject_lv4 = http_build_query($params['subject_lv4']);
        $bieumau->subject_lv5 = http_build_query($params['subject_lv5']);
        $bieumau->subject_lab_1 = http_build_query($params['subject_lab_1']);
        $bieumau->subject_lab_2 = http_build_query($params['subject_lab_2']);
        $bieumau->subject_lab_3 = http_build_query($params['subject_lab_3']);
        $bieumau->subject_lab_4 = http_build_query($params['subject_lab_4']);
        $bieumau->subject_lab_5 = http_build_query($params['subject_lab_5']);
        $bieumau->subject_lab_6 = http_build_query($params['subject_lab_6']);
        $bieumau->subject_money_1 = http_build_query($params['subject_money_1']);
        $bieumau->subject_money_2 = http_build_query($params['subject_money_2']);
        $bieumau->subject_money_3 = http_build_query($params['subject_money_3']);
        $bieumau->subject_money_4 = http_build_query($params['subject_money_4']);
        $bieumau->subject_money_5 = http_build_query($params['subject_money_5']);
        $bieumau->subject_money_6 = http_build_query($params['subject_money_6']);
        $bieumau->subject_money_7 = http_build_query($params['subject_money_7']);
        $bieumau->total_job = http_build_query($params['total_job']);
        $bieumau->total_job_1 = http_build_query($params['total_job_1']);
        $bieumau->total_job_2 = http_build_query($params['total_job_2']);
        $bieumau->total_job_3 = http_build_query($params['total_job_3']);
        $bieumau->total_job_4 = http_build_query($params['total_job_4']);
        $bieumau->total_job_5 = http_build_query($params['total_job_5']);
        $bieumau->total_lab_1 = http_build_query($params['total_lab_1']);
        $bieumau->total_lab_2 = http_build_query($params['total_lab_2']);
        $bieumau->total_lab_3 = http_build_query($params['total_lab_3']);
        $bieumau->total_lab_4 = http_build_query($params['total_lab_4']);
        $bieumau->total_lab_5 = http_build_query($params['total_lab_5']);
        $bieumau->total_lab_6 = http_build_query($params['total_lab_6']);
        $bieumau->total_money_1 = http_build_query($params['total_money_1']);
        $bieumau->total_money_2 = http_build_query($params['total_money_2']);
        $bieumau->total_money_3 = http_build_query($params['total_money_3']);
        $bieumau->total_money_4 = http_build_query($params['total_money_4']);
        $bieumau->total_money_5 = http_build_query($params['total_money_5']);
        $bieumau->total_money_6 = http_build_query($params['total_money_6']);
        $bieumau->total_money_7 = http_build_query($params['total_money_7']);
        $bieumau->save();
        return Redirect::route('thanhviens.show', ['id' => $id])->with('message', 'Cập nhập thành công');
    }
    public function bieumau5Update($year, $id)
    {
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        $user = User::find($id);
        $bieumau = Bieumau5::where("user_id", $user->id)->where('reporter_year', $year)->first();
        $bieumau->publish_day = $publish_day;
        $bieumau->total = http_build_query($params['total']);
        $bieumau->mission_lab_1 = http_build_query($params['mission_lab_1']);
        $bieumau->mission_lab_2 = http_build_query($params['mission_lab_2']);
        $bieumau->mission_lab_3 = http_build_query($params['mission_lab_3']);
        $bieumau->mission_lab_4 = http_build_query($params['mission_lab_4']);
        $bieumau->mission_lab_5 = http_build_query($params['mission_lab_5']);
        $bieumau->mission_lab_6 = http_build_query($params['mission_lab_6']);
        $bieumau->collaborate_1 = http_build_query($params['collaborate_1']);
        $bieumau->collaborate_2 = http_build_query($params['collaborate_2']);
        $bieumau->collaborate_3 = http_build_query($params['collaborate_3']);
        $bieumau->collaborate_4 = http_build_query($params['collaborate_4']);
        $bieumau->money_1 = http_build_query($params['money_1']);
        $bieumau->money_2 = http_build_query($params['money_2']);
        $bieumau->money_3 = http_build_query($params['money_3']);
        $bieumau->money_4 = http_build_query($params['money_4']);
        $bieumau->money_5 = http_build_query($params['money_5']);
        $bieumau->team_out = http_build_query($params['team_out']);
        $bieumau->human_out = http_build_query($params['human_out']);
        $bieumau->team_in = http_build_query($params['team_in']);
        $bieumau->human_in = http_build_query($params['human_in']);
        $bieumau->total_h1 = http_build_query($params['total_h1']);
        $bieumau->total_h2 = http_build_query($params['total_h2']);
        $bieumau->save();
    
        return Redirect::route('thanhviens.show', ['id' => $id])->with('message', 'Cập nhập thành công');
    }
    public function bieumau6Update($year, $id)
    {
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        $user = User::find($id);
        $bieumau = Bieumau6::where("user_id", $user->id)->where('reporter_year', $year)->first();
        $bieumau->publish_day = $publish_day;
        $bieumau->total = http_build_query($params['total']);
        $bieumau->total_award_vn = http_build_query($params['total_award_vn']);
        $bieumau->total_award_vn1 = http_build_query($params['total_award_vn1']);
        $bieumau->total_award_vn2 = http_build_query($params['total_award_vn2']);
        $bieumau->total_award_vn3 = http_build_query($params['total_award_vn3']);
        $bieumau->total_award_vn4 = http_build_query($params['total_award_vn4']);
        $bieumau->total_award_vn5 = http_build_query($params['total_award_vn5']);
        $bieumau->total_award_other = http_build_query($params['total_award_other']);
        $bieumau->total_award_team = http_build_query($params['total_award_team']);
        $bieumau->total_award_fm = http_build_query($params['total_award_fm']);
        $bieumau->total_award_male = http_build_query($params['total_award_male']);
        $bieumau->total_award_female = http_build_query($params['total_award_female']);
        $bieumau->save();
    
        return Redirect::route('thanhviens.show', ['id' => $id])->with('message', 'Cập nhập thành công');
    }
}