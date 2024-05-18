@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Car Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $car->make }} {{ $car->model }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Year: {{ $car->year }}</h5>
            <a href="{{ route('cars.index') }}" class="btn btn-primary">Back to Cars</a>
        </div>
    </div>
</div>
@endsection
