@extends('layouts.app')\

@section('title')
Главная
@endsection

@section('content')
    <div class="hk-row">
        <div class="col-lg-6 col-md-12">
            <div class="card card-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <span class="d-block font-15 text-dark font-weight-500">Ваш баланс</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="d-block display-4 text-dark mb-5">{{ Auth::user()->balance() }}</span>
                        <small class="d-block">Рублей</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <span class="d-block font-15 text-dark font-weight-500">Ваши операции</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">{{ $operations_count }}</span></span>
                        <small class="d-block">количество</small>
                    </div>
                </div>
            </div>
        </div>	
        <div class="col-lg-3 col-md-6">
            <div class="card card-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <span class="d-block font-15 text-dark font-weight-500">Пользователи</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">{{ $user_count }}</span></span>
                        <small class="d-block">количество</small>
                    </div>
                </div>
            </div>
        </div>					
    </div>
    <div class="hk-row">
        <div class="col-lg-12">
                <div class="card">
                <div class="card-body pa-0">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>От кого / Кому</th>
                                        <th>Операция</th>
                                        <th>Сумма</th>
                                        <th>Дата</th>
                                        <th>Статус</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($operations as $operation)
                                    <tr>
                                        <td>
                                            @if ($operation->subject)
                                                <div class="media align-items-center">
                                                    <div class="media-img-wrap d-flex mr-10">
                                                        <div class="avatar avatar-xs">
                                                            <span class="avatar-text @if($operation->status == 'success') avatar-text-success @else avatar-text-danger @endif rounded-circle">
                                                                <span class="initial-wrap"><span>
                                                                    {{ mb_substr($operation->subject_user->name, 0, 1) }}
                                                                </span></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block">{{ $operation->subject_user->name }}</span> 
                                                    </div>
                                                </div>
                                            @else
                                                <div class="media align-items-center">
                                                    <div class="media-img-wrap d-flex mr-10">
                                                        <div class="avatar avatar-xs">
                                                            <span class="avatar-text @if($operation->status == 'success') avatar-text-primary @else avatar-text-danger @endif rounded-circle"><span class="initial-wrap">
                                                                <span><i style="font-size: 13px" class="ion ion-md-swap"></i></span>
                                                            </span></span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block">Прочие операции</span> 
                                                    </div>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($operation->type == 'incoming')
                                                Входящий перевод
                                            @elseif($operation->type == 'transfer')
                                                Перевод
                                            @elseif($operation->type == 'refill')
                                                Пополнение
                                            @elseif($operation->type == 'withdraw')
                                                Снятие
                                            @endif
                                        </td>
                                        <td>
                                            @if($operation->status == 'success')
                                                @if($operation->type == 'incoming' || $operation->type == 'refill')
                                                    + 
                                                @elseif($operation->type == 'withdraw' || $operation->type == 'transfer')
                                                    -
                                                @endif
                                            @endif
                                            {{ $operation->amount }} ₽
                                        </td>
                                        <td>
                                            {{ date('d.m.Y H:i', strtotime($operation->created_at)) }}
                                        </td>
                                        <td>
                                            @if($operation->status == 'success')
                                                <span class="badge badge-soft-success">Выполнен</span>
                                            @else
                                                <span class="badge badge-soft-danger">Не выполнен</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">Операций нет</td>
                                    </tr>    
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection