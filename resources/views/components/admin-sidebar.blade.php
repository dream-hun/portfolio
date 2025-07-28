<div class="min-h-screen w-64 bg-sidebar text-sidebar-foreground border-r border-sidebar-border">
    <div class="p-4 border-b border-sidebar-border">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-2">
            <x-application-logo class="block h-9 w-auto fill-current text-sidebar-primary" />
            <span class="text-xl font-semibold">Admin</span>
        </a>
    </div>

    <nav class="mt-5 px-2">
        <div class="space-y-1">
            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}" wire:navigate
               class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('dashboard') ? 'bg-sidebar-primary text-sidebar-primary-foreground' : 'text-sidebar-foreground hover:bg-sidebar-accent hover:text-sidebar-accent-foreground' }}">
                <svg class="mr-3 h-5 w-5 {{ request()->routeIs('dashboard') ? 'text-sidebar-primary-foreground' : 'text-sidebar-foreground group-hover:text-sidebar-accent-foreground' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Dashboard
            </a>

            <!-- Settings -->
            <a href="{{ route('settings.index') }}" wire:navigate
               class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('settings.*') ? 'bg-sidebar-primary text-sidebar-primary-foreground' : 'text-sidebar-foreground hover:bg-sidebar-accent hover:text-sidebar-accent-foreground' }}">
                <svg class="mr-3 h-5 w-5 {{ request()->routeIs('settings.*') ? 'text-sidebar-primary-foreground' : 'text-sidebar-foreground group-hover:text-sidebar-accent-foreground' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Settings
            </a>

            <!-- Categories -->
            <a href="{{ route('categories.index') }}" wire:navigate
               class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('categories.*') ? 'bg-sidebar-primary text-sidebar-primary-foreground' : 'text-sidebar-foreground hover:bg-sidebar-accent hover:text-sidebar-accent-foreground' }}">
                <svg class="mr-3 h-5 w-5 {{ request()->routeIs('categories.*') ? 'text-sidebar-primary-foreground' : 'text-sidebar-foreground group-hover:text-sidebar-accent-foreground' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                Categories
            </a>

            <!-- Posts -->
            <a href="{{ route('dashboard') }}"
               class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-sidebar-foreground hover:bg-sidebar-accent hover:text-sidebar-accent-foreground">
                <svg class="mr-3 h-5 w-5 text-sidebar-foreground group-hover:text-sidebar-accent-foreground" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                Posts
            </a>

            <!-- Tags -->
            <a href="{{ route('dashboard') }}"
               class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-sidebar-foreground hover:bg-sidebar-accent hover:text-sidebar-accent-foreground">
                <svg class="mr-3 h-5 w-5 text-sidebar-foreground group-hover:text-sidebar-accent-foreground" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                </svg>
                Tags
            </a>

            <!-- Contacts -->
            <a href="{{ route('dashboard') }}"
               class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-sidebar-foreground hover:bg-sidebar-accent hover:text-sidebar-accent-foreground">
                <svg class="mr-3 h-5 w-5 text-sidebar-foreground group-hover:text-sidebar-accent-foreground" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Contacts
            </a>
        </div>
    </nav>
</div>
