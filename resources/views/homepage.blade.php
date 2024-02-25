@extends('layout')


@section('content')
@include('searchbar')
<div class="text-center mb-12 font-bold text-2xl">
    <h1>Our Fruit</h1>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @unless(count($fruitList) == 0)
        @foreach ($fruitList as $fruit)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="{{$fruit['url']}}" alt="Apples" class="w-full h-48 object-cover mb-4 rounded-md">
                <h2 class="text-xl font-bold text-gray-800 mb-2">{{$fruit['name']}}</h2>
                <p class="text-gray-700 mb-2">{{$fruit['descriptions']}}</p>
                <p class="text-gray-500 text-sm">{{$fruit['price']}} per KG</p>
                <p class="text-gray-500 text-sm">From : {{$fruit['origin']}}</p>
                <a href="/fruit/{{ $fruit['id'] }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mt-4 inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a1 1 0 1 1 0 2h-1v10a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8H5a1 1 0 1 1 0-2h2V4zm4 4v10h8V8H8z" clip-rule="evenodd" />
                    </svg>
                    See Detail
                </a>
            </div>
        @endforeach
    @else
        <div class="text-center mb-12 font-semibold text-2xl text-gray-500">
            <p>No Fruit available</p>
        </div>
    @endunless
</div>

@endsection
