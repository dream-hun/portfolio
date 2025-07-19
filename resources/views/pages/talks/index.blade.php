@extends('layouts.main')

@section('title', 'Talks - J Talk Dev')

@section('content')
    <!-- Talks Header -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-background">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 slide-up">
                <h1 class="text-4xl sm:text-5xl font-bold mb-4 text-foreground">Conference <span class="text-gradient">Presentations</span></h1>
                <p class="text-foreground/70 text-lg max-w-2xl mx-auto">
                    Sharing knowledge and experiences at tech conferences around the world.
                </p>
                <div class="w-20 h-0.5 bg-primary/30 mx-auto mt-6"></div>
            </div>

            <div class="mt-12">
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Talk 1 -->
                    <div class="card-elegant slide-up" style="animation-delay: 0.2s;">
                        <div class="flex items-center mb-4">
                            <span class="skill-tag mr-2">React</span>
                            <span class="text-sm text-foreground/60">ReactConf 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Modern State Management in React</h3>
                        <p class="text-foreground/70 mb-4">
                            A deep dive into state management patterns and best practices in React applications.
                        </p>
                        <a href="{{ route('talks.show', 'modern-state-management-in-react') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Presentation
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>

                    <!-- Talk 2 -->
                    <div class="card-elegant slide-up" style="animation-delay: 0.4s;">
                        <div class="flex items-center mb-4">
                            <span class="skill-tag mr-2">Accessibility</span>
                            <span class="text-sm text-foreground/60">WebSummit 2022</span>
                        </div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Building Accessible Web Applications</h3>
                        <p class="text-foreground/70 mb-4">
                            How to ensure your web applications are accessible to all users.
                        </p>
                        <a href="{{ route('talks.show', 'building-accessible-web-applications') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Presentation
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>

                    <!-- Talk 3 -->
                    <div class="card-elegant slide-up" style="animation-delay: 0.6s;">
                        <div class="flex items-center mb-4">
                            <span class="skill-tag mr-2">Laravel</span>
                            <span class="text-sm text-foreground/60">LaraconEU 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Building Modern APIs with Laravel</h3>
                        <p class="text-foreground/70 mb-4">
                            Best practices for designing and implementing RESTful APIs with Laravel.
                        </p>
                        <a href="{{ route('talks.show', 'building-modern-apis-with-laravel') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Presentation
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>

                    <!-- Talk 4 -->
                    <div class="card-elegant slide-up" style="animation-delay: 0.2s;">
                        <div class="flex items-center mb-4">
                            <span class="skill-tag mr-2">JavaScript</span>
                            <span class="text-sm text-foreground/60">JSConf 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Advanced JavaScript Patterns</h3>
                        <p class="text-foreground/70 mb-4">
                            Exploring advanced design patterns and techniques in modern JavaScript.
                        </p>
                        <a href="{{ route('talks.show', 'advanced-javascript-patterns') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Presentation
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>

                    <!-- Talk 5 -->
                    <div class="card-elegant slide-up" style="animation-delay: 0.4s;">
                        <div class="flex items-center mb-4">
                            <span class="skill-tag mr-2">Performance</span>
                            <span class="text-sm text-foreground/60">PerfMatters 2022</span>
                        </div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Web Performance Optimization Techniques</h3>
                        <p class="text-foreground/70 mb-4">
                            Strategies and tools for optimizing web application performance.
                        </p>
                        <a href="{{ route('talks.show', 'web-performance-optimization-techniques') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Presentation
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>

                    <!-- Talk 6 -->
                    <div class="card-elegant slide-up" style="animation-delay: 0.6s;">
                        <div class="flex items-center mb-4">
                            <span class="skill-tag mr-2">DevOps</span>
                            <span class="text-sm text-foreground/60">DevOpsDays 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-foreground mb-3">CI/CD Pipelines for Modern Web Applications</h3>
                        <p class="text-foreground/70 mb-4">
                            Setting up efficient continuous integration and deployment pipelines.
                        </p>
                        <a href="{{ route('talks.show', 'ci-cd-pipelines-for-modern-web-applications') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Presentation
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Upcoming Talks -->
            <div class="mt-20">
                <h2 class="text-2xl font-bold text-foreground mb-8 text-center">Upcoming <span class="text-gradient">Events</span></h2>

                <div class="card-elegant">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <div class="flex items-center mb-4">
                                <span class="skill-tag mr-2">Vue.js</span>
                                <span class="text-sm text-foreground/60">VueConf 2024</span>
                            </div>
                            <h3 class="text-xl font-bold text-foreground mb-2">Building Large-Scale Applications with Vue 3</h3>
                            <p class="text-foreground/70">
                                September 15-17, 2024 • Amsterdam, Netherlands
                            </p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <a href="#" class="btn-hero text-sm px-6 py-2">
                                Get Tickets
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
