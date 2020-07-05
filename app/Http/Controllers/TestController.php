<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookSearch;

class TestController extends Controller
{
    public function getIndex()
    {
        dd(1);
//        return  'hello');
    }

    public function add($a1,$b1){
        $c1 = $a1+$b1;
        return view('add',compact('c1'));
    }

    public function initialScreen(){
        return view('geogle');
    }

    public function input(Request $request){
        $firstValue=$request['firstValue'];
        $secondValue=$request['secondValue'];

        $add=$firstValue+$secondValue;

        return view('add',compact('add'));
    }

    public function index(){

        $book = new BookSearch();

        //削除用
        $data=$book::find(9);
        $data->delete();
        return view('ormTest');

//        update用
//         $data=$book::find(9);
//         $data->status="貸出中";
//         $data->save();
//         return view('ormTest');

//        insert用
//         $book->id="9";
//         $book->bookname="ormテスト";
//         $book->page="100";
//         $book->lender="前田";
//         $book->loandate="20200705";
//         $book->status="返却済";
//         $book->save();
//         return view('ormTest');

//       select用
//         $data = $book::find(1);
//         //var_dump($data);
//         //dd($data);
//         return view('ormTest',compact('data'));
    }

    public function bookInitial(){
        return view('book');
    }

    public function search(Request $request){
        $book = new BookSearch();
        $value = $book->selectData($request);

//        dd($value);

        return view('bookSearch',compact('value'));
    }


    public function insert(Request $request){
        $book = new BookSearch();
        $book->insertData($request);

        return view('bookInsert');
    }

    public function delete(Request $request){
        $book = new BookSearch();
        $value=$book->deleteData($request);

//        dd($value);

        if($value==1){
            return view('bookDelete2');
        }else{
            return view('bookDelete');
        }

    }

}