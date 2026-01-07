@extends('layouts.main')

@section('content')
    <h1 class="text-4xl text-center text-red-600">
        Our Company
    </h1>
    <h2 class="text-3xl text-center mt-4">
        This is Pete's Company Page
    </h2>

     <div class="text-center mt-8">
        <p class="text-xl">
            <strong>Company Name:</strong> {{ $companyName }}
        </p>

        <p class="text-xl mt-2">
            <strong>Year:</strong> {{ $year }}
        </p>

         <p class="text-xl mt-2">
            <strong>name:</strong> {{ $name }}
        </p>
    </div>
@endsection
