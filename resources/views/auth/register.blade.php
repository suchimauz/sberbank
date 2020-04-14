@extends('layouts.login')

@section('title')
Регистрация
@endsection

@section('content')
<form class="was-validated needs-validated" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <h1 class="display-4 text-center mb-10">Регистрация</h1>
    <p class="text-center mb-30">Пожалуйста заполните данные.</p> 
    <div class="form-group">
        <input class="form-control" placeholder="ФИО" type="text" name="name" required autofocus>
        @if ($errors->has('name'))
            <div class="ivalid-feedback">
                {{ $errors->first('name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}"  required>
        @if ($errors->has('email'))
            <div class="ivalid-feedback">
                {{ $errors->first('email') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <div class="input-group">
            <input class="form-control" placeholder="Пароль" type="password" name="password" required>
            <div class="input-group-append">
                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
            </div>
            @if ($errors->has('password'))
                <div class="ivalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input class="form-control" placeholder="Повторите пароль" type="password" name="password_confirmation" required>
            <div class="input-group-append">
                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
            </div>
        </div>
    </div>
    <br>
    <button class="btn btn-warning btn-block" type="submit">Регистрация</button>
    <div class="option-sep">или</div>
    <div class="form-row">
        <div class="col-sm-6 offset-sm-3 mb-20">
            <a href="/login">
                <button type="button" class="btn btn-indigo btn-block btn-wth-icon"> 
                    <span class="icon-label">
                        <i class="fa fa-user"></i> 
                    </span>
                    <span class="btn-text">Авторизация</span>
                </button>
            </a>
        </div>
    </div>
</form>
@endsection
