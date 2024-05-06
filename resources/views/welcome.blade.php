<x-layout.navigation></x-layout.navigation>
<section class="content-banner">
    <div class="container banner bg-image">
        <div class="banner-text">
            <h1>Фриланс площадка колледжа<br>
                АлтГТУ</h1>
            <h2>
                Найди своё место в мире<br>
                фриланса с колледжем
            </h2>
        </div>
    </div>
</section>
<div class="order container">
        <h1>Найдено 234 заказа</h1>
    <div class="teg-bar">
    <x-teg>Вёрстка</x-teg>
    <x-teg>Дизай</x-teg>
    <x-teg>PHP</x-teg>
    <x-teg>Тег</x-teg>
    </div>
    <div class="card-order">
    @foreach($orders as $order)
            <a href="{{ route('order', ['id' => $order->id]) }}">
            <div class="order-card">
                <img src="{{asset('img/developer_male 2.png')}}" alt="">
                <div class="s">
                    <div class="teg-bar">
                        @foreach($order->teg_names as $teg)
                        <x-teg>{{$teg}}</x-teg>
                        @endforeach
                    </div>
                    <div class="order-text">
                        <h2>{{$order->name_order}}</h2>
                        <h3>{{$order->description_order}}</h3>
                    </div>
                </div>
                <div class="order-cred">
                    <hr>
                    <div class="h">
                        <h3>Опыт работы:  от 3 лет</h3>
                        <h3>Строки работы: месяц </h3>
                    </div>
                </div>
            </div>
            </a>
        @endforeach
    </div>
</div>

