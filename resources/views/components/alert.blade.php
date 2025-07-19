@props([
    'type' => 'success',
    'dismissible' => true,
    'show' => false
])

@php
    $classes = match ($type) {
        'success' => 'bg-green-50 text-green-800 border-green-200 dark:bg-green-900/50 dark:text-green-200 dark:border-green-800/30',
        'error' => 'bg-red-50 text-red-800 border-red-200 dark:bg-red-900/50 dark:text-red-200 dark:border-red-800/30',
        'warning' => 'bg-yellow-50 text-yellow-800 border-yellow-200 dark:bg-yellow-900/50 dark:text-yellow-200 dark:border-yellow-800/30',
        'info' => 'bg-blue-50 text-blue-800 border-blue-200 dark:bg-blue-900/50 dark:text-blue-200 dark:border-blue-800/30',
        default => 'bg-gray-50 text-gray-800 border-gray-200 dark:bg-gray-900/50 dark:text-gray-200 dark:border-gray-800/30',
    };

    $iconClasses = match ($type) {
        'success' => 'text-green-500 dark:text-green-400',
        'error' => 'text-red-500 dark:text-red-400',
        'warning' => 'text-yellow-500 dark:text-yellow-400',
        'info' => 'text-blue-500 dark:text-blue-400',
        default => 'text-gray-500 dark:text-gray-400',
    };
@endphp

<div
    x-data="{ show: @js($show) }"
    x-show="show"
    x-transition:enter="transition-all duration-300"
    x-transition:enter-start="opacity-0 transform translate-y-4"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    x-transition:leave="transition-all duration-200"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-y-4"
    @if($dismissible)
        x-init="setTimeout(() => { show = false }, 5000)"
    @endif
    {{ $attributes->merge(['class' => "border rounded-md p-4 mb-4 flex items-start {$classes}"]) }}
    style="display: none;"
>
    <div class="flex-shrink-0 mr-3">
        @if($type === 'success')
            <svg class="h-5 w-5 {{ $iconClasses }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
        @elseif($type === 'error')
            <svg class="h-5 w-5 {{ $iconClasses }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
            </svg>
        @elseif($type === 'warning')
            <svg class="h-5 w-5 {{ $iconClasses }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
        @elseif($type === 'info')
            <svg class="h-5 w-5 {{ $iconClasses }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
        @else
            <svg class="h-5 w-5 {{ $iconClasses }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
        @endif
    </div>
    <div class="flex-1">
        {{ $slot }}
    </div>
    @if($dismissible)
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button
                    type="button"
                    @click="show = false"
                    class="inline-flex rounded-md p-1.5 {{ $iconClasses }} hover:bg-opacity-10 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-transparent focus:ring-{{ substr($type, 0, strpos($type, '-') ?: strlen($type)) }}-500"
                >
                    <span class="sr-only">Dismiss</span>
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
</div>
