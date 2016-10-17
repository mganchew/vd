@extends('layouts.app')

@section('content')

    <div id="map"></div>
    <script>
        function initMap() {
            var uluru = {lat: 42.147582, lng: 24.717383};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });

            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }

        initMap();

    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVKoC24rKXbIOCUPe6o2BH90FuQx0ZAPo&callback=initMap">
    </script>

@endsection