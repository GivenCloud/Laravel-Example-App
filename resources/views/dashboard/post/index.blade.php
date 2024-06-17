@extends('dashboard.layout')

@section('content')

    <a href="{{ route('post.create') }}">Crear</a>

    <table>
        <thead>
            <tr>
                <th>
                    Título
                </th>
                <th>
                    Categoría
                </th>
                <th>
                    Posteado
                </th>
                <th>
                    Acciones   
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->category->title }}
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        <a href="{{ route('post.show', $post) }}">Ver</a>
                        <a href="{{ route('post.edit', $post) }}">Editar</a>
                        <form action="{{ route('post.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button> 
                        </form>   
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection