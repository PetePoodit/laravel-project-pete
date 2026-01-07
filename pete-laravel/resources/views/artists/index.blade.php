@extends('layouts.main')

@section('content')
 <section class="container mx-auto w-[80%]">
    <h1 class="text-2xl my-4"> Artist List </h1>
    <ul>
        @foreach ($artists as $artist)
            <li class="mb-2">
                <a href="{{ route('artists.show', $artist->id) }}" class="text-blue-500 hover:underline">
                    {{ $artist->name }}
                </a>    
            </li>
        @endforeach
 </section>


@endsection