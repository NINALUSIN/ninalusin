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
  <div class="col-md-12 col-lg-6">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-12 order-2 order-md-1">
          <div class="card-body">

          @if(Session::has('user_access_token'))


            <h4 class="card-title pb-xl-2">
            <img src="{{ Session::get('user_profile_photo_url')}}" class="rounded-circle"></img>
            Hello <strong> {{ Session::get('user_name')}}!</strong>🎉</h4>

          @else
          <h4 class="card-title pb-xl-2">Zdravo <strong> obiskovalec!</strong>🎉</h4>
          @endif

            <p class="mb-0">Dobrodošli na mojo vzorčno stran za spletni razvoj!</p> <br>

            @isset($pageConfigs['variableTest'])

            <p class="mb-0">Preveri delovanje spremenljivk: <span class="fw-semibold"> {{ $pageConfigs['variableTest'] }}</span></p>
            <p class="mb-0">Preveri povezavo na podatkovno bazo: <span class="fw-semibold"> {{ $pageConfigs['connection_test'][0]['text'] }}</span></p>
            @endisset
            <br>
            @if(Session::has('user_access_token'))

            <div class="alert alert-success" role="alert">
              Prijava v portal je uspešna!<br>
              Ime: {{ Session::get('user_name')}}<br>
              Email: {{ Session::get('user_email')}}
            </div>
            @else
            <br>
            <p class="mb-0">Prosim <span class="fw-semibold"> prijavite se </span> za polni pregled strani.</p>
            @endif
            </p>

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="col-md-12 col-lg-6">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-12 order-2 order-md-1">
          <div class="card-body">
          <h4 class="card-title pb-xl-2">Hitri pregled</h4>


          <ul class="ps-3 mb-4 pt-3">
            <li class="mb-1">Spletni razvoj
              <ul class="ps-3 mb-4 pt-3">
                <li class="mb-1">Laravel</li>
                <li class="mb-1">PHP</li>
                <li class="mb-1">HTML</li>
                <li class="mb-1">CSS</li>
                <li class="mb-0">Javascript</li>
              </ul>
            </li>
            <li class="mb-1">Razvoj podatkovnih baz
              <ul class="ps-3 mb-4 pt-3">
                <li class="mb-1">Oracle</li>
                <li class="mb-1">DB2</li>
                <li class="mb-1">Microsoft SQL Server</li>
                <li class="mb-1">MySQL</li>
                <li class="mb-0">SQLite</li>
              </ul>
            </li>
          </ul>
          <h4 class="card-title pb-xl-2">

             <a href="/CV"><button type="button" class="btn rounded-pill btn-primary">Poglejte moj CV</button></a></h4>


          </div>
        </div>

      </div>
    </div>
  </div>
  <!--/ Gamification Card -->

 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>.
</div>
@endsection
