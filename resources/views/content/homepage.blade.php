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
  <div class="col-md-12 col-lg-8">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-12 order-2 order-md-1">
          <div class="card-body">
            <h4 class="card-title pb-xl-2">Congratulations <strong> John!</strong>🎉</h4>
            <p class="mb-0">You have done <span class="fw-semibold">68%</span>😎 more sales today.</p>


            View change test.

            @isset($pageConfigs)

            <p class="mb-0">Variable test: <span class="fw-semibold"> {{ $pageConfigs['variableTest'] }}</span></p>
            <p class="mb-0">DB connection test: <span class="fw-semibold"> {{ $pageConfigs['connection_test'][0]['text'] }}</span></p>
            @endisset
            </p>
            <a href="javascript:;" class="btn btn-primary">View Profile</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--/ Gamification Card -->

  <!-- Statistics Total Order -->
  <div class="col-lg-2 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
          <div class="avatar">
            <div class="avatar-initial bg-label-primary rounded">
              <i class="mdi mdi-cart-plus mdi-24px"></i>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <p class="mb-0 text-success me-1">+22%</p>
            <i class="mdi mdi-chevron-up text-success"></i>
          </div>
        </div>
        <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
          <h5 class="mb-2">155k</h5>
          <p class="text-muted mb-lg-2 mb-xl-3">Total Orders</p>
          <div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Statistics Total Order -->

  <!-- Sessions line chart -->
  <div class="col-lg-2 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
          <h4 class="mb-0 me-2">$38.5k</h4>
          <p class="mb-0 text-success">+62%</p>
        </div>
        <span class="d-block mb-2 text-muted">Sessions</span>
      </div>
      <div class="card-body">
        <div id="sessions"></div>
      </div>
    </div>
  </div>
 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>.
</div>
@endsection
