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
                        <h5 class="mb-0">View Group Level Users</h5>
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
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($group_levels as $group_level)

                                        <tr>
                                            <td class="text-sm font-weight-normal">{{$group_level->id}}</td>
                                            <td class="text-sm font-weight-normal">{{$group_level->name}} &nbsp {{$group_level->lname}}</td>
                                            <td class="text-sm font-weight-normal">{{$group_level->email}}</td>
                                            <td class="text-sm font-weight-normal">{{$group_level->role}}</td>
                                            <td class="text-sm font-weight-normal">  <a href="#" onclick="edit_group_level_users('{{$group_level->id}}')" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-container="body" data-animation="true"><i class="ni ni-settings"></i></a>&nbsp
                                                <a href="{{ route('super_admin/remove-user', $group_level->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-container="body" data-animation="true"> <i class="ni ni-scissors"></i></a></td>
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



    <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Group Level User</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('super_admin/edit_group_level_user_data') }}" method="POST" id="edit-group-form">
                        @csrf
                        <input type="hidden" name="group_level_id" id="group_level_user_id" value="">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-alternative" id="fname_edit" placeholder="" required name="fname" value="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-alternative" id="lname_edit" placeholder="" required name="lname" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-alternative" id="email_edit" placeholder="" required name="email" value="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" onclick="$('#edit-group-form').submit();" class="btn bg-gradient-primary">Save changes</button>
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

        $(document).ready(function() {
            dataTable = $("#example").DataTable({
                "columnDefs": [
                    {
                        "targets": [5],
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


        function edit_group_level_users(id) {
            // console.log(id);

            $.ajax({
                type:'POST',
                url:'{{ route('super_admin/group/edit_data/get') }}',
                headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                data: {
                    'group_level_id' : id,
                },
                success:function(data){

                    console.log(data);


                    $('#group_level_user_id').val(data.id);
                    $('#fname_edit').val(data.name);
                    $('#lname_edit').val(data.lname);
                    $('#email_edit').val(data.email);
                    $('#exampleModalMessage').modal('show');




                }
            });
        }
    </script>
@endsection
