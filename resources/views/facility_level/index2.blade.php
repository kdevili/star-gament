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
                        <img src="{{ asset('img/6af65dd321fbdf53a04ed7464a644f53.gif') }}" alt="" width="100%" id="redar-chart">
                    </div>
                    <div class="col-lg-6 col-md-2 col-sm-3 {{-- col-4  --}} text-center">
                        <div class="w-50 m-auto">
                            <div class="progress-wrapper active ms-auto" onclick="lolipop_chart_load(this,'{{date('Y')}}',4)">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-sm  ">GHG</span>
                                    </div>
                                </div>
                                <div class="progress2">
                                    <div class="progress-bar bg-gradient-primary2 w-40" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper ms-auto" onclick="lolipop_chart_load(this,'{{date('Y')}}',10)">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-sm ">WATER POLLUTION</span>
                                    </div>
                                </div>
                                <div class="progress2">
                                    <div class="progress-bar bg-gradient-primary2 w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper ms-auto" onclick="lolipop_chart_load(this,'{{date('Y')}}',19)">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-sm   ">Renewable Energy</span>
                                    </div>
                                </div>
                                <div class="progress2">
                                    <div class="progress-bar bg-gradient-primary2 w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                        <div id="chartdiv"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    <canvas style="display: none" id="tutorial" width="700" height="700"></canvas>
@endsection

@section('script')
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <!-- Chart code -->
    <script>
        lolipop_chart_load();




        function lolipop_chart_load(setactive =  null,year = '2022',type = '4'){
            if(setactive != null){
                $('.progress-wrapper').each(function(i, obj) {
                    $(".progress-wrapper").removeClass("active");
                });
            }



            $(setactive).addClass("active");

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

        var root;
        function lolipop_chart(data){
        am5.ready(function() {
            $("#chartdiv").empty();

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
             root = am5.Root.new("chartdiv");



// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
                am5themes_Animated.new(root)
            ]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: true,
                panY: true,
                wheelX: "panX",
                wheelY: "zoomX",
                pinchZoomX:true
            }));

            chart.get("colors").set("step", 3);


// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
            var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
            cursor.lineY.set("visible", false);


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xRenderer = am5xy.AxisRendererX.new(root, {
                minGridDistance: 15
            });

            xRenderer.labels.template.setAll({
                rotation: -90,
                centerY: am5.p50,
                centerX: 0
            });

            xRenderer.grid.template.setAll({
                location: 0.5,
                strokeDasharray: [1, 3]
            });

            var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                maxDeviation: 0.3,
                categoryField: "category",
                renderer: xRenderer,
                tooltip: am5.Tooltip.new(root, {})
            }));

            var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                maxDeviation: 0.3,
                min: 0,
                max: 100,
                renderer: am5xy.AxisRendererY.new(root, {})
            }));


// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: "value",
                categoryXField: "category",
                adjustBulletPosition: false,
                tooltip: am5.Tooltip.new(root, {
                    labelText: "{valueY}"
                })
            }));
            series.columns.template.setAll({
                width: 0.5
            });

            series.bullets.push(function() {
                return am5.Bullet.new(root, {
                    locationY: 1,
                    sprite: am5.Circle.new(root, {
                        radius: 5,
                        fill: series.get("fill")
                    })
                })
            })
// Make each column to be of a different color


            series.columns.template.adapters.add("stroke", function (stroke, target) {
                return chart.get("colors").getIndex(series.columns.indexOf(target ));
            });


// Set data
//             var data = [];
//             var value = 120;
//
//             var names = ["Raina",
//                 "Demarcus",
//                 "Carlo",
//                 "Jacinda",
//                 "Richie",
//                 "Antony",
//                 "Amada",
//                 "Idalia",
//                 "Janella",
//                 "Marla",
//                 "Sheena",
//                 "Maranda",
//                 "Briana",
//                 "Rosa",
//                 "Rosanne",
//                 "Herman",
//                 "Wayne",
//                 "Shamika",
//                 "Suk",
//                 "Clair",
//                 "Olivia",
//                 "Hans",
//                 "Glennie",
//             ];
//
//             for (var i = 0; i < names.length; i++) {
//                 value += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 5);
//                 data.push({ category: names[i], value: value });
//             }

            xAxis.data.setAll(data);
            series.data.setAll(data);


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear(1000);
            chart.appear(1000, 100);

        }); // end am5.ready()
        }
    </script>
    <script>

    </script>
    <script>
        let items = [];
        edit_graph_data();
        draw2();

        let fillStyle;
        function draw2() {
            const ctx = document.getElementById('tutorial').getContext('2d');
            const img = new Image();
            img.onload = function() {
                ctx.drawImage(img, 275, 275,250,250);
            };
            img.src = '{{ asset('img/arc2.png') }}';


        }

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
                    ctx.fillText('   '+Discription+' - '+lenthP+'%', 0, lineHeight / 2);
                }else {
                    ctx.rotate((degrees-270) * Math.PI / 180);
                    ctx.textAlign = 'right';
                    ctx.fillText(Discription+' - '+lenthP+'%   ', 0, lineHeight / 2);
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

        var canvas = document.getElementById('tutorial');
        // console.log(imgData);
        setTimeout(function(){
            var dataURL = canvas.toDataURL();
            document.getElementById("redar-chart").src = dataURL;
            console.log(dataURL);
            /* canvas to url  */
            // document.getElementById('canvasImg').src = dataURL;
            // using url as source for img with id canvasImg
        },2000);




        function edit_graph_data(id) {
            // console.log(id);

            $.ajax({
                type:'GET',
                url:'{{ route('facility/graph/create_array/get') }}',
                headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                data: {
                    // 'graph_id' : id,
                },
                success:function(data){
                    // console.log(JSON.stringify(data));
                    //
                    // let datas = JSON.stringify(data);


                    data.forEach(function(datas) {
                        // console.log(item);
                        draw(datas.Discription,datas.degrees, datas.Percentage,datas.colour)
                    })
                }
            });
        }

    </script>
@endsection
