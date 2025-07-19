@extends('layouts.main')

@section('title', 'Talk - J Talk Dev')

@section('content')
    <!-- Talk Header -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-background">
        <div class="max-w-4xl mx-auto">
            <!-- Talk Meta Information -->
            <div class="flex flex-wrap items-center gap-4 mb-6 text-sm text-foreground/60 slide-up">
                <span class="skill-tag">
                    @if(str_contains($slug, 'react'))
                        React
                    @elseif(str_contains($slug, 'javascript'))
                        JavaScript
                    @elseif(str_contains($slug, 'laravel'))
                        Laravel
                    @elseif(str_contains($slug, 'accessible'))
                        Accessibility
                    @elseif(str_contains($slug, 'performance'))
                        Performance
                    @elseif(str_contains($slug, 'ci-cd'))
                        DevOps
                    @else
                        Web Development
                    @endif
                </span>

                <span class="flex items-center">
                    <!-- Calendar Icon -->
                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    @if(str_contains($slug, 'react') || str_contains($slug, 'laravel') || str_contains($slug, 'javascript'))
                        June 15, 2023
                    @else
                        September 22, 2022
                    @endif
                </span>

                <span class="flex items-center">
                    <!-- Location Icon -->
                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    @if(str_contains($slug, 'react'))
                        ReactConf, San Francisco
                    @elseif(str_contains($slug, 'accessible'))
                        WebSummit, Lisbon
                    @elseif(str_contains($slug, 'laravel'))
                        LaraconEU, Amsterdam
                    @elseif(str_contains($slug, 'javascript'))
                        JSConf, Berlin
                    @elseif(str_contains($slug, 'performance'))
                        PerfMatters, San Francisco
                    @elseif(str_contains($slug, 'ci-cd'))
                        DevOpsDays, London
                    @else
                        TechConf, New York
                    @endif
                </span>
            </div>

            <!-- Talk Title -->
            <h1 class="text-4xl sm:text-5xl font-bold mb-6 text-foreground slide-up" style="animation-delay: 0.2s;">
                @if($slug == 'modern-state-management-in-react')
                    Modern State Management in React
                @elseif($slug == 'building-accessible-web-applications')
                    Building Accessible Web Applications
                @elseif($slug == 'building-modern-apis-with-laravel')
                    Building Modern APIs with Laravel
                @elseif($slug == 'advanced-javascript-patterns')
                    Advanced JavaScript Patterns
                @elseif($slug == 'web-performance-optimization-techniques')
                    Web Performance Optimization Techniques
                @elseif($slug == 'ci-cd-pipelines-for-modern-web-applications')
                    CI/CD Pipelines for Modern Web Applications
                @else
                    {{ ucwords(str_replace('-', ' ', $slug)) }}
                @endif
            </h1>

            <!-- Talk Video -->
            <div class="mb-10 rounded-xl overflow-hidden shadow-elegant aspect-video slide-up" style="animation-delay: 0.3s;">
                <div class="w-full h-full bg-secondary/20 flex items-center justify-center">
                    <div class="text-center p-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-primary/50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-foreground/70">Video recording will be available soon</p>
                    </div>
                </div>
            </div>

            <!-- Talk Description -->
            <div class="prose prose-lg max-w-none text-foreground/90 slide-up" style="animation-delay: 0.4s;">
                <p>
                    This is a placeholder for the talk description. In a real application, this would be fetched from a database or CMS.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl.
                </p>

                <h2>What You'll Learn</h2>

                <ul>
                    <li>First important concept covered in this talk</li>
                    <li>Second key technique demonstrated during the presentation</li>
                    <li>Third practical approach to solving common problems</li>
                    <li>Fourth best practice for professional development</li>
                </ul>

                <p>
                    Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl.
                </p>

                <h2>Presentation Slides</h2>

                <div class="not-prose bg-secondary/20 rounded-xl p-8 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-primary/50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <p class="text-foreground/70 mb-4">Presentation slides are available for download</p>
                    <a href="#" class="btn-hero inline-flex items-center px-6 py-2 text-sm">
                        Download Slides (PDF)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                </div>

                <h2>Key Takeaways</h2>

                <p>
                    Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl.
                </p>

                <blockquote>
                    <p>This is an important quote or takeaway from the presentation that summarizes a key concept.</p>
                </blockquote>
            </div>

            <!-- Speaker Bio -->
            <div class="mt-16 p-6 bg-card rounded-xl border border-border flex items-center gap-6 slide-up" style="animation-delay: 0.5s;">
                <img
                    src="{{ asset('assets/About section image.jpeg') }}"
                    alt="Jacques M"
                    class="w-16 h-16 rounded-full object-cover"
                >
                <div>
                    <h3 class="text-lg font-bold text-foreground">Jacques M</h3>
                    <p class="text-foreground/70">
                        Full-Stack Developer and conference speaker with expertise in modern web technologies. Passionate about sharing knowledge and best practices with the developer community.
                    </p>
                </div>
            </div>

            <!-- Related Talks -->
            <div class="mt-16 slide-up" style="animation-delay: 0.6s;">
                <h2 class="text-2xl font-bold text-foreground mb-6">Related Talks</h2>

                <div class="grid gap-8 md:grid-cols-2">
                    <div class="card-elegant group">
                        <div class="flex items-center mb-4">
                            <span class="skill-tag mr-2 text-xs">
                                @if($slug != 'building-accessible-web-applications')
                                    Accessibility
                                @else
                                    React
                                @endif
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            @if($slug != 'building-accessible-web-applications')
                                <a href="{{ route('talks.show', 'building-accessible-web-applications') }}">
                                    Building Accessible Web Applications
                                </a>
                            @else
                                <a href="{{ route('talks.show', 'modern-state-management-in-react') }}">
                                    Modern State Management in React
                                </a>
                            @endif
                        </h3>
                        <p class="text-foreground/70 mb-4">
                            @if($slug != 'building-accessible-web-applications')
                                How to ensure your web applications are accessible to all users.
                            @else
                                A deep dive into state management patterns and best practices in React applications.
                            @endif
                        </p>
                    </div>

                    <div class="card-elegant group">
                        <div class="flex items-center mb-4">
                            <span class="skill-tag mr-2 text-xs">
                                @if($slug != 'web-performance-optimization-techniques')
                                    Performance
                                @else
                                    Laravel
                                @endif
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            @if($slug != 'web-performance-optimization-techniques')
                                <a href="{{ route('talks.show', 'web-performance-optimization-techniques') }}">
                                    Web Performance Optimization Techniques
                                </a>
                            @else
                                <a href="{{ route('talks.show', 'building-modern-apis-with-laravel') }}">
                                    Building Modern APIs with Laravel
                                </a>
                            @endif
                        </h3>
                        <p class="text-foreground/70 mb-4">
                            @if($slug != 'web-performance-optimization-techniques')
                                Strategies and tools for optimizing web application performance.
                            @else
                                Best practices for designing and implementing RESTful APIs with Laravel.
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <!-- Back to Talks -->
            <div class="mt-12 text-center slide-up" style="animation-delay: 0.7s;">
                <a href="{{ route('talks.index') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                    <svg class="h-4 w-4 mr-2 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12,5 19,12 12,19"></polyline>
                    </svg>
                    Back to Talks
                </a>
            </div>
        </div>
    </section>
@endsection
