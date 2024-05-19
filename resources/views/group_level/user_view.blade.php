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
        $clusters = \App\Cluster::with('garment')->get();
    @endphp
    @php
        $Graph_details = \App\Graph::get();

    @endphp
    <div class="row mt-4 m-1">
                <div class="col-lg-12 mb-lg-0 mb-4">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card mb-2">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <h1 class="text-gradient text-primary mb-0"><span id="status4" countto="417">05</span></h1>
                                                    <h6 class="mb-0 text_grey">
                                                       Group Level
                                                    </h6>
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-secondary">Users</p>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                    <img src="{{ asset('assets/img/user.png') }}" class="border-radius-lg w-100" style="" alt="main_logo">
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
                                                <div class="numbers">
                                                    <h1 class="text-gradient text-primary mb-0"><span id="status4" countto="417">17</span></h1>
                                                    <h6 class="mb-0 text_grey">
                                                        Cluster Level
                                                    </h6>
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-secondary">Users</p>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="{{ asset('assets/img/user.png') }}" class="border-radius-lg w-100" style="" alt="main_logo">
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
                                                <div class="numbers">
                                                    <h1 class="text-gradient text-primary mb-0"><span id="status4" countto="417">36</span></h1>
                                                    <h6 class="mb-0 text_grey">
                                                        Facility Level
                                                    </h6>
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-secondary">Users</p>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="{{ asset('assets/img/user.png') }}" class="border-radius-lg w-100" style="" alt="main_logo">
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
                        <div class="card-body p-3">
                            <div class="nav-wrapper position-relative w-25">
                                <ul class="nav nav-pills nav-fill p-1 text_grey" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link mb-0 px-0 py-1 active text_grey" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="true">
                                            New
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link mb-0 px-0 py-1 text_grey" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false" tabindex="-1">
                                            Edit
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
                                <form class="text_gray" id="adduserform" method="post" action="{{ route('group/save-user') }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="addusername" class="text_grey">Full Name</label>
                                                <input type="text" class="form-control" id="addusername" name="addusername" placeholder="Type Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="adduseremail" class="text_grey">Email</label>
                                                <input type="email" class="form-control" id="adduseremail" name="adduseremail" placeholder="Email@stargarments.lk">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="addusercontact" class="text_grey">Contact</label>
                                                <input type="text" class="form-control" id="addusercontact" name="addusercontact" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="adduserpassword" class="text_grey">Password</label>
                                                <input type="text" class="form-control" id="adduserpassword" name="adduserpassword" placeholder="Default@123">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="adduserlevel" class="text_grey">Level</label>
                                                <select class="form-control" id="adduserlevel" name="adduserlevel" required>
                                                    <option value=""> -- Select Level -- </option>
                                                    <option value="Group Level">Group Level</option>
                                                    <option value="Cluster Level">Cluster Level</option>
                                                    <option value="Facility Level">Facility Level</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="addusercluester" class="text_grey">Cluster</label>
                                                <select class="form-control" id="addusercluester" name="addusercluester" required>
                                                    <option value="">-- Please select --</option>
                                                    @php($clusters = \App\Cluster::with('garment')->get())
                                                    @foreach($clusters as $clusters_name)
                                                        <option value="{{$clusters_name->id}}">{{ $clusters_name->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="adduserfacility" class="text_grey">Facility</label>
                                                <select class="form-control" id="adduserfacility" name="adduserfacility" required>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="adduserdepartment" class="text_grey">Department</label>
                                                <select class="form-control" id="adduserdepartment" name="adduserdepartment" required>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="adduserjobrole" class="text_grey">Job Role</label>
                                                <select class="form-control" id="adduserjobrole" name="adduserjobrole" required>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                    <button type="submit" class="btn bg-gradient-info btn-lg">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show position-relative border-radius-lg" id="cam2" role="tabpanel" aria-labelledby="cam2" style="">

                            </div>
                            <div class="tab-pane fade show position-relative border-radius-lg" id="cam3" role="tabpanel" aria-labelledby="cam2" style="">

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
                        <div class="col-md-4"><h5 class="text_grey">User List</h5></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option value=""> -- Select Level -- </option>
                                    <option value="Group Level">Group Level</option>
                                    <option value="Cluster Level">Cluster Level</option>
                                    <option value="Facility Level">Facility Level</option>
                                </select>
                            </div></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control" id="userlistselectcluster">
                                    <option>Select Cluster</option>
                                    @foreach($clusters as $clusters_name)
                                        <option value="{{$clusters_name->id}}">{{ $clusters_name->name }}</option>
                                    @endforeach
                                </select>
                            </div></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control" id="userlistselectfacility">
                                    <option>Select Facility</option>

                                </select>
                            </div></div>
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
                            <table class="table table-flush" id="example">
                                <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Contact
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Level
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Department
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No. Data Set
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td class="text-sm font-weight-normal">Tiger Nixon</td>
                                    <td class="text-sm font-weight-normal">System Architect</td>
                                    <td class="text-sm font-weight-normal">Edinburgh</td>
                                    <td class="text-sm font-weight-normal">61</td>
                                    <td class="text-sm font-weight-normal">2011/04/25</td>
                                    <td class="text-sm font-weight-normal">$320,800</td>
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

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            dataTable = $("#example").DataTable({
                "columnDefs": [
                    {
                        "targets": [6],
                        "visible": false
                    }
                ]
            });
            function load_assign_user_data_for_form_field(type,append_id,selected_val,placeholdertext){
                var facilitySelect = $('#'+append_id);
                facilitySelect.empty();
                facilitySelect.append(
                    $('<option></option>').val('').html(placeholdertext)
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
            $('#addusercluester').change(function (event) {
                cluster  = $(this).val();
                load_assign_user_data_for_form_field('facility','adduserfacility',cluster,'-- Please select --');
            });
            $('#adduserfacility').change(function (event) {
                facility  = $(this).val();
                load_assign_user_data_for_form_field('department','adduserdepartment',facility,'-- Please select --');
            });
            $('#adduserdepartment').change(function (event) {
                department  = $(this).val();
                load_assign_user_data_for_form_field('jobrole','adduserjobrole',department,'-- Please select --');
            });

            $('#adduserform').submit(function (e) {
               e.preventDefault();
                var form = $(this);
                var formData = new FormData($(this)[0]);

                var url = form.attr('action');
                $.ajax({
                    type: "POST",
                    processData: false,
                    headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                    contentType: false,
                    url: url,
                    data: formData, // serializes the form's elements.
                    success: function (data) {
                        $('#adduserform')[0].reset();
                        selectoptionempty('adduserfacility','-- Please select --');
                        selectoptionempty('adduserdepartment','-- Please select --');
                        selectoptionempty('adduserjobrole','-- Please select --');
                    }
                });
            });

            function selectoptionempty(select_id,placeholdertext){
                var facilitySelect = $('#'+select_id);
                facilitySelect.empty();
                facilitySelect.append(
                    $('<option></option>').val('').html(placeholdertext)
                );
            }

            $('#userlistselectcluster').change(function (event) {
                cluster  = $(this).val();
                load_assign_user_data_for_form_field('facility','userlistselectfacility',cluster,'-- Select Facility --');
            });

        });


    </script>
@endsection
