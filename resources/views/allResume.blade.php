@extends('layouts.app')

@section('title', 'Все вакансии')

@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success mt-3">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Резюме</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($resume as $item)
            @if(auth()->user()->name == $item->name && auth()->user()->surname == $item->surname)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->speciality }}</td>
                <td class="table-buttons" style="">
                    <a href="{{ route('user.show', $item) }}" class="btn btn-success">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
@endsection
