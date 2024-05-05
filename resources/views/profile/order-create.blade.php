
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
        <h1>Создание заказа</h1>
        <form action="{{route('order-create')}}" method="POST">
            @csrf
            <div class="profile-label">
                <label>Название</label>
                <x-profile.input-profile>
                    placeholder="Название" type="text"  value="" name="name_order" 
                </x-profile.input-profile>
            </div>
            <div class="profile-label">
                <label>Описание</label>
                <x-profile.input-profile>
                    placeholder="Описание" type="text"  value="" name="description_order"
                </x-profile.input-profile>
            </div>
            <div class="profile-label">
                <label>Требования</label>
                <textarea class="textarea_order" name="requirements"></textarea>
            </div>
            <div class="profile-label">
            <label>Нужные навыки</label>
            <select class="select_teg" name="teg[]" id="countries"  multiple="multiple">
                    @foreach($teg as $tags)
                    <option value="{{$tags->id}}">{{$tags->teg_name}}</option>
                    @endforeach
            </select>
            </div>
            <button class="profile-btn" type="submit">Далее</button>
        </form>
    </div>
    <x-profile.sidebar>
    </x-profile.sidebar>
</div>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    new MultiSelectTag('countries')
</script>
