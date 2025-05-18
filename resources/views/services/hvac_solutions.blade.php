@extends('frontend.layouts.main')

@section('title', 'HVAC System Solutions')

@section('content')
    @include('frontend.layouts.page-header', [
        'title' => 'HVAC System Solutions',
        'breadcrumb' => ['Services', 'HVAC System Solutions']
    ])

    <div class="container py-4">
        <h2>HVAC System Solutions</h2>
        <p>From centralized systems to smart air quality controls, we deliver efficient and sustainable HVAC solutions.</p>
        <!-- Include services, projects, and features -->
    </div>
@endsection
