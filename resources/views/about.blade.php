<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>
    <style>
        p {
            padding: 1rem;
        }
    </style>
    <div class="text-white mt-20 mx-20 mb-40">

        <div>
            <div class="text-2xl mt-40 font-bold">Contact:</div>
            <a href="mailto:martynas.matijosius@knf.stud.vu.lt" class="font-bold">martynas.matijosius@knf.stud.vu.lt</a>
        </div>
        <div class="text-xl mt-20">Database scheme:</div>
        <img src="db_scheme.png" alt="database scheme" width="800">

        <div class="text-xl mt-20">Sitemap:</div>
        <img src="sitemap.png" alt="sitemap" width="800">
    </div>
</x-app-layout>