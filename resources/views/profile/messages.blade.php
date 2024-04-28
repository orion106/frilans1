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
        @foreach($user as $users)
            <div class="message-list-block">
                <a href="{{ route('user', ['id' => $users->id]) }}">
{{--                    @dd($user)--}}
                    <img src="{{asset('/img/Component 6.png')}}" alt="Profile avatar">
                    <span>{{$users->surname}} {{$users->firstname}}</span>
                </a>
                <a href="{{ route('message', ['id' => $users->id]) }}">
                    <p> Сообщение</p>
                </a>
            </div>
        @endforeach
    </div>
    <x-profile.sidebar>
    </x-profile.sidebar>
</div>
