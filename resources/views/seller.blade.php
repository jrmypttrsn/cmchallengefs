<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seller Application</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
    @livewireStyles
</head>
<body class="antialiased font-sans overflow-hidden" style="background-image: url('/images/bg-pattern.png')">
<nav class="bg-white-200 text-gray-800 shadow-md md:shadow-none">
    <div class="mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="cm-script block"></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="max-w-7xl mx-auto py-12 sm:py-0 sm:px-6 lg:px-8">
    <div class="flex items-center justify-center md:min-h-screen">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white overflow-hidden md:shadow md:rounded-lg form">
                <livewire:seller-application-form />
            </div>
        </div>
    </div>
</div>

@livewireScripts
</body>
</html>
