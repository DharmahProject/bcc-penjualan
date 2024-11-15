@extends('layouts.template')

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Penjualan</h3>
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
                <div class="form-group col-md-6 col-sm-6">
                    <label class="col-form-label col-md-3 col-sm-3">Tanggal Booking</label>
                    <div class="col-md-9 col-sm-9">
                      <div class="input-prepend input-group">
                        <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" name="txtTanggalBooking" id="txtTanggalBooking" class="form-control" value="" />
                      </div>
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-6">
                  <label class="col-form-label col-md-3 col-sm-3">Tanggal Akad</label>
                  <div class="col-md-9 col-sm-9">
                    <div class="input-prepend input-group">
                      <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                      <input type="text" name="txtTanggalAkad" id="txtTanggalAkad" class="form-control" value="" />
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-6 col-sm-6">
                  <label class="col-form-label col-md-3 col-sm-3">SPR No</label>
                  <div class="col-md-9 col-sm-9">
                      <input type="text" class="form-control" id="txtSPR" placeholder="SPR No">
                    </div>
                </div>
                
                <div class="form-group col-md-6 col-sm-6">
                  <label class="col-form-label col-md-3 col-sm-3">Sales Executive</label>
                  <div class="col-md-9 col-sm-9">
                      <select class="form-control" placeholder="Pilih Periode" id="txtSalesExecutive">
                          <option value="">-- Pilih Sales Executive --</option>
                      </select>
                  </div>
                </div>

                <div class="form-group col-md-6 col-sm-6">
                  <label class="col-form-label col-md-3 col-sm-3">Tipe</label>
                  <div class="col-md-9 col-sm-9">
                      <select class="form-control" placeholder="Pilih Periode" id="txtTipe">
                          <option value="">-- Pilih Tipe --</option>
                      </select>
                  </div>
                </div>

                <div class="form-group col-md-6 col-sm-6">
                  <label class="col-form-label col-md-3 col-sm-3">Cara Beli</label>
                  <div class="col-md-9 col-sm-9">
                      <select class="form-control" placeholder="Pilih Cara Beli" id="txtCaraBeli">
                          <option value="">-- Pilih Cara Beli --</option>
                          <option value="KPR"> KPR</option>
                          <option value="Tunai Bertahap">Tunai Bertahap</option>
                          <option value="Tunai Keras">Tunai Keras</option>
                      </select>
                  </div>
                </div>

                <div class="form-group col-md-6 col-sm-6">
                    <label class="col-form-label col-md-3 col-sm-3">Blok/ No Rumah</label>
                    <div class="col-md-9 col-sm-9">
                        <input type="text" class="form-control" id="txtBlock" placeholder="Blok/ No Rumah">
                    </div>
                </div>

                <div class="form-group col-md-6 col-sm-6">
                  <label class="col-form-label col-md-3 col-sm-3">Nama Konsumen</label>
                  <div class="col-md-9 col-sm-9">
                      <input type="text" class="form-control" id="txtNamaKonsumen" placeholder="Nama Konsumen">
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 text-left">
                  <a href="{{ url('penjualan/addedit') }}" class="btn btn-success btn-sm"><i class="fa fa-plus active"></i> Tambah Data</a>
                </div>
                <div class="col-md-6 text-right">
                  <button type="button" class="btn btn-success btn-sm"><i class="fa fa-search active"></i>  Cari Data</button>
                  <button class="btn btn-secondary btn-sm" onclick="resetSearchPenjualan()"><i class="fa fa-close active"></i>  Reset</button>
                </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-md-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Table Penjualan</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content text-xs">
              {{-- content here --}}
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
        
                    <!-- datatable-buttons -->
                    <table id="tablepenjualan" class="table table-striped table-bordered text-table">
                      <thead>
                        <tr>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                No
                            </th>
                            <th colspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                TANGGAL
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              DISC TOK
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              BLOK/NO
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              SPR No
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Bobot PPJB
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              TYPE
                            </th>
                            <th colspan="3" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              LUAS
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              T. luas TNH
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Cara beli
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Sales
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Nama Konsumen
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Alamat
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Telepon
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Nik
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              enail
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              H. Jual Std
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Diskon
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              H. Setelah Diskon
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Kel. Tanah
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Strategis
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              PPN
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              BPHTB
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Adm & Ajb
                            </th>
                            <th  rowspan="2"class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              H. Pengikat
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Uang Muka
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              KPR
                            </th>
                            <th colspan="2"  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              stk
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              closing fee
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              total komisi
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              no spk
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              nama kontraktor
                            </th>
                            <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                              Tgl Selesai pengerjaan
                            </th>
                            
                        </tr>
                        <tr>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Book
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            akad
                          </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                              lb
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                              lt
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                              lth
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                              sdh
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                              blm
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td class="ps-4" style="width: 30px;">
                              <span class="text-secondary text-xs ">1</span>
                          </td>
                        
                          <td class="text-center text-xs" style="width: 300px;" >
                              <span class="text-secondary text-xs ">VINCA</span>
                          </td>
                          <td class="text-center"  style="width: 300px;">
                              <span class="text-secondary text-xs ">SA6, 12,12A,14,15,16</span>
                          </td>
                          <td class="text-center" style="width: 300px;" >
                              <span class="text-secondary text-xs ">36</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">90</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">SPR-001</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 996.800.000</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 797.440.000</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 847.280.000</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 897.120.000</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 89.712.000</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Admin</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">05/05/20</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Admin</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">05/10/20</span>
                          </td>
                          <td class="text-center">
                              <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                  <i class="fas fa-user-edit text-secondary"></i>
                              </a>
                              <span>
                                  <i class="cursor-pointer fas fa-trash text-secondary"></i>
                              </span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                      </tr>
                      <tr>
                          <td class="ps-4">
                              <p class="text-xs  mb-0">2</p>
                          </td>
                        
                          <td class="text-center">
                              <p class="text-xs  mb-0">FRESSIA</p>
                          </td>
                          <td class="text-center">
                              <p class="text-xs  mb-0">SA7 / 5,6,7,8,9,12 & SA9 / 9,12 & SA9 / 9,12</p>
                          </td>
                          <td class="text-center">
                              <p class="text-xs  mb-0">36</p>
                          </td>
                          <td class="text-center">
                              <p class="text-xs  mb-0">90</p>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">SPR-002</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 996.800.000</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 797.440.000</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 847.280.000</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 897.120.000</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 89.712.000</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Admin</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">05/05/20</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">Admin</span>
                          </td>
                          <td class="text-center">
                              <span class="text-secondary text-xs ">05/10/20</span>
                          </td>
                          <td class="text-center">
                              <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                  <i class="fas fa-user-edit text-secondary"></i>
                              </a>
                              <span>
                                  <i class="cursor-pointer fas fa-trash text-secondary"></i>
                              </span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                          <td class="text-center">
                            <span class="text-secondary text-xs ">Rp. 5.108.061</span>
                          </td>
                      </tr>
                     
                  </tbody>
                    </table>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
<script>

    function resetSearchPenjualan()
    {
        $("#txtTanggalBooking").val("");
        $("#txtTanggalAkad").val("");
        $("#txtSPR").val("");
        $("#txtSalesExecutive").val("");
        $("#txtTipe").val("");
        $("#txtCaraBeli").val("");
        $("#txtBlock").val("");
        $("#txtNamaKonsumen").val("");
    }
</script>

@endsection
