@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-10">
        <h1 class="text-2xl font-bold">{{ $pageTitle }}</h1>
    </div>
    <div class="container mx-auto px-10 flex flex-col md:flex-row gap-8 mt-6 mb-10">
        <div class="flex-1">
            <!-- create new event -->
            <div>
                <div class="container mx-auto">
                    <div class="relative rounded-md border border-gray-300 text-center">
                        <p class="p-6"><i class="fa-regular fa-square-plus"></i> Create a new event</p>
                        <h2 class="absolute flex top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </h2>
                    </div>
                </div>
            </div>
            <!-- upcoming events -->
            @include('components.events.upcoming')

            <!-- upcoming bookings -->
            @include('components.bookings.upcoming')

        </div>

        <!-- Right sidebar -->
        <div class="w-full md:w-1/5">
            
            <!-- messages -->
            @include('components.messages.index')

            <!-- payments -->
            @include('components.payments.index')
            
            <!-- image -->
            <div class="relative w-full max-w-4xl mx-auto flex mt-10">
                <div
                    class="absolute left-0 top-1/4 transform translate-y-1/2 bg-white px-10 py-7 rounded-full shadow-lg circle">
                    <p class="text-sm ">Lorem ipsum</p>
                    <p class="text-sm ">dolor sit amet,</p>
                    <p class="text-sm ">consectetur</p>
                    <button class="mt-2 underline">Play video</button>
                </div>

                <img src="{{asset('images/bitmap.png')}}" alt="Decorative Pastries"
                    class="rounded-lg shadow-lg ml-auto">
            </div>

        </div>

    </div>

    <!-- seal data -->
    @include('components.seal.index')
    
@endsection