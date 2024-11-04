@extends('layouts.auth.guest')

@section('content')

<div class="page-header section-height-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card card-plain mt-8">
                    <div class="card-header pb-0 text-left bg-transparent">
                      <h3 class="font-weight-bolder text-info text-gradient">Ganti Password</h3>
                    </div>
                    <div class="card-body">
                     
                      <form role="form" action="/reset-password" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="">
                        <div>
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="Email">
                            @error('email')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password">Password Baru</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password Baru">
                            @error('password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input id="password-confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Konfirmasi Password">
                            @error('password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Ganti Password</button>
                        </div>
                    </form>
                      <div class="card-footer text-center pt-0 px-lg-2 px-1" style="margin-top: 20px">
                        <small class="text-muted">Kembali ke halaman login 
                          <a href="/login" class="text-info text-gradient font-weight-bold">here</a>
                        </small>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                    <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url({{ url('assets/images/bcc.jpg') }})"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection