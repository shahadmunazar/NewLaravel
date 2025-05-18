@extends('frontend.layouts.main')

@section('title', 'Software Development Solutions')

@section('content')
    @include('frontend.layouts.page-header', [
        'title' => 'Software Development Solutions',
        'breadcrumb' => ['Services', 'Software Development Solutions']
    ])

    <div class="container py-4">
        <h2>Software Development Solutions</h2>
        <p>We build scalable web apps, mobile apps, and enterprise software tailored to your business needs.</p>
        <!-- Expand with content as needed -->
    </div>
@endsection
