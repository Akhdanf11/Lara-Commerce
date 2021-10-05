@extends('layouts.app')
@section('content')
	<!-- Main Header Nav For Mobile -->
    @include('main.mobileHeader')

    {{-- flash
    @include('Message.flash-message') --}}

	<!-- 2nd Home Slider -->
    @include('main.mainSlider')


	<!-- School Category Courses -->
	@include('main.lessKatalog')


	<!-- Divider -->
	@include('main.divider')

	<!-- Top Courses -->
	@include('main.topKatalog')

	<!-- Our Testimonials -->
	@include('main.testimonial')

	<!-- Our seller -->
	@include('main.seller')

	<!-- Iklan -->
    @include('main.iklan')

	<!-- Our Partners -->
	@include('main.partner')

	<!-- Our Newslatters -->
	@include('main.newslatter')

@endsection
