@extends('super_admin.lay')


@section('title' , __('Clusters'))


@section('style')


@endsection

@section('content')
    @php
        $clusters = \App\Cluster::with('garment')->get();
    @endphp
    @php
        $Graph_details = \App\Graph::get();

    @endphp
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                    <h6>Add Users</h6>
                </div>
                <div class="card-body p-3">
                    <form  action="{{ route('super_admin/save-user') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name" name="fname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Last Name" name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Contact Number" name="mnumber">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="exampleFormControlSelect5">Select Level</label>
                                <select class="form-control" id="exampleFormControlSelect5" required name="user_type">

                                    <option value=""> -- Select Level -- </option>
                                    <option value="Group Level">Group Level</option>
                                    <option value="Cluster Level">Cluster Level</option>
                                    <option value="Facility Level">Facility Level</option>
                                    <option value="Recoder">Recoder</option>

                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6" id="hiding_cluster">
                            <div class="form-group">
                                <label for="exampleFormControlSelect6">Select Cluster</label>
                                <select class="form-control" id="exampleFormControlSelect6" required name="cluster">
                                    <option value="">-- Please select --</option>
                                    @foreach($clusters as $clusters_name)
                                        <option value="{{$clusters_name->id}}">{{ $clusters_name->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6" id="hiding_garment">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect7">Select Facility</label>
                                    <select class="form-control" id="exampleFormControlSelect7" required name="garment">

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="hiding_check_field">
                            @foreach($Graph_details as $Graph_detail)
                                <div class="col-md-12" >
                                    <div class="form-check">

                            <input class="form-check-input" type="checkbox" value="{{$Graph_detail->id}}" id="fcustomCheck1" name="fields_of_graph[]">
                            <label class="custom-control-label" for="customCheck1">{{$Graph_detail->type_of_data}}</label>

                                    </div></div>
                            @endforeach
                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>


    </div>


    </div>
@endsection

@section('script')
<script>
    $(document).ready(function () {

        $("#exampleFormControlSelect6").change(function (event) {
             cluster_id  = $(this).val();
            var taskSelect = $('#exampleFormControlSelect7');
            taskSelect.empty();
            taskSelect.append(
                $('<option></option>').val('').html('-- Please select related Garment --')
            );
            $.ajax({
                type:'POST',
                url:'{{ route('super_admin/adduserto/cluster') }}',
                headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                data: {
                    'cluster_id' : cluster_id,

                },
                success:function(data){
                    //console.log(data);
                    if(data.length >= 0){
                        $.each(data , function(index, val) {
                            console.log(val);

                            taskSelect.append(
                                $('<option></option>').val(val.id).html(val.name)
                            );
                        });
                    }else{
                        console.log('no data');
                    }
                    taskSelect.append(
                        $('<option></option>').val('not_found').html('-- Not on this list --')
                    );

                }
            });
            // alert("You have Selected  :: "+$(this).val());
        });

        $("#exampleFormControlSelect5").change(function (event) {
            var level_value  = $(this).val();
            if(level_value === 'Group Level') {
                $("#hiding_cluster").hide();
                $("#hiding_garment").hide();
                $("#hiding_check_field").hide();
                $('#exampleFormControlSelect6').prop('required',false);
                $('#exampleFormControlSelect7').prop('required',false);
                $('#fcustomCheck1').prop('required',false);

            }else if(level_value === 'Cluster Level') {
                $("#hiding_cluster").show();
                $("#hiding_garment").hide();
                $("#hiding_check_field").hide();
                $('#exampleFormControlSelect6').prop('required',true);
                $('#exampleFormControlSelect7').prop('required',false);
                $('#fcustomCheck1').prop('required',false);
            }else if(level_value === 'Facility Level') {
                $("#hiding_cluster").show();
                $("#hiding_garment").show();
                $("#hiding_check_field").hide();
                $('#exampleFormControlSelect6').prop('required',true);
                $('#exampleFormControlSelect7').prop('required',true);
                $('#fcustomCheck1').prop('required',false);
            }else if(level_value === 'Recoder') {
                $("#hiding_cluster").show();
                $("#hiding_garment").show();
                $("#hiding_check_field").show();
                $('#exampleFormControlSelect6').prop('required',true);
                $('#exampleFormControlSelect7').prop('required',true);
                $('#fcustomCheck1').prop('required',false);
            }
        });
    });
</script>
@endsection
