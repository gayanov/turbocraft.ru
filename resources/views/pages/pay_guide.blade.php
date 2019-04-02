@extends('layouts.app')
@section('content')
    <div class="card mb-5">
        <div class="card-body text-center">
            <a href="{{ route('main') }}" class="btn btn-success">Приобрести привилегию</a>
            <h1>1. Введи ник и выбери привилегию</h1>
            <p>которую хочешь купить, а затем <strong>нажми на кнопку</strong></p>
            <img src="images/1.png" class="img-fluid">
            <hr>
            <h1>2. Выбери нужный способ оплаты</h1>
            <p>QIWI, WebMoney, Яндекс.Деньги, все на твой выбор</p>
            <img src="images/2.png" class="img-fluid">
            <hr>
            <h1>3. Введи свой номер телефона</h1>
            <p>или лицевого счета, все зависит от выбранного способа оплаты</p>
            <img src="images/3.png" class="img-fluid">
            <hr>
            <h1>4. Перейди к оплате</h1>
            <p>но для начала введи пароль от сервиса оплаты (если требуется)</p>
            <img src="images/4.png" class="img-fluid">
            <hr>
            <h1>5. Успешно!</h1>
            вы будете перенаправлены на сайт платежной системы<br>
            теперь достаточно зайти на сервер под своим ником и наслаждаться игрой с привилегией!<br>
            <img src="images/5.png" class="img-fluid">
            <hr>
            <h1>Возникли проблемы?</h1>
            <p>Ты всегда можешь обратиться в нашу службу поддержки!</p>
            <a href="//{{ config('app.vk.send_message_url') }}" target="_blank" class="btn btn-warning">Обратиться в техническую поддержку</a>
        </div>
    </div>
@endsection