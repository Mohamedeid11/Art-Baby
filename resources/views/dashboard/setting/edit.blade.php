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
                            <h4 class="page-title">@lang('dashboard.other')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.other')</a></li>
                                <li class="active">@lang('dashboard.' . $type)</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('settings.update', $type) }}" enctype="multipart/form-data" data-parsley-validate novalidate>
                                    @csrf
                                    @method('PUT')
                                    @if($type == 'contact')
                                        <div class="form-group" id="map" style="height: 300px"></div>
                                    @endif
                                    @foreach($settings as $setting)

                                        @if(in_array($setting['key'], ['about_title_ar', 'about_title_en', 'terms_title_ar', 'terms_title_en', 'return_title_ar', 'return_title_en']))
                                            <div class="form-group col-md-6">
                                                <label for="{{ $setting['key'] }}">@lang('dashboard.' . $setting['key'])</label>
                                                <input id="{{ $setting['key'] }}" type="text" name="{{ $setting['key'] }}" required placeholder="@lang('dashboard.' . $setting['key'])" class="form-control" value="{{ $setting['value'] }}">
                                            </div>
                                        @elseif(in_array($setting['key'], ['about_ar', 'about_en', 'terms_ar', 'terms_en', 'return_ar', 'return_en']))
                                            <div class="form-group col-md-6">
                                                <label for="{{ $setting['key'] }}">@lang('dashboard.' . $setting['key'])</label>
                                                <textarea id="{{ $setting['key'] }}"  name="{{ $setting['key'] }}" required placeholder="@lang('dashboard.' . $setting['key'])" class="mytextarea form-control">{{ $setting['value'] }}</textarea>
                                            </div>
                                        @elseif(in_array($setting['key'], ['image']))
                                            <div class="form-group col-md-6">
                                                <label for="{{ $setting['key'] }}">@lang('dashboard.' . $setting['key'])</label>
                                                <input type="file" name="{{ $setting['key'] }}"  id="image" class="filestyle"  data-buttonname="btn-primary">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <img src="{{ $setting['value'] }}" alt="" srcset="" style="width: 100%">
                                            </div>
                                        @elseif(in_array($setting['key'], ['accept_order']))
                                            <div class="form-group col-md-6">
                                                <label for="{{ $setting['key'] }}">@lang('dashboard.' . $setting['key'])</label>
                                                <select id="{{ $setting['key'] }}" name="{{ $setting['key'] }}" required class="form-control">
                                                    <option {{ $setting['value'] == 0 ? 'selected' : '' }} value="0">@lang('dashboard.no')</option>
                                                    <option {{ $setting['value'] == 1 ? 'selected' : '' }} value="1">@lang('dashboard.yes')</option>
                                                </select>
                                            </div>
                                        @elseif(in_array($setting['key'], ['lat', 'long']))
                                            <?php
                                                if($setting['key'] == 'lat') {
                                                    $lat = $setting['value'];
                                                } elseif ($setting['key'] == 'long') {
                                                    $long = $setting['value'];
                                                }
                                            ?>
                                            <div class="form-group col-md-6">
                                                <label for="{{ $setting['key'] }}">@lang('dashboard.' . $setting['key'])</label>
                                                <input id="{{ $setting['key'] }}" type="text" name="{{ $setting['key'] }}" required readonly placeholder="@lang('dashboard.' . $setting['key'])" class="form-control" value="{{ $setting['value'] }}">
                                            </div>
                                        @elseif(in_array($setting['key'], ['meta']))
                                            <div class="form-group col-md-6">
                                                <label for="{{ $setting['key'] }}">@lang('dashboard.' . $setting['key'])</label>
                                                <input id="{{ $setting['key'] }}" type="text" name="{{ $setting['key'] }}" required placeholder="@lang('dashboard.' . $setting['key'])" class="form-control" value="{{ $setting['value'] }}">
                                            </div>
                                        @else
                                            @if ( $setting['key']  == 'cash')
                                            <div class="form-group col-md-6">
                                                <label for="{{ $setting['key'] }}">@lang('dashboard.' . $setting['key'])</label>
                                                <select id="{{ $setting['key'] }}" name="{{ $setting['key'] }}" required class="form-control">
                                                    <option {{ $setting['value'] == 0 ? 'selected' : '' }} value="0">@lang('dashboard.no')</option>
                                                    <option {{ $setting['value'] == 1 ? 'selected' : '' }} value="1">@lang('dashboard.yes')</option>
                                                </select>
                                            </div>
                                            @else
                                            <div class="form-group col-md-6">
                                                <label for="{{ $setting['key'] }}">@lang('dashboard.' . $setting['key'])</label>
                                                <input id="{{ $setting['key'] }}" type="text" name="{{ $setting['key'] }}" required placeholder="@lang('dashboard.' . $setting['key'])" class="form-control" value="{{ $setting['value'] }}">
                                            </div>
                                            @endif
                                        @endif
                                    @endforeach
                                    <div class="clearfix"></div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">@lang('dashboard.edit')</button>
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

@push('custom-scripts')
    <script type="text/javascript" src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>

    <script>
        $("#itemOther").addClass('active');

        @if($type == 'contact')
        var map;
        var markers = [];

        function initMap() {
            var haightAshbury = {lat: parseFloat('{{ $lat }}'), lng: parseFloat('{{ $long }}')};

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: haightAshbury,
                mapTypeId: 'terrain'
            });

            $('#lat').val('{{ $lat }}');
            $('#long').val('{{ $long }}');
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

                var haightAshbury =  {lat: parseFloat('{{ $lat }}'), lng: parseFloat('{{ $long }}')};
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

                var haightAshbury =  {lat: parseFloat('{{ $lat }}'), lng: parseFloat('{{ $long }}')};
                haightAshbury["lat"]=Number(lat);
                haightAshbury["lng"]=Number(lang);

                // Adds a marker at the center of the map.
                addMarker(haightAshbury);


                console.log(haightAshbury);
            });
        });
        @endif
    </script>
    @if($type == 'contact')
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeuOTzbTLT2EHbvjzyHCckOiIpnTRZjSY&callback=initMap">
        </script>
    @endif
@endpush


