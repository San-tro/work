@extends('layouts.app')

@section('title', 'Все тендеры')

@section('content')
    @auth()
    <a href="{{ route('tenders.create') }}" class="btn btn-success">Создать тендер</a>
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
            <th scope="col">Вид</th>
            <th scope="col">Дата открытия</th>
            <th scope="col">Ответственное лицо</th>
            <th scope="col">Компания</th>
            <th scope="col">Вакансия</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($tenders as $tender)
            <tr>
                <th scope="row">{{ $tender->id }}</th>
                <td>{{ $tender->view }}</td>
                <td>{{ $tender->date }}</td>
                <td>{{ $tender->personincharge }}</td>
                @foreach($vacancy as $item)
                    @if($item->id == $tender->vacancy_id)
                        <td>{{ $item->direction }}</td>
                        @foreach($org as $item2)
                            @if($item2->id == $item->organization_id)
                                <td>{{ $item2->name }}</td>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                <td class="table-buttons" style="">
                    <a href="{{ route('tenders.show', $tender) }}" class="btn btn-success">
                        <i class="fa fa-eye"></i>
                    </a>
                    @auth()
                        @if(auth()->user()->role_id != 1)
                    <a href="{{ route('tenders.edit', $tender) }}" class="btn btn-primary">
                        <i class="fa fa-pencil" ></i>
                    </a>

                    <form method="POST" action="{{ route('tenders.destroy', $tender) }}" style="display: inline-block">
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

