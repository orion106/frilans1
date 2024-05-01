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
        <hr>
        <form action="{{route('teg-create')}}" method="post">
            @csrf
            <div class="profile-label">
                <label>Имя</label>
                <x-profile.input-profile>
                    placeholder="Имя" type="text" name="teg_name"
                </x-profile.input-profile>
            </div>
            <button class="profile-btn" type="submit">Далее</button>
        </form>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Имя Тега</th>
                <th scope="col">Редактировать</th>
                <th scope="col">Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teg as $tegs)
                <tr>
                    <th scope="row">{{$tegs->id}}</th>
                    <td>{{$tegs->teg_name}}</td>
                    <td><button></button></td>
                    <td>@mdo</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <x-admin.sidebar></x-admin.sidebar>
</div>

