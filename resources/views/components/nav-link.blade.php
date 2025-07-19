@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-primary text-sm font-medium leading-5 text-foreground focus:outline-none focus:border-primary/80 transition-colors duration-300'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-muted-foreground hover:text-foreground hover:border-border focus:outline-none focus:text-foreground focus:border-border transition-colors duration-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
