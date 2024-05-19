<?php

namespace App\Http\Controllers;

use App\Graph_data;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FacilityController extends Controller
{
    public function __construct()
    {
        $this->middleware('facility');
    }
    public function index(){
        return redirect()->route('facility/dashboard');
    }
    public function dashboard(){
        return view('facility_level.index');
    }
    public function dashboard2(){
        return view('facility_level.index3');
    }
    public function get_graph_data(Request $request){

        $Ymonth = $request->input('month');
        $month = new Carbon($Ymonth);

        $graph_deatails = Graph_data::with('graph')->where('garment_id', auth()->user()->garment_id)
//            ->whereMonth('insert_date', $month->month)
//            ->whereYear('insert_date', $month->year)
            ->where('insert_date', $Ymonth)
            ->get();
        $chartdata = array();

//        return $graph_deatails;
             foreach ($graph_deatails as $graph_deatail) {
                 array_push($chartdata, ['section' => $graph_deatail->graph->category, 'Discription' => $graph_deatail->graph->type_of_data, 'degrees' => $graph_deatail->graph->degrees, 'Percentage' => $graph_deatail->percentage, 'colour' => $graph_deatail->graph->color]);

             }
        return response()->json($chartdata);
    }
    public function dashboard_monthly_lolypop_chart(Request $request){

//        $salesData=Work::selectRaw('MONTHNAME(created_at) as monthname, SUM( TIME_TO_SEC( work_our) ) work_time')->
//        where('employee_id' ,$employeeID )
//            ->whereYear('created_at', date('Y'))
//            ->groupBy('monthname')
//            ->get();

        $type_id  = $request->input('type');
        $data_year  = $request->input('year');
        $salesData = Graph_data::selectRaw('* , MONTHNAME(insert_date) as monthname')
            ->with('graph')
//            ->whereYear('insert_date', $data_year)
            ->where('garment_id',auth()->user()->garment_id)
            ->where('data_type_id',$type_id)
            ->get();
//        return $salesData;

        $readable = array();

        $months =array('January','February','March','April','May','June','July','August','September','October','November','December');

        foreach($months as $month){
            $flag = 'Not found';
            foreach ($salesData as $graph_data){
                $timestamp1 = new Carbon($graph_data->insert_date);
                if ($timestamp1->format('F') == $month) {
                    array_push($readable,['category' => $timestamp1->format('F') , 'value' =>(float)$graph_data->percentage]);
                    $flag = 'Found';
                }

            }
            if ($flag == 'Not found') {
                array_push($readable,['category' => $month , 'value' =>0]);
            }
        }
        return $readable;
//dd($readable);
    }
}
