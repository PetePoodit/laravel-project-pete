@extends('layouts.main')

@section('content')

    <h1 class="text-2xl my-4"> Create New Artist </h1>

    <form action= "{{route('artists.store')}}" method="POST">
        @csrf

        <div> 
            <label for="name"> Name </label>
            <input type="text" 
            name="name" 
            id="name" 
            class="border-gray-900 p-2 border-2 rounded-md">
        </div>

        <div>
            <button
                type="submit"
                class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600"
            >
                Add Artist
            </button>
        </div>
    </form>


@endsection