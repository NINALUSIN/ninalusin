@php
$configData = Helper::appClasses();
@endphp
@extends('layouts/layoutMaster')

@section('title', 'Javascript')
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
<script src="{{asset('assets/js/dashboards-javascript.js')}}"></script>
@endsection

@section('content')
<div class="row gy-4">
  <!-- Gamification Card -->
  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-12 order-2 order-md-1">
          <div class="card-body">

          <button type="button" class="btn btn-primary" id="javascript-alert-button">Prikaži obvestilo</button>

          </div>


        </div>

      </div>
    </div>
  </div>

  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-12 order-2 order-md-1">
          <div class="card-body">

            <div class="form-floating form-floating-outline">
              <input type="text" class="form-control" id="characterCounter" placeholder="Vnesite besedilo" aria-describedby="floatingInputHelp" />
              <label for="characterCounter">Števec znakov</label>
              <div id="characterCounter" class="form-text">Vnesite besedilo</div>
            </div>

            <div class="alert alert-outline-success" role="alert" id="characterCounterShow">
              Število znakov: 0
            </div>

          </div>


        </div>

      </div>
    </div>
  </div>

  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-12 order-2 order-md-1">
          <div class="card-body">

            TEST

          </div>


        </div>

      </div>
    </div>
  </div>
  <!--/ Gamification Card -->

 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>.
</div>
@endsection
