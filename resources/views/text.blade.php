@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:min-w-full md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <!-- Navigation Bar-->

                <div class="font-semibold bg-gray-200 text-gray-700 py-3  mx-0">
                    Home
                </div>

                <div class="w-full p-6">
                    <p class="text-gray-700">
                        <a href="/home" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                            Home
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
