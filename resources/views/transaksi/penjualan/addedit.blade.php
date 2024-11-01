@extends('layouts.template') 
@section('content') 
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah/Ubah Penjualan</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>SPR</h2>
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
            <br />
            <div class="form-group row col-md-6 ">
              <label class="col-form-label col-md-3 col-sm-3 ">SPR No</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="SPR No">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Upload File</label>
              <div class="col-md-9 col-sm-9 ">
                <div class="form-group">
                  <input type="file" class="form-control d-none" id="fileUpload" name="fileUpload" accept="image/*" onchange="previewFile()">
                  
                  <!-- Custom styled button -->
                  <label for="fileUpload" class="btn btn-success btn-sm mt-2">
                      <i class="fa fa-upload"></i> Choose File
                  </label>
              
                  <!-- Preview area -->
                  <div id="previewContainer" class="mt-3" style="display: none;">
                      <img id="filePreview" src="" alt="Image Preview" class="img-thumbnail" style="max-width: 200px;">
                      <p id="fileName" class="mt-2"></p>
                  </div>
              </div>
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
                <select class="form-control" placeholder="Pilih Sales">
                  <option value="">-- Pilih Tipe Rumah --</option>
                </select>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Bobot PPJB</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Bobot PPJB">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Tanggal Booking</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="date" class="form-control" placeholder="Tanggal Booking">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Tanggal Akad</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="date" class="form-control" placeholder="Tanggal Akad">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Blok/ Nomor</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Blok/ Nomor">
              </div>
            </div>
            
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Harga Jual Standar</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Harga Jual Standar" disabled>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Luas Bangunan</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Luas Bangunan" disabled>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Diskon Disetujui</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Diskon Disetujui">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Luas Tanah</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Luas Tanah" disabled>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Harga Setelah Diskon</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Harga Setelah Diskon" disabled>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Luas Lebih</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Luas Lebih">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Kelebihan Tanah</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Kelebihan Tanah">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Total Luas Tanah</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Total Luas Tanah">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Strategis</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Strategis">
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
            <h2>Detail Penjualan</h2>
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
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Sales Executive</label>
              <div class="col-md-9 col-sm-9 ">
                <select class="form-control" placeholder="Pilih Sales">
                  <option value="">-- Pilih Sales Executive --</option>
                </select>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Cara Beli</label>
              <div class="col-md-9 col-sm-9 ">
                <select class="form-control" placeholder="Pilih Cara Beli" id="txtCaraBeli">
                  <option value="">-- Pilih Cara Beli --</option>
                  <option value="KPR"> KPR</option>
                  <option value="Tunai Bertahap">Tunai Bertahap</option>
                  <option value="Tunai Keras">Tunai Keras</option>
                </select>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">PPN</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="PPN">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Harga Pengikat</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Harga Pengikat">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">BPHTB</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="BPHTB">
              </div>
            </div>
            <div class="form-group row col-md-6 ">
              <label class="col-form-label col-md-3 col-sm-3 ">Uang Muka</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text"  class="form-control" placeholder="Uang Muka">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">ADM & AJB</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="ADM & AJB">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">KPR</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="KPR">
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
            <h2>Konsumen</h2>
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
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Nama Konsumen</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Nama Konsumen">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Email</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">NIK/ KTP</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="NIK/ KTP">
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Telepon</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Telepon">
              </div>
            </div>
            <div class="form-group row col-md-6 ">
              <label class="col-form-label col-md-3 col-sm-3 ">Alamat</label>
              <div class="col-md-9 col-sm-9 ">
                <textarea class="form-control" placeholder="Alamat"></textarea>
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
