@component('components.section', ['id' => 'contact'])
    <x-section-title title="Get In Touch" subtitle="Contact"/>

    <div class="grid lg:grid-cols-5 gap-12 lg:gap-16">
        {{-- Contact Info --}}
        <div class="lg:col-span-2 space-y-6" data-aos="fade-right" data-aos-duration="800">
            <p class="text-white/50 leading-relaxed mb-8">
                Feel free to reach out! I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.
            </p>

            {{-- Contact Cards --}}
            <div class="space-y-4">
                <a href="mailto:dikshita@email.com" class="group flex items-center gap-4 p-4 glass-card rounded-2xl hover:border-primary-500/30 transition-all duration-300 hover:-translate-y-0.5">
                    <div class="w-12 h-12 rounded-xl bg-primary-500/10 flex items-center justify-center shrink-0 group-hover:bg-primary-500/20 transition-colors">
                        <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-white/40 font-mono uppercase tracking-wider">Email</p>
                        <p class="text-white text-sm">dikshita@email.com</p>
                    </div>
                </a>

                <div class="flex items-center gap-4 p-4 glass-card rounded-2xl">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-white/40 font-mono uppercase tracking-wider">Location</p>
                        <p class="text-white text-sm">India</p>
                    </div>
                </div>
            </div>

            {{-- Social Icons --}}
            <div class="flex items-center gap-3 pt-4">
                <a href="#" class="w-11 h-11 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 hover:border-white/20 hover:-translate-y-1 transition-all duration-300" aria-label="GitHub">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
                <a href="#" class="w-11 h-11 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 hover:border-white/20 hover:-translate-y-1 transition-all duration-300" aria-label="LinkedIn">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="#" class="w-11 h-11 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 hover:border-white/20 hover:-translate-y-1 transition-all duration-300" aria-label="Instagram">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="mailto:dikshita@email.com" class="w-11 h-11 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 hover:border-white/20 hover:-translate-y-1 transition-all duration-300" aria-label="Email">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </a>
            </div>
        </div>

        {{-- Contact Form --}}
        <div class="lg:col-span-3" data-aos="fade-left" data-aos-duration="800">
            <form action="{{ route('contact.submit') }}" method="POST" class="glass-card p-8 rounded-2xl">
                @csrf
                <div class="grid sm:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label for="name" class="block text-xs font-mono text-white/40 uppercase tracking-wider mb-2">Name</label>
                        <input type="text" name="name" id="name" required
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white text-sm placeholder-white/20 focus:outline-none focus:border-primary-500/50 focus:bg-white/[0.07] transition-all duration-300"
                               placeholder="Your name">
                        @error('name')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-xs font-mono text-white/40 uppercase tracking-wider mb-2">Email</label>
                        <input type="email" name="email" id="email" required
                               class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white text-sm placeholder-white/20 focus:outline-none focus:border-primary-500/50 focus:bg-white/[0.07] transition-all duration-300"
                               placeholder="your@email.com">
                        @error('email')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-5">
                    <label for="subject" class="block text-xs font-mono text-white/40 uppercase tracking-wider mb-2">Subject</label>
                    <input type="text" name="subject" id="subject" required
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white text-sm placeholder-white/20 focus:outline-none focus:border-primary-500/50 focus:bg-white/[0.07] transition-all duration-300"
                           placeholder="What's this about?">
                    @error('subject')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-xs font-mono text-white/40 uppercase tracking-wider mb-2">Message</label>
                    <textarea name="message" id="message" rows="5" required
                              class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white text-sm placeholder-white/20 focus:outline-none focus:border-primary-500/50 focus:bg-white/[0.07] transition-all duration-300 resize-none"
                              placeholder="Tell me about your project..."></textarea>
                    @error('message')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="group w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-gradient-to-r from-primary-500 to-purple-600 text-white font-semibold rounded-xl hover:from-primary-600 hover:to-purple-700 transition-all duration-300 hover:shadow-lg hover:shadow-primary-500/25 hover:-translate-y-0.5 cursor-pointer">
                    Send Message
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                </button>

                @if(session('success'))
                    <div class="mt-4 p-4 bg-green-500/10 border border-green-500/20 rounded-xl text-green-400 text-sm">
                        {{ session('success') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
@endcomponent
