<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-card text-card-foreground border border-border rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-secondary/10 dark:hover:bg-secondary/10 focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-offset-2 dark:focus:ring-offset-background disabled:opacity-25 transition-all duration-300']) }}>
    {{ $slot }}
</button>
