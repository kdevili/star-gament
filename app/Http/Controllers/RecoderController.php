<?php

namespace App\Http\Controllers;

use App\Cluster;
use App\Graph;
use App\Graph_data;
use App\Recoder_graph_detail;
use App\User;
//use http\Client\Curl\User;
use Illuminate\Http\Request;

class RecoderController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('recoder');
    }

    public function dashboard(){
        $graph_field_ids = Recoder_graph_detail::select('graph_field_id')->where('user_id',auth()->id())->get()->pluck('graph_field_id');
        $graph_data = Graph::whereIn('id', $graph_field_ids)->get();
//            return $graph_data;


        return view('recoder.dashboard',['graph_field_datas'=>$graph_data]);
    }

    public function save_chartdata(Request $request){

        $data_type_id = $request->input('data_type');
        $percentage = $request->input('percentage');
        $date = $request->input('date');
        $cluster_id = auth()->user()->cluster_id;
        $garment_id = auth()->user()->garment_id;
        $user_id = auth()->id();

        $graph_date = new Graph_data();
        $graph_date->data_type_id = $data_type_id;
        $graph_date->percentage = $percentage;
        $graph_date->insert_date = $date;
        $graph_date->garment_id = $garment_id;
        $graph_date->cluster_id = $cluster_id;
        $graph_date->user_id = $user_id;
        $graph_date->save();
        return redirect()->back();
    }
    public function delete_graph_data($id)
    {
        $graph_data = Graph_data::find($id);
        $graph_data->delete();
        return redirect()->back();
//        return $utask;
    }

    public function get_graph_data_edit(Request $request){
        $graph_id = $request->input('graph_id');
        $graph = Graph_data::with('graph')->find($graph_id);

        return response()->json($graph);

    }

    public function edit_graph_data(Request $request){

        $graph_id = $request->input('graph_id');
        $data_type_id = $request->input('data_type');
        $percentage = $request->input('percentage');
        $date = $request->input('date');
        $cluster_id = auth()->user()->cluster_id;
        $garment_id = auth()->user()->garment_id;
        $user_id = auth()->id();

        $update_data = Graph_data::find($graph_id);
        $update_data->data_type_id = $data_type_id;
        $update_data->percentage = $percentage;
        $update_data->insert_date = $date;
        $update_data->garment_id = $garment_id;
        $update_data->cluster_id = $cluster_id;
        $update_data->user_id = $user_id;
        $update_data->save();
        return redirect()->back();

    }

}
