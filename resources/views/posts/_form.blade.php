@csrf

<label for="" class="uppercase text-gray-xs">Title</label>
<span class="text-xs text-red-600">
    @error('title')
    {{ $message }}
    @enderror
</span>
<input type="text" name="title" class="rounded border=gray-200 w-full mb-4" value="{{ old('title',$post->title) }}">



<label for="" class="uppercase text-gray-xs">Label</label>
<span class="text-xs text-red-600">
    @error('label')
    {{ $message }}
    @enderror
</span>
<input type="text" name="label" class="rounded border=gray-200 w-full mb-4" value="{{ old('label',$post->label) }}">




<label for="" class="uppercase text-gray-xs">Slug</label>
<span class="text-xs text-red-600">
    @error('slug')
    {{ $message }}
    @enderror
</span>
<input type="text" name="slug" class="rounded border=gray-200 w-full mb-4" value="{{ old('slug',$post->slug) }}">




<label for="" class="uppercase text-gray-xs">Content</label>

<span class="text-xs text-red-600">
    @error('content')
    {{ $message }}
    @enderror
</span>
<textarea name="content" id="" rows="8" class="rounded border=gray-200 w-full mb-4"> {{ old('content',$post->content) }} </textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600 bg-gray-800 rounded-md  text-white px-4 py-2 "> Back ↩️ </a>
    <input class="bg-gray-800 rounded-md  text-white px-4 py-2" type="submit" value="Enviar ✔️">
</divc>

