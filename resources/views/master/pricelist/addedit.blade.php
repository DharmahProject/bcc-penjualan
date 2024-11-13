@extends('layouts.template') 
@section('header')
<!-- Choices js -->
<link href="{{ url('assets/css/choices.min.css') }}" rel="stylesheet">
@endsection
@section('content') 
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/pricelist') }}">Price List</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah / ubah</li>
            <input type="hidden" class="form-control" placeholder="Periode Mulai" id="hdId" value="{{$id_cluster != null ? $id_cluster : ''}}">
          </ol>
        </nav>        
        <h3>Price List</h3>
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
                <input type="date" class="form-control" placeholder="Periode Mulai" id="txtPeriodeMulai" value="{{$cluster != null ? $cluster->periode : ''}}">
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
                <select class="form-control" placeholder="Pilih Tipe" id="cbTipe">
                    <option value="">-- Pilih Tipe --</option>
                    @foreach ($propertyTypes as $type)
                    <option {{$cluster != null ? $cluster->tipe_fk == $type->id ? 'selected' : '' : ''}} value="{{ $type->id }}">{{ $type->name }}</option>    
                    @endforeach
              </select>
              </div>
            </div>
            
            <div class="form-group row col-md-6 ">
              <label class="col-form-label col-md-3 col-sm-3 ">Jumlah Lantai</label>
              <div class="col-md-9 col-sm-9 ">
                <select class="form-control" placeholder="Pilih Jumlah Lantai" id="cbJumlahLantai">
                  <option value="">-- Pilih Jumlah Lantai --</option>
                  @foreach ($propertyFloors as $floor)
                  <option {{ $cluster != null ? $cluster->floor_fk == $floor->id ? 'selected' : '' : ''}} value="{{ $floor->id }}">{{ $floor->name }}</option>    
                  @endforeach
              </select>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Luas Bangunan</label>
              <div class="col-md-9 col-sm-9 ">
                <div class="input-group">
                  <input type="number" class="form-control" placeholder="Luas Bangunan" id="txtLuasBangunan" value="{{$cluster != null ? $cluster->luas_bangunan : ''}}">
                  <span class="input-group-text" id="lblLuasBangunan">m²</span>
                </div>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Luas Tanah</label>
              <div class="col-md-9 col-sm-9 ">
                <div class="input-group">
                  <input type="number" class="form-control luas-input" placeholder="Luas Tanah" id="txtLuasTanah" value="{{$cluster != null ? $cluster->luas_tanah : ''}}">
                  <span class="input-group-text" id="lblLandWidth">m²</span>
                </div>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Luas Lebih</label>
              <div class="col-md-9 col-sm-9 ">
                <div class="input-group">
                  <input type="number" class="form-control luas-input" placeholder="Luas Lebih" id="txtLuasLebih">
                  <span class="input-group-text" id="lblLuasLebih">m²</span>
                </div>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Total Luas Tanah</label>
              <div class="col-md-9 col-sm-9 ">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Total Luas Tanah" disabled id="txtTotalLuasTanah">
                <span class="input-group-text" id="lblTotalLuasTanah">m²</span>
              </div>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Blok/ Nomor</label>
              <div class="col-md-9 col-sm-9 ">
                <input type="text" class="form-control" placeholder="Blok" id="txtBlok">
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
            <h2>Nilai Jual Rumah</h2>
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
              <label class="col-form-label col-md-3 col-sm-3 ">Harga Jual Standar</label>
              <div class="col-md-9 col-sm-9 ">
                <div class="input-group">
                  <span class="input-group-text" id="lblHargaJualStandar">Rp.</span>
                  <input type="text" class="form-control currency-form" placeholder="Harga Jual Standar" id="txtHargaJualStandar" value="{{$cluster != null ? number_format($cluster->harga_jual_standar, 0, ',', '.') : ''}}">
                </div>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Tunai Keras 20%</label>
              <div class="col-md-9 col-sm-9 ">
                <div class="input-group">
                  <span class="input-group-text" id="lblTunaiKeras">Rp.</span>
                  <input type="text" class="form-control currency-form" placeholder="Tunai Keras 20%" id="txtTunaiKeras" value="{{$cluster != null ? number_format($cluster->tunai_keras, 0, ',', '.') : ''}}">
                </div>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Tunai Bertahap 15%</label>
              <div class="col-md-9 col-sm-9 ">
                <div class="input-group">
                  <span class="input-group-text" id="lblTunaiBertahap">Rp.</span>
                  <input type="text" class="form-control currency-form" placeholder="Tunai Bertahap 15%" id="txtTunaiBertahap" value="{{$cluster != null ? number_format($cluster->tunai_bertahap, 0, ',', '.') : ''}}">
                </div>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">KPR 10%</label>
              <div class="col-md-9 col-sm-9 ">
                <div class="input-group">
                  <span class="input-group-text" id="lbltKPR">Rp.</span>
                  <input type="text" class="form-control currency-form" placeholder="KPR 10%" id="txtKPR" value="{{$cluster != null ? number_format($cluster->kpr, 0, ',', '.') : ''}}">
                </div>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Uang Muka</label>
              <div class="col-md-9 col-sm-9 ">
                
              <div class="input-group">
                <span class="input-group-text" id="lbltUangMuka">Rp.</span>
                <input type="text" class="form-control currency-form" placeholder="Uang Muka" id="txtUangMuka" value="{{$cluster != null ? number_format($cluster->uang_muka, 0, ',', '.') : ''}}">
              </div>
              </div>
            </div>
            <div class="form-group row col-md-6 col-sm-6">
              <label class="col-form-label col-md-3 col-sm-3 ">Angsuran</label>
              <div class="col-md-9 col-sm-9 ">
                
              <div class="input-group">
                <span class="input-group-text" id="lbltAngsuran">Rp.</span>
                <input type="text" class="form-control currency-form" placeholder="Angsuran" id="txtAngsuran" value="{{$cluster != null ? number_format($cluster->angsuran, 0, ',', '.') : ''}}">
              </div>
              </div>
            </div>
            <div>
              <div class="col-md-12 text-left">
                <button type="button" class="btn btn-success btn-sm" id="btnSubmit">
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

