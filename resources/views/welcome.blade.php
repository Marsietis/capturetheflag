<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Capture the flag</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')


    <meta name="description" content="Capture the flag website">
    <meta name="keywords" content="ctf capturetheflag hacking cybersecurity tasks forensics cryptography game">
    <meta name="authors" content="Martynas Matijošius, Jorė Bendinskaitė, Milija Baranovska, Gabrielė Senavaitytė">
    <meta name="date" content="2023-12-12">
    <meta name="expires" content="2024-12-12">
    <meta name="robots" content="index, follow">

</head>

<body class="antialiased bg-zinc-900">
    <div class="navbar bg-zinc-900">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl hover:bg-zinc-900" href="/">
                <x-application-logo />
            </a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li>
                    @if (Route::has('login'))
                    <div class="relative top-0 right-0 sm:p-6 text-right z-10">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-white">Log
                            in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-white">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
    <div class="hero min-h-screen bg-zinc-800 text-white">
        <div class="hero-content text-center">
            <div class="max-w-l">
                <h1 class="text-7xl font-bold">Welcome to CAPTURE THE FLAG</h1>
                <p class="py-6 text-2xl">Are you ready to put your hacking skills to the test and dive into the
                    thrilling
                    world of
                    cybersecurity?
                </p>
                <a href="{{ route('register') }}">
                    <button class="btn btn-outline btn-error">Get Started</button>
                </a>
            </div>
        </div>
    </div>
    <div class="hero min-h-screen bg-zinc-900 text-white">
        <div class="hero-content flex-col lg:flex-row">
            <div>
                <h1 class="text-5xl font-bold">What is a Capture The Flag (CTF), you ask?</h1>
                <p class="py-6"> It's a game-like cybersecurity adventure that immerses you
                    in a series of intriguing puzzles, vulnerabilities, and exploits. Your mission is to navigate
                    through
                    these
                    challenges, uncovering hidden flags along the way. Each successful capture earns you points,
                    helping you climb up the leaderboard.</p>
                <a href="{{ route('register') }}">
                    <button class="btn btn-outline btn-error">Get Started</button>
                </a>
            </div>
        </div>
    </div>
    <div class="hero min-h-screen bg-zinc-800 text-white">
        <div class="hero-content text-center">
            <div class="max-w-l">
                <h1 class="text-5xl font-bold">Who can play?</h1>
                <p class="py-6 text-2xl">Whether you're a seasoned cybersecurity professional, a coding enthusiast, or
                    someone curious about the world of hacking, everyone can dive into the exciting realm of CTF
                    challenges.
                    No prior experience is required!
                </p>
                <p class="text-4xl">Join us now and embark on an extraordinary cybersecurity adventure with our CTF
                    challenge. Are you up for
                    the
                    challenge? Let the games begin!</p>
                <a href="{{ route('register') }}">
                    <button class="btn btn-outline btn-error mt-10">Play now</button>
                </a>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</body>

</html>