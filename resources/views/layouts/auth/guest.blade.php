@extends('layouts.auth.app')

@section('guest')
    
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    @include('layouts.auth.navbar')
                </div>
            </div>
        </div>
        @yield('content')        
        @include('layouts.auth.footer')
    
@endsection