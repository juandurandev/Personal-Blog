<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight ">{{ __('Posts') }}</h2>
            <a href="{{ route('posts.create')}}"
            class="text=xs bg-gray-800 rounded-md  text-white px-4 py-2">Create 🏗️</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="p-6 font-semibold">Listado de publicaciones</p>


                    <table class="mb-4">

                    @foreach ($posts as $post )
                    <tr class="border-b border-gray-200 text-sm"></tr>
                        <td class="px-6 py-4">{{$post->title }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('posts.edit',$post) }}" class='h-10 px-6 rounded-md bg-indigo text-indigo'>Edit ✏️</a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('posts.destroy',$post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <input
                                    type="submit"
                                    value="Delete 🗑️"
                                    class="bg-gray-800 rounded-md  text-white px-4 py-2 cursor-pointer "
                                    onclick="return confirm('Desea Eliminar?')">
                            </form>
                        </td>


                    @endforeach

                    </table>

                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
