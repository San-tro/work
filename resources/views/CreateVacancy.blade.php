@extends('layouts.app')

@section('title', 'Добавить вакансию')

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

            <form method="POST" action="{{ route('vacancy.store') }}">
                @csrf
                <div class="form-group">
                    <label for="post-title">Название</label>
                    <input type="text" name="direction"
                           value="{{ old('direction') }}" class="form-control" id="post-title">
                </div>
                <div class="form-group">
                    <label for="post-title">Организация</label>

                    <select class="form-control form-control-sm" name="organization_id">
                    @foreach($org as $item)
                        <option name="organization_id"  value="{{$item->id}}">{{ $item->name }}</option>
                    @endforeach
                </select>
                </div>
                <button type="submit" class="btn btn-success">Добавить пост</button>
            </form>
        </div>
    </div>
@endsection
