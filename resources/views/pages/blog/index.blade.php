@extends('layouts.main')

@section('title', 'Blog - J Talk Dev')

@section('content')
    <!-- Blog Header -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-background">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16 slide-up">
                <h1 class="text-4xl sm:text-5xl font-bold mb-4 text-foreground">
                    My <span class="text-gradient">Blog</span>
                </h1>
                <p class="text-foreground/70 text-lg max-w-2xl mx-auto">
                    Thoughts, tutorials, and insights about software development, technology, and the journey of a
                    developer.
                </p>
            </div>

            <!-- Blog Posts -->
            <div class="space-y-8">
                @foreach($posts as  $post)
                    <article class="card-elegant group cursor-pointer slide-up" style="animation-delay: 0.2s;"
                             onclick="window.location.href='{{ route('blog.show', $post->slug) }}'">
                        <!-- Post Meta Information -->
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                            <div class="flex items-center space-x-4 mb-2 md:mb-0">
                                <!-- Category Badge -->
                                <span class="skill-tag">
                                React
                            </span>

                                <!-- Date and Read Time -->
                                <div class="flex items-center text-sm text-foreground/60 space-x-4">
                                <span class="flex items-center">
                                    <!-- Calendar Icon -->
                                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    January 15, 2024
                                </span>
                                    <span class="flex items-center">
                                    <!-- Clock Icon -->
                                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12,6 12,12 16,14"></polyline>
                                    </svg>
                                    {{ $post->readingTimeAttribute() }} min read
                                </span>
                                </div>
                            </div>
                        </div>

                        <!-- Post Title -->
                        <h2 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors text-foreground">
                            {{$post->title}}
                        </h2>

                        <!-- Post Excerpt -->
                        <p class="text-foreground/70 mb-6 leading-relaxed">
                            {{$post->excerpt }}
                        </p>

                        <!-- Read More Button -->
                        <div
                            class="flex items-center font-medium text-foreground/70 group-hover:text-primary transition-all duration-300">
                            Read More
                            <!-- Arrow Right Icon -->
                            <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12,5 19,12 12,19"></polyline>
                            </svg>
                        </div>
                    </article>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="#"
                       class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-border bg-card text-sm font-medium text-foreground/70 hover:bg-primary/5">
                        <span class="sr-only">Previous</span>
                        <!-- Heroicon name: solid/chevron-left -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" aria-current="page"
                       class="relative inline-flex items-center px-4 py-2 border border-primary bg-primary/10 text-sm font-medium text-primary">
                        1
                    </a>
                    <a href="#"
                       class="relative inline-flex items-center px-4 py-2 border border-border bg-card text-sm font-medium text-foreground/70 hover:bg-primary/5">
                        2
                    </a>
                    <a href="#"
                       class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-border bg-card text-sm font-medium text-foreground/70 hover:bg-primary/5">
                        <span class="sr-only">Next</span>
                        <!-- Heroicon name: solid/chevron-right -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </section>
@endsection
