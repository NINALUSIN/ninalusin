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
  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-md-12 order-2 order-md-1">
          <div class="card-body">
          <h4 class="mb-0">Današnji datum</h4> <br>
            <div class="alert alert-outline-success" role="alert" id="javascript-date" disabled>

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
          <h4 class="mb-0">Alert</h4> <br>

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
            <h4 class="mb-0">Števec znakov in prvi/zadnji znak</h4> <br>

            <div class="form-floating form-floating-outline">
              <input type="text" class="form-control" id="characterCounter" placeholder="Vnesite besedilo" aria-describedby="floatingInputHelp" />
              <label for="characterCounter">Besedilo</label>
              <div id="characterCounter" class="form-text">Vnesite besedilo</div>
            </div>

            <div class="alert alert-outline-success" role="alert" id="characterCounterShow">
              Število znakov: 0
            </div>

            <div class="alert alert-outline-warning" role="alert" id="firstLastCharacter">
              Prvi znak: /
              <br>
              Zadnji znak: /
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
            <div class="row g-4">
              <h4 class="mb-0">Kalkulator - seštevanje</h4> <br>

              <div class="col-md-2">
                <div class="form-floating form-floating-outline">
                  <input type="number" class="form-control" id="sumFirstNumber" placeholder="Vnesite število" aria-describedby="floatingInputHelp" />
                  <label for="sumFirstNumber">Prvo število</label>
                  <div id="sumFirstNumber" class="form-text">Vnesite številko</div>
                </div>
              </div>
              <div class="col-md-1">
                +
              </div>
              <div class="col-md-2">
                <div class="form-floating form-floating-outline">
                  <input type="number" class="form-control" id="sumSecondNumber" placeholder="Vnesite število" aria-describedby="floatingInputHelp" />
                  <label for="sumSecondNumber">Drugo število</label>
                  <div id="sumSecondNumber" class="form-text">Vnesite število</div>
                </div>
              </div>
              <div class="col-md-1">
                =
              </div>
              <div class="col-md-2">
                <div class="form-floating form-floating-outline">
                  <input type="text" class="form-control" id="sumResult"  disabled />

                </div>
              </div>
            </div>






          </div>


        </div>

      </div>
    </div>
  </div>

  <!--/ Gamification Card -->

 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>.
</div>
@endsection
