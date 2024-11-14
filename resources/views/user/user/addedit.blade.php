@extends('layouts.template') 
@section('header')
<!-- Choices js -->
<link href="{{ url('assets/css/choices.min.css') }}" rel="stylesheet">
@endsection
@section('content') 
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left" style="width: 100%">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/user') }}">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah / ubah</li>
            <input type="hidden" class="form-control" placeholder="Periode Mulai" id="hdId" value="{{$id != null ? $id : ''}}">
          </ol>
        </nav>    
        <h3>User</h3>    
      </div>
    </div>
    <div class="clearfix"></div>

   
    <div class="row">
      <div class="col-md-12">
          <div class="x_panel">
              <div class="x_title">
                  <h2>User</h2>
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
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Nama</label>
                      <div class="col-md-9 col-sm-9">
                          <input type="text" class="form-control" placeholder="Nama" id="txtName" value="{{$user != null ? $user->name:"" }}">
                      </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Telepon</label>
                      <div class="col-md-9 col-sm-9">
                        <input type="number" class="form-control" placeholder="Telepon" id="txtTelepon" value="{{$user != null ? $user->phone:"" }}">
                      </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Email</label>
                      <div class="col-md-9 col-sm-9">
                          <input type="email" class="form-control" placeholder="Email" id="txtEmail" value="{{$user != null ? $user->email:"" }}">
                      </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Level</label>
                      <div class="col-md-9 col-sm-9">
                          <select class="form-control" placeholder="Pilih Level" id="txtLevel">
                              <option value="">-- Pilih Level --</option>
                              @foreach ($levels as $level)
                              <option {{$user != null ? $user->level_id == $level->level_id? 'selected' : '' : ""}} value="{{ $level->level_id }}">{{ $level->name }}</option>    
                              @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                      <label class="col-form-label col-md-3 col-sm-3">Password</label>
                      <div class="col-md-9 col-sm-9">
                          <input type="password" class="form-control" placeholder="Password" id="txtPassword" value="{{ $user != null ? $user->password:"" }}">
                      </div>
                  </div>
                  
                  <div class="clearfix"></div>
                  <div class="form-group col-md-6 col-sm-6 text-left">
                    <label class="col-form-label col-md-3 col-sm-3">Foto</label>
                    <div class="col-md-9 col-sm-9">
                        <input type="file" class="form-control d-none" id="fileUploadUserPhoto" name="fileUpload" accept="image/*" onchange="previewFotoUser()">
    
                        <!-- Custom styled button -->
                        <label for="fileUploadUserPhoto" class="btn btn-success btn-sm">
                            <i class="fa fa-upload"></i> Upload Foto
                        </label>
                    
                        <!-- Preview area -->
                        <div id="previewContainerUserPhoto" class="mt-3" style="display: none;">
                            <img id="filePreviewUserPhoto" src="" alt="Image Preview" class="img-thumbnail" style="max-width: 200px;">
                            <p id="fileNameUserPhoto" class="mt-2"></p>
                        </div>
                        
                    </div>
                </div>
                  <!-- Move the button below the "Alamat" field -->
                  <div>
                    <div class="col-md-12 text-left">
                      <button type="button" class="btn btn-success btn-sm" id="btnSubmit">
                        <i class="fa fa-save active"></i> Simpan Data </button>
                        <button type="button" class="btn btn-secondary btn-sm" id="btnCancel">
                            <i class="fa fa-close active"></i> Batal </button>
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
  <script type="text/javascript">
    var action ="{{ $user != null ? 'Edit' : 'Add' }}";
    var foto = "{{ $user != null ? asset('storage/' . $user->photo) : '' }}";
    var fileNameCurr ="";

    function previewFotoUser() {
        const file = document.getElementById("fileUploadUserPhoto").files[0];
        const preview = document.getElementById("filePreviewUserPhoto");
        const fileName = document.getElementById("fileNameUserPhoto");
        const previewContainer = document.getElementById("previewContainerUserPhoto");

        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                fileNameUserPhoto.textContent = `File: ${file.name}`;
                previewContainer.style.display = "block"; // Show preview container
            };

            reader.readAsDataURL(file);
        } else {
            previewContainer.style.display = "none"; // Hide preview if no file is chosen
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const fileInput = document.getElementById("fileUploadUserPhoto");
        const preview = document.getElementById("filePreviewUserPhoto");
        const previewContainer = document.getElementById("previewContainerUserPhoto");
        const fileName = document.getElementById("fileNameUserPhoto");
    
        if (foto) {
            preview.src = foto;
            const fileNameFromUrl = foto.split('/').pop();
            fileName.textContent = `File: ${fileNameFromUrl}`;
            previewContainer.style.display = "block"; // Show preview container
            fileNameCurr = foto;
        } else {
            previewContainer.style.display = "none"; // Hide preview if no photo exists
        }
    });

    $(document).ready(function() {
        
        $('#btnCancel').click(function (e) {
            window.location.href = "{{ url('/user/') }}"; 
        });

        $('#btnSubmit').click(function (e) {
            Swal.fire({
                title: 'Anda Yakin?',
                text: "Ingin menyimpan data ini",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                     // Create a new FormData object

                        console.log($('#txtLevel').val());
                        var formData = new FormData();
                        formData.append('id', $('#hdId').val());
                        formData.append('name', $('#txtName').val());
                        formData.append('email', $('#txtEmail').val());
                        formData.append('password', $('#txtPassword').val());
                        formData.append('phone', $('#txtTelepon').val());
                        formData.append('level', $('#txtLevel').val());
                        formData.append('_token', '{{ csrf_token() }}');
                        formData.append('action', action);
                        // Append the image file from the file input

                        var fileInput = $('#fileUploadUserPhoto')[0]; // Get the raw DOM element of the file input
                        var file = fileInput.files[0];  // Get the first file

                        // Check if file is null or undefined
                        if (!file) {
                            formData.append('photo', "");
                        } else {
                            formData.append('photo', file);
                        }

                        // var fotoFile = $('#filePreviewUserPhoto')[0].files[0];
                        // if (fotoFile) {
                        //     formData.append('photo', fotoFile);
                        // }

                        // Send AJAX request
                        $.ajax({
                            url: "{{ url('/user/submit') }}",
                            type: 'POST',
                            data: formData,
                            processData: false,  // Important: prevent jQuery from converting the data
                            contentType: false,  // Important: set content type to false for FormData
                            success: function (response) {
                                successMsgCallback("User", "Data berhasil disubmit!", function() {
                                    // Redirect after user clicks "OK" in the success message
                                    window.location.href = "{{ url('/user/') }}"; // Adjust the URL if needed
                                });
                            },
                            error: function (response) {
                                console.log(response);
                                swal.close();
                                errorMsg("Error", response.responseJSON.message);
                            }
                        });
                } else if (result.isDenied) {
                   // Swal.fire("Changes are not saved", "", "info");
                }
            });
        });
    });

</script>

@endsection