<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Information;
use Illuminate\Support\Facades\Input;
use App\Post;   
use App\LinkedWebsite;
use App\Document;
use App\User;
use App\Bieumau1;
use App\Bieumau2;
use App\Bieumau3;
use App\Bieumau4;
use App\Bieumau5;
use App\Bieumau6;
use App\Bieutonghop1;
use App\Bieutonghop2;
use App\Bieutonghop3;
use App\Bieutonghop4;
use App\Bieutonghop5;
use App\Bieutonghop6;
use App\Bieutonghop7;
use App\Bieutonghop8;
use App\Bieutonghop9;
use App\Bieutonghop10;
use App\Bieutonghop11;

class HomeController extends Controller
{
	public function tintucs()
    {
        $info = Post::paginate(3);
        $links = LinkedWebsite::all();
        $documents = Document::paginate(10);

        return view('index', array('info' => $info, 'links' => $links, 'documents' => $documents));
    }

    public function tkkhcn($id)
    {
        $info = Information::find($id);
        $links = LinkedWebsite::all();
        return view('huongdan', array('info' => $info,  'links' => $links));
    }

    public function tailieu()
    {
        $links = LinkedWebsite::all();
        $documents = Document::paginate(10);

        return view('tailieu', array('documents' => $documents,  'links' => $links));
    }

    public function tailieuchitiet($id)
    {
        $links = LinkedWebsite::all();
        $document = Document::find($id);

        return view('tailieuchitiet', array('document' => $document,  'links' => $links));
    }

    public function tailieudanhsach($cate)
    {
        $links = LinkedWebsite::all();
        switch ($cate) {
            case 'luat':
                $documents = Document::where('category' , "Luật")->paginate(10);
                return view('danhsachtailieu', array('documents' => $documents,  'links' => $links, 'catename' => "Luật"));
                break;
            
            case 'nghidinh':
                $documents = Document::where('category' , "Nghị định")->paginate(10);
                return view('danhsachtailieu', array('documents' => $documents,  'links' => $links, 'catename' => "Nghị định"));
                break;
            
            case 'thongtu':
                $documents = Document::where('category' , "Thông tư")->paginate(10);
                return view('danhsachtailieu', array('documents' => $documents,  'links' => $links, 'catename' => "Thông tư"));
                break;
            
            case 'chidinh':
                $documents = Document::where('category' , "Chỉ định")->paginate(10);
                return view('danhsachtailieu', array('documents' => $documents,  'links' => $links, 'catename' => "Chỉ định"));
                break;
            
            case 'quyetdinh':
                $documents = Document::where('category' , "Quyết định")->paginate(10);
                return view('danhsachtailieu', array('documents' => $documents,  'links' => $links, 'catename' => "Quyết định"));
                break;
            
            default:
                $documents = Document::paginate(10);
                break;
        }

        return view('danhsachtailieu', array('documents' => $documents,  'links' => $links, 'catename' => ""));
    }

    public function tintuc($id){
        $post = Post::find($id);
        $links = LinkedWebsite::all();
        $lastPost = Post::where('id','!=', $id)->orderBy('created_at')->take(5)->get();

        return view('tintucchitiet', array('post' => $post,  'links' => $links,  'lasts' => $lastPost));
    }

    public function tkcsreport(){
        $years = User::listYear();
        $users = User::getAllUserHasReported(User::lastYear())->get();
        $total = User::getAllUserHasReported(User::lastYear())->count();
        $cyear = User::lastYear();
        return view('thongkecoso', array('users' => $users,  'years' => $years, 'total' => $total, 'y' => $cyear));
    }

    public function donvireport($year, $id){
        $user = User::find($id);
            $bieu = Bieumau1::whereYear('publish_day', '=', $year)->where('user_id', $id)->first();

        return view('bieumau.bieumau1', array('bieu' => $bieu));
    }

    public function donvireportX($year,$id,$type)
    {
        $bieuType = 1;
        $user = User::find($id);
        if (Input::has('1')){
            $bieu = Bieumau1::where('reporter_year', '=', $year)->where('user_id', $id)->first();
        }
        if (Input::has('2')){
            $bieu = Bieumau2::where('reporter_year', '=', $year)->where('user_id', $id)->first();
            $bieuType = 2;
        }
        if (Input::has('3')){
            $bieu = Bieumau3::where('reporter_year', '=', $year)->where('user_id', $id)->first();
            $bieuType = 3;
        }
        if (Input::has('4')){
            $bieu = Bieumau4::where('reporter_year', '=', $year)->where('user_id', $id)->first();
            $bieuType = 4;
        }
        if (Input::has('5')){
            $bieu = Bieumau5::where('reporter_year', '=', $year)->where('user_id', $id)->first();
            $bieuType = 5;
        }
        if (Input::has('6')){
            $bieu = Bieumau6::where('reporter_year', '=', $year)->where('user_id', $id)->first();
            $bieuType = 6;
        }

        return view('bieumau.bieumau'.$bieuType, array('bieu' => $bieu));
    }

