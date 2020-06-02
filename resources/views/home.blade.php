@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:min-w-full md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col h-full break-words bg-white border border-2 rounded shadow-md">

        </div>
    </div>
@endsection
