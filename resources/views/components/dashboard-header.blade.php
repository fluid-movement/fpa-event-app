<x-subheading>
    <x-subheading-title>
        {{ __('Hi there :name!', ['name' => Auth::user()->name]) }}
    </x-subheading-title>
    <div class="flex ">
        <x-nav-link
            :href="route('dashboard.events')"
            :active="request()->routeIs('dashboard.events')"
        >
            <x-heroicon-c-calendar class="w-5 h-5 mr-2" />
            {{ __('See my Events') }}
        </x-nav-link>
        <x-nav-link
            :href="route('dashboard.groups')"
            :active="request()->routeIs('dashboard.groups')"
        >
            <x-heroicon-c-user-group class="w-5 h-5 mr-2" />
            {{ __('My Crews') }}
        </x-nav-link>
        <x-nav-link
            :href="route('dashboard.profile')"
            :active="request()->routeIs('dashboard.profile')"
        >
            <x-heroicon-c-cog class="w-5 h-5 mr-2" />
            {{ __('Profile') }}
        </x-nav-link>
    </div>
</x-subheading>
