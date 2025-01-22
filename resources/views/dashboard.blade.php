<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            </div>
        </div>
    </div>

    <!-- <div class="flex items-center justify-center min-h-screen relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/dashboard.png'); filter: blur(2px);"></div>
        <div class="absolute inset-0 bg-black opacity-30"></div>
            <h1>This is home page</h1>
    </div> -->

</x-app-layout>
