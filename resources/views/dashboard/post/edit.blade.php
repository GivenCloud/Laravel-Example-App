@extends('dashboard.layout')

@section('content')
<h1>Actualizar post: {{ $post->title }}</h1>

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('dashboard.post.form', ['task' => 'edit'])
    </form>
@endsection