@extends('layouts.main')

@section('title', 'Home - J Talk Dev')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div
            class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('assets/Hero.png') }}')"
        ></div>
        <div class="absolute inset-0" style="background: var(--gradient-hero)"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold mb-6">
                    <span class="text-primary">Hi, I'm </span>
                    <span class="text-gradient">Jacques M</span>
                </h1>

                <p class="text-xl sm:text-2xl text-primary/90 mb-8 max-w-3xl mx-auto">
                    Full-Stack Software Engineer passionate about creating innovative solutions
                    and building exceptional digital experiences
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                    <a href="{{ route('talks.index') }}" class="btn-hero">
                        View My Talks
                    </a>

                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center px-8 py-3 rounded-lg border border-primary/30 text-primary hover:border-primary/60 hover:bg-primary/5 transition-all duration-300">
                       Get In Touch
                    </a>
                </div>

                <!-- Social Links -->
                <div class="flex items-center justify-center space-x-6 mb-16">
                    <a
                        href="https://github.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-primary/70 hover:text-primary transition-all duration-300 p-2 hover:scale-110 transform"
                    >
                        <!-- Github Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path
                                d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.387.6.113.82-.263.82-.582v-2.165c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.082-.729.082-.729 1.205.086 1.84 1.237 1.84 1.237 1.07 1.835 2.807 1.304 3.492.997.108-.775.42-1.305.762-1.605-2.665-.3-5.466-1.334-5.466-5.932 0-1.31.467-2.382 1.235-3.222-.123-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.3 1.23a11.5 11.5 0 0 1 3-.405c1.02.005 2.045.137 3 .405 2.29-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.873.12 3.176.77.84 1.233 1.912 1.233 3.222 0 4.61-2.803 5.628-5.475 5.922.43.372.823 1.102.823 2.222v3.293c0 .322.218.699.825.58C20.565 21.796 24 17.3 24 12c0-6.63-5.37-12-12-12z" />
                        </svg>
                    </a>

                    <a
                        href="https://linkedin.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-primary/70 hover:text-primary transition-all duration-300 p-2 hover:scale-110 transform"
                    >
                        <!-- Linkedin Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.77 0 5-2.24 5-5v-14c0-2.76-2.23-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.3c-.97 0-1.75-.79-1.75-1.75s.78-1.75 1.75-1.75 1.75.79 1.75 1.75-.78 1.75-1.75 1.75zm13.5 11.3h-3v-5.6c0-1.34-.03-3.06-1.87-3.06-1.87 0-2.16 1.46-2.16 2.96v5.7h-3v-10h2.88v1.36h.04c.4-.75 1.36-1.54 2.8-1.54 3 0 3.56 1.97 3.56 4.53v5.65z" />
                        </svg>
                    </a>

                    <a
                        href="mailto:alex@example.com"
                        class="text-primary/70 hover:text-primary transition-all duration-300 p-2 hover:scale-110 transform"
                    >
                        <!-- Mail Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path d="M4 4h16v16H4V4zm8 8l8-5H4l8 5zm0 2l-8-5v10h16V9l-8 5z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Sections -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-card">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">Featured <span class="text-gradient">Content</span></h2>
                <p class="text-foreground/70 text-lg max-w-2xl mx-auto">
                    Check out some of my latest work and insights
                </p>
                <div class="w-20 h-0.5 bg-primary/30 mx-auto mt-6"></div>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                <!-- Featured Blog -->
                <div class="card-elegant slide-up" style="animation-delay: 0.2s;">
                    <h3 class="text-xl font-bold text-foreground mb-3">Latest Blog Posts</h3>
                    <p class="text-foreground/70 mb-4">
                        Thoughts, tutorials, and insights about software development and technology.
                    </p>
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                        Read the Blog
                        <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12,5 19,12 12,19"></polyline>
                        </svg>
                    </a>
                </div>

                <!-- Featured Talks -->
                <div class="card-elegant slide-up" style="animation-delay: 0.4s;">
                    <h3 class="text-xl font-bold text-foreground mb-3">Conference Talks</h3>
                    <p class="text-foreground/70 mb-4">
                        Presentations and speaking engagements at tech conferences around the world.
                    </p>
                    <a href="{{ route('talks.index') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                        View Talks
                        <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12,5 19,12 12,19"></polyline>
                        </svg>
                    </a>
                </div>

                <!-- Featured Projects -->
                <div class="card-elegant slide-up" style="animation-delay: 0.6s;">
                    <h3 class="text-xl font-bold text-foreground mb-3">Recent Projects</h3>
                    <p class="text-foreground/70 mb-4">
                        A showcase of my latest work and the technologies I've been using.
                    </p>
                    <a href="{{ route('projects.index') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                        Explore Projects
                        <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12,5 19,12 12,19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
