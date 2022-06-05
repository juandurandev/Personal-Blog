@extends('template')


@section('content')

    <div class="max-w-3xl mx-auto">
        <h1 class="text-5xl mb-8">Detalle</h1>

        <p class="leading-loose text-lg text-gray-700">{{$post->id}}</p>
        <br>
        <p>{{$post->content}}</p>


    </div>


@endsection

