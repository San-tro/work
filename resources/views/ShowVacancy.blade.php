@extends('layouts.app')

@section('title', $vacancy->direction)

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>{{ $vacancy->direction }}</h3>
        </div>
    </div>
@endsection
