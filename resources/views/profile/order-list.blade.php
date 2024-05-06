<x-layout.navigation></x-layout.navigation>
<section class="container">
    <div class="header-profile">
        <div>
            <img src="{{asset('/img/Component 6.png')}}" alt="Profile avatar">
            <h1>Иванов Иван</h1>
        </div>
        <a>
        <button>Добавить работу</button>
        </a>
    </div>
</section>
<div class="profile-main container">
        <div class="profile-main-content">
            Список заказов
            @foreach($orders as $order)
                <a href="{{ route('order', ['id' => $order->id]) }}">
                    <div class="order-card ss">
                        <div class="s ss">
                            <div class="order-text">
                                <h2>{{$order->name_order}}</h2>
                                <h3>{{$order->description_order}}</h3>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    <x-profile.sidebar>
    </x-profile.sidebar>
</div>
