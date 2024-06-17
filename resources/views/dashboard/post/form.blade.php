@csrf
<label for="">Título</label>
<input type="text" name="title" placeholder="Título" value="{{ old("title", $post->title)}}"> <!-- se puede añadir un segundo valor, el cual sería un valor por defecto -->

<label for="">Slug</label>
<input type="text" name="slug" placeholder="Slug" value="{{ old("slug", $post->slug)}}">

<label for="">Categoría</label>
<select name="category_id" id="">
    <option value=""></option>
        @foreach ($categories as $title => $id)
            <option @if (old("category_id", $post->category_id) == $id)
                selected
            @endif value="{{ $id }}">{{ $title }}</option>
        @endforeach
</select>

<label for="">Posteado</label>
<select name="posted" id="">
    <option value=""></option>
    <option value="yes" @if (old("posted", $post->posted) == 'yes')
        selected
    @endif>Si</option>
    <option value="not" @if (old("posted", $post->posted) == 'not')
        selected
    @endif>No</option>
</select>
        
<label for="">Contenido</label>
<textarea name="content" placeholder="Contenido">{{ old("content", $post->content)}}</textarea>
<label for="">Descripción</label>
<textarea name="description" placeholder="Descripción">{{ old("description", $post->description)}}</textarea>
@if (isset($task) && $task == 'edit')
    <label for="">Imagen</label>
    <input type="file" name="image">    
@endif


<button type="submit">Enviar</button>