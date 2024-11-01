@extends('layouts.template') 
@section('content') 
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah/Ubah Team</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
          <div class="x_panel">
              <div class="x_title">
                  <h2>Team</h2>
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
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Nama</label>
                      <div class="col-md-9 col-sm-9">
                          <input type="text" class="form-control" placeholder="Nama">
                      </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Jabatan</label>
                      <div class="col-md-9 col-sm-9">
                          <select class="form-control" placeholder="Pilih Jabatan">
                              <option value="">-- Pilih Jabatan --</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Telepon</label>
                      <div class="col-md-9 col-sm-9">
                          <input type="text" class="form-control" placeholder="Telepon">
                      </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Sales Coordinator</label>
                      <div class="col-md-9 col-sm-9">
                          <select class="form-control" placeholder="Pilih Coordinator">
                              <option value="">-- Pilih Sales Coordinator --</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Alamat</label>
                      <div class="col-md-9 col-sm-9">
                          <textarea class="form-control" placeholder="Alamat"></textarea>
                      </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Sales Manager</label>
                      <div class="col-md-9 col-sm-9">
                          <select class="form-control" placeholder="Pilih Manager">
                              <option value="">-- Pilih Sales Manager --</option>
                          </select>
                      </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group col-md-6 col-sm-6 text-left">
                    <label class="col-form-label col-md-3 col-sm-3">Foto</label>
                    <div class="col-md-9 col-sm-9">
                      <input type="file" class="form-control d-none" id="fileUploadPhoto" name="fileUpload" accept="image/*" onchange="previewFotoFile()">
    
                      <!-- Custom styled button -->
                      <label for="fileUploadPhoto" class="btn btn-success btn-sm">
                          <i class="fa fa-upload"></i> Upload Foto
                      </label>
                  
                      <!-- Preview area -->
                      <div id="previewContainerPhoto" class="mt-3" style="display: none;">
                          <img id="filePreviewPhoto" src="" alt="Image Preview" class="img-thumbnail" style="max-width: 200px;">
                          <p id="fileNamePhoto" class="mt-2"></p>
                      </div>
                    </div>
                </div>
                  <!-- Move the button below the "Alamat" field -->
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
