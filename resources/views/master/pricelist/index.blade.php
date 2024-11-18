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
                        @if($levelid == 1)
                        <a href="{{ url('pricelist/addedit') }}" class="btn btn-success btn-sm"><i class="fa fa-plus active"></i> Tambah Data</a>
                        @endif
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
                        <div class="card-box table-responsive" id="viewDataPricelist">
                            <!-- pricelist data will be loaded here -->
                           
                          
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
                                 <b>PT. Perdana Gapuraprima, Tbk</b>	<br>
                                 <hr>
                                 Bukti pembayaran dikirim ke :	<br>
                                 WhatsApp no : +62 812-1288-7453 	<br>
                              </span>
                           </td>
                           <td rowspan="5" class="text-center">
                              <span class="text-secondary text-xs">
                                 <b>Bukit Cimanggu City</b> 	<br>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
   
   $(document).ready(function() {
    searchPricelist();
   });

   function resetSearchPricelist()
   {
       $("#txtPeriodeDari").val("");
       $("#txtPeriodeKe").val("");
       $("#txtBlock").val("");
       $("#txtJumlahLantai").val("");
       $("#txtTipe").val("");
       searchPricelist();
   }
   
   function deleteData(id) {
       deleteConfirmation(id, "{{ url('/pricelist/delete') }}", function() {
       location.reload();
     });
   }

   function searchPricelist() {
        $.ajax({
            url: "{{ route('pricelist.search') }}",
            type: "GET",
            dataType: "json",
            data: {
                periodFrom: $("#txtPeriodeDari").val(),
                periodTo: $("#txtPeriodeKe").val(),
                blok: $("#txtBlock").val(),
                lantai: $("#txtJumlahLantai").val(),
                tipe: $("#txtTipe").val(),
                _token: "{{ csrf_token() }}" // Add CSRF token for security
            },
            success: function(response) {
                $('#viewDataPricelist').html(response.data);
              
                // Initialize DataTable if the table with ID tblUser exists
                if ($('#tablePricelist').length) {
                  $('#tablePricelist').DataTable({
                      searching: false, // Disables the search box
                      paging: true,
                      scrollCollapse: false,
                      scrollX: false,
                      autoWidth: false, // Ensures column widths are calculated properly
                      fixedHeader: true, // Optional, if you want to fix the header as well
                      dom: '<""<"col-md-6"l><" text-right"B>>rt<""<"col-md-6"i><" text-right"p>>',
                      buttons: [
                                'csv', 'excel', 
                                  {
                                      extend: 'pdfHtml5',
                                      orientation: 'landscape', // Set to landscape
                                      pageSize: 'A3',           // Set page size (optional)
                                      text: 'Export PDF',       // Button text (optional)
                                      title: 'Pricelist Bukit Cimanggu City' // PDF title (optional)
                                  }
                              ]
                    });
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }
</script>
@endsection