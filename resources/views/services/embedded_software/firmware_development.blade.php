@extends('frontend.layouts.main')

@section('title', 'Firmware Development')

@section('content')
    @include('frontend.layouts.page-header', [
        'title' => 'Firmware Development',
        'breadcrumb' => ['Services', 'Embedded Software Development Services', 'Firmware Development']
    ])

    <div class="container">
        <h2>Firmware Development</h2>
        <p>Here you can describe your Firmware Development service.</p>
        <!-- Add more details about the service -->
    </div>
@endsection
