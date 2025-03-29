@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="text-center my-6">
        <h1 class="text-3xl font-bold">Transforming the Community, One Step at a Time</h1>
        <p class="text-gray-600">Our mission is to uplift the Christian community...</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-gray-100 p-6 rounded-lg">
            <h2 class="text-xl font-bold mb-4">Volunteer With Us</h2>
            <p class="text-gray-600">Your time and skills can transform lives...</p>
            <form method="POST" action="{{ route('volunteer') }}">
                @csrf
                <button class="bg-red-500 text-white px-4 py-2 rounded mt-4">Become a Volunteer</button>
            </form>
        </div>

        <div class="bg-white shadow p-6 rounded-lg">
            <h2 class="text-xl font-bold mb-4">Choose Amount</h2>
            <form method="POST" action="{{ route('donate') }}">
                @csrf
                <input type="text" name="amount" placeholder="Enter Amount" class="border p-2 w-full mb-4">
                <button class="bg-green-500 text-white px-4 py-2 rounded">Contribute</button>
            </form>
        </div>
    </div>

    <div class="mt-12">
        <h2 class="text-2xl font-bold">Our Initiatives</h2>
        <p class="text-gray-600">Explore our key initiatives...</p>
    </div>
</div>
@endsection
