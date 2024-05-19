@extends('recoder.lay')


@section('title' , __('Dashboard'))


@section('style')


@endsection

@section('content')
    <div class="col-xl-12 col-lg-7">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card widget-calendar h-100">

                    <div class="card-header p-3 pb-0">
                        <h5 class="mb-0">Add Data</h5>
                        <div class="d-flex">
                            {{auth()->user()->role}}
                        </div>
                    </div>


                    <div class="card-body p-3">
                        <form action="{{ route('recoder/save_chart_data') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select Category</label>
                                        <select class="form-control" id="exampleFormControlSelect1" required name="data_type">
                                            <option value="">-- Please select --</option>
                                            @foreach($graph_field_datas as $graph_field_data)
                                                <option value="{{$graph_field_data->id}}">{{ $graph_field_data->type_of_data }}</option>
                                            @endforeach
                                        </select>                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alternative" id="exampleFormControlInput2" placeholder="percentage" required name="percentage">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{--                                        <label for="example-datetime-local-input" class="form-control-label">Datetime</label>--}}
                                        <input class="form-control" type="month" value="{{date('Y-m')}}" id="example-datetime-local-input" required name="date">

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn bg-gradient-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card widget-calendar h-100">

                    <div class="card-header p-3 pb-0">
                        <h5 class="mb-0">Show Data</h5>
                        <div class="d-flex">
                        </div>
                    </div>
                    @php
                        $graph_datas = \App\Graph_data::with('graph')->where('garment_id',auth()->user()->garment_id)->where('user_id',auth()->id())->orderBy('insert_date','DESC')->get();
                    @endphp

                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table table-flush" id="datatable-search">
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Data category</th>
                                    <th>percentage</th>
                                    <th>Input Date</th>
                                    <th>Actions</th>
                                    {{--                                    <th>Salary</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($graph_datas as $graph_data)
                                    <tr>
                                        <td class="text-sm font-weight-normal">{{$graph_data->id}}</td>
                                        <td class="text-sm font-weight-normal">{{$graph_data->graph->type_of_data}}</td>
                                        <td class="text-sm font-weight-normal">{{$graph_data->percentage}} %</td>
                                        <td class="text-sm font-weight-normal">{{$graph_data->insert_date}}</td>
                                        <td class="text-sm font-weight-normal">

                                            <a href="#" onclick="edit_graph_data('{{$graph_data->id}}')" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-container="body" data-animation="true"><i class="ni ni-settings"></i></a>&nbsp
                                            <a href="{{ route('recoder/delete_graph_data',$graph_data->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-container="body" data-animation="true"> <i class="ni ni-scissors"></i></a></td>
                                        {{--                                    <td class="text-sm font-weight-normal">$320,800</td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Graph Data</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('recoder/edit_chart_data') }}" method="POST" id="edit-graph-form">
                        @csrf
                        <input type="hidden" name="graph_id" id="graph-edit-graph_id" value="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="slect_type_data">Select Category</label>
                                    <select class="form-control" id="slect_type_data" required name="data_type">
                                        <!--<option value=""></option>-->
                                        @foreach($graph_field_datas as $graph_field_data)
                                            <option value="{{$graph_field_data->id}}">{{ $graph_field_data->type_of_data }}</option>
                                        @endforeach
                                    </select>                                    </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-alternative" id="exampleFormControlInput3" placeholder="" required name="percentage" value="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{--                                        <label for="example-datetime-local-input" class="form-control-label">Datetime</label>--}}
                                    <input class="form-control" type="month" value="{{date('Y-m')}}" id="example-date_set" required name="date">

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" onclick="$('#edit-graph-form').submit();" class="btn bg-gradient-primary">Save changes</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script>

        const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
            searchable: true,
            fixedHeight: true,
            filters:true,
        });


        function edit_graph_data(id) {
            // console.log(id);

            $.ajax({
                type:'POST',
                url:'{{ route('recoder/graph/edit_data/get') }}',
                headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                data: {
                    'graph_id' : id,
                },
                success:function(data){
                    console.log(data.graph.type_of_data);
                    $('#graph-edit-graph_id').val(id);
                    $('#slect_type_data').val(data.graph.type_of_data);
                    $('#example-date_set').val(data.insert_date);
                    $('#exampleFormControlInput3').val(data.percentage);
                    $('#exampleModalMessage').modal('show');

                }
            });
        }
    </script>
@endsection