@section('footer')
<!-- Choices js -->
<script src="{{ url('/assets/js/choices.min.js') }}"></script>


<script type="text/javascript">
const element = document.querySelector('#txtBlok');

  const choices = new Choices(element, {
    silent: false,
    removeItems: true,
    removeItemButton: true,
    addItemText: (value) => {
      return `Tekan enter untuk menambahkan <b>"${value}"</b>`;
    },

});



$(document).ready(function() {

  let commaSeparatedBlok = "{{ $cluster != null ? $cluster->blok : '' }}";
  let arrBlok = commaSeparatedBlok.split(',');

  choices.clearStore();
  choices.setValue(arrBlok);


  function calculateTotalLuasTanah() {
    let total = 0;

    $(".luas-input").each(function() {
      total += parseFloat($(this).val()) || 0; 
    });
    $("#txtTotalLuasTanah").val(total);
  }
  $(".luas-input").on("keyup change", calculateTotalLuasTanah);

    function formatCurrency(input) {
      let value = input.value.replace(/[^,\d]/g, '');
      let splitValue = value.split(',');
      let integerPart = splitValue[0];
      let decimalPart = splitValue[1] ? ',' + splitValue[1].substring(0, 2) : '';

      let formatted = integerPart.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

      input.value = formatted + decimalPart;
    }

    $('.currency-form').on('keyup', function() {
      formatCurrency(this);
    });

    $('.currency-form').on('paste', function(event) {
      let clipboardData = event.originalEvent.clipboardData || window.clipboardData;
      let pastedData = clipboardData.getData('Text');

      if (/[^0-9,]/.test(pastedData)) {
        event.preventDefault();
      }
    });

    $('.currency-form').on('keypress', function(event) {
      let charCode = event.which || event.keyCode;
      if (charCode !== 44 && (charCode < 48 || charCode > 57)) { 
        event.preventDefault();
      }
    });

    function getNumericValue(str) {
      return parseFloat(str.replace(/\./g, '').replace(',', '.'));
    }


    $('#btnSubmit').click(function () {

      let blok = choices.getValue(true);
      let blokString = blok.join(",");

      console.log(blok);
      waitMsg();
            var formData = {
                ID: $('#hdId').val(),
                periode_mulai: $('#txtPeriodeMulai').val(),
                tipe: $('#cbTipe').val(),
                jumlah_lantai: $('#cbJumlahLantai').val(),
                luas_bangunan: $('#txtLuasBangunan').val(),
                luas_tanah: $('#txtLuasTanah').val(),
                luas_lebih: $('#txtLuasLebih').val(),
                total_luas_tanah: $('#txtTotalLuasTanah').val(),
                blok:  blokString,
                harga_jual_standar: getNumericValue($('#txtHargaJualStandar').val()),
                tunai_keras: getNumericValue($('#txtTunaiKeras').val()),
                tunai_bertahap: getNumericValue($('#txtTunaiBertahap').val()),
                kpr: getNumericValue($('#txtKPR').val()),
                uang_muka: getNumericValue($('#txtUangMuka').val()),
                angsuran: getNumericValue($('#txtAngsuran').val()),
                _token: '{{ csrf_token() }}' 
            };

            $.ajax({
                url: "{{ url('/pricelist/submit') }}",
                type: 'POST',
                data: formData,
                success: function (response) {
                  swal.close();
                  successMsg("Price List", "Data berhasil disubmit!");
                  window.location.href = "{{ url('/pricelist/') }}";
                },
                error: function (response) {
                  console.log(response);
                  swal.close();
                  errMsg("Error", response.responseJSON.message);
                }
            });
        });

  });


</script>

@endsection