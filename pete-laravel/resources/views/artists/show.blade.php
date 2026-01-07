@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl text-red-900 font-bold">{{ $artist -> name }}</h1>
        <h2> {{ $artist -> image_path }}</h2>

        <section>
            <h3 class="text-2xl">Songs</h3>
            <ul>
                @foreach($artist->songs as $song)
                    <li>
                        {{ $song -> title }} ({{ $song -> duration }} s.)
                    </li>
                @endforeach
            </ul>
        </section></div>

@endsection