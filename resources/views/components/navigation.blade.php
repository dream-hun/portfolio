<nav
    x-data="{
        isOpen: false,
        isScrolled: false,
        darkMode: localStorage.getItem('darkMode') === 'true' ||
                 (!localStorage.getItem('darkMode') &&
                  window.matchMedia('(prefers-color-scheme: dark)').matches)
    }"
    x-init="
        window.addEventListener('scroll', () => {
            isScrolled = window.scrollY > 50
        });

        $watch('darkMode', val => {
            localStorage.setItem('darkMode', val);
            if (val) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });

        // Initialize dark mode
        if (darkMode) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    "
    :class="isScrolled ? 'bg-card/90 backdrop-blur-md border-b border-border' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    style="transition: var(--transition-smooth);"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2 group">
                <!-- Logo SVG -->
                <div class="h-9 w-9 rounded-full bg-primary/10 flex items-center justify-center border border-primary/20 group-hover:border-primary/40 transition-all duration-300">
                    <span class="text-lg font-bold text-gradient">J</span>
                </div>

                <span class="text-xl font-bold text-gradient">J Talk Dev</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-foreground/80 hover:text-primary transition-colors duration-300">Home</a>
                <a href="{{ route('blog.index') }}" class="text-foreground/80 hover:text-primary transition-colors duration-300">Blog</a>
                <a href="{{ route('talks.index') }}" class="text-foreground/80 hover:text-primary transition-colors duration-300">Talks</a>
                <a href="{{ route('projects.index') }}" class="text-foreground/80 hover:text-primary transition-colors duration-300">Projects</a>
                <a href="{{ route('contact') }}" class="text-foreground/80 hover:text-primary transition-colors duration-300">Contact</a>

                <!-- Theme Toggle Button -->
                <button
                    @click="darkMode = !darkMode"
                    class="p-2 rounded-full bg-secondary/30 text-foreground hover:bg-secondary/50 transition-colors duration-300"
                    aria-label="Toggle dark mode"
                >
                    <!-- Moon icon (shown in light mode) -->
                    <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                    <!-- Sun icon (shown in dark mode) -->
                    <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center space-x-4">
                <!-- Theme Toggle Button (Mobile) -->
                <button
                    @click="darkMode = !darkMode"
                    class="p-2 rounded-full bg-secondary/30 text-foreground hover:bg-secondary/50 transition-colors duration-300"
                    aria-label="Toggle dark mode"
                >
                    <!-- Moon icon (shown in light mode) -->
                    <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                    <!-- Sun icon (shown in dark mode) -->
                    <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>

                <button
                    @click="isOpen = !isOpen"
                    class="p-2 rounded-md text-foreground/80 hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary/30"
                    aria-label="Toggle menu"
                >
                    <template x-if="isOpen">
                        <!-- Close icon -->
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </template>
                    <template x-if="!isOpen">
                        <!-- Menu icon -->
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </template>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="md:hidden absolute top-16 left-0 right-0 bg-card/95 backdrop-blur-md border-b border-border shadow-elegant"
        >
            <div class="px-4 py-6 space-y-4">
                <a href="{{ route('home') }}" class="block py-2 text-foreground/80 hover:text-primary transition-colors duration-300">Home</a>
                <a href="{{ route('blog.index') }}" class="block py-2 text-foreground/80 hover:text-primary transition-colors duration-300">Blog</a>
                <a href="{{ route('talks.index') }}" class="block py-2 text-foreground/80 hover:text-primary transition-colors duration-300">Talks</a>
                <a href="{{ route('projects.index') }}" class="block py-2 text-foreground/80 hover:text-primary transition-colors duration-300">Projects</a>
                <a href="{{ route('contact') }}" class="block py-2 text-foreground/80 hover:text-primary transition-colors duration-300">Contact</a>
            </div>
        </div>
    </div>
</nav>
