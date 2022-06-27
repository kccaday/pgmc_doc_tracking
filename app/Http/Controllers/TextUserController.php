<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Add;
use App\Models\Update;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\DB;
use App\Models\Text;
use Carbon\Carbon;


class TextUserController extends Controller
{
    public function textUser(Request $request){
        return view('admin.textUser');
        /*$id = $request->afpsn;
        $details = DB::table('pgmc_details_tbl')->where('afpsn',$id)
                                                ->orderBy('updated_at','desc')->first();

        $query_update = DB::table('pgmc_main_tbl')->where('afpsn', $id)
                                                ->update([
                                                'updated_at'=>now()
                                                ]);

    if($query_update){
        return back()->with('success', 'Data have been successfully updated the data');
    }else{
        return back()->with('fail', 'Something went wrong');
    }*/

    }
}
