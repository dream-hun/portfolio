@extends('layouts.main')

@section('title', 'Projects - J Talk Dev')

@section('content')
    <!-- Projects Header -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-background">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 slide-up">
                <h1 class="text-4xl sm:text-5xl font-bold mb-4 text-foreground">My <span class="text-gradient">Projects</span></h1>
                <p class="text-foreground/70 text-lg max-w-2xl mx-auto">
                    A showcase of my latest work, side projects, and open source contributions.
                </p>
                <div class="w-20 h-0.5 bg-primary/30 mx-auto mt-6"></div>
            </div>

            <!-- Project Filters -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="skill-tag bg-primary/10 border-primary/30">All</button>
                <button class="skill-tag">Web Development</button>
                <button class="skill-tag">Mobile</button>
                <button class="skill-tag">Open Source</button>
                <button class="skill-tag">UI/UX</button>
            </div>

            <!-- Projects Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Project 1 -->
                <div class="card-elegant group slide-up" style="animation-delay: 0.2s;">
                    <div class="relative mb-6 overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/projects/project1.jpg') }}" alt="Project 1" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3">
                            <span class="skill-tag text-xs">Laravel</span>
                            <span class="skill-tag text-xs">Vue.js</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">E-Commerce Dashboard</h3>
                    <p class="text-foreground/70 mb-4">
                        A modern e-commerce dashboard with real-time analytics, inventory management, and order processing.
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('projects.show', 'ecommerce-dashboard') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Project
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                        <a href="https://github.com" target="_blank" class="text-foreground/60 hover:text-primary transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="card-elegant group slide-up" style="animation-delay: 0.4s;">
                    <div class="relative mb-6 overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/projects/project2.jpg') }}" alt="Project 2" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3">
                            <span class="skill-tag text-xs">React Native</span>
                            <span class="skill-tag text-xs">Firebase</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Fitness Tracker App</h3>
                    <p class="text-foreground/70 mb-4">
                        A mobile app for tracking workouts, nutrition, and progress with personalized recommendations.
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('projects.show', 'fitness-tracker-app') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Project
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                        <a href="https://github.com" target="_blank" class="text-foreground/60 hover:text-primary transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="card-elegant group slide-up" style="animation-delay: 0.6s;">
                    <div class="relative mb-6 overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/projects/project3.jpg') }}" alt="Project 3" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3">
                            <span class="skill-tag text-xs">Laravel</span>
                            <span class="skill-tag text-xs">Alpine.js</span>
                            <span class="skill-tag text-xs">Tailwind</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Content Management System</h3>
                    <p class="text-foreground/70 mb-4">
                        A modern, customizable CMS with a focus on performance and user experience.
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('projects.show', 'content-management-system') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Project
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                        <a href="https://github.com" target="_blank" class="text-foreground/60 hover:text-primary transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="card-elegant group slide-up" style="animation-delay: 0.2s;">
                    <div class="relative mb-6 overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/projects/project4.jpg') }}" alt="Project 4" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3">
                            <span class="skill-tag text-xs">React</span>
                            <span class="skill-tag text-xs">Node.js</span>
                            <span class="skill-tag text-xs">MongoDB</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Task Management Platform</h3>
                    <p class="text-foreground/70 mb-4">
                        A collaborative task management platform with real-time updates and team collaboration features.
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('projects.show', 'task-management-platform') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Project
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                        <a href="https://github.com" target="_blank" class="text-foreground/60 hover:text-primary transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="card-elegant group slide-up" style="animation-delay: 0.4s;">
                    <div class="relative mb-6 overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/projects/project5.jpg') }}" alt="Project 5" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3">
                            <span class="skill-tag text-xs">Flutter</span>
                            <span class="skill-tag text-xs">Firebase</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Travel Companion App</h3>
                    <p class="text-foreground/70 mb-4">
                        A cross-platform mobile app for travelers with itinerary planning, local recommendations, and offline maps.
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('projects.show', 'travel-companion-app') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Project
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                        <a href="https://github.com" target="_blank" class="text-foreground/60 hover:text-primary transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="card-elegant group slide-up" style="animation-delay: 0.6s;">
                    <div class="relative mb-6 overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/projects/project6.jpg') }}" alt="Project 6" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-3 left-3">
                            <span class="skill-tag text-xs">TypeScript</span>
                            <span class="skill-tag text-xs">Next.js</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Developer Portfolio Template</h3>
                    <p class="text-foreground/70 mb-4">
                        An open-source, customizable portfolio template for developers with dark mode and multiple themes.
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('projects.show', 'developer-portfolio-template') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                            View Project
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </a>
                        <a href="https://github.com" target="_blank" class="text-foreground/60 hover:text-primary transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="mt-12 text-center">
                <button class="btn-hero">
                    Load More Projects
                </button>
            </div>
        </div>
    </section>
@endsection
