@extends('frontend.layouts.main')

@section('title', 'Appointment')

@section('content')
    @include('frontend.layouts.page-header', [
        'title' => 'Appointment',
        'breadcrumb' => ['Pages', 'Appointment']
    ])

    {{-- Add your Appointment content here --}}
@endsection
