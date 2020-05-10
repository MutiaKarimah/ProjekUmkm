@extends('layouts.default')
@section('title', 'Tambah Umkm')

@section('styles')
@endsection

@section('page-css')
@endsection


@section('content')
<div class="container-fluid">
{{--     <section class="card">
        <header class="card-header">
            Pendaftaran UMKM
            <a href="{{url('/invoices/index')}}" type="button" class="modal-close">
                <i class="fa fa-chevron-left"></i> Kembali
            </a>
        </header>
    </section>
 --}}
    <div class="card">
        <header class="card-header">
            Pendaftaran UMKM
        </header>                
        <div class="card-block">
            @csrf
        <form action="{{url('/tambah/store')}}" method="post">
            {{ csrf_field() }}
            <div class="">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-12 form-control-label m-t-1">
                            <span class="red-color"></span>Nama Lengkap
                        </label>
                        <div class="">
                            <p class="form-control-static">
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap Sesuai KTP">
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-6 form-control-label m-t-1">
                            Email
                        </label>
                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <input type="text" class="form-control" name="email" placeholder="Alamat Email">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-6 form-control-label m-t-1">Nomor Telepon</label>
                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <input type="number" class="form-control" name="no_telp" placeholder="No. Telp">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-6 form-control-label m-t-1">
                            Nama UMKM
                        </label>
                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <input type="text" class="form-control" name="nama_umkm" placeholder="Nama UMKM">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-6 form-control-label m-t-1">Jenis UMKM</label>
                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <input type="text" class="form-control" name="jenis_umkm" placeholder="Jenis UMKM">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-12 form-control-label m-t-1">
                            <span class="red-color"></span>Deskripsi UMKM
                        </label>
                        <div class="">
                            <p class="form-control-static">
                                <textarea type="text" class="form-control" name="desc" placeholder="Deskripsi UMKM"></textarea>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <header class="card-header">
            Alamat UMKM
            </header>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-6 form-control-label m-t-1">
                            Provinsi
                        </label>
                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <input type="text" class="form-control" name="provinsi" placeholder="Provinsi">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-6 form-control-label m-t-1">Kota/Kabupaten</label>
                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <input type="text" class="form-control" name="kota" placeholder="Kota/Kabupaten">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-6 form-control-label m-t-1">
                            Kecamatan
                        </label>
                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <input type="text" class="form-control" name="kec" placeholder="Kecamatan">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-6 form-control-label m-t-1">Kelurahan</label>
                        <div class="col-sm-12">
                            <p class="form-control-static">
                                <input type="text" class="form-control" name="kel" placeholder="Kelurahan">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-12 form-control-label m-t-1">
                            <span class="red-color"></span>Detail
                        </label>
                        <div class="">
                            <p class="form-control-static">
                                <textarea type="text" class="form-control" name="detail" placeholder="Detail"></textarea>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-6 form-control-label m-t-1">
                            Peta
                        </label>
                        <div class="col-sm-12">
                            <div id="map" style="width:100%;height:380px;"></div>
                                <input type="text" id="lat" name="lat" value="">
                                <input type="text" id="lng" name="lng" value="">
                        </div>
                    </div>
                </div>
            
            <div class="">
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="col-sm-12 form-control-label m-t-1">
                            <span class="red-color"></span>Upload KTP
                        </div>
                        <div class="">
                            <form class="col-md-8">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-sm-6 form-control-label m-t-1">
                            Foto Selfie KTP
                        </div>
                        <div class="col-sm-12">
                            <form class="col-md-8">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-sm-6 form-control-label m-t-1">
                            Foto Lapak UMKM
                        </div>
                        <div class="col-sm-12">
                            <form class="col-md-8">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" >
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-sm-6 form-control-label m-t-1">
                            Lampirkan SIUP
                        </div>
                        <div class="col-sm-12">
                            <form class="col-md-8">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-sm-6 form-control-label m-t-1">
                            Lampirkan SITU
                        </div>
                        <div class="col-sm-12">
                            <form class="col-md-8">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" >
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
            <left>
                <button type="submit" class="btn btn-rounded btn-primary float-middle">Konfirmasi</button>
                <button type="cancel" class="btn btn-rounded btn-default float-middle">
                    <a href="{{url('/welcome')}}" type="button">
                        Kembali
                    </a>
                </button>
            </left>          
        </div>
    </div>
</form>   
@endsection

@section('scripts')
<script>

var marker;
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }

    // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}
// Initialize and add the map
function initMap() {
  var propertiPeta = {
    center:new google.maps.LatLng(-8.5830695,116.3202515),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("map"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });
}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initMap);
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZ36XIfGlY_Qu-K4pH3exo1E1ZvCQTZNM&callback=initMap">
    </script>
@endsection