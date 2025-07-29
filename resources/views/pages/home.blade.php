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

                <p class="text-xl sm:text-2xl text-white mb-8 max-w-3xl mx-auto">
                    Full-Stack Software Engineer passionate about creating innovative solutions
                    and building exceptional digital experiences
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12 text-white">
                    <a href="{{ route('talks.index') }}" class="btn-hero">
                        View My Talks
                    </a>

                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center px-8 py-3 rounded-lg border border-white text-primary hover:border-primary/60 hover:bg-primary/5 transition-all duration-300">
                       Get In Touch
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
