<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary text-primary-foreground border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-primary/90 dark:hover:bg-primary/90 focus:bg-primary/90 dark:focus:bg-primary/90 active:bg-primary/80 dark:active:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background transition-all duration-300']) }}>
    {{ $slot }}
</button>
