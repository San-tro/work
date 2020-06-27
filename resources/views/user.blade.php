@extends('layouts.app')

@section('title', 'Профиль')

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form method="POST" action="{{ route('user.store') }}">
                @csrf
                <div class="form-group">
                    <label for="post-title">Имя</label>
                    <p>
                          {{auth()->user()->name}}
                    </p>
                </div>
                <div class="form-group">
                    <label for="post-title">Фамилия</label>
                    <p>
                        {{auth()->user()->surname}}
                    </p>
                </div>
                <div class="form-group">
                    <label for="post-title">Отчество</label>
                    <p>
                        {{auth()->user()->patronymic}}
                    </p>
                </div>
                <div class="form-group">
                    <label for="post-title">Мыло</label>
                    <p>
                        {{auth()->user()->email}}
                    </p>
                </div>
                <a href="{{ route('user.create') }}" class="btn btn-success">Добавить резюме</a>


                <a href="../public/allResume" class="btn btn-success">Список резюме</a>
            </form>
        </div>
    </div>
@endsection
