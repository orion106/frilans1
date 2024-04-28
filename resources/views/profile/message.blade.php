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
    <div class="profile-main-content message-block">
        <div>
            <div class="header-message">
                <div class="header-message-exit">
                    <img src="{{asset('/img/Component2.svg')}}">
                    <a href="{{route('messages')}}">
                    <span>Назад</span>
                    </a>
                </div>
                <a href="{{ route('user', ['id' => $user->id]) }}">
                    <p>{{$user->surname}} {{$user->firstname}}</p>
                </a>
                <a href="{{ route('user', ['id' => $user->id]) }}">
                    <img class="header-message-img" src="{{asset('/img/Component 6.png')}}" alt="Profile avatar">
                </a>
            </div>
            <hr class="hr-message">
        </div>
        <div class="chat__content">
            <div>
                <div class="chat__item">
                    <img class="header-message-img" src="{{asset('/img/Component 6.png')}}" alt="Profile avatar">

                    <div class="chat__messages">
                        <div class="chat__message">
                            <div class="chat__message-content">Hi</div>
                        </div>

                        <div class="chat__message">
                            <div class="chat__message-content">How are you?</div>
                        </div>
                    </div>
                </div>

                <div class="chat__item chat__item--responder">
                    <img class="header-message-img" src="{{asset('/img/Component 6.png')}}" alt="Profile avatar">

                    <div class="chat__messages">
                        <div class="chat__message">
                            <div class="chat__message-content">Hello</div>
                        </div>

                        <div class="chat__message">
                            <div class="chat__message-content">I'm fine. Let's have a dinner today.</div>
                        </div>

                        <div class="chat__message">
                            <div class="chat__message-content">What do you think about it?</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-input">
            <x-profile.input-profile>
                placeholder="Написать сообщение....." type="text"
            </x-profile.input-profile>

            <img class="header-message-img" src="{{asset('/img/PaperPlane.svg')}}" alt="Profile avatar">
        </div>
    </div>
    <x-profile.sidebar>
    </x-profile.sidebar>
</div>
