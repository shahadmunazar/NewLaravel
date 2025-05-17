@extends('frontend.layouts.main')
@section('title', 'About us')
@section('content')
    @include('frontend.layouts.page-header', [
        'title' => 'Our Features',
        'breadcrumb' => ['Pages', 'Our Features']
    ])
    
@endsection