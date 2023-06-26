<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Capture the flag</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite('resources/css/app.css')

</head>
<body class="antialiased bg-zinc-900">
@if (Route::has('login'))
    <div class="relative top-0 right-0 sm:p-6 text-right z-10">
        @auth
            <a href="{{ url('/dashboard') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-red-500">Log
                in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif
<div class="flex justify-center">
    <a href="/">
        <x-application-logo/>
    </a>
</div>
<div class="text-white mt-12">
    <div class="text-4xl font-bold flex justify-center">🚩 Welcome to Capture The Flag! 🚩</div>
    <div class="">
        <div class="flex justify-center px-40 text-2xl my-12" style="text-align: center;">
            Are you ready to put your hacking skills to the test and dive into the thrilling world of cybersecurity?
            Look no
            further! Our CTF challenge is here to take you on an exciting journey where you can test your
            problem-solving
            abilities against mind-bending puzzles and conquer demanding tasks.
        </div>
        <div class="flex justify-center px-40 text-2xl mb-12" style="text-align: center;">
            What is a Capture The Flag (CTF) challenge, you ask? It's a game-like cybersecurity adventure that immerses
            you
            in a series of intriguing puzzles, vulnerabilities, and exploits. Your mission is to navigate through these
            challenges, uncovering hidden flags along the way. Each successful capture earns you points,
            helping you climb up the leaderboard.
        </div>
        <div class="flex justify-center px-40 text-2xl mb-12" style="text-align: center;">
            Whether you're a seasoned cybersecurity professional, a coding enthusiast, or someone curious about the
            world
            of hacking, everyone can dive into the exciting realm of CTF challenges. No prior experience is required!
            Our
            CTF challenge welcomes participants of all skill levels, offering a platform where beginners can learn and
            experts can showcase their expertise. With a wide range of puzzles and tasks that gradually increase in
            complexity, there's something for everyone. So, grab your laptop, bring your curiosity, and embark on an
            exhilarating journey where anyone can join in and enjoy the thrill of CTF.
        </div>
        <div class="flex justify-center px-40 text-2xl " style="text-align: center;">
            Join us now and embark on an extraordinary cybersecurity adventure with our CTF challenge. Are you up for
            the
            challenge? Let the games begin!
        </div>
        <div class="flex justify-center mt-8">
            <a href = "{{ route('register') }}">
                <button class="button-53" role="button">Get started!</button>
            </a>
        </div>
    </div>
</div>
</body>
</html>
