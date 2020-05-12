@extends('layouts.default')
@section('title', 'Umkm')

@section('styles')
<style>
      #map {
        width: 100%;
        height: 500px;
        background-color: grey;
      }
</style>
@endsection

@section('page-css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12"> PETA 
            <div id="map"></div>
        </div>
        <div class="col-md-12">
            <div class="col-md-10 card-block">
                 <a href="{{url('/tambah')}}">
                        UMKMmu!
                    <button type="button" class="btn btn-rounded btn-primary">
                        Daftarkan UMKM
                    </button>
                  </a>
                  <a href="{{url('/edit')}}">
                    <button type="button" class="btn btn-rounded btn-primary">
                        Edit Detail
                    </button>
                  </a>       
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
// Initialize and add the map
function initMap() {
  // The location of jakarta
  var jakarta = {lat: -6.21462, lng: 106.84513};
  // The map, centered at jakarta
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: jakarta});
  // The marker, positioned at jakarta
  var marker = new google.maps.Marker({position: jakarta, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZ36XIfGlY_Qu-K4pH3exo1E1ZvCQTZNM&callback=initMap">
    </script>
      
@endsection