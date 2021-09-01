<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Text;
use Carbon\Carbon;


class TextResultController extends Controller
{
    public function index(){
        $textList = DB::table('pgmc_text_main_tbl')->get();
         return view('existing', compact('textList'));
    }

    public function indexMain(){
        $textListMain = DB::table('pgmc_text_main_tbl')->whereNotNull('contact_no')->whereDate('created_at', '=', Carbon::today())->get();
         

                $textListMain->map(function ($item, $key) {
                    $item->created_at = (Carbon::parse($item->created_at))->toDateString();
                     return $item;
                });
       // dd($textListMain);
            return view('textmain', compact('textListMain')); 
    }

    public function update(Request $request){
        $id = $request->afpsn;
        $trxns = $request->trxns;
        $type_of_process = $request->type_of_process;
        $remarks = $request->remarks;
        $contact_no = $request->contact_no;
        $concatenated = $request->concatenated;
        $pension_rank = DB::table('pgmc_text_main_tbl')->select('pension_rank')->where('afpsn',$id)->first();
        $first_name = DB::table('pgmc_text_main_tbl')->select('first_name')->where('afpsn',$id)->first();
        $middle_name = DB::table('pgmc_text_main_tbl')->select('middle_name')->where('afpsn',$id)->first();
        $last_name = DB::table('pgmc_text_main_tbl')->select('last_name')->where('afpsn',$id)->first();
        $created_at = $request->created_at;
        
        $update =  DB::table('pgmc_text_main_tbl')->where('afpsn', $id)
                                                  ->update([
                                                      'trxns'=>$trxns,
                                                      'type_of_process'=>$type_of_process,
                                                      'remarks'=>$remarks,
                                                      'contact_no'=>$contact_no,
                                                      'created_at'=>now(),
                                                      'concatenated'=>$concatenated = \sprintf('Good day! %s %s %s %s %s %s %s. This message is from PGMC. Please do not reply', 
                                                                                                                        $pension_rank->pension_rank,
                                                                                                                        $first_name->first_name,
                                                                                                                        $middle_name->middle_name,
                                                                                                                        $last_name->last_name,
                                                                                                                        $trxns, 
                                                                                                                        $type_of_process, 
                                                                                                                        $remarks)]);
        //dd($concatenated);  
        return back();
    }

    public function result(Request $request){
        $id = $request->afpsn;
        $result = DB::table('pgmc_text_main_tbl')->where('afpsn',$id)->first();
        //dd($result);
        return view('textresult')->with('result', $result);
    }

    public function concat(Request $request){
        $textListMain = DB::table('pgmc_text_main_tbl')->get();
         return view('textmain', compact('textListMain'));
                                              
    }
}