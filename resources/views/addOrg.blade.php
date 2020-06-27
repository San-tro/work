@extends('layouts.app')

@section('content')
    <form>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <a href="../public/tenders">
                <div  class="btn btn-primary">
                    {{ __('Тендеры') }}
                </div>
                </a>
            </div>
        </div>
        <div class="form-group row mb-0" style="margin-top: 20px">
            <div class="col-md-6 offset-md-4">
                <a href="../public/vacancy">
                    <div  class="btn btn-primary">
                        {{ __('Вакансии') }}
                    </div>
                </a>
            </div>
        </div>
    </form>
@endsection
