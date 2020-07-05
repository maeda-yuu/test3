<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class BookSearch extends Model {
    protected $table ='inventory';
    protected $primaryKey ='id';
    public $timestamps = false;

    public function getData(){
        $data = DB::table($this->table)->get();
        return $data;
    }

    public function selectData($request){

        $keyword1 = $request->input('firstSearch');
        $keyword2 = $request->input('secondSearch');
        $keyword3 = $request->input('thirdSearch');
        $keyword4 = $request->input('fourthSearch');
        $keyword5 = $request->input('fifthSearch');
        $keyword6 = $request->input('sixthSearch');

        $value = DB::table('inventory')
                    ->where('id',$keyword1)
                    ->orwhere('bookname','LIKE',"%{$keyword2}%")
                    ->orwhere('page',$keyword3)
                    ->orwhere('lender','LIKE',"%{$keyword4}%")
                    ->orwhere('loandate',$keyword5)
                    ->orwhere('status','LIKE',"%{$keyword6}%")
                    ->get();
       return $value;
    }

    public function insertData($request){
        $keyword1 = $request->input('firstInsert');
        $keyword2 = $request->input('secondInsert');
        $keyword3 = $request->input('thirdInsert');
        $keyword4 = $request->input('fourthInsert');
        $keyword5 = $request->input('fifthInsert');
        $keyword6 = $request->input('sixthInsert');

        DB::table('inventory')
            ->insert([
                'id'=>$keyword1,
                'bookname'=>$keyword2,
                'page'=>$keyword3,
                'lender'=>$keyword4,
                'loandate'=>$keyword5,
                'status'=>$keyword6
                ]);
    }

    public function deleteData($request){
        $keyword1 = $request->input('firstDelete');
        $keyword2 = $request->input('secondDelete');
        $keyword3 = $request->input('thirdDelete');
        $keyword4 = $request->input('fourthDelete');
        $keyword5 = $request->input('fifthDelete');
        $keyword6 = $request->input('sixthDelete');

        $value=DB::table('inventory')
                ->where('id',$keyword1)
                ->where('bookname',$keyword2)
                ->where('page',$keyword3)
                ->where('lender',$keyword4)
                ->where('loandate',$keyword5)
                ->where('status',$keyword6)
                ->get();

                if(count($value)==0){
                    return $value=1;
                }else{
                    DB::table('inventory')
                    ->where('id',$keyword1)
                    ->delete();

                    return $value=2;
                }

    }

}