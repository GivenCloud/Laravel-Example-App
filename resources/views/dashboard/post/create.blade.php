@extends('dashboard.layout')

@section('content')
<h1>Crear post</h1>

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('post.store')}}" method="POST">
        @include('dashboard.post.form')
    </form>
@endsection