@extends('frontend.layouts.main')

@section('title', 'Industrial Automation & Robotics Solutions')

@section('content')
    @include('frontend.layouts.page-header', [
        'title' => 'Industrial Automation & Robotics Solutions',
        'breadcrumb' => ['Services', 'Industrial Automation & Robotics Solutions']
    ])

    <div class="container py-4">
        <h2>Industrial Automation & Robotics</h2>
        <p>From welding robots to smart conveyor systems, our industrial automation services boost manufacturing efficiency and accuracy.</p>
        <!-- Add more detailed content as needed -->
    </div>
@endsection
