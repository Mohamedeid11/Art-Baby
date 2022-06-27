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
                                <li class="active">@lang('dashboard.viewAddress')</li>
                            </ol>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            <h3 class="m-b-30">{{ $address->client['first_name'] . ' ' . $address->client['last_name'] }}</h3>
                            @include('dashboard.layouts.messages')
                            <div class="row">
                                <div class="col-md-6 table-responsive">
                                    <table class="table table-striped" id="custom_tbl_dt">
                                        <tbody>
                                            <tr class="gradeX">
                                                <th style="text-align:center;">@lang('dashboard.region')</th>
                                                <td style="text-align:center;">{{ $address->region['name_' . app()->getLocale()] }}</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <th style="text-align:center;">@lang('dashboard.phone')</th>
                                                <td style="text-align:center;">{{ $address['phone'] }}</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <th style="text-align:center;">@lang('dashboard.block')</th>
                                                <td style="text-align:center;">{{ $address['block'] }}</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <th style="text-align:center;">@lang('dashboard.road')</th>
                                                <td style="text-align:center;">{{ $address['road'] }}</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <th style="text-align:center;">@lang('dashboard.floor_no')</th>
                                                <td style="text-align:center;">{{ $address['floor_no'] }}</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <th style="text-align:center;">@lang('dashboard.apartment')</th>
                                                <td style="text-align:center;">{{ $address['apartment'] }}</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <th style="text-align:center;">@lang('dashboard.type')</th>
                                                <td style="text-align:center;">@lang('dashboard.' . $address['type'])</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <th style="text-align:center;">@lang('dashboard.additional_directions')</th>
                                                <td style="text-align:center;">{{ $address['additional_directions'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6" id="map" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" class="deleteForm">
        @csrf
        @method('DELETE')
    </form>

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
            var haightAshbury = {lat: parseFloat('{{ $address['lat'] }}'), lng: parseFloat('{{ $address['long'] }}')};

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: haightAshbury,
                mapTypeId: 'terrain'
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
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeuOTzbTLT2EHbvjzyHCckOiIpnTRZjSY&callback=initMap">
    </script>
@endpush


