<nav class="fixed bottom-0 w-full bg-white border-t border-gray-300">
    <div class="flex justify-around py-2">
        <x-nav-link :href="route('dashboard.events')" :active="request()->is('dashboard*')" wire:navigate>
            <x-heroicon-c-home class="w-6 h-6"/>
        </x-nav-link>
        <x-nav-link :href="route('events.index')" :active="request()->is('events*')" wire:navigate>
            <x-heroicon-c-calendar class="w-6 h-6"/>
        </x-nav-link>
        <x-nav-link :href="route('groups.index')" :active="request()->is('groups*')" wire:navigate>
            <x-heroicon-c-user-group class="w-6 h-6"/>
        </x-nav-link>
    </div>
</nav>
