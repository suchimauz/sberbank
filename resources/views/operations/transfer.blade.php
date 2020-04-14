@extends('layouts.app')

@section('title')
Перевод
@endsection

@section('content')
    <section class="hk-sec-wrapper">
        <h5 class="hk-sec-title">Перевод</h5>
        <p class="mb-25">Выберите пользователя, которому вы бы хотели перевести средства</p>
        <div class="row">
            <div class="col-sm">
                <div class="row">
                    <div class="col-md-12">
                        <form action="/operations" method="POST">
                            {{ csrf_field() }}
                            <select class="form-control select2" name="subject" required>
                                <option value={{ NULL }}>Выберите пользователя</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @include('operations.components.fields')
                            <input type="hidden" name="type" value="transfer">
                            <button class="mt-40 btn btn-primary" type="submit">Перевести</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection