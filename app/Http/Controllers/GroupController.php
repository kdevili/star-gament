<?php

namespace App\Http\Controllers;

use App\Cluster;
use App\Department;
use App\Garment;
use App\Graph;
use App\Job_role;
use App\Jobrole;
use App\Graph_data;
use App\Recoder_graph_detail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('group');
    }
    public function index(){
        return redirect()->route('group/dashboard');
    }
    public function dashboard(){
        return view('group_level.index');
    }
    public function user_view(){
        $users = User::all();
        return view('group_level.user_view',['users'=>$users]);
    }
    public function data_field_view(){
        $this_month = date('Y-m');
        $graph_field_ids = Recoder_graph_detail::select('graph_field_id')->where('user_id',auth()->id())->get()->pluck('graph_field_id');
        $graph_data = Graph::with(['graph_data'=>function($q) use($this_month) {
            // Query the name field in status table
            $q->where('insert_date',$this_month);
        }])->whereIn('id', $graph_field_ids)
            ->get();
        $clusters = Cluster::all();
//   return $graph_data;
        return view('group_level.data_fields_submission',['graph_data'=>$graph_data,'clusters'=>$clusters]);
    }
    public function over_view(){
        return view('group_level.graphical_overview');
    }
    public function data_description_loaf(Request $request){
        $sector = $request->input('sector');
        $discription = Graph::where('category',$sector)->get();
        return response()->json(['discription'=>$discription]);
    }
    public function assign_selectoptions_description_load(Request $request){
        $selected_val = $request->input('selected_val');
        $type= $request->input('type');
        if($type == 'facility'){
            $facility = Garment::where('cluster_id',$selected_val)->get();
            return response()->json(['discription'=>$facility]);
        }
        else if($type == 'department'){
            $department= Department::where('garment_id',$selected_val)->get();
            return response()->json(['discription'=>$department]);
        }
        else if($type == 'user'){
            $user= User::selectRaw("id,CONCAT(name, ' ' ,lname) AS name")->where('department_id',$selected_val)->get();
            return response()->json(['discription'=>$user]);
        }
        else if($type == 'jobrole'){
            $user= Job_role::where('department_id',$selected_val)->get();
            return response()->json(['discription'=>$user]);
        }

    }

    public function save_user(Request $request){

        $validatedData = $request->validate([

            'adduseremail' => 'required|unique:users|email|string',
            'addusername' => 'required',
        ]);

        $First_Name = $request->input('addusername');
        $email = $request->input('adduseremail');
        $garment = $request->input('adduserfacility');
        $cluster = $request->input('addusercluester');
        $User_Type = $request->input('adduserlevel');
        $password =  $request->input('adduserpassword');
        $pass = Hash::make($password);
        $contact =  $request->input('addusercontact');
        $jobrole =  $request->input('adduserjobrole');
        $department =  $request->input('adduserdepartment');


        $user = new User();
        $user->status = 'Active';
        $user->name = $First_Name;
        $user->email = $email;
        $user->password = $pass;
        $user->garment_id = $garment;
        $user->cluster_id = $cluster;
        $user->department_id = $department;
        $user->job_role_id = $jobrole;
        $user->role = $User_Type;
        $user->p2 = $password;   // this is temp for debug password issue
        $user->image = 'default/admin-pic.jpg';
        $user->contact = $contact;
        $user->save();


        return response()->json(['discription'=>'ok']);
//        return redirect()->back();
        //toastr()->success($First_Name.' save success.', 'Success', ['timeOut' => 5000]);

    }
    public function assign_userto_data_field(Request $request){
        $data_discription = $request->input('data_discription');
        $user_id = $request->input('employee');

        $assign = new Recoder_graph_detail();
        $assign->user_id = $user_id;
        $assign->graph_field_id = $data_discription;
        $assign->save();
        return redirect()->back()->with('success');
    }
    public function get_data_this_month_value(Request $request){
        $data_filed_id=$request->input('value_id');
        $graph_data = Graph_data::find($data_filed_id);
        return response()->json(['graph_data'=>$graph_data]);
    }
    public function save_this_month_data(Request $request){
        $data_filed_id=$request->input('date_field_id');
        $this_month_value=$request->input('this_month_value');
        $this_month=$request->input('month');
        $type_id=$request->input('data_type_id');
        if($data_filed_id === 'new'){
            $new_data_field = new Graph_data();
            $new_data_field->data_type_id=$type_id;
            $new_data_field->insert_date=$this_month;
            $new_data_field->this_month_value=$this_month_value;
            $new_data_field->garment_id=auth()->user()->garment_id;
            $new_data_field->cluster_id=auth()->user()->cluster_id;
            $new_data_field->user_id=auth()->id();
            $new_data_field->save();
            $this_month = date('Y-m');
            $graph_data = Graph::with(['graph_data'=>function($q) use($this_month) {
                // Query the name field in status table
                $q->where('insert_date',$this_month); // '=' is optional
            }])->where('id', $new_data_field->data_type_id)
                ->first();
            return response()->json($graph_data);
        }
        else{
            $update_data_field = Graph_data::find($data_filed_id);
            $update_data_field->this_month_value = $this_month_value;
            $update_data_field->save();
            $this_month = date('Y-m');
            $graph_data = Graph::with(['graph_data'=>function($q) use($this_month) {
                // Query the name field in status table
                $q->where('insert_date',$this_month); // '=' is optional
            }])->where('id', $update_data_field->data_type_id)
                ->first();
            return response()->json($graph_data);
        }
    }
}
