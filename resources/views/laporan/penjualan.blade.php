@extends('layouts.template')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Laporan Penjualan</h3>
        </div>
  
        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
  
      <div class="clearfix"></div>
  
      <div class="row">
        <div class="col-md-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Pencarian Data</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form class="form-label-left input_mask">
  
                <div class="col-md-6 col-sm-6  form-group">
                  <input type="text" class="form-control " id="inputSuccess2" placeholder="Tipe">
                </div>
  
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control" id="inputSuccess3" placeholder="Blok">
                </div>
                
                  <div class="col-md-6 text-left">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus active"></i> Tambah Data</button>
                  </div>
                  <div class="col-md-6 text-right">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-search active"></i>  Cari Data</button>
                    <button class="btn btn-secondary btn-sm" type="reset "><i class="fa fa-close active"></i>  Reset</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-md-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Tabel Laporan</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              {{-- content here --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
@endsection