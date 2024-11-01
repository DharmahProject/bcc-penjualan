@extends('layouts.template') 
@section('content') 
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah/Ubah PriceList</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Periode</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li>
                <a class="collapse-link">
                  <i class="fa fa-chevron-up"></i>
                </a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="form-group row col-md-6 ">
              <label class="col-form-label col-md-3 col-sm-3 ">Periode Mulai</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="date" class="form-control" placeholder="Periode Mulai" id="txtPeriodeMulai">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tipe Rumah</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li>
                <a class="collapse-link">
                  <i class="fa fa-chevron-up"></i>
                </a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="form-group row col-md-6 ">
              <label class="col-form-label col-md-3 col-sm-3 ">Tipe Rumah</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Tipe Rumah" id="txtTipeRumah">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Harga Jual Standar</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Harga Jual Standar" id="txtHargaJualStandar">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Blok/ Nomor</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Blok/ Nomor" id="txtBlok">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Tunai Keras 20%</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Tunai Keras 20%" id="txtTunaiKeras">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Jumlah Lantai</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Jumlah Lantai" id="txtJumlahLantai">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Tunai Bertahap 15%</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Tunai Bertahap 15%" id="txtTunaiBertahap">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Luas Bangunan</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Luas Bangunan" id="txtLuasBangunan">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">KPR 10%</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="KPR 10%" id="txtKPR">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Luas Tanah</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Luas Tanah" id="txtLuasTanah">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Uang Muka</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Uang Muka" id="txtUangMuka">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Luas Lebih</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Luas Lebih" id="txtLuasLebih">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Angsuran</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Angsuran" id="txtAngsuran">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Total Luas Tanah</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Total Luas Tanah" disabled id="txtTotalLuasTanah">
              </div>
            </div>
         
            <div>
              <div class="col-md-12 text-left">
                <button type="button" class="btn btn-success btn-sm">
                  <i class="fa fa-save active"></i> Simpan Data </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  
  </div>
</div> 
@endsection
