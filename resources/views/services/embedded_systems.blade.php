@extends('frontend.layouts.main')

@section('title', 'Embedded Systems Solutions')

@section('content')
    @include('frontend.layouts.page-header', [
        'title' => 'Embedded Systems Solutions',
        'breadcrumb' => ['Services', 'Embedded Systems Solutions']
    ])

    <div class="container py-4">
        <h2>Embedded Systems Solutions</h2>
        <p>We specialize in designing embedded hardware and firmware solutions that power modern intelligent systems.</p>
        <!-- Add more content about this service category -->
    </div>
@endsection
