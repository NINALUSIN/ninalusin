@php
$configData = Helper::appClasses();
@endphp
@extends('layouts/layoutMaster')

@section('title', 'Analytics')
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-statistics.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-analytics.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="row gy-4">
  <!-- Gamification Card -->
  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-12 order-2 order-md-1">
          <div class="card-body">

          @if(Session::has('user_access_token'))


            <h4 class="card-title pb-xl-2">Hello <strong> {{ Session::get('user_name')}}!</strong>🎉</h4>

          @else
          <h4 class="card-title pb-xl-2">Hello <strong> stranger!</strong>🎉</h4>
          @endif


            @isset($pageConfigs['variableTest'])

            <p class="mb-0">Variable test: <span class="fw-semibold"> {{ $pageConfigs['variableTest'] }}</span></p>
            <p class="mb-0">DB connection test: <span class="fw-semibold"> {{ $pageConfigs['connection_test'][0]['text'] }}</span></p>
            @endisset

            @if(Session::has('user_access_token'))

            <div class="alert alert-success" role="alert">
              Succesfully logged in!<br>
              Name: {{ Session::get('user_name')}}<br>
              Email: {{ Session::get('user_email')}}
            </div>
            @else
            <br>
            <p class="mb-0">Please <span class="fw-semibold"> log in </span> to see more.</p>
            @endif
            </p>

          </div>
        </div>

      </div>
    </div>
  </div>
  <!--/ Gamification Card -->

 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>.
</div>
@endsection
