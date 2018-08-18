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

class TkcsController extends Controller
{
    public function index()
    {
        $lists = User::listYearAdmin();
        
        return view('admin.tkcs.index', ['lists' => $lists]);
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
