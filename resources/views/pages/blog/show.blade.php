@extends('layouts.main')

@section('title', 'Blog Post - J Talk Dev')

@section('content')
    <!-- Blog Post Header -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-background">
        <div class="max-w-4xl mx-auto">
            <!-- Post Meta Information -->
            <div class="flex flex-wrap items-center gap-4 mb-6 text-sm text-foreground/60 slide-up">
                <span class="skill-tag">
                    @if(str_contains($slug, 'react'))
                        React
                    @elseif(str_contains($slug, 'javascript'))
                        JavaScript
                    @elseif(str_contains($slug, 'typescript'))
                        TypeScript
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
                    January 15, 2024
                </span>

                <span class="flex items-center">
                    <!-- Clock Icon -->
                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12,6 12,12 16,14"></polyline>
                    </svg>
                    8 min read
                </span>
            </div>

            <!-- Post Title -->
            <h1 class="text-4xl sm:text-5xl font-bold mb-6 text-foreground slide-up" style="animation-delay: 0.2s;">
                @if($slug == 'building-scalable-react-applications')
                    Building Scalable React Applications
                @elseif($slug == 'modern-javascript-es2024-features')
                    Modern JavaScript: ES2024 Features
                @elseif($slug == 'understanding-typescript-generics')
                    Understanding TypeScript Generics
                @else
                    {{ ucwords(str_replace('-', ' ', $slug)) }}
                @endif
            </h1>

            <!-- Featured Image -->
            <div class="mb-10 rounded-xl overflow-hidden shadow-elegant slide-up" style="animation-delay: 0.3s;">
                <img
                    src="{{ asset('assets/blog/featured-image.jpg') }}"
                    alt="Blog post featured image"
                    class="w-full h-auto object-cover"
                >
            </div>

            <!-- Post Content -->
            <div class="prose prose-lg max-w-none text-foreground/90 slide-up" style="animation-delay: 0.4s;">
                <p>
                    This is a placeholder for the blog post content. In a real application, this would be fetched from a database or CMS.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl.
                </p>

                <h2>Key Points</h2>

                <ul>
                    <li>First important point about this topic</li>
                    <li>Second key consideration when implementing this</li>
                    <li>Third insight that readers should take away</li>
                    <li>Fourth practical tip for real-world applications</li>
                </ul>

                <p>
                    Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl.
                </p>

                <h2>Code Example</h2>

                <pre><code class="language-javascript">// Sample code block
function example() {
  const greeting = 'Hello, World!';
  console.log(greeting);
  return greeting;
}

// Usage
example();</code></pre>

                <p>
                    Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl. Sed euismod, nisl vel ultricies lacinia, nisl nisl aliquam nisl, eu aliquam nisl nisl sit amet nisl.
                </p>

                <blockquote>
                    <p>This is an important quote or takeaway that summarizes a key point from the article.</p>
                </blockquote>

                <h2>Conclusion</h2>

                <p>
                    In conclusion, this article has covered the main points about this topic. We've explored the key concepts, provided practical examples, and offered insights into best practices.
                </p>
            </div>

            <!-- Author Bio -->
            <div class="mt-16 p-6 bg-card rounded-xl border border-border flex items-center gap-6 slide-up" style="animation-delay: 0.5s;">
                <img
                    src="{{ asset('assets/About section image.jpeg') }}"
                    alt="Jacques M"
                    class="w-16 h-16 rounded-full object-cover"
                >
                <div>
                    <h3 class="text-lg font-bold text-foreground">Jacques M</h3>
                    <p class="text-foreground/70">
                        Full-Stack Developer passionate about creating innovative solutions and sharing knowledge through writing and speaking.
                    </p>
                </div>
            </div>

            <!-- Related Posts -->
            <div class="mt-16 slide-up" style="animation-delay: 0.6s;">
                <h2 class="text-2xl font-bold text-foreground mb-6">Related Posts</h2>

                <div class="grid gap-8 md:grid-cols-2">
                    <div class="card-elegant group">
                        <h3 class="text-lg font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            @if($slug != 'modern-javascript-es2024-features')
                                <a href="{{ route('blog.show', 'modern-javascript-es2024-features') }}">
                                    Modern JavaScript: ES2024 Features
                                </a>
                            @else
                                <a href="{{ route('blog.show', 'building-scalable-react-applications') }}">
                                    Building Scalable React Applications
                                </a>
                            @endif
                        </h3>
                        <p class="text-foreground/70 mb-4">
                            Explore the latest JavaScript features and how they can improve your development workflow.
                        </p>
                    </div>

                    <div class="card-elegant group">
                        <h3 class="text-lg font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            @if($slug != 'understanding-typescript-generics')
                                <a href="{{ route('blog.show', 'understanding-typescript-generics') }}">
                                    Understanding TypeScript Generics
                                </a>
                            @else
                                <a href="{{ route('blog.show', 'building-scalable-react-applications') }}">
                                    Building Scalable React Applications
                                </a>
                            @endif
                        </h3>
                        <p class="text-foreground/70 mb-4">
                            A deep dive into TypeScript generics and how to use them effectively.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Back to Blog -->
            <div class="mt-12 text-center slide-up" style="animation-delay: 0.7s;">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
                    <svg class="h-4 w-4 mr-2 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12,5 19,12 12,19"></polyline>
                    </svg>
                    Back to Blog
                </a>
            </div>
        </div>
    </section>
@endsection
