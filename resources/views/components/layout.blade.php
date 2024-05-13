<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bekar-Akar</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk">
<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img class="w-16" src="{{ Vite::asset('resources/images/bekar-akar.svg') }}" alt="Bekar-Akar">
            </a>
        </div>
        <div class="space-x-6 font-bold">
            <a href="">Jobs</a>
            <a href="">Careers</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>

        @auth
            <div class="space-x-6 font-bold flex items-center">
                <a href="/jobs/create">Post a Job</a>
                <form method="post" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2 text-white bg-red-500 rounded-xl hover:bg-red-700 transition-colors duration-300">Log out</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Sign up</a>
                <a href="/login">Log in</a>
            </div>
        @endguest

    </nav>

    <main class="my-10 max-w-[986px] mx-auto">
        {{  $slot }}
    </main>
</div>
</body>
</html>
