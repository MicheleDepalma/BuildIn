<nav class="bg-white w-full fixed top-0 z-50 h-20 shadow-lg shadow-gray-400/50">
    <div class=" px-6 mx-auto py-4 flex justify-between items-center h-full ml-[140px]">
        <div class="flex items-center gap-x-8">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="text-2xl font-bold text-primary flex gap-x-8">
            <img src="{{ asset('svg/Logo - BuildIn.svg') }}" alt="BuildIn Logo" class="h-10">
        </a>
        <!-- Dropdown Tipologie Servizi -->
        <flux:dropdown>
            <flux:button 
                icon-trailing="chevron-down"
                class="bg-white text-[#232323] border-none hover:text-[#514f8d]"
                >Tipologie Servizi
            </flux:button>

            <flux:menu>
            @foreach (config('BuildIn.Tipologie_servizi') as $category => $subCategories)
                <flux:menu.submenu
                    class="hover:text-[#514f8d]!"
                    heading="{{ $category }}"
                    >
                    @foreach ($subCategories as $subCategory => $elements)
                        <flux:menu.submenu heading="{{ $subCategory }}">
                            @foreach ($elements as $element)
                                <flux:menu.item>{{ $element }}</flux:menu.item>
                            @endforeach
                        </flux:menu.submenu>
                    @endforeach
                </flux:menu.submenu>
            @endforeach
        </flux:menu>
        </flux:dropdown>
        <!-- Dropdown Aziende -->

        <flux:dropdown>
            <flux:button 
                icon-trailing="chevron-down"
                class="bg-white text-[#232323] border-none hover:text-[#514f8d]"
                >Aziende
            </flux:button>

            <flux:menu>
                <flux:menu.item class="hover:text-[#514f8d]">Artedile Due</flux:menu.item>
                <flux:menu.item class="hover:text-[#514f8d]">Bassetti Ristrutturazione Casa</flux:menu.item>
                <flux:menu.item class="hover:text-[#514f8d]">Domus Ristrutturazioni</flux:menu.item>
                <flux:menu.item class="hover:text-[#514f8d]">FaberExpert Architetti</flux:menu.item>
                <flux:menu.item class="hover:text-[#514f8d]">Rizzuti Costruzioni</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </div>
        <!-- Pulsanti di autenticazione -->
        <div class="flex items-center space-x-4">
            <flux:button
                href="{{ route('login') }}"
                class="bg-[#39386f] text-[#ffff] border-none hover:bg-[#514f8d]"
            >Accedi
            </flux:button>
            <flux:button
                href="{{ route('register') }}"
                class="bg-[#f1f0ff] text-[#252451] border-none hover:bg-[#ffff]"
            >Registrati
            </flux:button>
        </div>
    </div>
</nav>

<div class="h-10"></div>
