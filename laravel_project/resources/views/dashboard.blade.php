<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
            {{ __('You logged in!') }}
        </h2>
        <h3 class="text-gray-800 leading-tight">
            {{ __('Silakan tekan tombol dibawah') }}
        </h3>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/adminvilla" class="p-6 text-gray-900 text-lg">
                    {{ __("Dashboard") }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
