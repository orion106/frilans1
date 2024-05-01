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
            <div class="wrapper_chat">
                <a href="{{ route('message', ['id' => $users->id]) }}">
                    <div class="message-list-block">
                        <img class="image_user" src="{{asset('/img/Component 6.png')}}" alt="Profile avatar">
                        <object>
                            <a href="{{ route('user', ['id' => $users->id]) }}">

                                <div class="name_user">
                                    <span><b>{{$users->surname}} {{$users->firstname}}</b></span>
                                </div>
                            </a>
                        </object>
                        <p class="message_chat">Сообщение</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <x-profile.sidebar>
    </x-profile.sidebar>
</div>
