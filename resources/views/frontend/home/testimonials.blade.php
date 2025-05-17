@extends('frontend.layouts.main')

@section('title', 'Testimonials')

@section('content')
    @include('frontend.layouts.page-header', [
        'title' => 'Testimonials',
        'breadcrumb' => ['Pages', 'Testimonials']
    ])

    {{-- Add your Testimonial content here --}}
@endsection
