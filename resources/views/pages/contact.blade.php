@extends('layouts.main')

@section('title', 'Contact - J Talk Dev')

@section('content')
    <!-- Contact Header -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-background">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 slide-up">
                <h1 class="text-4xl sm:text-5xl font-bold mb-4 text-foreground">Get <span class="text-gradient">In Touch</span></h1>
                <p class="text-foreground/70 text-lg max-w-2xl mx-auto">
                    Have a project in mind or want to collaborate? Let's talk!
                </p>
                <div class="w-20 h-0.5 bg-primary/30 mx-auto mt-6"></div>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="grid gap-12 md:grid-cols-2">
                    <!-- Contact Form -->
                    <div class="card-elegant slide-up" style="animation-delay: 0.2s;">
                        <h2 class="text-2xl font-bold text-foreground mb-6">Send a Message</h2>

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf

                            <div>
                                <label for="name" class="block text-sm font-medium text-foreground/80 mb-1">Name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="w-full px-4 py-2 bg-background border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                    required
                                >
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-foreground/80 mb-1">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="w-full px-4 py-2 bg-background border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                    required
                                >
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-foreground/80 mb-1">Subject</label>
                                <input
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    class="w-full px-4 py-2 bg-background border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                    required
                                >
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-foreground/80 mb-1">Message</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    class="w-full px-4 py-2 bg-background border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50"
                                    required
                                ></textarea>
                            </div>

                            <button type="submit" class="btn-hero w-full">
                                Send Message
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="space-y-8 slide-up" style="animation-delay: 0.4s;">
                        <div class="card-elegant">
                            <h2 class="text-2xl font-bold text-foreground mb-6">Contact Information</h2>

                            <div class="space-y-6">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-primary/10 p-2 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-foreground font-medium">Email</h3>
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
                                        <h3 class="text-foreground font-medium">Location</h3>
                                        <p class="text-foreground/70">
                                            San Francisco, CA
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="card-elegant">
                            <h2 class="text-xl font-bold text-foreground mb-6">Connect with me</h2>

                            <div class="grid grid-cols-3 gap-4">
                                <a href="#" class="flex flex-col items-center p-4 bg-secondary/30 rounded-lg hover:bg-primary/10 hover:text-primary transition-all duration-300">
                                    <svg class="h-6 w-6 mb-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                    <span class="text-sm">Twitter</span>
                                </a>

                                <a href="#" class="flex flex-col items-center p-4 bg-secondary/30 rounded-lg hover:bg-primary/10 hover:text-primary transition-all duration-300">
                                    <svg class="h-6 w-6 mb-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm">GitHub</span>
                                </a>

                                <a href="#" class="flex flex-col items-center p-4 bg-secondary/30 rounded-lg hover:bg-primary/10 hover:text-primary transition-all duration-300">
                                    <svg class="h-6 w-6 mb-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm">LinkedIn</span>
                                </a>
                            </div>
                        </div>

                        <!-- Response Time -->
                        <div class="text-center p-4 bg-primary/5 rounded-lg border border-primary/20">
                            <p class="text-foreground/80">
                                <span class="font-medium">Response Time:</span> Usually within 24 hours
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-card">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-foreground">Frequently Asked Questions</h2>
                <p class="text-foreground/70 mt-2">Common questions about working with me</p>
            </div>

            <div class="space-y-6">
                <div class="card-elegant">
                    <h3 class="text-lg font-bold text-foreground mb-2">What services do you offer?</h3>
                    <p class="text-foreground/70">
                        I offer full-stack web development services, including frontend and backend development, API integration, database design, and UI/UX implementation. I specialize in Laravel, React, Vue.js, and other modern web technologies.
                    </p>
                </div>

                <div class="card-elegant">
                    <h3 class="text-lg font-bold text-foreground mb-2">How do you handle project pricing?</h3>
                    <p class="text-foreground/70">
                        Project pricing depends on the scope, complexity, and timeline. I offer both fixed-price and hourly rate options. After discussing your requirements, I'll provide a detailed proposal with transparent pricing.
                    </p>
                </div>

                <div class="card-elegant">
                    <h3 class="text-lg font-bold text-foreground mb-2">What is your typical project process?</h3>
                    <p class="text-foreground/70">
                        My process typically includes: initial consultation, requirements gathering, proposal and agreement, design and development phases, testing, deployment, and post-launch support. I maintain clear communication throughout the entire process.
                    </p>
                </div>

                <div class="card-elegant">
                    <h3 class="text-lg font-bold text-foreground mb-2">Do you offer maintenance and support after project completion?</h3>
                    <p class="text-foreground/70">
                        Yes, I offer ongoing maintenance and support packages to ensure your application continues to run smoothly. This includes bug fixes, security updates, performance optimization, and feature enhancements.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
