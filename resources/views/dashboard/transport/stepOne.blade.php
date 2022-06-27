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
                            <h4 class="page-title">@lang('dashboard.transport')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.transport')</a></li>
                                <li class="active">@lang('dashboard.transport')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('transport.stepTwo') }}" enctype="multipart/form-data" data-parsley-validate novalidate>
                                    <input type="hidden" name="order_id" required value="{{ $request['order_id'] }}">
                                    @csrf
                                    <h3>@lang('dashboard.orderInfo')</h3>
                                    <div class="form-group col-md-6">
                                        <label for="delivery_type">@lang('dashboard.delivery_type')</label>
                                        <select class="form-control  select2me" required id="delivery_type" name="delivery_type">
                                            <option  @if($request['delivery_type'] == 0) selected @endif value="0">Sameday</option>
                                            <option  @if($request['delivery_type'] == 1) selected @endif value="1">Nextday</option>
                                            <option  @if($request['delivery_type'] == 2) selected @endif value="2">Express-normal</option>
                                            <option  @if($request['delivery_type'] == 3) selected @endif value="3">Express-night</option>
                                            <option  @if($request['delivery_type'] == 4) selected @endif value="4">International </option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-6">
                                        <label for="total_weight">@lang('dashboard.total_weight')</label>
                                        <input id="total_weight" type="number" step="0.001" name="total_weight" required placeholder="@lang('dashboard.total_weight')" class="form-control" value="{{ $request['total_weight'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="boxcount">@lang('dashboard.boxcount')</label>
                                        <input id="boxcount" type="number" step="1" name="boxcount" required placeholder="@lang('dashboard.boxcount')" class="form-control" value="{{ $request['boxcount'] }}">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-6">
                                        <label for="user_selected_pickupdate">@lang('dashboard.user_selected_pickupdate')</label>
                                        <input id="user_selected_pickupdate" type="date" name="user_selected_pickupdate" required placeholder="@lang('dashboard.user_selected_pickupdate')" class="form-control" value="{{ $request['user_selected_pickupdate'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_selected_pickup_time">@lang('dashboard.user_selected_pickup_time')</label>
                                        <input id="user_selected_pickup_time" type="time" name="user_selected_pickup_time" required placeholder="@lang('dashboard.user_selected_pickup_time')" class="form-control" value="{{ $request['user_selected_pickup_time'] }}">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-6">
                                        <label for="user_selected_delivery_date">@lang('dashboard.user_selected_delivery_date')</label>
                                        <input id="user_selected_delivery_date" type="date" name="user_selected_delivery_date" required placeholder="@lang('dashboard.user_selected_delivery_date')" class="form-control" value="{{ $request['user_selected_delivery_date'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_selected_delivery_time">@lang('dashboard.user_selected_delivery_time')</label>
                                        <input id="user_selected_delivery_time" type="time" name="user_selected_delivery_time" required placeholder="@lang('dashboard.user_selected_delivery_time')" class="form-control" value="{{ $request['user_selected_delivery_time'] }}">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h3>@lang('dashboard.pikup')</h3>
                                    <div class="form-group col-md-6">
                                        <label for="p_name">@lang('dashboard.p_name')</label>
                                        <input id="p_name" type="text" name="p_name" required placeholder="@lang('dashboard.p_name')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="p_phone">@lang('dashboard.p_phone')</label>
                                        <input id="p_phone" type="text" name="p_phone" required placeholder="@lang('dashboard.p_phone')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="p_building">@lang('dashboard.p_building')</label>
                                        <input id="p_building" type="text" name="p_building" required placeholder="@lang('dashboard.p_building')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="p_road_no">@lang('dashboard.p_road_no')</label>
                                        <input id="p_road_no" type="text" name="p_road_no" required placeholder="@lang('dashboard.p_road_no')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="p_block_no">@lang('dashboard.p_block_no')</label>
                                        <input id="p_block_no" type="text" name="p_block_no" required placeholder="@lang('dashboard.p_block_no')" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="mx-2 my-4">
                                            <div class="form-group" id="map" style="height: 600px"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="from_lat">@lang('dashboard.from_lat')</label>
                                            <input id="from_lat" type="text" name="from_lat" required placeholder="@lang('dashboard.from_lat')" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="from_lng">@lang('dashboard.from_lng')</label>
                                            <input id="from_lng" type="text" name="from_lng" required placeholder="@lang('dashboard.from_lng')" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="p_location">@lang('dashboard.p_location')</label>
                                            <input id="p_location" type="text" name="p_location" required placeholder="@lang('dashboard.p_location')" class="form-control">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">@lang('dashboard.next')</button>
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
        $("#itemOrder").addClass('active');
    </script>
    <script>
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
                $('#from_lat').val(latitude);
                $('#from_lng').val(longitude);
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
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTdhKNPGoWtKz1zUoCmGA8BIUNgoG5YkI&callback=initMap">
    </script>
@endpush


