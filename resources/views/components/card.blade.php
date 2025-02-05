@props(['title', 'headerClasses' => ''])

<div {{ $attributes->merge(['class' => 'bg-white shadow-md rounded-lg overflow-hidden']) }}>
    @if(isset($title))
        <div class="px-4 py-3">
            <h3 class="text-lg font-semibold">{{ $title }}</h3>
        </div>
    @endif
    <div class="p-4">
        {{ $slot }}
    </div>
</div>
