@extends('layouts.template')

@section('content')

 <!-- page content -->
 <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row" style="" >
    <div class="col-md-12 tile_count">
      <div class="col-md-1  tile_stats_count">
        <img src="{{ url('assets/images/logo-BCC.png') }}" alt="" class=" img-fluid" style="max-width:70%">
      </div>
      <div class="col-md-3  tile_stats_count">
        <span class="count_top"><i class="fa fa-money"></i> Total</span>
        <div class="count ">20.000.000.000</div>
        <span class="">Target Penjualan Saat ini</span>
      </div>
      <div class="col-md-2  tile_stats_count">
        <span class="count_top"><i class="fa fa-home"></i> Total</span>
        <div class="count green">2500 Unit</div>
        <span class="green"> Tejual Minggu Ini</span>
      </div>
      <div class="col-md-2  tile_stats_count">
        <span class="count_top"><i class="fa fa-home"></i> Total</span>
        <div class="count red">5 Unit</div>
        <span class="count_bottom red"> Batal Minggu Ini</span>
      </div>
      <div class="col-md-2  tile_stats_count">
        <span class="count_top"><i class="fa fa-money"></i> Total</span>
        <div class="count green">5,4 M</div>
        <span class="count_bottom green">Penjualan Minggu ini</span>
      </div>
      <div class="col-md-2  tile_stats_count">
        <span class="count_top"><i class="fa fa-money"></i> Total</span>
        <div class="count red">1,2 M</div>
        <span class="count_bottom red"> Pembatalan Minggu ini</span>
      </div>
      
      {{-- <div class="col-md-2  tile_stats_count">
        <span class="count_top"><i class="fa fa-home"></i> Total</span>
        <div class="count ">2 Unit</div>
        <span class=""> Pindah Kavling</span>
      </div>
      <div class="col-md-2  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total</span>
        <div class="count blue">30 User</div>
        <span class="count_bottom blue">GM, SM, SCO, SE, Adm</span>
      </div> --}}
    </div>
  </div>
    <!-- /top tiles -->

    <div class="row">
      <div class="col-md-12 col-sm-12 ">

      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="dashboard_graph">

          <div class="row x_title">
            <div class="col-md-6">
              <h3>Penjualan Tahun 2024</h3>
              
            </div>
          </div>
          <div class="col-md-9 col-sm-9 ">
           
            {{-- <div id="chart_plot_01" class="demo-placeholder"></div> --}}
            <div id="echart_line" style="height:350px;"></div>
          </div>
          <div class="col-md-3 col-sm-3  bg-white">
            <div class="x_title">
              <h2>Top 5 Sales 2024 - Berdasarkan Media Promosi</h2>
              <div class="clearfix"></div>
            </div>

            <div class="col-md-12 col-sm-12 ">
              <div>
                <p>Botani</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                  </div>
                </div>
              </div>
              <div>
                <p>Spanduk</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 ">
              <div>
                <p>Referensi</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                  </div>
                </div>
              </div>
              <div>
                <p>Member</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                  </div>
                </div>
              </div>
              <div>
                <p>Sosmed</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="clearfix"></div>
        </div>
      </div>

    </div>
    <br />

    <div class="row">
      <div class="col-md-4 col-sm-6  widget_tally_box">
        <div class="x_panel fixed_height_320 overflow_hidden">
          <div class="x_title">
            <h2>Penjualan Tahunan</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              
             
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div id="graph_bar" style="width:100%; height:200px;"></div>

            <div class=" bg-white progress_summary">
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320 overflow_hidden">
          <div class="x_title">
            <h2>Penjualan Team Minggu ini</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
             
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table class="" style="width:100%">
              <tr>
                <th style="width:37%;">
                  <p>Chart</p>
                </th>
                <th>
                  <div class="col-lg-7 col-md-7 col-sm-7 ">
                    <p class="">Team</p>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5 ">
                    <p class="">Total Penjualan</p>
                  </div>
                </th>
              </tr>
              <tr>
                <td>
                  <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                </td>
                <td>
                  <table class="tile_info">
                    <tr>
                      <td>
                        <p><i class="fa fa-square blue"></i>Erieser Sabayang </p>
                      </td>
                      <td>1.200.000.000</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square red"></i>Ida Ropiah </p>
                      </td>
                      <td>1.100.000.000</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square purple"></i>Agus Rachmat </p>
                      </td>
                      <td>1.000.000.000</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square aero"></i>Zulkifli </p>
                      </td>
                      <td>2.500.000.000</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>


      <div class="col-md-4 col-sm-12 ">
        <div class="x_panel tile fixed_height_320 overflow_hidden">
          <div class="x_title">
            <h2>Top 3 Sales Executive</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              
            </ul>
            <div class="clearfix"></div>
          </div>
          <ul class="list-unstyled top_profiles scroll-view">
            <li class="media event">
              <a class="pull-left border-aero profile_thumb">
                <i class="fa fa-user aero"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Pirmansyah</a>
                <p><strong>1.000.000.000 </strong> Penjualan </p>
                <p> <small>12 Unit Terjual</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-green profile_thumb">
                <i class="fa fa-user green"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Kamal</a>
                <p><strong>1.000.000.000 </strong> Penjualan </p>
                <p> <small>10 Unit Terjual</small>
                </p>
              </div>
            </li>
            <li class="media event">
              <a class="pull-left border-blue profile_thumb">
                <i class="fa fa-user blue"></i>
              </a>
              <div class="media-body">
                <a class="title" href="#">Linda</a>
                <p><strong>1.000.000.000 </strong> Penjualan </p>
                <p> <small>9 Unit Terjual</small>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-4 col-sm-6  widget_tally_box">
        <div class="x_panel fixed_height_370 overflow_hidden">
          <div class="x_title">
            <h2>Unit Terjual & Batal Minggu ini</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              
             
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div id="echart_bar_horizontal" style="height:482px;"></div>

            <div class=" bg-white progress_summary">
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-8">
        <div class="x_panel tile fixed_height_370 overflow_hidden">
          <div class="x_title">
            <h2>Penjualan Sales Minggu ini</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
             
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="salesWeekly" class="table table-striped projects">
              <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th style="width: 20%">Nama</th>
                  <th>Team Members</th>
                  <th>Total Unit</th>
                  <th>Total Penjualan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#</td>
                  <td>
                    <a>Pesamakini Backend UI</a>
                  </td>
                  <td>
                   Zulkifli
                  </td>
                  <td class="align-center">
                    5 Unit
                  </td>
                  <td class="project_progress">
                    4.500.000.000
                  </td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>
                    <a>Pesamakini Backend UI</a>
                  </td>
                  <td>
                    Zulkifli
                   </td>
                   <td class="align-center">
                    5 Unit
                  </td>
                  <td class="project_progress">
                    4.500.000.000
                  </td>
                 
                
                </tr>
                <tr>
                  <td>#</td>
                  <td>
                    <a>Pesamakini Backend UI</a>
                  </td>
                  <td>
                    Zulkifli
                   </td>
                   <td class="align-center">
                    5 Unit
                  </td>
                  <td class="project_progress">
                    4.500.000.000
                  </td>
                
                </tr>
                <tr>
                  <td>#</td>
                  <td>
                    <a>Pesamakini Backend UI</a>
                  </td>
                  <td>
                    Zulkifli
                   </td>
                   <td class="align-center">
                    5 Unit
                  </td>
                  <td class="project_progress">
                    4.500.000.000
                  </td>
                
                </tr>
                <tr>
                  <td>#</td>
                  <td>
                    <a>Pesamakini Backend UI</a>
                  </td>
                  <td>
                    Zulkifli
                   </td>
                   <td class="align-center">
                    5 Unit
                  </td>
                  <td class="project_progress">
                    4.500.000.000
                  </td>
                 
                </tr>
                <tr>
                  <td>#</td>
                  <td>
                    <a>Pesamakini Backend UI</a>
                  </td>
                  <td>
                    Zulkifli
                   </td>
                   <td class="align-center">
                    5 Unit
                  </td>
                  <td class="project_progress">
                    4.500.000.000
                  </td>
                 
                </tr>
                <tr>
                  <td>#</td>
                  <td>
                    <a>Pesamakini Backend UI</a>
                  </td>
                  <td>
                    Zulkifli
                   </td>
                   <td class="align-center">
                    5 Unit
                  </td>
                  <td class="project_progress">
                    4.500.000.000
                  </td>
                 
                </tr>
                <tr>
                  <td>#</td>
                  <td>
                    <a>Pesamakini Backend UI</a>
                  </td>
                  <td>
                    Zulkifli
                   </td>
                   <td class="align-center">
                    5 Unit
                  </td>
                  <td class="project_progress">
                    4.500.000.000
                  </td>
                 
                </tr>
                <tr>
                  <td>#</td>
                  <td>
                    <a>Pesamakini Backend UI</a>
                  </td>
                  <td>
                    Zulkifli
                   </td>
                   <td class="align-center">
                    5 Unit
                  </td>
                  <td class="project_progress">
                    4.500.000.000
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


      
    </div>
  </div>
  <!-- /page content -->
@endsection