@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-popover text-popover-foreground'])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$width = match ($width) {
    '48' => 'w-48',
    default => $width,
};
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition-all duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition-all duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-md {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-border {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
