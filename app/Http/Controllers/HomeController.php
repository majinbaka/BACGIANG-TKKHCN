<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Information;
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
use PhpOffice\PhpWord\PhpWord;
use Exception;

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
        $users = User::all();
        $years = User::listYear();
        $total = User::count();
        
        return view('thongkecoso', array('users' => $users,  'years' => $years, 'total' => $total));
    }

    public function donvireport($year, $id, $type){
        $user = User::find($id);
        if ($type == 1)
            $bieu = Bieumau1::whereYear('publish_day', '=', $year)->where('user_id', $id)->first();
        if ($type == 2)
            $bieu = Bieumau2::whereYear('publish_day', '=', $year)->where('user_id', $id)->first();
        if ($type == 3)
            $bieu = Bieumau3::whereYear('publish_day', '=', $year)->where('user_id', $id)->first();
        if ($type == 4)
            $bieu = Bieumau4::whereYear('publish_day', '=', $year)->where('user_id', $id)->first();
        if ($type == 5)
            $bieu = Bieumau5::whereYear('publish_day', '=', $year)->where('user_id', $id)->first();
        if ($type == 6)
            $bieu = Bieumau6::whereYear('publish_day', '=', $year)->where('user_id', $id)->first();

        return view('bieumau.bieumau'.$type, array('bieu' => $bieu));
    }

    public function generateDocx()
    {
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();


            $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,

         
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


        $section->addImage("http://itsolutionstuff.com/frontTheme/images/logo.png");
        $section->addText($description);


        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('helloWorld.doc'));
        } catch (Exception $e) {
        }


        return response()->download(storage_path('helloWorld.doc'));
    }
}
