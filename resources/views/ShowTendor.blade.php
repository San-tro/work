@extends('layouts.app')

@section('title', $tenders->view)

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>{{ $tenders->view }}</h3>
            <p>{{ $tenders->date }}</p>
            <p><b>{{ $tenders->personincharge }}</b></p>
        </div>
    </div>
@endsection
