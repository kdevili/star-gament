@extends('group_level.lay')


@section('title' , __('Users'))


@section('style')
    <style>
        .text-gradient.text-primary {
            background-image: linear-gradient(1deg,#7928ca,#ff0080);
        }
    </style>

@endsection

@section('content')
@php
        $thismonth = date('Y-m');
        $total_data_fields = count($graph_data);
        $completed_data_fields = count(\App\Graph_data::where('user_id',auth()->id())->where('insert_date',$thismonth)->get());
        $remaining_data_fields = $total_data_fields - $completed_data_fields;
@endphp
    <div class="row mt-4 m-1">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="row">
                <div class="col-sm">
                    <div class="card mb-2">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers mt-3">
                                        <h6 class="mb-0 mt-2 text_grey">
                                            Total Data Fields
                                        </h6>
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-secondary">Assigned to you</p>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <h1 class="text-gradient text-primary mb-0" style="font-size: 70px;">

                                        <span id="status1" countto="">
      @if($total_data_fields<10)
          0{{$total_data_fields}}
      @else
          {{$total_data_fields}}
      @endif
                                        </span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card mb-2">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers mt-3">
                                        <h6 class="mb-0 mt-2 text_grey">
                                            Completed Data Fields
                                        </h6>
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-secondary">For this month</p>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <h1 class="text-gradient text-primary mb-0" style="font-size: 70px;"><span id="status4" countto="417">
                                             @if($completed_data_fields<10)
                                                0{{$completed_data_fields}}
                                            @else
                                                {{$completed_data_fields}}
                                            @endif

                                        </span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card mb-2">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers mt-3">
                                        <h6 class="mb-0 mt-2 text-danger">
                                            Remaining Data Fields
                                        </h6>
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-secondary">For this month</p>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <h1 class="text-gradient text-primary mb-0" style="font-size: 70px;"><span id="status4" countto="417">
                                                     @if($remaining_data_fields<10)
                                                0{{$remaining_data_fields}}
                                            @else
                                                {{$remaining_data_fields}}
                                            @endif
                                            </span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row mt-4 m-3">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="row">
                <div class="card">
                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <div class="row">
                            <div class="col-md-6"><h5 class="text_grey">Data Fields Assigned to You</h5></div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control status-dropdown3" id="exampleFormControlSelect1">
                                        <option value="">All Data</option>
                                        <option value="ECONOMIC">ECONOMIC</option>
                                        <option value="ENVIRONMENTAL">ENVIRONMENTAL</option>
                                        <option value="SOCIAL">SOCIAL</option>
                                    </select>
                                </div></div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input class="form-control status-dropdown4" type="month" value="{{date('Y-m')}}" id="example-month-input">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="input-group mb-4">
                                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                        <input class="form-control" placeholder="Type here..." type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table table-flush table-striped table-bordered dt-responsive hover dataTable no-footer dtr-inline" id="example_new">
                                <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sector
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Data Description
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Month
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Metric
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        This month Value
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($graph_data as $data)
                                    @if(isset($data->graph_data->this_month_value))
                                <tr>
                                    <td class="text-sm font-weight-normal">{{$data->category}}</td>
                                    <td class="text-sm font-weight-normal">{{$data->type_of_data}}</td>
                                    <td class="text-sm font-weight-normal">
                                        @if(isset($data->graph_data->insert_date))
                                        {{$data->graph_data->insert_date}}</td>
                                    @else
                                        {{date('Y-m')}}
                                    @endif
                                    <td class="text-sm font-weight-normal">{{$data->metric}}</td>
                                    <td class="text-sm font-weight-normal">
                                        <div class="row text-center">
                                            <div class="col-6">  {{$data->graph_data->this_month_value}}</div>
                                            <div class="col-6">

                                      <a href="#"  data-valueid="{{$data->graph_data->id}}" class="updateRecordButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-container="body" data-animation="true"><i class="ni ni-single-copy-04"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-sm font-weight-normal"></td>
                                </tr>
                                    @else
                                        <tr>
                                            <td class="text-sm text-danger font-weight-normal">{{$data->category}}</td>
                                            <td class="text-sm text-danger font-weight-normal">{{$data->type_of_data}}</td>
                                            <td class="text-sm text-danger font-weight-normal">
                                                @if(isset($data->graph_data->insert_date))
                                                    {{$data->graph_data->insert_date}}</td>
                                            @else
                                                {{date('Y-m')}}
                                            @endif
                                            <td class="text-sm text-danger font-weight-normal">{{$data->metric}}</td>
                                            <td class="text-sm text-danger font-weight-normal">

                                                    <div class="row text-center">
                                                        <div class="col-6"> 0 </div>
                                                        <div class="col-6">
                                                            <a href="#" data-month="{{date('Y-m')}}" data-typeid="{{$data->id}}" data-valueid="" class="updateRecordButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Add" data-container="body" data-animation="true"><i class="ni ni-single-copy-04"></i></a>
                                                        </div>
                                                    </div>

                                            </td>
                                            <td class="text-sm text-danger font-weight-normal"></td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 m-3">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="row">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="nav-wrapper position-relative w-25">
                            <ul class="nav nav-pills nav-fill p-1 text_grey" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mb-0 px-0 py-1 active text_grey" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="true">
                                        Assign
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mb-0 px-0 py-1 text_grey" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false" tabindex="-1">
                                        Approval
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-3 mt-2">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show position-relative active border-radius-lg" id="cam1" role="tabpanel" aria-labelledby="cam1">
                                <form class="text_gray" action="{{route('group/assign_user_to_data_field')}}" method="post" id="assign_user_new_data_field">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelec" class="text_grey">Sector</label>
                                                <select class="form-control" name="sector" id="sector" required>
                                                    <option value=""> - Select Sector -  </option>
                                                    <option value="ENVIRONMENTAL">ENVIRONMENTAL</option>
                                                    <option value="ECONOMIC">ECONOMIC</option>
                                                    <option value="SOCIAL">SOCIAL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Data Description</label>
                                                <select class="form-control" id="data_discription" name="data_discription">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Cluster</label>
                                                <select class="form-control" id="cluster" name="cluster">
                                                    <option value=""> - Select Cluster - </option>
                                                    @foreach($clusters as $cluster)
                                                    <option value="{{$cluster->id}}">{{$cluster->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Facility</label>
                                                <select class="form-control" id="facility" name="facility">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Department</label>
                                                <select class="form-control" id="department" name="department">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">User</label>
                                                <select class="form-control" id="employees" name="employee">

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <button type="submit" class="btn bg-gradient-info btn-lg">Assign</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade show position-relative border-radius-lg" id="cam3" role="tabpanel" aria-labelledby="cam2" style="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-form_add_value" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">Add Value</h3>
                        </div>
                        <div class="card-body">
                            <form role="form text-left" action="{{ route('group/this_month_value/save') }}" method="POST" id="add_value_this_month">
                                @csrf
                                <input type="hidden" id="date_field_id" name="date_field_id">
                                <input type="hidden" id="data_type_id" name="data_type_id">
                                <input type="hidden" id="month" name="month">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="this_month_value" id="this_month_value" placeholder="This month Value" aria-label="This Month Value">
                                </div>

                                <div class="text-center">
                                    <button type="button" onclick="$('#add_value_this_month').submit();" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Save</button>
                                    <button type="button" class="btn bg-gradient-secondary btn-round btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        @endsection

        @section('script')
            <script>
                let global_theRowObject;
                $.extend( $.fn.dataTable.defaults, {
                    responsive: true
                } );
                $(document).ready(function() {
                    dataTable = $("#example_new").DataTable({
                        "columnDefs": [
                            {
                                "targets": [5],
                                "visible": false
                            }
                        ]
                    });
                    $('.status-dropdown3').on('change', function(e){
                        var status = $(this).val();
                        $('.status-dropdown3').val(status)
                        dataTable.column(0).search(status).draw();
                    })
                    $('.status-dropdown4').on('change', function(e){
                        var status = $(this).val();
                        $('.status-dropdown4').val(status)
                        dataTable.column(2).search(status).draw();
                    })


                    $('#sector').change(function (event) {
                        sector  = $(this).val();
                        var discriptionSelect = $('#data_discription');
                        discriptionSelect.empty();
                        discriptionSelect.append(
                            $('<option></option>').val('').html('-- Please select Data Description --')
                        );
                        $.ajax({
                            type:'POST',
                            url:'{{ route('group/assign_user_to_data_field/load_data_description') }}',
                            headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                            data: {
                                'sector' : sector,
                            },
                            success:function(data){

                                if(data.discription.length > 0){
                                    $.each(data.discription , function(index, val) {
                                        discriptionSelect.append(
                                            $('<option></option>').val(val.id).html(val.type_of_data)
                                        );
                                    });
                                }else{
                                    console.log('no data');
                                }
                                discriptionSelect.append(
                                    $('<option></option>').val('not_found').html('-- Not on this list --')
                                );

                            }
                        });
                        // alert("You have Selected  :: "+$(this).val());
                    });

                    function load_assign_user_data_for_form_field(type,append_id,selected_val){
                        var facilitySelect = $('#'+append_id);
                        facilitySelect.empty();
                        facilitySelect.append(
                            $('<option></option>').val('').html('-- Please select --')
                        );
                        $.ajax({
                            type:'POST',
                            url:'{{ route('group/assign_user_to_data_field/load_select_options') }}',
                            headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                            data: {
                                'type' : type,
                                'selected_val' : selected_val,
                            },
                            success:function(data){

                                if(data.discription.length > 0){
                                    $.each(data.discription , function(index, val) {
                                        facilitySelect.append(
                                            $('<option></option>').val(val.id).html(val.name)
                                        );
                                    });
                                }else{
                                    console.log('no data');
                                }
                            }
                        });
                    }
                    $('#cluster').change(function (event) {
                        cluster  = $(this).val();
                        load_assign_user_data_for_form_field('facility','facility',cluster);
                    });
                    $('#facility').change(function (event) {
                        facility  = $(this).val();
                        load_assign_user_data_for_form_field('department','department',facility);
                    });
                    $('#department').change(function (event) {
                        department  = $(this).val();
                        load_assign_user_data_for_form_field('user','employees',department);
                    });
                });

                // if (document.getElementById('status11')) {
                //     const countUp = new CountUp('status11', document.getElementById("status11").getAttribute("countTo"));
                //     if (!countUp.error) {
                //         countUp.start();
                //     } else {
                //         console.error(countUp.error);
                //     }
                // }
                $('#example_new tbody').on('click',
                    'a',
                    function () {
                        if ( $(this).hasClass('updateRecordButton') ) {
                            var data = dataTable.row($(this).parents('tr')).data(); //Retrieve row data
                            var tr = $(this).closest('tr'); //Find DataTables table row
                            var theRowObject = dataTable.row(tr); //Get DataTables row object
                            var value_id = $(this).data('valueid');
                            var typeid = $(this).data('typeid');
                            var month = $(this).data('month');
                            global_theRowObject=theRowObject;
                                console.log(data);
                            $.ajax({
                                type:'POST',
                                url:'{{ route('group/get_datafields_value') }}',
                                headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                                data: {
                                    'value_id' : value_id,
                                },
                                success:function(data){
                                    if(data.graph_data != null) {
                                        $('#this_month_value').val(data.graph_data.this_month_value);
                                        $('#date_field_id').val(data.graph_data.id);
                                    }else{
                                        $('#this_month_value').val(0);
                                        $('#date_field_id').val('new');
                                        $('#data_type_id').val(typeid);
                                        $('#month').val(month);
                                    }
                                    $('#modal-form_add_value').modal('show');
                                }
                            });

                        }

                    });
                $("#add_value_this_month").submit(function(e) {

                    e.preventDefault(); // avoid to execute the actual submit of the form.

                    var form = $(this);
                    var url = form.attr('action');

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: form.serialize(), // serializes the form's elements.
                        success: function(data)
                        {
                            // show response from the php script.
                            var this_month = '<div class="row text-center">\n' +
                                '                                            <div class="col-6">'+data.graph_data.this_month_value+'</div>\n' +
                                '                                            <div class="col-6">\n' +
                                '\n' +
                                '                                      <a href="#"  data-valueid="'+data.graph_data.id+'" class="updateRecordButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-container="body" data-animation="true"><i class="ni ni-single-copy-04"></i></a>\n' +
                                '                                            </div>\n' +
                                '                                        </div>';

                     var table_data = [data.category,data.type_of_data,data.graph_data.insert_date,data.metric,this_month ,''];
                     console.log(table_data);
                            dataTable.row(global_theRowObject).data(table_data).draw(false);
                            $('#modal-form_add_value').modal('hide');
                            // toastr.success('Successfully Updated Mark');
                        }
                    });
                });


            </script>
@endsection
