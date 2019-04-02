@extends('layouts.app')
@section('content')
    <div class="description_products">
        <h2 class="text-center text-white">Описание привилегий:</h2>
        <div class="card mb-3">
            <div class="card-body">
                <p>
                    И так, дорогой читатель, если ты это читаешь, то ты наверняка задумывался о получении привилегий. Эти привилегии дадут вам разнообразные команды и возможности, доступ к некоторым игровым элементам и улучшениям. Что вы делаете, когда тратите деньги на привилегии?
                    <br>
                    <br>
                    Вы не просто тратите их, а помогаете проекту.
                    Все деньги идут на поддержание работоспособности сервера и дальнейшему развитию.
                    Донатеры нам помогают в этом, а мы их пытаемся вознаградить плюшками ^_^ Что я получу задонатив?
                    <br>
                    <br>
                    Вы получите разнообразные команды и возможности, доступ к некоторым игровым элементам и улучшениям. Когда приходит донат?
                    <br>
                    <br>
                    После покупки донат приходит автоматически на все сервера. В случае возникновения проблем Вам потребуется номер чека.
                </p>

                <ul class="nav nav-tabs nav-fill" role="tablist">
                    @foreach($data['servers'] as $key=>$server)
                        <li class="nav-item">
                            <a class="nav-link nav-link @if($key === 0)active @endif"
                               id="server{{ $key }}-tab"
                               data-toggle="tab"
                               href="#server{{ $key }}"
                               role="tab"
                               aria-controls="home"
                               aria-selected="true"
                               style="color: black;">
                                {{ $server['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content">
                    @foreach($data['servers'] as $key=>$server)
                        <div class="tab-pane mt-3 @if($key === 0)active @endif"
                             id="server{{ $key }}"
                             role="tabpanel"
                             aria-labelledby="server{{ $key }}-tab">

                            <div class="row">
                                @foreach($data['products'] as $key=>$product)
                                    @if($product['server_id'] === $server['id'] && $product['description_enable'])
                                        <div class="col-lg-12">
                                            <div class="card mb-5">
                                                <div class="card-header">
                                                    {{ $product['title'] }}
                                                </div>
                                                <div class="card-body">

                                                    @if(!$product['description'] && $product['image'])
                                                        <img class="ml-auto" src="{{ $product['image'] }}">
                                                    @endif

                                                    @if($product['description'] && !$product['image'])
                                                        <p class="card-text">{{ $product['description'] }}</p>
                                                    @endif

                                                    @if(!$product['description'] && !$product['image'])
                                                        <p class="card-text">Администратор сервера пока не добавил описание к товару...</p>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
@endsection