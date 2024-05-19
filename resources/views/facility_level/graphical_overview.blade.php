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
                    <div class="card bg-gradient-primary">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-10 my-auto">
                                    <div class="numbers px-3">
                                        <p class="text-white text-sm mb-0 text-capitalize opacity-7">Welcome</p>
                                        <h5 class="text-white font-weight-bolder mb-0">
                                            Sanura Dharmadasa
                                        </h5>
                                        <div class="row mt-3 mb-3">
                                            <div class="col-4">
                                                <p class="text-white text-sm mb-0 text-capitalize opacity-7">Level</p>
                                                <h5 class="text-white font-weight-bolder mb-0">
                                                    Group
                                                </h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-white text-sm mb-0 text-capitalize opacity-7">Department</p>
                                                <h5 class="text-white font-weight-bolder mb-0">
                                                    W - Ex
                                                </h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-white text-sm mb-0 text-capitalize opacity-7">Job Role</p>
                                                <h5 class="text-white font-weight-bolder mb-0">
                                                   Engineer
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 text-end">
                                    <img class="w-50" src="../../assets/img/small-logos/icon-sun-cloud.png" alt="image sun">
                                    <h5 class="mb-0 text-white text-end me-1">Cloudy</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row mt-5">
                        <div class="col-md-2">
                            <img class="w-95" src="../../assets/img/small-logos/icon-sun-cloud.png" alt="image sun">
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h6 class="text_grey font-weight-bolder">Select a month for overview</h6>
                                <input class="form-control" type="month" value="2018-11" id="example-month-input">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <h6 class="text_grey font-weight-bolder mt-2">Export Report</h6>
                                <select class="form-control mt-4" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-4 m-2">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1 text-center">
                              <h5 class="text_grey">Southern Cluster</h5>
                        </div>
                        <div class="card-body p-3">
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1 text-center">
                            <h5 class="text_grey">Katunayake Cluster</h5>
                        </div>
                        <div class="card-body p-3">
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1 text-center">
                            <h5 class="text_grey">Central Operations</h5>
                        </div>
                        <div class="card-body p-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 m-3">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card mb-4 bg-gradient-primary">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="avatar avatar-xl border-1 rounded-circle bg-light">
                                        <h5 class="text-success">+12%</h5>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class="numbers">
                                        <h5 class="font-weight-bolder mb-0 text-warning">
                                            2797.14
                                            <span class="text-warning text-sm font-weight-bolder">kg</span>
                                        </h5>
                                        <h6 class="mb-0 text-warning">
                                            LPG Gas Usage
                                        </h6>
                                        <p class="mb-0 text-capitalize text-white text-sm">Environmental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="avatar avatar-xl border-1 rounded-circle bg-light">
                                        <h5 class="text-success">+12%</h5>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class="numbers">
                                        <h5 class="font-weight-bolder mb-0 text-primary">
                                            2797.14
                                            <span class="text-sm font-weight-bolder text_grey">kg</span>
                                        </h5>
                                        <h6 class="mb-0 text_grey font-weight-bolder">
                                            LPG Gas Usage
                                        </h6>
                                        <p class="mb-0 text-capitalize text-secondary text-sm">Environmental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="avatar avatar-xl border-1 rounded-circle bg-light">
                                        <h5 class="text-success">+2%</h5>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class="numbers">
                                        <h5 class="font-weight-bolder mb-0 text-primary">
                                            1300
                                            <span class="text-sm font-weight-bolder text_grey">L</span>
                                        </h5>
                                        <h6 class="mb-0 text_grey font-weight-bolder">
                                        Scope 1Bio Mass                                        </h6>
                                        <p class="mb-0 text-capitalize text-secondary text-sm">Environmental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="avatar avatar-xl border-1 rounded-circle bg-light">
                                        <h5 class="text-success">+2%</h5>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class="numbers">
                                        <h5 class="font-weight-bolder mb-0 text-gradient text-primary">
                                                                   1300
                                            <span class="text-sm font-weight-bolder" style="color: red;">L</span>
                                        </h5>
                                        <h6 class="mb-0 text_grey font-weight-bolder">
                                            Scope 1Bio Mass
                                        </h6>
                                        <p class="mb-0 text-capitalize text-secondary text-sm">Environmental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="avatar avatar-xl border-1 rounded-circle bg-light">
                                        <h5 class="text-danger"> -1%</h5>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class="numbers">
                                        <h5 class="font-weight-bolder mb-0 text-gradient text-primary">
                                            142
                                            <span class="text-sm font-weight-bolder" style="color: red;">kg</span>
                                        </h5>
                                        <h6 class="mb-0 text_grey font-weight-bolder">
                                            Hazardous Was
                                        </h6>
                                        <p class="mb-0 text-capitalize text-secondary text-sm">Environmental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="avatar avatar-xl border-1 rounded-circle bg-light">
                                        <h5 class="text-danger"> -1%</h5>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class="numbers">
                                        <h5 class="font-weight-bolder mb-0 text-gradient text-primary">
                                            142
                                            <span class="text-sm font-weight-bolder" style="color: red;">kg</span>
                                        </h5>
                                        <h6 class="mb-0 text_grey font-weight-bolder">
                                            Hazardous Was
                                        </h6>
                                        <p class="mb-0 text-capitalize text-secondary text-sm">Environmental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="avatar avatar-xl border-1 rounded-circle bg-light">
                                        <h5 class="text-danger"> -10%</h5>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class="numbers">
                                        <h5 class="font-weight-bolder mb-0 text-gradient text-primary">
                                                296549.1
                                            <span class="text-sm font-weight-bolder" style="color: red;">kg</span>
                                        </h5>
                                        <h6 class="mb-0 text_grey font-weight-bolder">
                                            Waste Fabric
                                        </h6>
                                        <p class="mb-0 text-capitalize text-secondary text-sm">Environmental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="avatar avatar-xl border-1 rounded-circle bg-light">
                                        <h5 class="text-danger"> -10%</h5>
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class="numbers">
                                        <h5 class="font-weight-bolder mb-0 text-gradient text-primary">
                                            296549.1
                                            <span class="text-sm font-weight-bolder" style="color: red;">kg</span>
                                        </h5>
                                        <h6 class="mb-0 text_grey font-weight-bolder">
                                            Waste Fabric
                                        </h6>
                                        <p class="mb-0 text-capitalize text-secondary text-sm">Environmental</p>
                                    </div>
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
                <div class="col-sm"></div>
                <div class="col-sm">    <div class="pagination-container justify-content-center">
                        <ul class="pagination pagination-default">
                            <li class="page-item">
                                <a class="page-link" href="javascript:;" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;">2</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:;">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm"></div>
            </div>
        </div>
    </div>

    <div class="row mt-4 m-3">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <div class="row">
                            <div class="col-md-6"><h5 class="text_grey mb-0">LPG Gas Usage</h5>
                                <p class="mb-0 text-capitalize text-secondary text-sm">Environmental</p>
                            </div>
                            <div class="col-md-6 text-end"><h5 class="text_grey mb-0">November</h5>
                                <p class="mb-0 text-capitalize text-secondary text-sm">2022</p>
                            </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                                    <div class="chart">
                                        <canvas id="bar-chart-horizontal" class="chart-canvas" height="238px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="mixed-chart" class="chart-canvas" height="600" style="display: block; box-sizing: border-box; height: 300px; width: 478px;" width="956"></canvas>
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
                <div class="col-lg-2">
                    <div class="card mb-4 bg-gradient-info">

                        <div class="card-body p-3">
                            <h6 class="text-white">Star Fashion Clothing Galle</h6>
                            <br>
                            <br>
                            <center><button href="javascript:;" class="text-center btn btn-icon bg-white d-lg-block mt-3 mb-0">
                                    VIEW                            </button></center>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="card mb-4 bg-gradient-info">

                        <div class="card-body p-3">
                            <h6 class="text-white">Star Fashion Clothing Galle</h6>
                            <br>
                            <br>
                            <center><button href="javascript:;" class="text-center btn btn-icon bg-white d-lg-block mt-3 mb-0">
                                    VIEW                            </button></center>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="card mb-4 bg-gradient-info">

                        <div class="card-body p-3">
                            <h6 class="text-white">Star Fashion Clothing Galle</h6>
                            <br>
                            <br>
                            <center><button href="javascript:;" class="text-center btn btn-icon bg-white d-lg-block mt-3 mb-0">
                                    VIEW                            </button></center>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="card mb-4 bg-gradient-info">

                        <div class="card-body p-3">
                            <h6 class="text-white">Star Fashion Clothing Galle</h6>
                            <br>
                            <br>
                            <center><button href="javascript:;" class="text-center btn btn-icon bg-white d-lg-block mt-3 mb-0">
                                    VIEW                            </button></center>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="card mb-4 bg-gradient-info">

                        <div class="card-body p-3">
                            <h6 class="text-white">Star Fashion Clothing Galle</h6>
                            <br>
                            <br>
                            <center><button href="javascript:;" class="text-center btn btn-icon bg-white d-lg-block mt-3 mb-0">
                                    VIEW                            </button></center>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="card mb-4 bg-gradient-info">

                        <div class="card-body p-3">
                            <h6 class="text-white">Star Fashion Clothing Galle</h6>
                            <br>
                            <br>
                            <center><button href="javascript:;" class="text-center btn btn-icon bg-white d-lg-block mt-3 mb-0">
                                    VIEW                            </button></center>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 m-3">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">    <div class="pagination-container justify-content-center">
                        <ul class="pagination pagination-default">
                            <li class="page-item">
                                <a class="page-link" href="javascript:;" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;">2</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:;">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm"></div>
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

            // Bar chart horizontal
            var ctx6 = document
                .getElementById("bar-chart-horizontal")
                .getContext("2d");

            new Chart(ctx6, {
                type: "bar",
                data: {
                    labels: ["16-20"],
                    datasets: [
                        {
                            label: "Sales by age",
                            weight: 5,
                            borderWidth: 0,
                            borderRadius: 4,
                            backgroundColor: "#3A416F",
                            data: [15],
                            fill: false
                        }
                    ]
                },
                options: {
                    indexAxis: "y",
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: "#9ca2b7"
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: true,
                                drawTicks: true
                            },
                            ticks: {
                                display: true,
                                color: "#9ca2b7",
                                padding: 10
                            }
                        }
                    }
                }
            });

            // Mixed chart
            var ctx7 = document.getElementById("mixed-chart").getContext("2d");

            new Chart(ctx7, {
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        type: "bar",
                        label: "Organic Search",
                        weight: 5,
                        tension: 0.4,
                        borderWidth: 0,
                        pointBackgroundColor: "#3A416F",
                        borderColor: "#3A416F",
                        backgroundColor: '#3A416F',
                        borderRadius: 4,
                        borderSkipped: false,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 10,
                    },
                        {
                            type: "line",
                            label: "Referral",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 0,
                            pointBackgroundColor: "#cb0c9f",
                            borderColor: "#cb0c9f",
                            borderWidth: 3,
                            backgroundColor: gradientStroke1,
                            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                            fill: true,
                        }
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#b2b9bf',
                                font: {
                                    size: 11,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: true,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#b2b9bf',
                                padding: 10,
                                font: {
                                    size: 11,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });
        });

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
