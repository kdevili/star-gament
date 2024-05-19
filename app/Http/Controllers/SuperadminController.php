<?php

namespace App\Http\Controllers;

use App\Mail\User_Register;
use App\Recoder_graph_detail;
use App\User;
use Illuminate\Http\Request;
use App\Cluster;
use App\Garment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use stdClass;


class SuperadminController extends Controller
{
    //
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('superadmin');
    }
    public function index(){
        return redirect()->route('super_admin/view_clusters');
    }
    public function show_cluster(){

    return view('super_admin.clusters');

    }
    public function add_cluster(Request $request){

    $cluster_name = $request->input('cluster_name');
    $cluster_name_save = new Cluster();
        $cluster_name_save->name = Str::ucfirst($cluster_name);
        $cluster_name_save->save();
//        alert()->success('New project category add success!', $cluster_name);
        return redirect()->back();
    }
    public function save_garment(Request $request){
        $Garment_Name = $request->input('garment_name');
        $discription = $request->input('discription');
        $cluster = $request->input('cluster');

        $garment = new Garment();
        $garment->name = $Garment_Name;
        $garment->discription = $discription;
        $garment->cluster_id = $cluster;
        $garment->save();
        return redirect()->back();
    }
public function add_user(){
    return view('super_admin.add_user');
}
public function add_user_cluster(Request $request){
    $cluster_id = $request->input('cluster_id');
    $garment = Garment::where('cluster_id',$cluster_id)->get();
    //return $garment;
    return response()->json($garment);
}
public function save_user(Request $request){

    $validatedData = $request->validate([

        'email' => 'required|unique:users|email|string',
        'fname' => 'required',
        'lname' => 'required',
    ]);

    $First_Name = $request->input('fname');
    $Last_Name = $request->input('lname');
    $email = $request->input('email');
   $garment = $request->input('garment');
   $cluster = $request->input('cluster');
//    $joindate = $request->input('joindate');
//    $payroledate = $request->input('payroledate');
//    $Empid = $request->input('Empid');
//    $ETF_Number = $request->input('ETF_Number');
//    $Place = $request->input('Place');
    $User_Type = $request->input('user_type');
//    $Bio = $request->input('Bio');
    $password =  $First_Name.'@654';
    $pass = Hash::make($password);


        $user = new User();
        $user->status = 'Active';
        $user->lname = $Last_Name;
        $user->name = $First_Name;
        $user->email = $email;
        $user->garment_id = $garment;
        $user->cluster_id = $cluster;
        $user->role = $User_Type;
        $user->p2 = $password;   // this is temp for debug password issue
        $user->password = $pass;
        $user->image = 'default/admin-pic.jpg';
        $user->save();
       if($request->has('fields_of_graph')) {
           $field_data_types = $request->input('fields_of_graph');
           foreach ($field_data_types as $field_data_type) {
               $save_field_types = new Recoder_graph_detail();
               $save_field_types->user_id = $user->id;
               $save_field_types->graph_field_id = $field_data_type;
               $save_field_types->save();
           }
       }

//
//    $url=route('login');
//    $mail_detail = new stdClass();
//    $mail_detail->username = $email;
//    $mail_detail->password = $password;
//    $mail_detail->url = $url;
//    $mail_detail->name = $First_Name;
//    Mail::to($email)->send(new User_Register($mail_detail));

    return redirect()->back();
    //toastr()->success($First_Name.' save success.', 'Success', ['timeOut' => 5000]);

}

    public function view_clusters(){
        $cluster_data = Cluster::with('garment')->get();
        return view('super_admin.view_cluster',['clusters_data' => $cluster_data]);
    }
    public function delete_garment($id){
        $garment = Garment::find($id);
        $garment->delete();
        return redirect()->back();
    }
    public function edit_garment(Request $request){
        $garment_id = $request->input('garment_id');
        $garment = Garment::find($garment_id);

//return $garment;
        return response()->json($garment);
    }
    public function upgrade_garment(Request $request){

        $garment_id = $request->input('garment_id');
        $cluster_type = $request->input('cluster_type');
        $name = $request->input('name');
        $discription = $request->input('discription');

        $update_data = Garment::find($garment_id);
        $update_data->cluster_id = $cluster_type;
        $update_data->name = $name;
        $update_data->discription = $discription;
        $update_data->save();
        return redirect()->back();

    }
    public function show_group_level_users(){
        $gruop_level = User::where('role','Group Level')->where('status','!=','Block')->get();
        return view('super_admin.group_level_user',['group_levels'=>$gruop_level]);
    }
    public function show_cluster_level_users(){
        $cluster_level = User::where('role','Cluster Level')->where('status','!=','Block')->with('cluster')->get();
//        return $cluster_level;
        return view('super_admin.cluster_level_users',['cluster_levels'=>$cluster_level]);
    }
    public function show_facility_level_users(){
        $facility_level = User::where('role','Facility Level')->where('status','!=','Block')->with('garment','cluster')->get();
//       return $facility_level;
        return view('super_admin.facility_level_users',['facility_levels'=>$facility_level]);
    }
    public function show_recoder_level_users(){
        $recoder_level = User::where('role','Recoder')->where('status','!=','Block')->with('garment','cluster')->get();
   //return $recoder_level;
        return view('super_admin.recoder_level_users',['recoder_levels'=>$recoder_level]);
    }
    public function show_group_level_data(Request $request){
        $group_level_id = $request->input('group_level_id');
        $gruop_level = User::find($group_level_id);
        return response()->json($gruop_level);
    }
    public function edit_group_level_data(Request $request){
        $group_level_id = $request->input('group_level_id');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');

        $gruop_level = User::find($group_level_id);
        $gruop_level->name= $fname;
        $gruop_level->lname= $lname;
        $gruop_level->email= $email;
        $gruop_level->save();

        return redirect()->back();
    }
    public function remove_user($id){
        $user = User::find($id);

            $user->status = "Block";
            $user->save();


        return redirect()->back();
    }
}
