@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-primary text-start text-base font-medium text-primary bg-primary/10 focus:outline-none focus:text-primary/90 focus:bg-primary/20 focus:border-primary/80 transition-colors duration-300'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-muted-foreground hover:text-foreground hover:bg-muted hover:border-border focus:outline-none focus:text-foreground focus:bg-muted focus:border-border transition-colors duration-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
