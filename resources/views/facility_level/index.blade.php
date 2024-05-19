@extends('facility_level.lay')


@section('title' , __('Facility'))


@section('style')
    <style>
        .border-right-red{
            /*border-right: 2px #be0000 solid;*/
        }
        .progress-wrapper{
            background-color: #ffffff;
            padding: 11px;
            border: 2px #cbcbcb;
            border-style: dotted none dotted none;
            border-radius: 0px;
            margin: 10px 0px 10px 0;
        }

        .progress-wrapper.active{
            background-color: #eeeeee;
            padding: 11px;
            border-bottom: 0px #888;
            border-style: none none dotted none;
            border-radius: 7px;
        }
        .bg-gradient-primary2 {
            background-image: linear-gradient(310deg,#ff0202,#ff0000);
        }
        .progress2 {
            height: 6px;
            font-size: .75rem;
            background-color: #0066cc;
            border-radius: 0.5rem;
        }
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>

@endsection

@section('content')

    <div class="container-fluid py-4">


<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body pt-0">
                <div class="row">
{{--                    <div class="col-lg-12 col-md-12">--}}
{{--                        <div class="card card-body overflow-hidden shadow-blur" style="background: radial-gradient(circle, rgba(244,239,239,1) 0%, rgba(84,84,84,1) 87%);">--}}
{{--                            <div class="row gx-4">--}}
{{--                                <div class="col-auto">--}}
{{--                                    <div class="position-relative" style="width: 180px !important;">--}}
{{--                                        <img src="{{ asset('img/logo11.png') }}" alt="profile_image" class="w-100 border-radius-lg ">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-lg-6 col-md-2 col-sm-3 {{-- col-4 --}} text-center border-right-red">

                            <div class="form-group">
                                <label for="example-datetime-local-input" class="form-control-label">Select month</label>
                                <input class="form-control" type="month" value="{{date('Y-m')}}" id="radar-graph-date" required name="date">

                            </div>

                        <img src="{{ asset('img/6af65dd321fbdf53a04ed7464a644f53.gif') }}" alt="" width="100%" id="redar-chart">
                        <p id="chart-title"> </p>
                        <div id="chartdiv"></div>
                    </div>
                    <div class="col-lg-6 col-md-2 col-sm-3 {{-- col-4  --}} text-center">
                        <div class="w-50 m-auto">
                            @php($graphs = \App\Graph::all())
                            @foreach($graphs as $graph)
                            <div class="progress-wrapper ms-auto" onclick='lolipop_chart_load(this,"{{date('Y')}}","{{$graph->id}}","{{str_replace(array("\r", "\n"), '', $graph->type_of_data)}}")'>
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-sm  ">{{$graph->type_of_data}}</span>
                                    </div>
                                </div>
                                <div class="progress2">
                                    <div class="progress-bar bg-gradient-primary2 w-40" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            @endforeach


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    <canvas style="display: none" id="tutorial" width="700" height="900"></canvas>
@endsection

@section('script')
    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- Chart code -->
    <script>
        // lolipop_chart_load();
        $('.progress-wrapper').each(function() {

            $(this).trigger('click');
            return false;
            // obj.trigger('click');
        });



        function lolipop_chart_load(setactive =  null,year = '2022',type = '4',title = ''){
            if(setactive != null){
                $('.progress-wrapper').each(function(i, obj) {
                    $(".progress-wrapper").removeClass("active");
                });
            }

            $(setactive).addClass("active");
            $('#chart-title').html(title);

            // $('#load_last_work_hours').modal('show');
            $.ajax({
                url: "{{route('facility/dashboard/monthly_lolypop_chart')}}",
                type: "post",
                data: {
                    _token : "{{csrf_token()}}",
                    type : type,
                    year : year,
                },
                success: function(data){
                    // $("#employees").html(data);
                    //console.log(data);
                    lolipop_chart(data);
                },
                error: function (error) {
                }
            });
        }


        function lolipop_chart(data){
            am4core.ready(function() {

// Themes begin
                am4core.useTheme(am4themes_animated);
// Themes end

                var chart = am4core.create("chartdiv", am4charts.XYChart);

                // var data = [];
                // var value = 120;
                //
                // var names = ["Raina",
                //     "Demarcus",
                //     "Carlo",
                //     "Jacinda",
                //     "Richie",
                //     "Antony",
                //     "Amada",
                //     "Idalia",
                //     "Janella",
                //     "Marla",
                //     "Curtis",
                //     "Shellie",
                //     "Meggan",
                //     "Nathanael",
                //     "Jannette",
                //     "Tyrell",
                //     "Sheena",
                //     "Maranda",
                //     "Briana",
                //     "Rosa",
                //     "Rosanne",
                //     "Herman",
                //     "Wayne",
                //     "Shamika",
                //     "Suk",
                //     "Clair",
                //     "Olivia",
                //     "Hans",
                //     "Glennie",
                // ];

                // for (var i = 0; i < names.length; i++) {
                //     value += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 5);
                //     data.push({ category: names[i], value: value });
                // }

                chart.data = data;
                var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                categoryAxis.renderer.grid.template.location = 0;
                categoryAxis.dataFields.category = "category";
                categoryAxis.renderer.minGridDistance = 15;
                categoryAxis.renderer.grid.template.location = 0.5;
                categoryAxis.renderer.grid.template.strokeDasharray = "1,3";
                categoryAxis.renderer.labels.template.rotation = -90;
                categoryAxis.renderer.labels.template.horizontalCenter = "left";
                categoryAxis.renderer.labels.template.location = 0.5;

                categoryAxis.renderer.labels.template.adapter.add("dx", function(dx, target) {
                    return -target.maxRight / 2;
                })

                var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                valueAxis.tooltip.disabled = true;
                valueAxis.renderer.ticks.template.disabled = true;
                valueAxis.renderer.axisFills.template.disabled = true;
                valueAxis.min = 0;
                valueAxis.max = 100;

                var series = chart.series.push(new am4charts.ColumnSeries());
                series.dataFields.categoryX = "category";
                series.dataFields.valueY = "value";
                series.tooltipText = "{valueY.value}";
                series.sequencedInterpolation = true;
                series.fillOpacity = 0;
                series.strokeOpacity = 1;
                series.strokeDashArray = "1,3";
                series.columns.template.width = 0.01;
                series.tooltip.pointerOrientation = "horizontal";

                var bullet = series.bullets.create(am4charts.CircleBullet);

                chart.cursor = new am4charts.XYCursor();

                // chart.scrollbarX = new am4core.Scrollbar();
                // chart.scrollbarY = new am4core.Scrollbar();


            }); // end am4core.ready()
        }
    </script>
    <script>

    </script>
    <script>
        let items = [];
        var canvas = document.getElementById('tutorial');

        edit_graph_data('{{date('Y-m')}}');
        $('#radar-graph-date').change(function() {
            var date = $(this).val();
            edit_graph_data(date);
        });

        let fillStyle;


        // items.push(
        //     {"degrees": degrees, "length": l, "colour": fillStyle}
        // );

        // console.log(items);
        // draw(i, l);

        // draw(350,50);
        // draw(353,100);
        //
        // draw(110,50);
        // draw(113,100);
        //
        // draw(230,50);
        // draw(233,100);
        function draw(Discription,degrees, lenthP,colour) {

            let lenth = 1.75* lenthP;
            lenth = lenth + 125;
            let centerpointX = 400;
            let centerpointY = 400;
            let maxlength = 400;
            let x =0;
            let y = 0;

            var font, lineHeight;
            font = 12;
            lineHeight = 15; // this is guess and check as far as I know


            // if(degrees < 90){
            var tita = degrees * Math.PI / 180;
            var ninty = 90* Math.PI / 180;
            // if(tita < 1.5708){

            x = maxlength + (lenth * Math.cos(ninty - tita));
            y = maxlength - (lenth  * Math.cos(tita));
            // console.log('x '+x);
            // console.log('Y '+y);
            // }

            const canvas = document.getElementById('tutorial');
            if (canvas.getContext) {
                const ctx = canvas.getContext('2d');
                ctx.font = font + 'px Arial';

                ctx.save();
                ctx.translate(x, y);
                ctx.fillStyle = 'black';

                if (degrees<180){
                    ctx.rotate((degrees-90) * Math.PI / 180);
                    ctx.textAlign = 'left';
                    ctx.fillText('   '+Discription+' '+lenthP+'%', 0, lineHeight / 2);
                }else {
                    ctx.rotate((degrees-270) * Math.PI / 180);
                    ctx.textAlign = 'right';
                    ctx.fillText(Discription+' '+lenthP+'%   ', 0, lineHeight / 2);
                }
                // ctx.textAlign = 'left';
                ctx.restore();

                ctx.fillStyle = colour;
                ctx.strokeStyle = colour;

                ctx.beginPath();
                ctx.moveTo(centerpointX, centerpointY);
                ctx.lineTo(x, y);
                ctx.stroke();

                ctx.beginPath();
                ctx.arc(x, y, 5, 0, Math.PI * 2, true); // Outer circle
                ctx.fill();





            }
        }

        // console.log(imgData);





        function edit_graph_data(date) {
            // console.log(id);
            const context = canvas.getContext('2d');
            context.clearRect(0, 0, canvas.width, canvas.height);

            // img.src = '{{ asset('img/arc2.png') }}';
            $.ajax({
                type:'GET',
                url:'{{ route('facility/graph/create_array/get') }}',
                headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                data: {
                    'month' : date,
                },
                success:function(data){
                    // console.log(JSON.stringify(data));
                    //
                    // let datas = JSON.stringify(data);


                    data.forEach(function(datas) {
                        // console.log(item);
                        draw(datas.Discription,datas.degrees, datas.Percentage,datas.colour)
                    })
                    const img = new Image();
                    img.src = '{{ asset('img/arc2.png') }}';
                    img.onload = function() {
                        context.drawImage(img, 275, 275,250,250);
                    };
                    setTimeout(function(){
                        var dataURL = canvas.toDataURL();
                        document.getElementById("redar-chart").src = dataURL;

                    },2000);
                }
            });
        }

    </script>
@endsection
