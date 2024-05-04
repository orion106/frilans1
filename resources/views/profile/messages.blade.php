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
                <a href="{{ route('message', ['id' => $users->id]) }}">
                    <div class="message-list-block">
                        <img class="image_user" src="{{asset('/img/Component 6.png')}}" alt="Profile avatar">
                        <div class="message-block-user">
                            <object>
                                <a href="{{ route('user', ['id' => $users->id]) }}">

                                    <div class="name_user">
                                        @if($users->surname == null && $users->firstname == null)
                                            <span><b> Пользователь без имени</b></span>
                                        @else
                                            <span><b> {{$users->surname}} {{$users->firstname}}</b></span>
                                        @endif
                                    </div>
                                </a>
                            </object>
                            <p class="message_chat">Сообщение</p>
                        </div>
                    </div>
                </a>
        @endforeach
    </div>
    <x-profile.sidebar>
    </x-profile.sidebar>
</div>
