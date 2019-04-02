@extends('layouts.app')
@section('content')
    <img src="../../images/win-iphone.png" class="img-fluid">
    <div class="card card-body mt-4 bg-transparent border-0">
        <div class="row text-white">

            <div class="col-md-6">
                <!-- Nav tabs -->
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
                        <div class="tab-pane @if($key === 0)active @endif"
                             id="server{{ $key }}"
                             role="tabpanel"
                             aria-labelledby="server{{ $key }}-tab">

                            <form action="/order" method="post" id="Form" class="mt-2">
                                @csrf
                                @if ($errors->any() && $key === 0)
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible fade show alert-message" role="alert">
                                            {{$error}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="form-group has-feedback">
                                    <input type="text" data-server="{{ $server['id'] }}" class="input-nick form-control" name="nickname" id="nickname" placeholder="Введите ник">
                                </div>
                                <div class="form-group">
                                    <select id="group" data-server="{{ $server['id'] }}" name="productId" class="select-group form-control">
                                        <option selected="" disabled="">Выберите товар</option>

                                        @foreach($data['categories'] as $key=>$category)
                                            <optgroup label="{{ $category['title']  }}">

                                                @foreach($data['products'] as $key =>$product)
                                                    @if($product['server_id'] === $server['id'] && $category['id'] === $product['category_id'])
                                                        <option value="{{ $product['id'] }}">
                                                            {{ $product['title']  }} - {{ $product['discount_price']  }} руб.
                                                        </option>
                                                    @endif
                                                @endforeach

                                            </optgroup>
                                        @endforeach

                                    </select>
                                </div>
                                <label>
                                    <input type="checkbox" required="">
                                    Я соглашаюсь с <a href="{{ route('rules') }}">правилами</a> сервера
                                </label>
                                <button type="submit" id="btn-{{ $server['id'] }}" class="btn btn-primary btn-custom btn-block">Купить</button>
                            </form>

                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-6">
                <img src="../../images/top.png" class="img-fluid">
                <div class="countdown-stock">
                    <h3 class="text-center">Осталось до завершения акции: </h3>
                    <div id="countdown_event" class="countdown countdown__color-circles d-sm-flex justify-content-center">
                        <div id="hours" class="holder col-sm-3">
                            <div class="hours-count number">0</div>
                            <div class="hours-label desc">часов</div>
                        </div>
                        <div id="mins" class="holder col-sm-3">
                            <div class="mins-count number">0</div>
                            <div class="mins-label desc">минут</div></div>
                        <div id="secs" class="holder col-sm-3">
                            <div class="secs-count number">0</div>
                            <div class="secs-label desc">секунд</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lastbought text-center text-white">
        <h1>Последние покупки</h1>
        <div class="users d-flex row">
            @foreach($data['orders'] as $key=>$order)
                @foreach($data['products'] as $key=>$product)
                    @if($order['product_id'] === $product['id'])
                        <div class="user col-1 d-none d-lg-flex">
                            <img src="/api/v1/face?u={{ $order['nickname'] }}&amp;s=80&amp;v=front">
                            <!-- class="center-block img-circle img-responsive" data-placement="bottom" data-toggle="tooltip" type="button" title="" data-original-title="Игрок: 007007007<br>Купил: <font color='#EC971F'>[ ЗОМБИ + БОТ РКОН + ОП + ЗВЕЗДА ]</font><br>Время: Сегодня в 20:53<br> Статус: <span class='label label-success'>Выдано</span-->
                            <div class="name">
                                <small>
                                    <div class="nickname-desc">{{ $order['nickname'] }}</div>
                                    <div class="product-title">{{ $product['title'] }}</div>
                                    @php
                                        $created_at = Carbon\Carbon::createFromFormat(
                                           'Y-m-d H:i:s', $order['created_at']
                                        )
                                    @endphp
                                    @if($created_at->isToday())
                                        @php
                                            $product['created_at'] = 'Сегодня в '.$created_at->format('H:i');
                                        @endphp
                                    @endif

                                    @if($created_at->isYesterday())
                                        @php
                                            $product['created_at'] = 'Вчера в '.$created_at->format('H:i');
                                        @endphp
                                    @endif

                                    <div class="product-date">{{ $product['created_at'] }}</div>
                                </small>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
@endsection