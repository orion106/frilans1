<div class="profile-sidebar">
    <a href="{{route('teg-create')}}">
        <x-profile.sidebar-button :active="request()->is('teg/create')">
            <img src="{{asset('img/Component 8.png')}}" alt="">
            <h2>Тег</h2>
        </x-profile.sidebar-button>
    </a>
</div>
