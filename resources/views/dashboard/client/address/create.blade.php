@extends('dashboard.layout')
@section('content')

    <div class="wrapper">
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="page-title">@lang('dashboard.addresses')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.addresses')</a></li>
                                <li class="active">@lang('dashboard.addAddress')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('addresses.store') }}" data-parsley-validate novalidate>
                                    @csrf
                                    <div class="form-group" id="map" style="height: 300px"></div>
                                    <div class="form-group col-md-6">
                                        <label for="client">@lang('dashboard.client')</label>
                                        <select id="client" name="client" required class="form-control">
                                            <option value="">---</option>
                                            @foreach($clients as $client)
                                                <option value="{{ $client['id'] }}">{{ $client['first_name'] . ' ' . $client['last_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="region">@lang('dashboard.region')</label>
                                        <select id="region" name="region" required class="form-control">
                                            <option value="">---</option>
                                            @foreach($regions as $region)
                                                <option value="{{ $region['id'] }}">{{ $region['name_' . app()->getLocale()] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lat">@lang('dashboard.lat')</label>
                                        <input id="lat" type="text" name="lat" required placeholder="@lang('dashboard.lat')" readonly class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="long">@lang('dashboard.long')</label>
                                        <input id="long" type="text" name="long" required placeholder="@lang('dashboard.long')" readonly class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">@lang('dashboard.phone')</label>
                                        <input id="phone" type="text" name="phone" required placeholder="@lang('dashboard.phone')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="block">@lang('dashboard.block')</label>
                                        <input id="block" type="text" name="block" required placeholder="@lang('dashboard.block')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="road">@lang('dashboard.road')</label>
                                        <input id="road" type="text" name="road" required placeholder="@lang('dashboard.road')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="floor_no">@lang('dashboard.floor_no')</label>
                                        <input id="floor_no" type="text" name="floor_no" required placeholder="@lang('dashboard.floor_no')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="apartment">@lang('dashboard.apartment')</label>
                                        <input id="apartment" type="text" name="apartment" required placeholder="@lang('dashboard.apartment')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="type">@lang('dashboard.type')</label>
                                        <select id="type" name="type" required class="form-control">
                                            <option value=""></option>
                                            <option value="flat">@lang('dashboard.flat')</option>
                                            <option value="office">@lang('dashboard.office')</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="additional_directions">@lang('dashboard.additional_directions')</label>
                                        <textarea id="additional_directions" name="additional_directions" placeholder="@lang('dashboard.additional_directions')" class="form-control"></textarea>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">@lang('dashboard.add')</button>
                                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">@lang('dashboard.cancel')</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('custom-css')
    <link href="{{ asset('assets_' . app()->getLocale() . '/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('custom-scripts')
    <script type="text/javascript" src="{{ asset('assets_' . app()->getLocale() . '/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $("#itemclients").addClass('active');

        $("select").select2({
            placeholder: "Select",
            width: 'auto',
            allowClear: true
        });

        var map;
        var markers = [];

        function initMap() {
            var haightAshbury = {lat: 26.22170100683176, lng: 50.58556788820532};

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: haightAshbury,
                mapTypeId: 'terrain'
            });

            $('#lat').val('26.22170100683176');
            $('#long').val('50.58556788820532');
            // This event listener will call addMarker() when the map is clicked.
            map.addListener('click', function(event) {
                addMarker(event.latLng);
                var latitude = event.latLng.lat();
                var longitude = event.latLng.lng();
                $('#lat').val(latitude);
                $('#long').val(longitude);

            });

            // Adds a marker at the center of the map.
            addMarker(haightAshbury);
        }

        // Adds a marker to the map and push to the array.
        function addMarker(location) {
            clearMarkers();
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
            markers.push(marker);
        }

        // Sets the map on all markers in the array.
        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }

        // Removes the markers from the map, but keeps them in the array.
        function clearMarkers() {
            setMapOnAll(null);
        }

        // Shows any markers currently in the array.
        function showMarkers() {
            setMapOnAll(map);
        }

        // Deletes all markers in the array by removing references to them.
        function deleteMarkers() {
            clearMarkers();
            markers = [];
        }

        $(document).ready(function () {


            $("#lat").on("input", function(){
                // // Print entered value in a div box
                var lat=$("#lat").val();
                var lang=$("#long").val();

                var haightAshbury =  {lat: 26.22170100683176, lng: 50.58556788820532};
                haightAshbury["lat"]=Number(lat);
                haightAshbury["lng"]=Number(lang);

                // Adds a marker at the center of the map.
                addMarker(haightAshbury);


                console.log(haightAshbury);
            });


            $("#long").on("input", function(){
                // // Print entered value in a div box
                var lat=$("#lat").val();
                var lang=$("#long").val();

                var haightAshbury =  {lat: 26.22170100683176, lng: 50.58556788820532};
                haightAshbury["lat"]=Number(lat);
                haightAshbury["lng"]=Number(lang);

                // Adds a marker at the center of the map.
                addMarker(haightAshbury);


                console.log(haightAshbury);
            });
        });
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeuOTzbTLT2EHbvjzyHCckOiIpnTRZjSY&callback=initMap">
    </script>
@endpush


