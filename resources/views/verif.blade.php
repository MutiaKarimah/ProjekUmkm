@extends('layouts.default')
@section('title', 'Verifikasi')

@section('styles')
@endsection

@section('page-css')
@endsection


@section('content')
<div class="container-fluid">
    <div class="card col-md-12">
        <header class="card-header">
            Verifikasi Berkas Pendaftaran
        </header>                
        <div class="card-block">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
            @endif
            <form>
                {{ csrf_field() }}
                <div class="">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-12 form-control-label m-t-1">
                                <span class="red-color"></span>KTP
                            </label>
                            <div class="">
                                <p class="form-control-static">
                                    <input type="file" class="form-control" name="ktp">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-12 form-control-label m-t-1">
                                <span class="red-color"></span>Berkas SIUP
                            </label>
                            <div class="">
                                <p class="form-control-static">
                                    <input type="file" class="form-control" name="siup">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-12 form-control-label m-t-1">
                                <span class="red-color"></span>Berkas SITU
                            </label>
                            <div class="">
                                <p class="form-control-static">
                                    <input type="file" class="form-control" name="situ">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-12">
                    <button type="cancel" class="btn btn-rounded btn-primary float-middle">
                        <a href="{{url('/tambah')}}" type="button">
                            Kembali
                        </a>
                    </button>
                    <button type="submit" class="btn btn-rounded btn-primary float-middle">
                        <a href="{{url('/sukses')}}" type="button">
                            Daftar
                        </a>
                    </button>
                </div>   
            </form>
        </div>
    </div>
</div>
@endsection