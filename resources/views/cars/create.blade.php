@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create car
            </h1>
        </div>
    </div>
    <div class="flex justify-center pt-20">
        <form method="post" action="/cars" enctype="multipart/form-data">
            @csrf
            <div class="block">
                <input type="file"
                       class="block shadow-5xl mb-10
                       p-2 w-80 italic placeholder-gray-400"
                       name="image">
                <input type="text"
                       class="block shadow-5xl mb-10
                       p-2 w-80 italic placeholder-gray-400"
                       placeholder="Name..."
                       name="name">
                <input type="number"
                       class="block shadow-5xl mb-10
                       p-2 w-80 italic placeholder-gray-400"
                       placeholder="Founded..."
                       name="founded">
                <input type="text"
                       class="block shadow-5xl mb-10
                       p-2 w-80 italic placeholder-gray-400"
                       value="Description..."
                       name="description"
                >
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-blod">
                    Submit
                </button>
            </div>
        </form>

    </div>
    @if($errors->any())
        <div class="w-4/8 m-auto text-center">
            @foreach($errors->all() as $error)
                <li class="text-red-500 list-none">
                    {{$error}}
                </li>
            @endforeach
        </div>
    @endif
@endsection
