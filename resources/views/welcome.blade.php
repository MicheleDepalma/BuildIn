@extends('layouts.app')

@section('content')
    <div class="relative w-screen h-[645px] flex items-center">
        <img src="{{ asset('home-bg.jpeg') }}" class="absolute w-full h-full object-cover" alt="Background">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex">
            <div class="text-start text-white pl-[352px] pt-[360px] leading-tight flex flex-col">
                <flux:icon.icona-servizi class="text-red-500"/>
                <h1 class="text-[44px] font-extrabold tracking-tight leading-none">Cerca e offri</h1>
                <h2 class="text-[40px] font-normal leading-none">servizi edili specifici</h2>
                <div class="mt-6 flex justify-center">
                    <div class="h-[98px] bg-white shadow-lg rounded-lg p-4 flex items-center space-x-4 mx-auto">
                        <div class="text-[#a11916] text-sm font-bold uppercase">RICERCA UN SERVIZIO SPECIFICO</div>
                        <flux:dropdown
                            icon="icona-servizi">
                            Tipologie servizio
                        </flux:dropdown>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
