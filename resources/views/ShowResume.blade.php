@extends('layouts.app')

@section('title', $resume->name)

@section('content')
    <div class="card">
        <div class="card-body">
            <p>{{ $resume->name }}</p>
            <p>{{ $resume->surname }}</p>
            <p>{{ $resume->patronymic }}</p>
            <p>{{ $resume->birthday }}</p>
            <p>{{ $resume->lastplacework }}</p>
            <p>{{ $resume->vieweducation }}</p>
            <p>{{ $resume->course }}</p>
            <p>{{ $resume->speciality }}</p>
            <p>{{ $resume->institution }}</p>
            <p>{{ $resume->endyear }}</p>
            <p>{{ $resume->telephone }}</p>
        </div>
    </div>
@endsection
