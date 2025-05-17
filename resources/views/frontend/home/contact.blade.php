@extends('frontend.layouts.main')

@section('title', 'Contact')

@section('content')
    @include('frontend.layouts.page-header', [
        'title' => 'Contact',
        'breadcrumb' => ['Pages', 'Contact']
    ])

    {{-- Add your Contact content here --}}
@endsection
