<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
use Auth;
use DateTime;
use App\User;
use App\BieuStatus;
use App\Bieumau1;

class TkcsController extends Controller
{
    public function index()
    {
        $lists = User::listYearAdmin();
        
        return view('admin.tkcs.index', ['lists' => $lists]);

    }

    public function search($year)
    {
        $input = Input::all();
        $userIds = BieuStatus::where('status','>=', 1)->where('year', $year)->pluck('user_id');
        $bieumau = Bieumau1::whereIn('user_id', $userIds)
            ->where('manager', 'LIKE', "%".$input['manager']."%")
            ->where('manager_city', 'LIKE', "%".$input['manager_city']."%");

        if($input['establish_lever'] != 0)
            $bieumau = $bieumau->where('establish_lever', $input['establish_lever']);
        if($input['type_company'] != 0)
            $bieumau = $bieumau->where('type_company', $input['type_company']);
        if($input['type_econom'] != 0)
            $bieumau = $bieumau->where('type_econom', $input['type_econom']);
        if($input['lab_number_sub'] != 0)
            $bieumau = $bieumau->where('lab_number_sub', $input['lab_number_sub']);
            $user_ids = $bieumau->pluck('user_id');
        $users = User::whereIn('id', $user_ids)->get();

        if($input['manager'] == "" && 
            $input['manager_city'] == "" && 
            $input['establish_lever'] == 0 && 
            $input['type_company'] == 0 && 
            $input['type_econom'] == 0 && 
            $input['lab_number_sub'] == 0
        )
        $users = User::getAllUserHasReportedAdmin($year)->get();
    
        return view('admin.tkcs.year', ['users' => $users, 'year' => $year]);
    }

    public function year($year)
    {
        $users = User::getAllUserHasReportedAdmin($year)->get();
        return view('admin.tkcs.year', ['users' => $users, 'year' => $year]);
    }

    public function bieumauDuyet($id,$year)
    {
        $bieucheck = BieuStatus::where('user_id', $id)->where('year', $year)->first();
        if ($bieucheck){
            if($bieucheck->status == 1 || $bieucheck->status == -1){
                $bieucheck->status = 2;
                $bieucheck->save();
            }
        }
        else{
            $bieucheck = new BieuStatus;
            $bieucheck->user_id = $id;
            $bieucheck->year = $year;
            $bieucheck->status = 2;
            $bieucheck->report_date = \Carbon\Carbon::now()->toDateTimeString();
            $bieucheck->save();
        }
        return Redirect::to('/admin/tkcs/'.$year);
    }

    public function bieumauboDuyet($id,$year)
    {
        $bieucheck = BieuStatus::where('user_id', $id)->where('year', $year)->first();
        $bieucheck->delete();

        return Redirect::to('/admin/tkcs/'.$year);
    }
}
