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

class MainController extends Controller
{
     function login(){
         return view('auth.login');
     }

     function register(){
         return view('auth.register');
     }
     function save(Request $request){
        //return $request->input();
        //validate request
        $request->validate([
            'username'=>'required|unique:pgmc_users_tbl',
            'unit'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        //insert data into database
        $admin = new Admin;
        $admin->username = $request->username;
        $admin->unit = $request->unit;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success', 'New user has been created');
        }
        else{
            return back()->with('fail', 'Something went wrong');
        }
    }
    function check(Request $request){
        //return $request->input();
        //validate request input

        $request->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('username','=',$request->username)->first();

        if(!$userInfo){
            return back()->with('fail', 'We do not recognize username');
        }
        else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/search');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    function search(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.search', $data);
    }
    function new(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.new', $data);
    }

    function add(Request $request){
        
        $request->validate([
            'afpsn'=>'required',
            'transaction_type'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'contact_no'=>'required',
            'date'=>'required',
            'unit_to_receive'=>'required',
            'remarks'=>'required'
        ]);
        
        $query = DB::table('pgmc_main_tbl')->insert([
            'afpsn'=>$request->input('afpsn'),
            'transaction_type'=>$request->input('transaction_type'),
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'address'=>$request->input('address'),
            'contact_no'=>$request->input('contact_no'),
            'other_contact_no'=>$request->input('other_contact_no'),
            'email'=>$request->input('email'),
            'bene'=>$request->input('bene'),
            'folder_no'=>$request->input('folder_no'),
            'compliance'=>$request->input('compliance'),
            'date'=>$request->input('date'),
            'unit_to_receive'=>$request->input('unit_to_receive'),
            'remarks'=>$request->input('remarks'),
            'created_by'=>$request->input('created_by'),
            'last_updated_by'=>$request->input('created_by'),
            'unit'=>$request->input('unit'),
            'updated_at'=>now()
        ]);

        $queryDtl = DB::table('pgmc_details_tbl')->insert([
            'afpsn'=>$request->input('afpsn'),
            'transaction_type'=>$request->input('transaction_type'),
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'address'=>$request->input('address'),
            'contact_no'=>$request->input('contact_no'),
            'other_contact_no'=>$request->input('other_contact_no'),
            'email'=>$request->input('email'),
            'bene'=>$request->input('bene'),
            'folder_no'=>$request->input('folder_no'),
            'compliance'=>$request->input('compliance'),
            'date'=>$request->input('date'),
            'unit_to_receive'=>$request->input('unit_to_receive'),
            'remarks'=>$request->input('remarks'),
            'created_by'=>$request->input('created_by'),
            'last_updated_by'=>$request->input('created_by'),
            'unit'=>$request->input('unit'),
            'created_at'=>now()
        ]);

        $busybee = new \GuzzleHttp\Client();
        $busybee->request('GET', 'https://app.brandtxt.io/api/v2/SendSMS?ApiKey={ApiKey}&ClientId={ClientId}&SenderId={SenderId}&Message={Message}&MobileNumbers={MobileNumbers}&Is_Unicode={Is_Unicode}&Is_Flash={Is_Flash}', ['query' =>[  
                                        'ApiKey' => 'N6lpD9e1eWeNZYtZGxy+e+kL/YTRDpU2ka7yONgpahI=',
                                        'ClientId' => 'a1e56cbe-2d3a-4ddb-bc28-87da89735d7e', 
                                        'senderid' => 'AFPPGMC',
                                        'MobileNumbers' => $request->input('contact_no'),
                                        'Message' => \sprintf('Your application for %s is received. Please wait for further notice', $request->input('transaction_type'))]
                                    ]);

        if($query){
            
            return back()->with('success', 'Data have been successfully created');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }

    function updatepage(Request $request){
        $id = $request->afpsn;
        $first_name = $request->first_name;
        $result = DB::table('pgmc_main_tbl')->where('afpsn',$id)->first();
        
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        dd($result);
 
        //return view('admin.update',$data)->with('result', $result);
    }

    function update(Request $request){
        $id = $request->afpsn;
        $first_name = $request->first_name;
        $result = DB::table('pgmc_main_tbl')->where('afpsn',$id)->first();

        $query = DB::table('pgmc_details_tbl')->insert([
            'afpsn'=>$request->input('afpsn'),
            'transaction_type'=>$request->input('transaction_type'),
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'address'=>$request->input('address'),
            'contact_no'=>$request->input('contact_no'),
            'other_contact_no'=>$request->input('other_contact_no'),
            'email'=>$request->input('email'),
            'bene'=>$request->input('bene'),
            'folder_no'=>$request->input('folder_no'),
            'compliance'=>$request->input('compliance'),
            'date'=>now(),
            'unit_to_receive'=>$request->input('unit_to_receive'),
            'remarks'=>$request->input('remarks'),
            'created_by'=>$request->input('last_updated_by'),
            'last_updated_by'=>$request->input('last_updated_by'),
            'unit'=>$request->input('unit'),
            'updated_at'=>now()
        ]); 

        $query_update = DB::table('pgmc_main_tbl')->where('afpsn', $id)
                                                  ->update([
            'unit_to_receive'=>$request->input('unit_to_receive'),
            'last_updated_by'=>$request->input('last_updated_by'),
            'remarks'=>$request->input('remarks'),
            'unit'=>$request->input('unit'),
            'updated_at'=>now()
        ]);

        if($query){

            return back()->with('success', 'Data have been successfully updated the data');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
        //return $request->input();
    }
    function details(Request $request){
        $id = $request->afpsn;
        $details = DB::table('pgmc_details_tbl')->where('afpsn',$id)
                                                ->orderBy('updated_at','desc')->get();
        //dd($details);
        
        return view('admin.details')->with('details', $details);
    }

    function dashboard(Request $request){
        $data = Admin::where('id','=',session('LoggedUser'))->first();
           //dd($data);
        $details = DB::table('pgmc_main_tbl')->where('unit_to_receive',$data->unit)->get();
           //dd($details);
        return view('admin.dashboard')->with('dashboard', $details);
    }
    function edit($afpsn) {
        $result = DB::table('pgmc_main_tbl')->where('afpsn',$afpsn)->first();
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        
        //dd($result);
 
        return view('admin.update',$data)->with('result', $result);
        //return View::make('admin.edit')>with('data', $data);
        }

        function textblast(){
            return view('textblast');
        }

        function updating(){
            return view('updating');
        }

        function viewupdate(){
            return view('viewupdate');
        }

        function editpensiondetails($afpsn){
            $result = DB::table('pgmc_updating_users_tbl')->where('pensioner_afpsn',$afpsn)->first();
            //dd($details);
            
            return view('pensiondetails')->with('result', $result);

        }

        function insertUpdating(Request $request){
        // Validate the request data
        $request->validate([
            'pensioner_type'=>'required',
            'pensioner_loc'=>'required',
            'pensioner_afpsn'=>'required',
            'pensioner_first_name'=>'required',
            'pensioner_last_name'=>'required',
            'pensioner_age'=>'required',
            'pensioner_dob'=>'required',
            'pensioner_home_address'=>'required',
            'pensioner_contact_no'=>'required',
            'pensioner_helpline_code'=>'required',
            'pensioner_pgmc_ref_code'=>'required',
            'pensioner_afpid'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pensioner_afpidnr'=>'required',
            'pensioner_retor'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pensioner_order'=>'required',
            //'pensioner_proof' => 'required|mimetypes:video/avi,video/mp4|max:204800',
        ]);

        
        $query = DB::table('pgmc_updating_users_tbl')->insert([
            'pensioner_type'=>$request->input('pensioner_type'),
            'pensioner_loc'=>$request->input('pensioner_loc'),
            'pensioner_afpsn'=>$request->input('pensioner_afpsn'),
            'pensioner_first_name'=>$request->input('pensioner_first_name'),
            'pensioner_last_name'=>$request->input('pensioner_last_name'),
            'pensioner_middle_initial'=>$request->input('pensioner_middle_initial'),
            'pensioner_age'=>$request->input('pensioner_age'),
            'pensioner_dob'=>$request->input('pensioner_dob'),
            'pensioner_home_address'=>$request->input('pensioner_home_address'),
            'pensioner_contact_no'=>$request->input('pensioner_contact_no'),
            'pensioner_helpline_code'=>$request->input('pensioner_helpline_code'),
            'pensioner_pgmc_ref_code'=>$request->input('pensioner_pgmc_ref_code'),
            'pensioner_afpid'=>$request->input('pensioner_afpid'),
            'pensioner_afpidnr'=>$request->input('pensioner_afpidnr'),
            'pensioner_retor'=>$request->input('pensioner_retor'),
            'pensioner_order'=>$request->input('pensioner_order'),
            'isUpdated'=>'NO',
            'creation_date'=>now()
        ]);
        
        /*if($query){
            
            return back()->with('success', 'Data have been successfully created');
        }else{
            return back()->with('fail', 'Something went wrong');
        }*/
        dd($request);
        }

        function viewupdatelist(Request $request){
            $id = $request->afpsn;
            $details = DB::table('pgmc_updating_users_tbl')->orderBy('created_at','desc')->get();
            //dd($details);
            
            return view('/viewupdate')->with('viewupdatelist', $details);
            
        }

        function show($id){

        }
}