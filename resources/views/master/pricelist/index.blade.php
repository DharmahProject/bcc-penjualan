@extends('layouts.template')

@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Price List</h3>
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
                    <label class="col-form-label col-md-3 col-sm-3">Periode dari</label>
                    <div class="col-md-9 col-sm-9">
                        <input type="date" class="form-control" placeholder="Periode Ke" id="txtPeriodeDari">
                    </div>
                </div>

                <div class="form-group col-md-6 col-sm-6">
                    <label class="col-form-label col-md-3 col-sm-3">Periode ke</label>
                    <div class="col-md-9 col-sm-9">
                        <input type="date" class="form-control" placeholder="Periode Ke" id="txtPeriodeKe">
                    </div>
                </div>

                <div class="form-group col-md-6 col-sm-6">
                    <label class="col-form-label col-md-3 col-sm-3">Blok/ No Rumah</label>
                    <div class="col-md-9 col-sm-9">
                        <input type="text" class="form-control" id="txtBlock" placeholder="Blok/ No Rumah">
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <label class="col-form-label col-md-3 col-sm-3">Tipe</label>
                    <div class="col-md-9 col-sm-9">
                        <select class="form-control" placeholder="Pilih Tipe" id="txtTipe">
                            <option value="">-- Pilih Tipe --</option>
                            @foreach ($propertyTypes as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>    
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <label class="col-form-label col-md-3 col-sm-3">Jumlah Lantai</label>
                    <div class="col-md-9 col-sm-9">
                        <select class="form-control" placeholder="Pilih Jumlah Lantai" id="txtJumlahLantai">
                            <option value="">-- Pilih Jumlah Lantai --</option>
                            @foreach ($propertyFloors as $floor)
                            <option value="{{ $floor->id }}">{{ $floor->name }}</option>    
                            @endforeach
                        </select>
                    </div>
                </div>
              
                <div class="clearfix"></div>
                <div class="row">
                  <div class="col-md-6 text-left">
                    <a href="{{ url('pricelist/addedit') }}" class="btn btn-success btn-sm"><i class="fa fa-plus active"></i> Tambah Data</a>
                  </div>
                  <div class="col-md-6 text-right">
                    <button type="button" class="btn btn-success btn-sm" onclick="searchPricelist()"><i class="fa fa-search active"></i>  Cari Data</button>
                    <button class="btn btn-secondary btn-sm" onclick="resetSearchPricelist()"><i class="fa fa-close active"></i>  Reset</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tabel Pricelist</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content text-xs">
              <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
          

                <div class="table-controls">
                    <!-- DataTables will place buttons here -->
                    <div id="button-container"></div>
                </div>
                <!-- datatable-buttons -->
                <table id="tablePricelist" class="table table-striped table-bordered text-table" width="3000px">
                  <thead>
                    <tr>
                        <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Periode
                        </th>
                        <th rowspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Tipe
                        </th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Blok & Number
                        </th>
                        <th colspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Luas
                        </th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Lantai
                         </th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Harga Jual STD
                        </th>
                        
                        <th colspan="3" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Harga Jual Setelah Diskon
                        </th>
                        <th colspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            KPR
                        </th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Dibuat Oleh
                        </th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Dibuat Tgl
                        </th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Diubah Oleh
                        </th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Diubah Tgl
                        </th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Aksi
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            BGN
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            TNH
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Tunai Keras 20%
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Tunai Bertahap 15%
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            KPR 10%
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Uang Muka
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Angsuran
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($clusters as $cluster)
                        <tr>
                            
                            <td class="ps-4 text-center">@formatDate($cluster->periode)</td>
                            <td class="text-center text-xs">{{ $cluster->propertyType->name }}</td> 
                            <td class="text-center">{{ $cluster->blok }} </td>
                            <td class="text-center">{{ $cluster->luas_bangunan }} m²</td>
                            <td class="text-center">{{ $cluster->luas_tanah }} m²</td>
                            <td class="text-center">{{ $cluster->propertyFloor->name }}</td> 
                            <td class="text-center">Rp. {{ number_format($cluster->harga_jual_standar, 0, ',', '.') }}</td>
                            <td class="text-center">Rp. {{ number_format($cluster->tunai_bertahap, 0, ',', '.') }}</td>
                            <td class="text-center">Rp. {{ number_format($cluster->tunai_keras, 0, ',', '.') }}</td>
                            <td class="text-center">Rp. {{ number_format($cluster->kpr, 0, ',', '.') }}</td>
                            <td class="text-center">Rp. {{ number_format($cluster->uang_muka, 0, ',', '.') }}</td>
                            <td class="text-center">Rp. {{ number_format($cluster->angsuran, 0, ',', '.') }}</td>
                            <td  class="text-center">{{ $cluster->created_by }}</td>
                            <td class="text-center">{{ $cluster->created_at->format('d/m/y') }}</td>
                            <td  class="text-center">{{ $cluster->updated_by }}</td>
                            <td class="text-center">{{ $cluster->updated_at->format('d/m/y') }}</td> 
                            <td class="text-center">
                                <a href="{{ route('pricelist.addedit', $cluster->id_cluster) }}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                
                                <span>
                                    <button class="btn btn-danger  btn-sm" onclick="deleteData('{{ $cluster->id_cluster }}')">
                                        <i class="fa fa-trash"></i> 
                                    </button>                                    
                                </span>
                            </td>
                            <!--<td  class="text-center">{{ $cluster->periode }}</td>-->
                        </tr>
                    @endforeach
                    <!--<tr>
                        <td class="ps-4" >
                            <span class="text-secondary text-xs ">1</span>
                        </td>
                        <td class="text-center text-xs" >
                            <span class="text-secondary text-xs ">VINCA</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">SA6, 12,12A,14,15,16</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">36</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">90</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">1</span>
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
                            <span class="text-secondary text-xs ">1</span>
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
                    </tr>-->
                    
                    </tbody>
                </table>
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
            <h2>Ketentuan</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p class="text-secondary text-sm ">

              * )  Harga Jual belum temasuk   : Biaya Proses KPR & Peningkatan Sertifikat<br>
              * )  Persetujuan KPR,  tingkat suku bunga dan besarnya angsuran KPR  ditetapkan oleh Bank pemberi fasilitas KPR<br>
              * )  Harga dan tata cara pembayaran dapat berubah sewaktu- waktu tanpa pemberitahuan terlebih dahulu.<br>
              * )  Serah Terima Indent 18 ( delapan belas ) bulan dari Akad Kredit / pembayaran Lunas.<br>
        </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Cara Pembayaran</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <table class="table align-items-center mb-0  text-table">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center text-uppercase text-secondary text-xs  opacity-7">
                            Tata Cara Pembayaran
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xs opacity-7">
                            Rekening Bank
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xs opacity-7">
                            Hotline Service
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">CARA BAYAR</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">TANDA JADI</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs">UANG MUKA</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">Pelunasan</span>
                        </td>
                        <td rowspan="5" class="text-center">
                            <span class="text-secondary text-xs">
                                <b>102.00.0686.6914</b>	<br>
                                <b>BANK MANDIRI </b>	<br>
                                <b>Cab. Permata Hijau	</b><br>
                                atas nama	<br>
                                <b>PT. Perdana Gapuraprima, Tbk</b>	<br><hr>
                                Bukti pembayaran dikirim ke :	<br>
                                WhatsApp no : +62 812-1288-7453 	<br>

                            </span>
                        </td>
                        <td rowspan="5" class="text-center">
                            <span class="text-secondary text-xs"> <b>Bukit Cimanggu City</b> 	<br>
                                JL. RAYA BARU NO. 1 	<br>
                                <b>BOGOR. Telp (0251) 7532301-02</b> <br> 
                                <hr>	
                                Pembayaran Booking Fee dan 	<br>
                                Uang Muka hanya dapat dilakukan <br>	
                              melalui kasir atau transfer via bank	<br>
                              an. PT. Perdana Gapuraprima, Tbk	<br>
                              </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">A. Tunai Keras  <br> 1 Bulan</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">*) Rumah 1 Lantai = Rp. 5.000.000</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">20%- hari ke-14</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">80%  - 1 bulan</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">B. Tunai Bertahap  <br> 5 Bulan</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">*) Rumah 2 Lantai = Rp. 10.000.000</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">20%- hari ke-14</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">80%  - Diangsur 5 bulan</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">C. KPR  <br> UM diangsur 3x</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">*) Ruko = Rp. 15.000.000</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">30% diangsur 3 bulan</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs ">Akad kredit setelah Uang Muka Lunas</span>
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

<script type="text/javascript">
    function resetSearchPricelist()
    {
        $("#txtPeriode").val("");
        $("#txtBlock").val("");
        $("#txtJumlahLantai").val("");
        $("#txtTipe").val("");
    }
    
function deleteData(id) {
        var result = confirm("Apakah anda yakin ingin menghapus data tersebut?");
        if (result) {
            waitMsg();
            $.ajax({
                type: "GET",
                url: "{{ route('pricelist.delete') }}/"+id,
                contentType: 'application/json',
                traditional: true,
                success: function(returnResult) {
                    console.log(returnResult);
                    successMsg("Price list", "Data berhasil dihapus");
                    swal.close();
                    location.reload();
                },
                error: function(returnResult) {
                    console.log(returnResult);
                    errMsg("Error", returnResult.responseJSON.message);
                }
            });
        }
    }
</script>

@endsection
