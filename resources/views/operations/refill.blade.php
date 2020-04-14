@extends('layouts.app')

@section('title')
Перевод
@endsection

@section('content')
    <section class="hk-sec-wrapper">
        <h5 class="hk-sec-title">Пополнение</h5>
        <div class="row">
            <div class="col-sm">
                <div class="row">
                    <div class="col-md-12">
                        <form action="/operations" method="POST">
                            {{ csrf_field() }}
                            @include('operations.components.fields')
                            <button class="mt-40 btn btn-primary" type="submit">Пополнить</button>
                            <input type="hidden" name="type" value="refill">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection