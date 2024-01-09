<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Editer {{ $post->title }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        <div class="my-5">
            @foreach($errors->all() as $error)
                <span class="block text-red-500">{{ $error }}</span>
            @endforeach>
        </div>

        <form action="{{route('posts.update', $post)}}" method="post" enctype="multipart/form-data" class="mt-10">
            @method('put')
            @csrf

            <label for="title" value="{{$post->title}}">Title du post</label>
            <br>
            <input id="title" name="title" value="{{$post->title}}">

            <br>
            <label for="content" value="{{$post->content}}">Contenue du post</label>
            <br>
            <textarea id="content" name="content" >{{$post->content}}</textarea>

            <br>
            <label for="img" value="Image du post">Image du post</label>
            <br>
            <input id="img" type="file" name="img">

            <br>
            <label for="category" value="Categorie du post">Categorie du post</label>
            <br>
            <select id="category" name="category">
                @foreach($categories as $category )
                    <option value="{{ $category->id }}" {{ $post->category_id === $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                Modifier mon post
            </button>
        </form>

    </div>
</x-app-layout>
