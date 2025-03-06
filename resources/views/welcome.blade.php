@extends('layouts.app')

@section('content')
    <div class="relative w-full h-screen bg-cover bg-center flex items-center justify-center" 
         style="background-image: url('{{ asset('images/home-bg.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-5xl font-bold">Cerca e offri servizi edili specifici</h1>
                <p class="mt-4 text-lg">Trova il professionista giusto per il tuo progetto.</p>
                <x-dropdown icon="arrow-down" position="bottom">
                    <x-dropdown.item label="Settings" />
                    <x-dropdown.item label="My Profile" />
                    <x-dropdown placement="right">
                        <x-slot name="trigger">
                            <x-dropdown.item label="Logout" />
                        </x-slot>
                        
                        <x-dropdown.item label="Esci" />
                        <x-dropdown.item label="Entra" />
                    </x-dropdown>
                </x-dropdown>
            </div>
        </div>
    </div>
@endsection
