<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seller Application</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="antialiased font-sans overflow-hidden">
<nav class="bg-white border-b">
    <div class="relative flex items-center justify-between h-16">
        <a href="#" class="cm-script">
        </a>
    </div>
</nav>
<div class="max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
    <div class="flex items-center justify-center min-h-screen">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg form">
                <div class="px-4 py-5 sm:p-6">
                    <livewire:seller-application-form/>
                </div>
            </div>
        </div>
    </div>
</div>

@livewireScripts
</body>
</html>
