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
<script>

</script>
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
            <div id="chatAndMessage">
                @foreach ($message as $msg)
                    @if ($msg->sender_id == $id)
                        <div class="messageInChat">
                            <div class="messageClient">{{ $msg->message }}ff</div>
                        </div>
                    @else
                        <div class="messageInChat">
                            <div class="messageManager">{{ $msg->message }}hh</div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>



            <form action="{{route('message', ['id' => $user->id])}}"  method="POST" class="chat-input">
                @csrf
                <x-profile.input-profile>
                    placeholder="Написать сообщение....." type="text" name="message"
                </x-profile.input-profile>

                <button class="chat-button">
                    <img  src="{{asset('/img/PaperPlane.svg')}}" alt="Profile avatar">
                </button>
            </form>
    </div>
    <x-profile.sidebar>
    </x-profile.sidebar>
</div>


