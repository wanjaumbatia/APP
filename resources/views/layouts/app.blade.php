<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e08a4b84aa.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        .sidebar {
            position: fixed;
            left: -250px;
            width: 250px;
            height: 100%;
            transition: all .5s;
            background: #042331;
        }

        .sidebar header {
            font-size: 22px;
            color: white;
            text-align: center;
            line-height: 70px;
            background: #063146;
            margin-top: 70px;
            user-select: none;
        }

        .sidebar ul a {
            display: block;
            height: 100%;
            width: 100%;
            line-height: 65px;
            color: white;
            padding-left: 40px;
            box-sizing: border-box;
            border-top: 1px solid rgba(255, 255, 255, .1);
            border-top: 1px solid black;
            transition: .4s;
        }

        ul li:hover a {
            padding-left: 50px;
        }

        .sidebar ul a i {
            margin-right: 16px;
            
        }

        #check {
            display: none;
        }

        label #btn , label #cancel {
            position: absolute;
            cursor: pointer;
            background: #042331;
            border-radius: 3px;
        }

        label #btn {
            left: 40px;
            top: 5px;
            font-size: 35px;
            color: white;
            padding: 6px 12px;
            transition: all .5s;
        }

        label #cancel {
            z-index: 1111;
            left: -195px;
            top: 17px;
            font-size: 30px;
            color: #0a5275;
            padding: 4px 9px;
            transition: all .5s ease;
        }

        #check:checked ~ .sidebar{
            left: 0;

        }

        #check:checked ~ label #btn{
            left: 250px;
            opacity: 0;
            pointer-events: none;
        }
        #check:checked ~ label #cancel{
            left: 195px;
        }

        #check:checked ~ section{
            margin-left: 250px;
        }

        .mycolor{
            background: #042331;
        }
        section{
            background-position: center;
            background-size: cover;
            height: 100vh;
            transition: all .5s;
        }
    </style>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <!--<nav class="bg-teal-500 shadow py-3">
            <div class="container mx-auto px-6 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="flex-1 text-right">
                        @guest
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}"
                               class="no-underline hover:underline text-gray-300 text-sm p-3"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>-->

        <!-- SideBar Menu -->
        @guest
        @else
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>
            <div class="sidebar">
                <header>
                            
                    {{ Auth::user()->name }}
                </header>
                    <ul>
                        <li><a href="/home"><i class="fas fa-link"></i>Dashboard</a></li>                           
                        <li><a href="#"><i class="fas fa-link"></i>Company</a></li>   
                        <li><a href="#"><i class="fas fa-link"></i>Customers</a></li>  
                        <li><a href="/hr"><i class="fas fa-link"></i>HR</a></li>  
                        <li><a href="#"><i class="fas fa-link"></i>Work</a></li>  
                        <li><a href="#"><i class="fas fa-link"></i>Finance</a></li>  
                        <li><a href="#"><i class="fas fa-link"></i>Products</a></li>  
                        <li><a href="#"><i class="fas fa-link"></i>Reports</a></li>  
                        <li><a href="#"><i class="fas fa-link"></i>Assets</a></li>  
                        <li><a href="#"><i class="fas fa-link"></i>Admin</a></li>  
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form></li>
                    </ul>
            </div>
        @endguest
        <!-- End SideBar Menu -->        

        <section>
            @yield('content')
        </section>


    </div>
</body>
</html>
