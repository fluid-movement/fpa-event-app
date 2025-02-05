<nav class="h-full bg-white border-r border-gray-300">
    <div class="flex flex-col items-center py-4">
        <x-nav-link :href="route('dashboard.events')" :active="request()->is('dashboard*')" wire:navigate>
            <x-heroicon-c-home class="w-10 h-10"/>
        </x-nav-link>
        <x-nav-link :href="route('events.index')" :active="request()->is('events*')" wire:navigate>
            <x-heroicon-c-calendar class="w-10 h-10"/>
        </x-nav-link>
        <x-nav-link :href="route('groups.index')" :active="request()->is('groups*')" wire:navigate>
            <x-heroicon-c-user-group class="w-10 h-10"/>
        </x-nav-link>
    </div>
</nav>
