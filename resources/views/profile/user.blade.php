<x-layout.navigation></x-layout.navigation>
<section class="container">
    <div class="header-profile">
        <div>
            <img src="{{asset('/img/Component 6.png')}}" alt="Profile avatar">
            <h1>{{$user->firstname}} {{$user->surname}}</h1>
        </div>
        <a>
            <button>Написать сообщение</button>
        </a>
    </div>
</section>
<div class="profile-main container">
    <div class="profile-main-content">
        <h1>Профиль</h1>
        <hr>
        <div class="profile-main-inform">
                <div class="profile-label">
                    <label>Имя</label>
                    <x-profile.input-profile>
                        placeholder="Имя" type="text" name="firstname" value="{{$user->firstname}}" disabled
                    </x-profile.input-profile>
                </div>
                <div class="profile-label">
                    <label>Фамилия</label>
                    <x-profile.input-profile>
                        placeholder="Фамилия" type="text" name="surname" value="{{$user->surname}}" disabled
                    </x-profile.input-profile>
                </div>
                <div class="profile-label">
                    <label>Отчество</label>
                    <x-profile.input-profile>
                        placeholder="Отчёсво" type="text" name="lastname" value="{{$user->lastname}}" disabled
                    </x-profile.input-profile>
                </div>
            @if($group != null)
                <div class="profile-label">
                    <label>Номер группы</label>
                    <x-profile.input-profile>
                        placeholder="Отчёсво" type="text" name="lastname" value="{{$group ->number_group}}" disabled
                    </x-profile.input-profile>
                </div>
                <div class="profile-label">
                    <label>Номер группы</label>
                    <x-profile.input-profile>
                        placeholder="Фамилия" disabled type="text" value="{{$group ->course}} курс"
                    </x-profile.input-profile>
                </div>
            @endif
        </div>
    </div>
</div>

