@extends('layouts.default')
@section('title', 'Umkm')

@section('styles')

@endsection

@section('page-css')
@endsection

@section('content')
<div class="container-fluid">
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2">
                    PETA
                </div>
                <div class="col-md-10 card-block">
                     <a href="{{url('/tambah')}}">
                            UMKMmu!
                        <button type="button" class="btn btn-rounded btn-primary">
                            Daftarkan UMKM
                        </button>
                    </a>      
                </div>
            </div>
        </div>
    </section>
</div>

{{-- <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">
                            <button type="button" class="btn btn-rounded btn-danger">
                                Login
                            </button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    UMKM
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
</body> --}}
@endsection

@section('scripts')
@endsection