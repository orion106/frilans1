<div class="profile-sidebar">
    <a href="{{route('profile')}}">
    <x-profile.sidebar-button :active="request()->is('profile')">
        <img src="{{asset('img/Component 8.png')}}" alt="">
        <h2>Профиль</h2>
    </x-profile.sidebar-button>
    </a>

@if(auth()->user()->role == 2)
    <a href="{{route('create_order')}}">
        <x-profile.sidebar-button  :active="request()->is('profile/order-history')">
            <img src="{{asset('img/Component 8.png')}}" alt="">
            <h2>Создание заказа</h2>
        </x-profile.sidebar-button>
    </a>
@endif
    <a href="{{route('order')}}">
        <x-profile.sidebar-button  :active="request()->is('profile/order')">
            <img src="{{asset('img/Component 8.png')}}" alt="">
            <h2>Заказы</h2>
        </x-profile.sidebar-button>
    </a>
    <a href="{{route('messages')}}">
        <x-profile.sidebar-button  :active="request()->is('profile/messages')">
            <img src="{{asset('img/Component 8.png')}}" alt="">
            <h2>Сообщения</h2>
        </x-profile.sidebar-button>
    </a>

    <a href="{{route('logout')}}">
        <x-profile.sidebar-button class='bg-danger'>
            <img src="{{asset('img/Component 8.png')}}" alt="">
            <h2>Выход</h2>
        </x-profile.sidebar-button>
    </a>
    @if(auth()->user()->role == 3)
        <a href="{{route('dashboard')}}">
            <x-profile.sidebar-button  :active="request()->is('profile/order-history')">
                <img src="{{asset('img/Component 8.png')}}" alt="">
                <h2>Админ панель</h2>
            </x-profile.sidebar-button>
        </a>
    @endif
</div>

