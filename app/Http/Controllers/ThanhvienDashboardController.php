<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
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
use Auth;
use DateTime;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\BieuStatus;

class ThanhvienDashboardController extends Controller
{
    public function editPassword(){
        return view('thanhvien.password');
    }

    public function updatePassword(){
        $params = Input::all();
        $user = Auth::user();
        if ($params['password'] === $params['repassword']){
            $u = User::find($user->id);
            $u->password = Hash::make($params['password']);
            $u->save();
            Session::flash('message', 'Đổi mật khẩu thành công');

            return view('thanhvien.index');
        }
        Session::flash('message', 'Mật khẩu mới và nhập lại phải trùng khớp');

        return view('thanhvien.password');
    }
    public function createBieu()
    {
        $user = Auth::user();
        $lists = $user->listYearU();

        return view('thanhvien.year', ['lists' => $lists, 'user' => $user]);
    }

    public function register(){
        return view('thanhvien.dangky');
    }

    public function registerUpdate(){
//        $params = Input::all();

        $rules = array(
            'username' => 'required|unique:users',
            'password' => 'required',
            'email' => 'name:useremail|email|unique:users',
            'password_confirmation' => 'same:password'
        );

        $messages = [
            'username.required'    => 'Vui lòng điền tên đăng nhập',
            'username.unique'    => 'Tên đăng nhập bị trùng',
            'password.required' => 'Vui lòng điền mật khẩu',
            'email.email' => 'Email không đúng định dạng',
            'email.unique'      => 'Email đăng ký bị trùng',
            'password_confirmation.same' => 'Nhập lại mật khẩu chưa chính xác',
        ];

        $validator = Validator::make(Input::all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $s = "";
            foreach ($errors->all() as $message) {
                $s .= $message.". <br>";
            }
            Session::flash('message', $s);

            return view('thanhvien.dangky');
        } else {
            // store
            $user = new User;
            $user->username = Input::get('username');
            $user->email = Input::get('useremail');
            $user->donviname = Input::get('reporter_element_name');
            $user->phone = Input::get('phone');
            $user->address = Input::get('address');
            $user->city = "";
            $user->password = Hash::make(Input::get('password'));
            $user->check = 0;
            $user->save();
        }

        Session::flash('message', 'Đã gửi thông tin đăng ký');

        return view('thanhvien.dangky');
    }

    public function bieumauYear()
    {
        $params = Input::all();
        $user = Auth::user();

        if ($user->hasReported($params['year']) || !array_key_exists('year', $params))
        {
            Session::flash('message', 'Năm '.$params['year'].' bạn đã gửi báo cáo !');

            return view('thanhvien.index');
        }
        if ($params['year'] <= $params['oldyear'])
        {
            Session::flash('message', 'Năm không hợp lệ !');

            return view('thanhvien.index');
        }
        if ($params['year'] < 2010 || $params['year'] > 2500)
        {
            Session::flash('message', 'Năm không hợp lệ !');

            return view('thanhvien.index');
        }
        if (array_key_exists('oldyear', $params))
        {
            $user->createReportCopy($params['oldyear'],$params['year']);

            Session::flash('message', 'Tạo thành công');
            return Redirect::to('thanhvien/bieumau/baocao');
        }
        else
        $user->createReportCopy("",$params['year']);

        return view('thanhvien.bieumau1')->with('year', $params['year']);
    }

