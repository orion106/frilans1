<x-layout.navigation></x-layout.navigation>
<section class="container">
    <div class="header-profile">
        <div>
            <h1>Админ панель</h1>
        </div>
    </div>
</section>
<div class="profile-main container">
    <div class="profile-main-content">
        <h1>Создание тега</h1>
        назад
        <hr>
        <form action="{{ route('teg-update', ['id' => $teg->id]) }}" method="post">
            @csrf
            <div class="profile-label">
                <label>Имя</label>
                <x-profile.input-profile>
                    placeholder="Имя" type="text" name="teg_name" value="{{$teg -> teg_name}}"
                </x-profile.input-profile>
            </div>
            <button class="profile-btn" type="submit">Далее</button>
        </form>

    </div>
    <x-admin.sidebar></x-admin.sidebar>
</div>

