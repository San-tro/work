@extends('layouts.app')

@section('title', 'Редактировать тендер '.$tenders->view)

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('tenders.update', $tenders) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="post-title">Вид</label>
                    <input type="text" name="view"
                           value="{{ $tenders->view }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Дата открытия</label>
                    <input type="text" name="date"
                           value="{{ $tenders->date }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Ответственное лицо</label>
                    <input type="text" name="personincharge"
                           value="{{ $tenders->personincharge }}" class="form-control" id="post-title">
                </div>
                <button type="submit" class="btn btn-success">Отредактировать</button>
            </form>
        </div>
    </div>
@endsection