    public function bieumau($year, $type)
    {
        $user = Auth::user();
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
    	   return view('thanhvien.suabieumau'.$type)->with('bieumau', $bieumau);
        }
        else
        {
            Session::flash('message', 'Không có biểu mẫu để sửa');

            return view('thanhvien.index');
        }
    }

    public function bieumau1Update($year)
    {
        $user = Auth::user();
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

        return view('thanhvien.bieumau2')->with('year', $year);
    }

    public function bieumau2Update($year)
	{
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        $user = Auth::user();
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
        return view('thanhvien.bieumau3')->with('year', $year);
	}

	public function bieumau3Update($year)
	{
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        $user = Auth::user();
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
    
    	return view('thanhvien.bieumau4')->with('year', $year);
	}
	public function bieumau4Update($year)
	{
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        $user = Auth::user();
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
        return view('thanhvien.bieumau5')->with('year', $year);
	}
	public function bieumau5Update($year)
	{
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        $user = Auth::user();
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
    
    	return view('thanhvien.bieumau6')->with('year', $year);
	}
	public function bieumau6Update($year)
	{
        $params = Input::all();
        $publish_day = DateTime::createFromFormat('d/m/Y', $params['publish_day']);
        if ($publish_day) $publish_day = $publish_day->format('Y-m-d');

        $user = Auth::user();
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

        Session::flash('message', 'Báo cáo thành công ');
    
    	return view('thanhvien.index');
	}

    public function showPheDuyet($id)
    {
        $user = User::find($id);
        
        $bieu1 = Bieumau1::where('user_id', $id)->first();
        $bieu2 = Bieumau2::where('user_id', $id)->first();
        $bieu3 = Bieumau3::where('user_id', $id)->first();
        $bieu4 = Bieumau4::where('user_id', $id)->first();
        $bieu5 = Bieumau5::where('user_id', $id)->first();
        $bieu6 = Bieumau6::where('user_id', $id)->first();

        return view('admin.thanhviens.pheduyetDetails', array('user' => $user, 'bieu1' => $bieu1,'bieu2' => $bieu2,'bieu3' => $bieu3,'bieu4' => $bieu4,'bieu5' => $bieu5,'bieu6' => $bieu6));
    }

    public function acceptPheDuyet($id)
    {
        $user = User::find($id);
        $user->check = 1;
        $user->save();
        
//        $bieuS = BieuStatus::where('user_id', $id)->where('status', -1)->first();
//        $bieuS->status = 2;
//        $bieuS->save();

        Session::flash('message', 'Phê duyệt thành công');
        return Redirect::to('admin/pheduyet');
    }

    public function deletePheDuyet($id)
    {
        $user = User::find($id);
        $user->delete();
        $bieu = Bieumau1::where('user_id', $id)->first();if($bieu)$bieu->delete();
        $bieu = Bieumau2::where('user_id', $id)->first();if($bieu)$bieu->delete();
        $bieu = Bieumau3::where('user_id', $id)->first();if($bieu)$bieu->delete();
        $bieu = Bieumau4::where('user_id', $id)->first();if($bieu)$bieu->delete();
        $bieu = Bieumau5::where('user_id', $id)->first();if($bieu)$bieu->delete();
        $bieu = Bieumau6::where('user_id', $id)->first();if($bieu)$bieu->delete();

        $bieuS = BieuStatus::where('user_id', $id)->where('status', -1)->first();
        if($bieuS)
            $bieuS->delete();

        Session::flash('message', 'Xóa thành công');
        return Redirect::to('admin/pheduyet');
    }

    public function bieumauShow($year, $type)
    {
        $user = Auth::user();
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
           return view('thanhvien.xembieumau'.$type)->with('bieumau', $bieumau);
        }
        else
        {
            Session::flash('message', 'Không có biểu mẫu');

            return view('thanhvien.index');
        }
    }

    public function bieumauWord($year, $type)
    {
        $user = Auth::user();
        $filename = '';

        if ($type == 1){
            $bieu = Bieumau1::where('user_id', $user->id)->where('reporter_year', $year)->first();
            $filename = 'Bieu01CS_'.$bieu->id.'_'.date('d_m_Y').'.doc';
            file_put_contents($filename, $bieu->generateBieu1());
        }
        else if ($type == 2){
            $bieu = Bieumau2::where('user_id', $user->id)->where('reporter_year', $year)->first();
            $filename = 'Bieu02CS_'.$bieu->id.'_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu2());
        }
        else if ($type == 3){
            $bieu = Bieumau3::where('user_id', $user->id)->where('reporter_year', $year)->first();
            $filename = 'Bieu03CS_'.$bieu->id.'_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu3());
        }
        else if ($type == 4){
            $bieu = Bieumau4::where('user_id', $user->id)->where('reporter_year', $year)->first();
            $filename = 'Bieu04CS_'.$bieu->id.'_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu4());
        }
        else if ($type == 5){
            $bieu = Bieumau5::where('user_id', $user->id)->where('reporter_year', $year)->first();
            $filename = 'Bieu05CS_'.$bieu->id.'_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu5());
        }
        else if ($type == 6){
            $bieu = Bieumau6::where('user_id', $user->id)->where('reporter_year', $year)->first();
            $filename = 'Bieu06CS_'.$bieu->id.'_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu6());
        }

        return response()->download($filename);
    }

    public function bieumauSend($year)
    {
        $user = Auth::user();
        $bieuS = new BieuStatus;
        $bieuS->user_id = $user->id;
        $bieuS->year = $year;
        $bieuS->report_date = \Carbon\Carbon::now()->toDateTimeString();
        $bieuS->status = 1;
        $bieuS->save();

        return Redirect::to('thanhvien/bieumau/baocao');
    }

    public function bieumauDelete($year)
    {
        $user = Auth::user();
        $bieuS = BieuStatus::where('user_id', $user->id)->where('year', $year)->whereIn('status', [1,2])->first();
        if($bieuS)
        {
            Session::flash('message', 'Biểu mẫu đã được gửi không thể xóa');
            return Redirect::to('thanhvien/bieumau/baocao');
        }
        else
        {
            $bieuS = BieuStatus::where('user_id', $user->id)->where('year', $year)->first();
            if($bieuS)
                $bieuS->delete();
            $bieu = Bieumau1::where('user_id', $user->id)->where('reporter_year', $year)->first();if($bieu)$bieu->delete();
            $bieu = Bieumau2::where('user_id', $user->id)->where('reporter_year', $year)->first();if($bieu)$bieu->delete();
            $bieu = Bieumau3::where('user_id', $user->id)->where('reporter_year', $year)->first();if($bieu)$bieu->delete();
            $bieu = Bieumau4::where('user_id', $user->id)->where('reporter_year', $year)->first();if($bieu)$bieu->delete();
            $bieu = Bieumau5::where('user_id', $user->id)->where('reporter_year', $year)->first();if($bieu)$bieu->delete();
            $bieu = Bieumau6::where('user_id', $user->id)->where('reporter_year', $year)->first();if($bieu)$bieu->delete();

            Session::flash('message', 'Đã xóa năm báo cáo');
        }
        return Redirect::to('thanhvien/bieumau/baocao');
    }

    public function bieumauPrint($year, $type)
    {
        $user = Auth::user();
        $params = Input::all();

        if ($type == 1){
            $bieu = Bieumau1::where('user_id', $user->id)->where('reporter_year', $year)->first();
            if(!$bieu) return Redirect::back();
            $content = $bieu->generateBieuX();
        }
        else if ($type == 2){
            $bieu = Bieumau2::where('user_id', $user->id)->where('reporter_year', $year)->first();
            if(!$bieu) return Redirect::back();
            $content = $bieu->generateBieuX();
        }
        else if ($type == 3){
            $bieu = Bieumau3::where('user_id', $user->id)->where('reporter_year', $year)->first();
            if(!$bieu) return Redirect::back();
            $content = $bieu->generateBieuX();
        }
        else if ($type == 4){
            $bieu = Bieumau4::where('user_id', $user->id)->where('reporter_year', $year)->first();
            if(!$bieu) return Redirect::back();
            $content = $bieu->generateBieuX();
        }
        else if ($type == 5){
            $bieu = Bieumau5::where('user_id', $user->id)->where('reporter_year', $year)->first();
            if(!$bieu) return Redirect::back();
            $content = $bieu->generateBieuX();
        }
        else if ($type == 6){
            $bieu = Bieumau6::where('user_id', $user->id)->where('reporter_year', $year)->first();
            if(!$bieu) return Redirect::back();
            $content = $bieu->generateBieuX();
        }
        $content .= "<script>window.print()</script>";

        return $content;
    }
}

