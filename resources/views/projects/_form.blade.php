@csrf

<label>
    Título del proyecto <br>
    <input type="text" name="title" value="{{ old('title', null) }}">
</label>
<br>
<label>
    URL del proyecto <br>
    <input type="text" name="url" value="{{ old('url', $project->url) }}">
</label>
<br>
<label>
    Descripción del proyecto <br>
    <textarea name="description">{{ old('description', $project->description) }}</textarea>
</label>
<br>
<button>{{ $btnText }}</button>
