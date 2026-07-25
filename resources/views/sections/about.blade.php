@component('components.section', ['id' => 'about'])
    <x-section-title title="About Me" subtitle="Who I Am"/>

    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        {{-- Photo Side --}}
        <div data-aos="fade-right" data-aos-duration="800" class="relative">
            <div class="relative mx-auto max-w-md">
                <div class="absolute inset-0 bg-gradient-to-br from-primary-500/20 to-purple-500/20 rounded-3xl blur-2xl"></div>
                <div class="relative aspect-square rounded-3xl overflow-hidden border border-white/10 bg-dark-800/50 backdrop-blur-xl">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-32 h-32 mx-auto mb-4 rounded-full bg-gradient-to-br from-primary-500/20 to-purple-500/20 border border-white/10 flex items-center justify-center">
                                <svg class="w-16 h-16 text-primary-400/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <p class="text-white/30 text-sm font-mono">Your Photo Here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Info Side --}}
        <div data-aos="fade-left" data-aos-duration="800">
            <p class="text-white/60 text-lg leading-relaxed mb-8">
                I am a second-year B.Tech Computer Science (Cyber Security) student passionate about software development, AI, cybersecurity, and creating impactful digital products. I enjoy solving problems, building projects, and continuously learning modern technologies.
            </p>

            {{-- Info Cards --}}
            <div class="grid grid-cols-2 gap-4 mb-8">
                <div class="glass-card p-5 rounded-2xl hover:border-primary-500/30 transition-all duration-300 group">
                    <div class="w-10 h-10 rounded-xl bg-primary-500/10 flex items-center justify-center mb-3 group-hover:bg-primary-500/20 transition-colors">
                        <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold text-sm mb-1">Education</h4>
                    <p class="text-white/40 text-xs leading-relaxed">B.Tech CS (Cyber Security)</p>
                </div>

                <div class="glass-card p-5 rounded-2xl hover:border-purple-500/30 transition-all duration-300 group">
                    <div class="w-10 h-10 rounded-xl bg-purple-500/10 flex items-center justify-center mb-3 group-hover:bg-purple-500/20 transition-colors">
                        <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold text-sm mb-1">Career Goal</h4>
                    <p class="text-white/40 text-xs leading-relaxed">Software Engineer</p>
                </div>

                <div class="glass-card p-5 rounded-2xl hover:border-violet-500/30 transition-all duration-300 group">
                    <div class="w-10 h-10 rounded-xl bg-violet-500/10 flex items-center justify-center mb-3 group-hover:bg-violet-500/20 transition-colors">
                        <svg class="w-5 h-5 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold text-sm mb-1">Current Learning</h4>
                    <p class="text-white/40 text-xs leading-relaxed">DSA & AI</p>
                </div>

                <div class="glass-card p-5 rounded-2xl hover:border-pink-500/30 transition-all duration-300 group">
                    <div class="w-10 h-10 rounded-xl bg-pink-500/10 flex items-center justify-center mb-3 group-hover:bg-pink-500/20 transition-colors">
                        <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold text-sm mb-1">Interests</h4>
                    <p class="text-white/40 text-xs leading-relaxed">Security & AI</p>
                </div>
            </div>

            {{-- Social Links --}}
            <div class="flex items-center gap-3">
                <a href="#" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 hover:border-white/20 transition-all duration-300" aria-label="GitHub">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
                <a href="#" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 hover:border-white/20 transition-all duration-300" aria-label="LinkedIn">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="mailto:dikshita@email.com" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-white/50 hover:text-white hover:bg-white/10 hover:border-white/20 transition-all duration-300" aria-label="Email">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </a>
            </div>
        </div>
    </div>
@endcomponent
