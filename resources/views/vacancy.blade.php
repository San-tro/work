@extends('layouts.app')

@section('title', 'Все вакансии')

@section('content')
    @auth()
    <a href="{{ route('vacancy.create') }}" class="btn btn-success">Создать вакансию</a>
@endauth
    @if(session()->get('success'))
        <div class="alert alert-success mt-3">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Организация</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($vacancy as $vac)
            <tr>
                <th scope="row">{{ $vac->id }}</th>
                <td>{{ $vac->direction }}</td>
                @foreach($org as $item)
                    @if($item->id == $vac->organization_id)
                <td>{{ $item->name }}</td>
                    @endif
                @endforeach
                <td class="table-buttons" style="">
                    <a href="{{ route('vacancy.show', $vac) }}" class="btn btn-success">
                        <i class="fa fa-eye"></i>
                    </a>
                    @auth()
                        @if(auth()->user()->role_id != 1)
                    <a href="{{ route('vacancy.edit', $vac) }}" class="btn btn-primary">
                        <i class="fa fa-pencil" ></i>
                    </a>
                    <form method="POST" action="{{ route('vacancy.destroy', $vac) }}" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                            @endif
                        @endauth
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
