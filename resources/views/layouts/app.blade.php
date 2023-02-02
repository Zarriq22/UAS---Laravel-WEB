<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            #menu-toggle span {
                transition: all 0.8s;
            }
            #menu-toggle span:nth-child(2) {
                transform-origin: 0 0;
            }

            #menu-toggle span:nth-child(4) {
                transform-origin: 0 100%;
            }

            #menu-toggle input:checked ~ span:nth-child(2) {
                transform: rotate(46deg);
            }

            #menu-toggle input:checked ~ span:nth-child(3) {
                transform: scale(0);
            }

            #menu-toggle input:checked ~ span:nth-child(4) {
                transform: rotate(-46deg);
            }

            .dropdown-btn {
                background-color: #00cbfe;
                color: white;
                padding: 6px; 
                font-size: 14px; 
                border: solid;
                border-radius: 20px;
                cursor: pointer;
            }

            .dropdown-menu {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #00cbfe; 
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #ffffff
            }

            .dropdown-menu:hover .dropdown-content {
                display: block;
            }

            .dropdown-menu:hover .dropdown-btn {
                background-color: #00cbfe;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
