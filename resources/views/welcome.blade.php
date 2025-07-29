<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home J Talk Dev</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

<x-navigation />

<main>
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
                    <a href="#talks" class="btn-hero">
                        View My Talks
                    </a>

                    <a href="#contact"
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

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 float">
                <a
                    href="#about"
                    class="inline-flex items-center justify-center p-2 rounded-full border border-primary/30 hover:border-primary/60 hover:bg-primary/5 transition-all duration-300"
                >
                    <!-- Arrow Down Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary/70" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 px-4 sm:px-6 lg:px-8 bg-card">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16 slide-up">
                <h2 class="text-3xl font-bold text-foreground mb-4">About Me</h2>
                <div class="w-20 h-0.5 bg-primary/30 mx-auto"></div>
            </div>

            <!-- Profile and Content -->
            <div class="flex flex-col md:flex-row md:items-start gap-12">
                <!-- Profile Image -->
                <div class="flex-shrink-0 w-48 mx-auto md:mx-0 slide-up" style="animation-delay: 0.2s;">
                    <div class="relative">
                        <img class="w-40 h-40 rounded-full object-cover mx-auto shadow-elegant"
                             alt="Jacques M profile photo"
                             src="{{ asset('assets/About section image.jpeg') }}" />
                        <div class="absolute inset-0 rounded-full bg-primary/5 animate-pulse"></div>
                    </div>
                </div>

                <!-- About Content -->
                <div class="flex-1 space-y-8 slide-up" style="animation-delay: 0.4s;">
                    <div>
                        <h3 class="text-2xl font-bold text-foreground">Jacques M</h3>
                        <p class="text-lg text-gradient">Full-Stack Developer</p>
                    </div>

                    <p class="text-foreground/80 leading-relaxed">
                        I'm a passionate full-stack developer with expertise in Laravel and modern web technologies.
                        I love creating clean, efficient solutions and turning ideas into beautiful, functional
                        applications.
                    </p>

                    <p class="text-foreground/80 leading-relaxed">
                        I specialize in building robust web applications using Laravel for backend development,
                        combined with modern frontend technologies like Tailwind CSS and Alpine.js to create
                        seamless user experiences.
                    </p>

                    <!-- Skills -->
                    <div>
                        <h4 class="text-lg font-medium text-foreground mb-4">Technologies I Work With</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="skill-tag">Laravel</span>
                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">Tailwind CSS</span>
                            <span class="skill-tag">Alpine.js</span>
                            <span class="skill-tag">MySQL</span>
                            <span class="skill-tag">WordPress</span>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-4">
                        <a href="#contact" class="btn-hero">
                            Get In Touch
                            <svg class="ml-2 w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-24 px-4 sm:px-6 lg:px-8 bg-background">
        <div class="max-w-4xl mx-auto">

            <!-- Header -->
            <div class="text-center mb-16 slide-up">
                <h2 class="text-4xl sm:text-5xl font-bold mb-4 text-foreground">
                    My <span class="text-gradient">Blog</span>
                </h2>
                <p class="text-foreground/70 text-lg max-w-2xl mx-auto">
                    Thoughts, tutorials, and insights about software development, technology, and the journey of a
                    developer.
                </p>
            </div>

            <!-- Blog Posts -->
            <div class="space-y-8">

                <!-- Post 1 -->
                <article class="card-elegant group cursor-pointer slide-up" style="animation-delay: 0.2s;"
                         onclick="readPost('building-scalable-react-applications')">

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
                                    8 min read
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Post Title -->
                    <h3 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors text-foreground">
                        Building Scalable React Applications
                    </h3>

                    <!-- Post Excerpt -->
                    <p class="text-foreground/70 mb-6 leading-relaxed">
                        Learn the best practices for structuring and organizing large React applications for
                        maintainability and performance.
                    </p>

                    <!-- Read More Button -->
                    <button
                        class="flex items-center font-medium text-foreground/70 group-hover:text-primary transition-all duration-300 p-0 bg-transparent border-none cursor-pointer">
                        Read More
                        <!-- Arrow Right Icon -->
                        <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12,5 19,12 12,19"></polyline>
                        </svg>
                    </button>
                </article>

                <!-- Post 2 -->
                <article class="card-elegant group cursor-pointer slide-up" style="animation-delay: 0.4s;"
                         onclick="readPost('modern-javascript-es2024-features')">

                    <!-- Post Meta Information -->
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <div class="flex items-center space-x-4 mb-2 md:mb-0">
                            <!-- Category Badge -->
                            <span class="skill-tag">
                                JavaScript
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
                                    January 10, 2024
                                </span>
                                <span class="flex items-center">
                                    <!-- Clock Icon -->
                                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12,6 12,12 16,14"></polyline>
                                    </svg>
                                    6 min read
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Post Title -->
                    <h3 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors text-foreground">
                        Modern JavaScript: ES2024 Features
                    </h3>

                    <!-- Post Excerpt -->
                    <p class="text-foreground/70 mb-6 leading-relaxed">
                        Explore the latest JavaScript features and how they can improve your development workflow and
                        code quality.
                    </p>

                    <!-- Read More Button -->
                    <button
                        class="flex items-center font-medium text-foreground/70 group-hover:text-primary transition-all duration-300 p-0 bg-transparent border-none cursor-pointer">
                        Read More
                        <!-- Arrow Right Icon -->
                        <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12,5 19,12 12,19"></polyline>
                        </svg>
                    </button>
                </article>

                <!-- Post 3 -->
                <article class="card-elegant group cursor-pointer slide-up" style="animation-delay: 0.6s;"
                         onclick="readPost('understanding-typescript-generics')">

                    <!-- Post Meta Information -->
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <div class="flex items-center space-x-4 mb-2 md:mb-0">
                            <!-- Category Badge -->
                            <span class="skill-tag">
                                TypeScript
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
                                    January 5, 2024
                                </span>
                                <span class="flex items-center">
                                    <!-- Clock Icon -->
                                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12,6 12,12 16,14"></polyline>
                                    </svg>
                                    12 min read
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Post Title -->
                    <h3 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors text-foreground">
                        Understanding TypeScript Generics
                    </h3>

                    <!-- Post Excerpt -->
                    <p class="text-foreground/70 mb-6 leading-relaxed">
                        A deep dive into TypeScript generics and how to use them effectively to write more flexible and
                        reusable code.
                    </p>

                    <!-- Read More Button -->
                    <button
                        class="flex items-center font-medium text-foreground/70 group-hover:text-primary transition-all duration-300 p-0 bg-transparent border-none cursor-pointer">
                        Read More
                        <!-- Arrow Right Icon -->
                        <svg class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12,5 19,12 12,19"></polyline>
                        </svg>
                    </button>
                </article>

            </div>

            <!-- Footer Message -->
            <div class="text-center mt-12 slide-up" style="animation-delay: 0.8s;">
                <p class="text-foreground/60">
                    More posts coming soon! Follow me on social media for updates.
                </p>
            </div>
        </div>
    </section>

    <!-- Talks Section -->
    <section id="talks" class="py-24 px-4 sm:px-6 lg:px-8 bg-card">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">Conference <span class="text-gradient">Presentations</span></h2>
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
                        <a href="#" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
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
                        <a href="#" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
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
                        <a href="#" class="inline-flex items-center text-foreground/70 hover:text-primary transition-all duration-300">
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
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 px-4 sm:px-6 lg:px-8 bg-background">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">Get <span class="text-gradient">In Touch</span></h2>
                <p class="text-foreground/70 text-lg max-w-2xl mx-auto">
                    Have a project in mind or want to collaborate? Let's talk!
                </p>
                <div class="w-20 h-0.5 bg-primary/30 mx-auto mt-6"></div>
            </div>

            <div class="max-w-2xl mx-auto">
                <div class="card-elegant slide-up" style="animation-delay: 0.2s;">
                    <div class="grid gap-8 md:grid-cols-2">
                        <!-- Contact Info -->
                        <div class="space-y-6">
                            <h3 class="text-xl font-bold text-foreground mb-4">Contact Information</h3>

                            <div class="flex items-start space-x-4">
                                <div class="bg-primary/10 p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-foreground font-medium">Email</h4>
                                    <a href="mailto:contact@example.com" class="text-foreground/70 hover:text-primary transition-colors">
                                        contact@example.com
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="bg-primary/10 p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-foreground font-medium">Location</h4>
                                    <p class="text-foreground/70">
                                        San Francisco, CA
                                    </p>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div class="pt-4">
                                <h4 class="text-foreground font-medium mb-3">Connect with me</h4>
                                <div class="flex space-x-4">
                                    <a href="#" class="bg-secondary/30 p-3 rounded-full text-foreground hover:bg-primary/10 hover:text-primary transition-all duration-300">
                                        <span class="sr-only">Twitter</span>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                        </svg>
                                    </a>
                                    <a href="#" class="bg-secondary/30 p-3 rounded-full text-foreground hover:bg-primary/10 hover:text-primary transition-all duration-300">
                                        <span class="sr-only">GitHub</span>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <a href="#" class="bg-secondary/30 p-3 rounded-full text-foreground hover:bg-primary/10 hover:text-primary transition-all duration-300">
                                        <span class="sr-only">LinkedIn</span>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="flex flex-col justify-center space-y-6">
                            <p class="text-foreground/70">
                                Ready to start a project or have questions? Feel free to reach out!
                            </p>
                            <a href="mailto:contact@example.com" class="btn-hero text-center">
                                Send an Email
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                            <div class="text-center mt-4">
                                <span class="text-foreground/60 text-sm">Response time: within 24 hours</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="bg-gray-900 text-primary py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 md:grid-cols-3 items-center">
            <!-- Logo and Copyright -->
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start mb-4">
                    <div class="h-9 w-9 rounded-full bg-primary/10 flex items-center justify-center border border-primary/20 mr-2">
                        <span class="text-lg font-bold text-gradient">J</span>
                    </div>
                    <span class="text-xl font-bold text-gradient">J Talk Dev</span>
                </div>
                <p class="text-primary/70">&copy; {{ date('Y') }} {{config('app.name')}}. All rights reserved.</p>
            </div>

            <!-- Quick Links -->
            <div class="text-center">
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="text-primary/70 hover:text-primary transition-colors">Home</a>
                    <a href="#about" class="text-primary/70 hover:text-primary transition-colors">About</a>
                    <a href="#blog" class="text-primary/70 hover:text-primary transition-colors">Blog</a>
                    <a href="#talks" class="text-primary/70 hover:text-primary transition-colors">Talks</a>
                    <a href="#contact" class="text-primary/70 hover:text-primary transition-colors">Contact</a>
                </div>
            </div>

            <!-- Social Links -->
            <div class="text-center md:text-right">
                <h3 class="text-lg font-semibold mb-4">Connect</h3>
                <div class="flex justify-center md:justify-end space-x-4">
                    <a href="#" class="bg-primary/10 p-2 rounded-full text-primary hover:bg-primary/20 transition-all duration-300">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="bg-primary/10 p-2 rounded-full text-primary hover:bg-primary/20 transition-all duration-300">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="bg-primary/10 p-2 rounded-full text-primary hover:bg-primary/20 transition-all duration-300">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <p class="mt-4 text-primary/60 text-sm">
                    Built with ❤️ using Laravel & Tailwind CSS
                </p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
