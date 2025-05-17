@extends('frontend.layouts.main')

@section('title', 'LED Light Service')

@section('content')
    @include('frontend.layouts.page-header', [
        'title' => 'LED Light Service',
        'breadcrumb' => ['Services', 'TC Lighting Services', 'LED Light']
    ])

    <div class="container">
        <h2>LED Light Service</h2>
        <p>Here you can describe your LED Light Service.</p>
        <!-- Add more details about the service -->
    </div>
@endsection
