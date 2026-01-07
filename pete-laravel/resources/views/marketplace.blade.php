@extends('layouts.main')

@section('content')
    <h1 class="text-4xl text-center text-orange-400">
        Marketplace
    </h1>
    <h2 class="text-3xl text-center mt-4">
        Shop our products here!
    </h2>

     <div class="text-center mt-8">
        <p class="text-xl">
            <strong>Category:</strong> {{ $category }}
        </p>
    </div>
@endsection
