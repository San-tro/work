@extends('layouts.app')

@section('title', 'Добавить резюме')

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

            <form method="POST" action="{{ route('user.store') }}">
                @csrf
                <div class="form-group">
                    <label for="post-title">Имя</label>
                    <input type="text" name="name"
                           value="{{ auth()->user()->name }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Фамилия</label>
                    <input type="text" name="surname"
                           value="{{ auth()->user()->surname }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Отчество</label>
                    <input type="text" name="patronymic"
                           value="{{ auth()->user()->patronymic }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Дата рождения</label>
                    <input type="text" name="birthday"
                           value="{{ auth()->user()->birthday }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Последнее место работы (необязательно)</label>
                    <input type="text" name="lastplacework"
                           value="{{ auth()->user()->lastplacework }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Вид образования</label>
                    <input type="text" name="vieweducation"
                           value="{{ auth()->user()->vieweducation }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Курс</label>
                    <input type="text" name="course"
                           value="{{ auth()->user()->course }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Специальность</label>
                    <input type="text" name="speciality"
                           value="{{ auth()->user()->speciality }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Институт</label>
                    <input type="text" name="institution"
                           value="{{ auth()->user()->institution }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Дата окончания</label>
                    <input type="text" name="endyear"
                           value="{{ auth()->user()->endyear }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Телефон</label>
                    <input type="text" name="telephone"
                           value="{{ auth()->user()->telephone }}" class="form-control" id="post-title">
                </div>

                <button type="submit" class="btn btn-success">Добавить резюме</button>
            </form>
        </div>
    </div>
@endsection
