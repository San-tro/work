@extends('layouts.app')

@section('title', 'Редактировать вакансию '.$vacancy->direction)

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

            <form method="POST" action="{{ route('vacancy.update', $vacancy) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="post-title">Название</label>
                    <input type="text" name="direction"
                           value="{{ $vacancy->direction }}" class="form-control" id="post-title">
                </div>
                <button type="submit" class="btn btn-success">Отредактировать</button>
            </form>
        </div>
    </div>
@endsection
