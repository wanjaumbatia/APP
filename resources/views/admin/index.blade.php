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


                <div class="font-semibold text-4xl bg-gray-200 text-center text-gray-700 py-1 px-6 mb-0">
                    Admin Panel
                </div>

                <div class="container mx-auto py-8">
                    <div class="grid grid-cols-3 gap-4 ">

                        <a href="{{route('admin.users.index')}}" class="text-white rounded-md p-20 font-bold focus:font-extrabold bg-teal-400 text-center hover:bg-teal-700">
                            Users
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
