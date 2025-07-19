@extends('layouts.main')

@section('title', 'Project - J Talk Dev')

@section('content')
    <!-- Project Header -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-background">
        <div class="max-w-4xl mx-auto">
            <!-- Project Meta Information -->
            <div class="flex flex-wrap items-center gap-4 mb-6 text-sm text-foreground/60 slide-up">
                <span class="skill-tag">
                    @if(str_contains($slug, 'ecommerce'))
                        E-Commerce
                    @elseif(str_contains($slug, 'fitness'))
                        Mobile App
                    @elseif(str_contains($slug, 'content-management'))
                        CMS
                    @elseif(str_contains($slug, 'task'))
                        Productivity
                    @elseif(str_contains($slug, 'travel'))
                        Mobile App
                    @elseif(str_contains($slug, 'portfolio'))
                        Open Source
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
                    @if(str_contains($slug, 'ecommerce') || str_contains($slug, 'content-management'))
                        Completed: March 2023
                    @elseif(str_contains($slug, 'fitness') || str_contains($slug, 'task'))
                        Completed: August 2023
                    @elseif(str_contains($slug, 'travel'))
                        Completed: November 2023
                    @elseif(str_contains($slug, 'portfolio'))
                        Completed: January 2024
                    @else
                        Completed: 2023
                    @endif
                </span>

                <div class="flex items-center space-x-2">
                    @if(str_contains($slug, 'ecommerce'))
                        <span class="skill-tag text-xs">Laravel</span>
                        <span class="skill-tag text-xs">Vue.js</span>
                    @elseif(str_contains($slug, 'fitness'))
                        <span class="skill-tag text-xs">React Native</span>
                        <span class="skill-tag text-xs">Firebase</span>
                    @elseif(str_contains($slug, 'content-management'))
                        <span class="skill-tag text-xs">Laravel</span>
                        <span class="skill-tag text-xs">Alpine.js</span>
                        <span class="skill-tag text-xs">Tailwind</span>
                    @elseif(str_contains($slug, 'task'))
                        <span class="skill-tag text-xs">React</span>
                        <span class="skill-tag text-xs">Node.js</span>
                        <span class="skill-tag text-xs">MongoDB</span>
                    @elseif(str_contains($slug, 'travel'))
                        <span class="skill-tag text-xs">Flutter</span>
                        <span class="skill-tag text-xs">Firebase</span>
                    @elseif(str_contains($slug, 'portfolio'))
                        <span class="skill-tag text-xs">TypeScript</span>
                        <span class="skill-tag text-xs">Next.js</span>
                    @else
                        <span class="skill-tag text-xs">Web</span>
                        <span class="skill-tag text-xs">JavaScript</span>
                    @endif
                </div>
            </div>

            <!-- Project Title -->
            <h1 class="text-4xl sm:text-5xl font-bold mb-6 text-foreground slide-up" style="animation-delay: 0.2s;">
                @if($slug == 'ecommerce-dashboard')
                    E-Commerce Dashboard
                @elseif($slug == 'fitness-tracker-app')
                    Fitness Tracker App
                @elseif($slug == 'content-management-system')
                    Content Management System
                @elseif($slug == 'task-management-platform')
                    Task Management Platform
                @elseif($slug == 'travel-companion-app')
                    Travel Companion App
                @elseif($slug == 'developer-portfolio-template')
                    Developer Portfolio Template
                @else
                    {{ ucwords(str_replace('-', ' ', $slug)) }}
                @endif
            </h1>

            <!-- Project Image Gallery -->
            <div class="mb-10 slide-up" style="animation-delay: 0.3s;">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="md:col-span-2 rounded-xl overflow-hidden shadow-elegant">
                        <img
                            src="{{ asset('assets/projects/project-main.jpg') }}"
                            alt="Project main image"
                            class="w-full h-auto object-cover"
                        >
                    </div>
                    <div class="grid grid-rows-2 gap-4">
                        <div class="rounded-xl overflow-hidden shadow-elegant">
                            <img
                                src="{{ asset('assets/projects/project-detail-1.jpg') }}"
                                alt="Project detail image 1"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <div class="rounded-xl overflow-hidden shadow-elegant">
                            <img
                                src="{{ asset('assets/projects/project-detail-2.jpg') }}"
                                alt="Project detail image 2"
                                class="w-full h-full object-cover"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Links -->
            <div class="flex flex-wrap gap-4 mb-10 slide-up" style="animation-delay: 0.35s;">
                <a href="https://github.com" target="_blank" class="btn-hero inline-flex items-center px-6 py-2 text-sm">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                    View on GitHub
                </a>

                <a href="#" target="_blank" class="inline-flex items-center px-6 py-2 rounded-lg border border-primary/30 text-primary hover:border-primary/60 hover:bg-primary/5 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    Live Demo
                </a>
            </div>

            <!-- Project Description -->
            <div class="prose prose-lg max-w-none text-foreground/90 slide-up" style="animation-delay: 0.4s;">
                <p>
                    This is a placeholder for the project description. In a real application, this would be fetched from a database or CMS.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl.
                </p>

                <h2>Project Overview</h2>

                <p>
                    Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl.
                </p>

                <h2>Key Features</h2>

                <ul>
                    <li>First major feature of this project</li>
                    <li>Second important functionality implemented</li>
                    <li>Third innovative solution developed</li>
                    <li>Fourth technical challenge overcome</li>
                </ul>

                <h2>Technologies Used</h2>

                <p>
                    This project was built using the following technologies:
                </p>

                <ul>
                    @if(str_contains($slug, 'ecommerce'))
                        <li><strong>Frontend:</strong> Vue.js, Tailwind CSS</li>
                        <li><strong>Backend:</strong> Laravel, MySQL</li>
                        <li><strong>DevOps:</strong> Docker, GitHub Actions</li>
                    @elseif(str_contains($slug, 'fitness'))
                        <li><strong>Frontend:</strong> React Native</li>
                        <li><strong>Backend:</strong> Firebase (Firestore, Authentication, Cloud Functions)</li>
                        <li><strong>APIs:</strong> Google Fit, Apple HealthKit</li>
                    @elseif(str_contains($slug, 'content-management'))
                        <li><strong>Frontend:</strong> Alpine.js, Tailwind CSS</li>
                        <li><strong>Backend:</strong> Laravel, MySQL</li>
                        <li><strong>Media:</strong> Laravel Media Library</li>
                    @elseif(str_contains($slug, 'task'))
                        <li><strong>Frontend:</strong> React, Redux, Material UI</li>
                        <li><strong>Backend:</strong> Node.js, Express, MongoDB</li>
                        <li><strong>Real-time:</strong> Socket.io</li>
                    @elseif(str_contains($slug, 'travel'))
                        <li><strong>Frontend:</strong> Flutter</li>
                        <li><strong>Backend:</strong> Firebase (Firestore, Authentication, Storage)</li>
                        <li><strong>Maps:</strong> Google Maps API</li>
                    @elseif(str_contains($slug, 'portfolio'))
                        <li><strong>Frontend:</strong> Next.js, TypeScript, Tailwind CSS</li>
                        <li><strong>CMS:</strong> Markdown, MDX</li>
                        <li><strong>Deployment:</strong> Vercel</li>
                    @else
                        <li><strong>Frontend:</strong> JavaScript, HTML, CSS</li>
                        <li><strong>Backend:</strong> PHP, MySQL</li>
                        <li><strong>Deployment:</strong> AWS</li>
                    @endif
                </ul>

                <h2>Challenges and Solutions</h2>

                <p>
                    Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl.
                </p>

                <blockquote>
                    <p>This project was a great opportunity to solve complex problems and implement innovative solutions.</p>
                </blockquote>

                <h2>Results and Impact</h2>

                <p>
                    Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl.
                </p>
            </div>

            <!-- Related Projects -->
            <div class="mt-16 slide-up" style="animation-delay: 0.6s;">
                <h2 class="text-2xl font-bold text-foreground mb-6">Related Projects</h2>

                <div class="grid gap-8 md:grid-cols-2">
                    <div class="card-elegant group">
                        <div class="relative mb-4 overflow-hidden rounded-lg">
                            <img src="{{ asset('assets/projects/project-related-1.jpg') }}" alt="Related project 1" class="w-full h-40 object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-3 left-3">
                                <span class="skill-tag text-xs">
                                    @if($slug != 'content-management-system')
                                        Laravel
                                    @else
                                        React
                                    @endif
                                </span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            @if($slug != 'content-management-system')
                                <a href="{{ route('projects.show', 'content-management-system') }}">
                                    Content Management System
                                </a>
                            @else
                                <a href="{{ route('projects.show', 'task-management-platform') }}">
                                    Task Management Platform
                                </a>
                            @endif
                        </h3>
                        <p class="text-foreground/70 mb-4">
                            @if($slug != 'content-management-system')
                                A modern, customizable CMS with a focus on performance and user experience.
                            @else
                                A collaborative task management platform with real-time updates and team collaboration features.
                            @endif
                        </p>
                    </div>

                    <div class="card-elegant group">
                        <div class="relative mb-4 overflow-hidden rounded-lg">
                            <img src="{{ asset('assets/projects/project-related-2.jpg') }}" alt="Related project 2" class="w-full h-40 object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-3 left-3">
                                <span class="skill-tag text-xs">
                                    @if($slug != 'fitness-tracker-app')
                                        Mobile
                                    @else
                                        Web
                                    @endif
                                </span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            @if($slug != 'fitness-tracker-app')
                                <a href="{{ route('projects.show', 'fitness-tracker-app') }}">
                                    Fitness Tracker App
                                </a>
                            @else
                                <a href="{{ route('projects.show', 'ecommerce-dashboard') }}">
                                    E-Commerce Dashboard
                                </a>
                            @endif
                        </h3>
                        <p class="text-foreground/70 mb-4">
                            @if($slug != 'fitness-tracker-app')
                                A mobile app for tracking workouts, nutrition, and progress with personalized recommendations.
                            @else
                                A modern e-commerce dashboard with real-time analytics, inventory management, and order processing.
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <!-- Back to Projects -->
            <div class="mt-12 text-center slide-up" style="animation-delay: 0.7s;">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                    <svg class="h-4 w-4 mr-2 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12,5 19,12 12,19"></polyline>
                    </svg>
                    Back to Projects
                </a>
            </div>
        </div>
    </section>
@endsection
