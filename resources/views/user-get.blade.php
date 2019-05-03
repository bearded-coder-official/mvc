@extends('layout')

@section('title', 'User')

@section('content')
{{--    @empty(!$user)--}}
{{--        <ul>--}}
{{--            <li>{{ $user->id }}</li>--}}
{{--            <li>{{ $user->email }}</li>--}}
{{--            <li>{{ $user->password }}</li>--}}
{{--            <li>{{ $user->created_at }}</li>--}}
{{--            <li>{{ $user->updated_at }}</li>--}}

{{--            <li>Language: {{ $user->language->name }}</li>--}}
{{--        </ul>--}}
{{--    @else--}}
{{--        <p>Пользователя не существует</p>--}}
{{--    @endempty--}}

    @foreach($language->users as $user)
        <ul>
            <li>{{ $user->id }}</li>
            <li>{{ $user->email }}</li>
            <li>{{ $user->password }}</li>
            <li>{{ $user->created_at }}</li>
            <li>{{ $user->updated_at }}</li>
        </ul>

        <p>Роли:</p>
        <ul>
            @forelse($user->permissions as $permission)
                <li>{{ $permission->name }}</li>
            @empty
                <p>Нет ролей</p>
            @endforelse
        </ul>
    @endforeach
@endsection