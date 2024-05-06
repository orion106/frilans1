<x-layout.navigation></x-layout.navigation>
<section class="container">
    <div class="header-profile">
        <div>
            <img src="{{asset('storage/'.$user_my->photo)}}" alt="Profile avatar">
            <h1>{{$user_my->surname}} {{$user_my->firstname}}</h1>
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
                    <img class="image_user" src="{{asset('storage/'.$users->photo)}}" alt="Profile avatar">
                        <div class="message-block-user">
                            <object>
                                <a href="{{ route('user', ['id' => $users->id]) }}">
                                @if($users->surname == null && $users->firstname)
                                        <div class="name_user">
                                            <span><b>Пользователь без имени </b></span>
                                        </div>
                                    @else
                                    <div class="name_user">
                                        <span><b>{{$users->surname}} {{$users->firstname}}</b></span>
                                    </div>
                                @endif
                                </a>
                            </object>
                            <p class="message_chat">Сообщение</p>
                        </div>
                    </div>
                </a>

            </div>
        @endforeach
    </div>
    <x-profile.sidebar>
    </x-profile.sidebar>
</div>
