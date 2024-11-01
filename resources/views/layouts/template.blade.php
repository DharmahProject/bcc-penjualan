<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Bukit Cimanggu City</title>

    <!-- Bootstrap -->
    <link href="{{ url('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ url('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ url('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ url('assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    {{-- <link href="{{ url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ url('assets/css/dataTables.dataTables.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/fixedColumns.dataTables.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/buttons.dataTables.min.css')}}">
    <!-- Custom Theme Style -->
    <link href="{{ url('assets/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        @include('layouts.sidebar')
        
        <!-- top navigation -->
        @include('layouts.topnav')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('layouts.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    
    <script src="{{ url('/assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('/assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ url('/assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ url('/assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ url('/assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ url('/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ url('/assets/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ url('/assets/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ url('/assets/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ url('/assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('/assets/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ url('/assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ url('/assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ url('/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ url('/assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ url('/assets/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('/assets/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ url('/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ url('/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ url('/assets/vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/morris.js/morris.min.js') }}"></script>
    
    <!-- bootstrap-daterangepicker -->
    <script src="{{ url('/assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/5.0.3/js/dataTables.fixedColumns.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/5.0.3/js/fixedColumns.dataTables.js"></script>

    

<!-- Buttons Extension JS -->
<script src="{{ url('/assets/js/dataTables.buttons.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<!-- JSZip for Excel export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<!-- pdfmake for PDF export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>


    <script src="{{ url('/assets/vendors/echarts/dist/echarts.min.js') }}"></script>
    <script src="{{ url('/assets/js/custom.min.js') }}"></script>

    <script>
     $(document).ready(function() {

      init_echarts();
    //   function init_daterangepicker_reservation() 
    //   { void 0 !== $.fn.daterangepicker && (console.log("init_daterangepicker_reservation"), 
    //     $("#txtTanggalBooking").daterangepicker(null, function(e, a, t) { console.log(e.toISOString(), a.toISOString(), t) }), 
    //     $("#reservation-time").daterangepicker({ timePicker: !0, timePickerIncrement: 30, locale: { format: "MM/DD/YYYY h:mm A" } })) }


        $('#tablepenjualan').DataTable({
            fixedColumns: {
                leftColumns: 5,
               //rightColumns:1
            },
            paging: true,
            searching: false, // Disables the search box
            scrollCollapse: true,
            scrollX: true,
            autoWidth: false, // Ensures column widths are calculated properly
            fixedHeader: true // Optional, if you want to fix the header as well
           
          });

          $('#tablePricelist').DataTable({
            searching: false, // Disables the search box
            paging: true,
            scrollCollapse: true,
            scrollX: true,
            autoWidth: false, // Ensures column widths are calculated properly
            fixedHeader: true, // Optional, if you want to fix the header as well
            dom: '<"row"<"col-md-6"l><"col-md-6 text-right"B>>rt<"row"<"col-md-6"i><"col-md-6 text-right"p>>',
            buttons: [
                       'csv', 'excel', 
                        {
                            extend: 'pdfHtml5',
                            orientation: 'landscape', // Set to landscape
                            pageSize: 'A4',           // Set page size (optional)
                            text: 'Export PDF',       // Button text (optional)
                            title: 'Pricelist Bukit Cimanggu City' // PDF title (optional)
                        }
                    ]
          });

          $('#salesWeekly').DataTable({
            paging: true,
            searching: false, // Disables the search box
            scrollCollapse: true,
            scrollX: true,
            autoWidth: false, // Ensures column widths are calculated properly
            fixedHeader: true // Optional, if you want to fix the header as well
           
          });
      });

      function init_daterangepicker_reservation() {
            if (typeof($.fn.daterangepicker) === 'undefined') { return; }

            $('#txtTanggalBooking').daterangepicker({
                autoUpdateInput: false // Prevents auto-filling of the input with date range
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });

            $('#txtTanggalAkad').daterangepicker({
                autoUpdateInput: false // Prevents auto-filling of the input with date range
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });

            // Optional: Set custom event listeners to update input on date selection
            $('#txtTanggalBooking, #txtTanggalAkad').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
            });

            $('#txtTanggalBooking, #txtTanggalAkad').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val(''); // Clears the input when canceling the selection
            });
        }

      function init_echarts() {

        if (typeof (echarts) === 'undefined') { return; }
        console.log('init_echarts');


        var theme = {
            color: [
                '#26B99A', '#dc3545'
            ],

            title: {
                itemGap: 8,
                textStyle: {
                    fontWeight: 'normal',
                    color: '#408829'
                }
            },

            dataRange: {
                color: ['#1f610a', '#97b58d']
            },

            toolbox: {
                color: ['#408829', '#408829', '#408829', '#408829']
            },

            tooltip: {
                backgroundColor: 'rgba(0,0,0,0.5)',
                axisPointer: {
                    type: 'line',
                    lineStyle: {
                        color: '#408829',
                        type: 'dashed'
                    },
                    crossStyle: {
                        color: '#408829'
                    },
                    shadowStyle: {
                        color: 'rgba(200,200,200,0.3)'
                    }
                }
            },

            dataZoom: {
                dataBackgroundColor: '#eee',
                fillerColor: 'rgba(64,136,41,0.2)',
                handleColor: '#408829'
            },
            grid: {
                borderWidth: 0
            },

            categoryAxis: {
                axisLine: {
                    lineStyle: {
                        color: '#408829'
                    }
                },
                splitLine: {
                    lineStyle: {
                        color: ['#eee']
                    }
                }
            },

            valueAxis: {
                axisLine: {
                    lineStyle: {
                        color: '#408829'
                    }
                },
                splitArea: {
                    show: true,
                    areaStyle: {
                        color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                    }
                },
                splitLine: {
                    lineStyle: {
                        color: ['#eee']
                    }
                }
            },
            timeline: {
                lineStyle: {
                    color: '#408829'
                },
                controlStyle: {
                    normal: { color: '#408829' },
                    emphasis: { color: '#408829' }
                }
            },

            k: {
                itemStyle: {
                    normal: {
                        color: '#68a54a',
                        color0: '#a9cba2',
                        lineStyle: {
                            width: 1,
                            color: '#408829',
                            color0: '#86b379'
                        }
                    }
                }
            },
            force: {
                itemStyle: {
                    normal: {
                        linkStyle: {
                            strokeColor: '#408829'
                        }
                    }
                }
            },
            chord: {
                padding: 4,
                itemStyle: {
                    normal: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        },
                        chordStyle: {
                            lineStyle: {
                                width: 1,
                                color: 'rgba(128, 128, 128, 0.5)'
                            }
                        }
                    },
                    emphasis: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        },
                        chordStyle: {
                            lineStyle: {
                                width: 1,
                                color: 'rgba(128, 128, 128, 0.5)'
                            }
                        }
                    }
                }
            }
        };

         //echart Line
        if ($('#echart_bar_horizontal').length) {

          var echartBar = echarts.init(document.getElementById('echart_bar_horizontal'), theme);

          echartBar.setOption({
              title: {
                 
              },
              tooltip: {
                  trigger: 'axis'
              },
              legend: {
                  x: 100,
                  data: ['Terjual', 'Batal']
              },
              toolbox: {
                  show: true,
                  feature: {
                      saveAsImage: {
                          show: true,
                          title: "Save Image"
                      }
                  }
              },
              calculable: true,
              xAxis: [{
                  type: 'value',
                  boundaryGap: [0, 0.01]
              }],
              yAxis: [{
                  type: 'category',
                  data: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu' , 'Minggu']
              }],
              series: [{
                  name: 'Terjual',
                  type: 'bar',
                  data: [2, 7, 14, 20, 13, 5, 1],
                  // itemStyle : { normal: {label : {show: true, position: 'right'}}},
              }, {
                  name: 'Batal',
                  type: 'bar',
                  data: [1, 2, 1, 3, 2, 1, 0],
                  // itemStyle : { normal: {label : {show: true, position: 'right'}}},
              }]
          });

        }

        //echart Line
        if ($('#echart_line').length) {

            var echartLine = echarts.init(document.getElementById('echart_line'), theme);

            echartLine.setOption({
                title: {
                  
                },
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    x: 220,
                    y: 40,
                    data: ['Batal',  'Terjual']
                },
                toolbox: {
                    show: true,
                    feature: {
                        magicType: {
                            show: true,
                            title: {
                                line: 'Line',
                                bar: 'Bar',
                                stack: 'Stack',
                                tiled: 'Tiled'
                            },
                            type: ['line', 'bar', 'stack', 'tiled']
                        },
                        restore: {
                            show: true,
                            title: "Restore"
                        },
                        saveAsImage: {
                            show: true,
                            title: "Save Image"
                        }
                    }
                },
                calculable: true,
                xAxis: [{
                    type: 'category',
                    boundaryGap: false,
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
                }],
                yAxis: [{
                    type: 'value'
                }],
                series: [{
                    name: 'Terjual',
                    type: 'line',
                    smooth: true,
                    itemStyle: {
                        normal: {
                            areaStyle: {
                                type: 'default'
                            }
                        }
                    },
                    data: [10, 12, 21, 54, 260, 830, 710, 21, 54, 260, 830, 710]
                }, {
                    name: 'Batal',
                    type: 'line',
                    smooth: true,
                    itemStyle: {
                        normal: {
                            areaStyle: {
                                type: 'default'
                            }
                        }
                    },
                    data: [1320, 1132, 601, 234, 120, 90, 20, 601, 234, 120, 90, 20]
                }]
            });
            
            window.addEventListener('resize', function () {
                echartLine.resize();
            });
        }

      }

      function init_chart_doughnut() {

        if (typeof(Chart) === 'undefined') { return; }

        console.log('init_chart_doughnut');

        if ($('.canvasDoughnut').length) {

            var chart_doughnut_settings = {
                type: 'doughnut',
                tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                data: {
                    labels: [
                        "Erieser Sabayang",
                        "Ida Ropiah",
                        "Agus Rachmat",
                        "Zulkifli",
                    ],
                    datasets: [{
                        data: [15, 20, 30, 10],
                        backgroundColor: [
                            "#BDC3C7",
                            "#9B59B6",
                            "#E74C3C",
                            "#3498DB"
                        ],
                        hoverBackgroundColor: [
                            "#BDC3C7",
                            "#9B59B6",
                            "#E74C3C",
                            "#3498DB"
                        ]
                    }]
                },
                options: {
                    legend: false,
                    responsive: false
                }
            }

            $('.canvasDoughnut').each(function() {

                var chart_element = $(this);
                var chart_doughnut = new Chart(chart_element, chart_doughnut_settings);

            });

        }
    }
    </script>
      
  </body>
</html>
