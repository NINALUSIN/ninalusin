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
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/dashboards-javascript.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-vuejs.js')}}"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
@endsection

@section('content')
<div id="app">
		<p>
			<input type="text" v-model="greeting" />
		</p>
		<p>
			<greeting></greeting> (@{{greeting.length}})
		</p>
	</div>
	<script>
	  Vue.createApp({
		data() {
		  return{
			greeting: 'Hello World!'
		  };
		},
		mounted(){
			alert('Alert!');
			setTimeout(()=> {
				this.greeting = 'Changed';
			},3000)
		}
	  }).mount('#app')
	</script>

@endsection
