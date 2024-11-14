@extends('layouts.template')
@section('content')
<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Data User</h3>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 ">
            <div class="x_panel">
               <div class="x_title">
                  <h2>Pencarian Data</h2>
                  <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                  </ul>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  <div class="form-group col-md-6 col-sm-6">
                     <label class="col-form-label col-md-3 col-sm-3">Email</label>
                     <div class="col-md-9 col-sm-9">
                        <input type="text" class="form-control" id="txtEmail" placeholder="Email">
                     </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                     <label class="col-form-label col-md-3 col-sm-3">Nama User</label>
                     <div class="col-md-9 col-sm-9">
                        <input type="text" class="form-control" id="txtName" placeholder="Nama User">
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row">
                     <div class="col-md-6 text-left">
                        <a href="{{ url('user/addedit') }}" class="btn btn-success btn-sm"><i class="fa fa-plus active"></i> Tambah Data</a>
                     </div>
                     <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-success btn-sm" onclick="dataUser()"><i class="fa fa-search active"></i>  Cari Data</button>
                        <button class="btn btn-secondary btn-sm" onclick="resetSearchUser()"><i class="fa fa-close active"></i>  Reset</button>
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
                  <h2>Table User</h2>
                  <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                  </ul>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content text-xs">
                  <div class="">
                     <div class="">
                        <div class="card-box table-responsive" id="viewDataUser">
                           <!-- User data will be loaded here -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      dataUser();
   });

   function resetSearchUser() {
       $("#txtEmail").val("");
       $("#txtName").val("");
       dataUser();
   }
   
   function dataUser() {
      console.log("masuk");
        $.ajax({
            url: "{{ route('user.search') }}",
            type: "GET",
            dataType: "json",
            data: {
                email: $("#txtEmail").val(),
                name: $("#txtName").val(),
                _token: "{{ csrf_token() }}" // Add CSRF token for security
            },
            success: function(response) {
                $('#viewDataUser').html(response.data);

                // Initialize DataTable if the table with ID tblUser exists
                if ($('#tableUser').length) {
                  $('#tableUser').DataTable({
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
                                      pageSize: 'A4',           // Set page size (optional)
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

    function deleteData(id) {
      deleteConfirmation(id, '/user/delete', function() {
          dataUser();
      });
    }
</script>
@endsection