    public function thongketonghop($year = 0)
    {
        if ($year = 0)
            $year = User::lastYear();
        $bieuType = 1;
        $bieu = Bieutonghop1::where('year', '=', $year)->first();
        if (Input::has('2')){$bieu = Bieutonghop2::where('year', '=', $year)->first();$bieuType=2;}
        if (Input::has('3')){$bieu = Bieutonghop3::where('year', '=', $year)->first();$bieuType=3;}
        if (Input::has('4')){$bieu = Bieutonghop4::where('year', '=', $year)->first();$bieuType=4;}
        if (Input::has('5')){$bieu = Bieutonghop5::where('year', '=', $year)->first();$bieuType=5;}
        if (Input::has('6')){$bieu = Bieutonghop6::where('year', '=', $year)->first();$bieuType=6;}
        if (Input::has('7')){$bieu = Bieutonghop7::where('year', '=', $year)->first();$bieuType=7;}
        if (Input::has('8')){$bieu = Bieutonghop8::where('year', '=', $year)->first();$bieuType=8;}
        if (Input::has('9')){$bieu = Bieutonghop9::where('year', '=', $year)->first();$bieuType=9;}
        if (Input::has('10')){$bieu = Bieutonghop10::where('year', '=', $year)->first();$bieuType=10;}
        if (Input::has('11')){$bieu = Bieutonghop11::where('year', '=', $year)->first();$bieuType=11;}
        
        return view('bieutonghop.'.$bieuType, array('bieu' => $bieu));
    }

    public function generateBieu1($id)
    {
        $bieu = Bieumau1::find($id);
        $filename = 'Bieu01CS_'.$id.'_'.date('d_m_Y').'.doc';
        file_put_contents($filename, $bieu->generateBieu1());

        return response()->download($filename);
    }

    public function generateBieu2($id)
    {
        $bieu = Bieumau2::find($id);
        $filename = 'Bieu02CS_'.$id.'_'.date('d_m_Y').'.xls';
        file_put_contents($filename, $bieu->generateBieu2());

        return response()->download($filename);
    }

    public function generateBieu3($id)
    {
        $bieu = Bieumau3::find($id);
        $filename = 'Bieu03CS_'.$id.'_'.date('d_m_Y').'.xls';
        file_put_contents($filename, $bieu->generateBieu3());

        return response()->download($filename);
    }

    public function generateBieu4($id)
    {
        $bieu = Bieumau4::find($id);
        $filename = 'Bieu04CS_'.$id.'_'.date('d_m_Y').'.xls';
        file_put_contents($filename, $bieu->generateBieu4());

        return response()->download($filename);
    }

    public function generateBieu5($id)
    {
        $bieu = Bieumau5::find($id);
        $filename = 'Bieu05CS_'.$id.'_'.date('d_m_Y').'.xls';
        file_put_contents($filename, $bieu->generateBieu5());

        return response()->download($filename);
    }

    public function generateBieu6($id)
    {
        $bieu = Bieumau6::find($id);
        $filename = 'Bieu06CS_'.$id.'_'.date('d_m_Y').'.xls';
        file_put_contents($filename, $bieu->generateBieu6());

        return response()->download($filename);
    }

    public function generateBieuTH($type, $id){
        if ($type==1)
        {
            $bieu = Bieutonghop1::find($id);
            $filename='Bieu01_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }
        if ($type==2)
        {
            $bieu = Bieutonghop2::find($id);
            $filename='Bieu02_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }
        if ($type==3)
        {
            $bieu = Bieutonghop3::find($id);
            $filename='Bieu03_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }
        if ($type==4)
        {
            $bieu = Bieutonghop4::find($id);
            $filename='Bieu04_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }
        if ($type==5)
        {
            $bieu = Bieutonghop5::find($id);
            $filename='Bieu05_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }
        if ($type==6)
        {
            $bieu = Bieutonghop6::find($id);
            $filename='Bieu06_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }
        if ($type==7)
        {
            $bieu = Bieutonghop7::find($id);
            $filename='Bieu07_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }
        if ($type==8)
        {
            $bieu = Bieutonghop8::find($id);
            $filename='Bieu08_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }
        if ($type==9)
        {
            $bieu = Bieutonghop9::find($id);
            $filename='Bieu09_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }
        if ($type==10)
        {
            $bieu = Bieutonghop10::find($id);
            $filename='Bieu010_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }
        if ($type==11)
        {
            $bieu = Bieutonghop11::find($id);
            $filename='Bieu011_TKTH_'.date('d_m_Y').'.xls';
            file_put_contents($filename, $bieu->generateBieu());
        }

        return response()->download($filename);   
    }
}
