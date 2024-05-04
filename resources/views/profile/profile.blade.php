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
        <h1 class="profile">Профиль</h1>
        <hr>
        <div class="profile-main-inform">
            <form action="{{route('profile')}}" method="POST">
                @csrf
                <div class="profile-label">
                    <label>Имя</label>
                    <x-profile.input-profile>
                        placeholder="Имя" type="text" name="firstname" value="{{$user->firstname}}"
                    </x-profile.input-profile>
                    @error('firstname')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="profile-label">
                    <label>Фамилия</label>
                    <x-profile.input-profile>
                        placeholder="Фамилия" type="text" name="surname" value="{{$user->surname}}"
                    </x-profile.input-profile>
                    @error('surname')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="profile-label">
                    <label>Отчество</label>
                    <x-profile.input-profile>
                        placeholder="Отчёсво" type="text" name="lastname" value="{{$user->lastname}}"
                    </x-profile.input-profile>
                    @error('lastname')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="profile-label">
                    <label>Номер группы</label>
                    <select class="select-profile" name="group_id" class="form-select" aria-label="Выбор группы">
                        @if($group_me != null)
                            <option  selected  class="d-none" value="{{$group_me ->id}}">{{$group_me ->number_group}}</option>
                        @else
                            <option  selected disabled >Выберите группу</option>
                        @endif
                        @foreach($group as $groups)
                        <option value="{{$groups->id}}" >{{$groups->number_group}}</option>
                        @endforeach
                    </select>
                    @error('group')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                @if($group_me != null)
                <div class="profile-label">
                    <label>Номер группы</label>
                    <x-profile.input-profile>
                        placeholder="Фамилия" disabled type="text" value="{{$group_me ->course}} курс"
                    </x-profile.input-profile>
                </div>
                @endif
                <hr>
                <div class="profile-label">
                <label>Телеграмм</label>
                    <x-profile.input-profile>
                        placeholder="@name" type="text"
                    </x-profile.input-profile>
                </div>
                <div class="profile-label">
                <label>Номер ВКонтакте</label>
                    <x-profile.input-profile>
                        placeholder="Введите ссылку" type="text"
                    </x-profile.input-profile>
                </div>
                <div class="profile-label">
                <label>Номер телефона</label>
                    <x-profile.input-profile>
                        placeholder="8-***-***-**-**" type="text"
                    </x-profile.input-profile>
                </div>
                <button class="profile-btn" type="submit">Далее</button>
            </form>

        </div>
    </div>
    <x-profile.sidebar>
    </x-profile.sidebar>
</div>
