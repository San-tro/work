@extends('layouts.app')

@section('title', 'Добавить тендер')

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

            <form method="POST" action="{{ route('tenders.store') }}">
                @csrf
                <div class="form-group">
                    <label for="post-title">Вид</label>
                    <input type="text" name="view"
                           value="{{ old('view') }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Дата открытия</label>
                    <input type="text" name="date"
                           value="{{ old('date') }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Ответственное лицо</label>
                    <input type="text" name="personincharge"
                           value="{{ old('personincharge') }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Вакансия</label>

                    <select class="form-control form-control-sm" name="vacancy_id">
                        @foreach($vacancy as $item)
                        <option name="vacancy_id"  value="{{$item->id}}">{{ $item->direction }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Добавить тендер</button>
            </form>
        </div>
    </div>
@endsection

