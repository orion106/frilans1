<x-layout.navigation></x-layout.navigation>
<div class="wrapper-full-order">
    @foreach($orders as $order)
    <div class="wrapper-order">
        <div class="inf-order">
            <h1>{{$order->name_order}}</h1>
            <h6 class="exp">Требуемый опыт работы: 3–6 лет</h6>
            <a href="{{ route('response', ['id' => $order->id]) }}">
                <button class="response">
                    Откликнуться
                </button>
            </a>
        </div>
        <div class="inf-employer">
            <img src="{{asset('storage/'.$order->photo)}}" class="photo_store">
            <h3 class="FIO">{{$order->firstname}} {{$order->surname}}</h3>
        </div>
    </div>
    <div class="wrapper-order-2">
        <h4>Обязанности:</h4>
        <p class="text-order">
            {{$order->description_order}}
        </p>
        <h4 class="m">Требования:</h4>
        <p class="text-order">
            {!!nl2br($order->requirements)!!}
        </p>
        <h4 class="m">Ключевые навыки:</h4>
        <div class="teg-bar">
            @foreach($order->teg_names as $tegs)
                <x-teg>{{$tegs}}</x-teg>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
