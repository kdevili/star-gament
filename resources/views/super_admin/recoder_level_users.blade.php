@extends('super_admin.lay')


@section('title' , __('view Users'))


@section('style')

    <style>


        .btn-group, .btn-group-vertical {
            position: relative;
            display: inline;
            vertical-align: middle;
            padding: 10px;
        }
    </style>

@endsection

@section('content')
    <div class="col-xl-12 col-lg-7">

        <div class="row mt-4">
            <div class="col-12">
                <div class="card widget-calendar h-100">

                    <div class="card-header p-3 pb-0">
                        <h5 class="mb-0">View Recoder Level Users</h5>
                        <div class="d-flex">
                        </div>
                    </div>

                    <div class="card-body p-3">
                        <div class="container">
                            <div class="row">
                                {{--                                <div class="col-4">--}}
                                {{--                                    <div class="btn-group submitter-group float-right">--}}
                                {{--                                        @php--}}
                                {{--                                            $facilities = \App\Garment::get();--}}
                                {{--                                        @endphp--}}
                                {{--                                        <select class="form-control status-dropdown1">--}}
                                {{--                                            <option value=""> --Select Facility-- </option>--}}
                                {{--                                            @foreach($facilities as $facility)--}}
                                {{--                                                <option value="{{$facility->name}}">{{$facility->name}}</option>--}}
                                {{--                                            @endforeach--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-4">--}}
                                {{--                                    <div class="btn-group submitter-group float-right">--}}

                                {{--                                        <select class="form-control status-dropdown2">--}}
                                {{--                                            <option value=""> --Select Cluster-- </option>--}}
                                {{--                                            @foreach($clusters_data as $cluster_data)--}}
                                {{--                                                <option value="{{$cluster_data->name}}">{{$cluster_data->name}}</option>--}}
                                {{--                                            @endforeach--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-4"></div>--}}
                            </div></div>
                        <div class="table-responsive">
                            <table id="example" class="table table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Cluster Name</th>
                                    <th>Facility Name</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($recoder_levels as $recoder_level)

                                    <tr>
                                        <td class="text-sm font-weight-normal">{{$recoder_level->id}}</td>
                                        <td class="text-sm font-weight-normal">{{$recoder_level->name}} &nbsp {{$recoder_level->lname}}</td>
                                        <td class="text-sm font-weight-normal">{{$recoder_level->email}}</td>
                                        <td class="text-sm font-weight-normal">{{$recoder_level->role}}</td>
                                        <td class="text-sm font-weight-normal">{{$recoder_level->cluster->name}}</td>
                                        <td class="text-sm font-weight-normal">{{$recoder_level->garment->name}}</td>
                                        <td class="text-sm font-weight-normal">  <a href="#" onclick="" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-container="body" data-animation="true"><i class="ni ni-settings"></i></a>&nbsp
                                            <a href="{{ route('super_admin/remove-user', $recoder_level->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-container="body" data-animation="true"> <i class="ni ni-scissors"></i></a></td>
                                        <td class="text-sm font-weight-normal"></td>
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



    {{--    <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">--}}
    {{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h5 class="modal-title" id="exampleModalLabel">Update Garment Data</h5>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <form action="{{ route('super_admin/edit_garment_data') }}" method="POST" id="edit-graph-form">--}}
    {{--                        @csrf--}}
    {{--                        <input type="hidden" name="garment_id" id="graph-edit-garment_id" value="">--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-12">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <select class="form-control" id="exampleFormControlSelect3" required name="cluster_type">--}}
    {{--                                        <option value=""> --Select Cluster-- </option>--}}
    {{--                                        @foreach($clusters_data as $cluster_data)--}}
    {{--                                            <option value="{{$cluster_data->id}}">{{$cluster_data->name}}</option>--}}
    {{--                                        @endforeach--}}
    {{--                                    </select>                                    </div>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <input type="text" class="form-control form-control-alternative" id="exampleFormControlInput3" placeholder="" required name="name" value="">--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    --}}{{--                                        <label for="example-datetime-local-input" class="form-control-label">Datetime</label>--}}
    {{--                                    <input class="form-control" type="text" value="" id="example-datetime-local-input1" required name="discription">--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="modal-footer">--}}
    {{--                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>--}}
    {{--                            <button type="button" onclick="$('#edit-graph-form').submit();" class="btn bg-gradient-primary">Save changes</button>--}}
    {{--                        </div>--}}

    {{--                    </form>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    </div>--}}
@endsection

@section('script')

    <script>

        $(document).ready(function() {
            dataTable = $("#example").DataTable({
                "columnDefs": [
                    {
                        "targets": [7],
                        "visible": false
                    }
                ]

            });

            /*dataTable.columns().every( function () {
                  var that = this;

                  $('input', this.footer()).on( 'keyup change', function () {
                      if ( that.search() !== this.value ) {
                          that.search(this.value).draw();
                      }
                  });
                });*/


            // $('.filter-checkbox').on('change', function(e){
            //     var searchTerms = []
            //     $.each($('.filter-checkbox'), function(i,elem){
            //         if($(elem).prop('checked')){
            //             searchTerms.push("^" + $(this).val() + "$")
            //         }
            //     })
            //     dataTable.column(1).search(searchTerms.join('|'), true, false, true).draw();
            // });

            $('.status-dropdown1').on('change', function(e){
                var status = $(this).val();
                $('.status-dropdown').val(status)
                console.log(status)
                //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                dataTable.column(2).search(status).draw();
            })
            $('.status-dropdown2').on('change', function(e){
                var status = $(this).val();
                $('.status-dropdown').val(status)
                console.log(status)
                //dataTable.column(6).search('\\s' + status + '\\s', true, false, true).draw();
                dataTable.column(1).search(status).draw();
            })
        });


        function edit_garment_data(id) {
            // console.log(id);

            $.ajax({
                type:'POST',
                url:'{{ route('super_admin/garment/edit_data/get') }}',
                headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                data: {
                    'garment_id' : id,
                },
                success:function(data){

                    console.log(data);


                    $('#graph-edit-garment_id').val(data.id);
                    $('#exampleFormControlInput3').val(data.name);
                    $('#example-datetime-local-input1').val(data.discription);
                    $('#exampleModalMessage').modal('show');




                }
            });
        }
    </script>
@endsection
