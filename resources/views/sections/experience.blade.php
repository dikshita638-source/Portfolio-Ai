@component('components.section', ['id' => 'experience'])
    <x-section-title title="Experience" subtitle="My Journey"/>

    @php
        $experiences = [
            [
                'title' => 'AI Web Development Intern',
                'company' => 'Tech Solutions Inc.',
                'duration' => 'Jun 2025 - Aug 2025',
                'type' => 'Internship',
                'description' => 'Developed and maintained web applications using AI-powered tools. Collaborated with cross-functional teams to deliver high-quality software solutions.',
                'responsibilities' => [
                    'Developed responsive web interfaces using HTML, CSS, and JavaScript',
                    'Integrated AI models for intelligent feature suggestions',
                    'Participated in code reviews and agile development processes',
                    'Built RESTful APIs and database management with MySQL',
                ],
                'technologies' => ['Python', 'JavaScript', 'HTML/CSS', 'MySQL', 'AI/ML'],
            ],
        ];
    @endphp

    <div class="relative">
        {{-- Timeline Line --}}
        <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-primary-500/50 via-purple-500/30 to-transparent transform md:-translate-x-px"></div>

        @foreach($experiences as $exp)
            <div class="relative mb-16 last:mb-0" data-aos="{{ $loop->even ? 'fade-right' : 'fade-left' }}" data-aos-duration="800">
                {{-- Timeline Dot --}}
                <div class="absolute left-4 md:left-1/2 top-8 w-4 h-4 bg-primary-500 rounded-full border-4 border-dark-950 transform -translate-x-2 md:-translate-x-2 z-10 shadow-lg shadow-primary-500/30">
                    <div class="absolute inset-0 rounded-full bg-primary-500 animate-ping opacity-20"></div>
                </div>

                {{-- Content Card --}}
                <div class="ml-12 md:ml-0 md:w-1/2 {{ $loop->even ? 'md:pr-16' : 'md:pl-16 md:ml-auto' }}">
                    <div class="glass-card p-8 rounded-2xl hover:border-primary-500/30 transition-all duration-500 hover:-translate-y-1">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 text-xs font-mono text-primary-300 bg-primary-500/10 border border-primary-500/20 rounded-full">
                                {{ $exp['type'] }}
                            </span>
                            <span class="text-xs text-white/40">{{ $exp['duration'] }}</span>
                        </div>

                        <h3 class="text-xl font-display font-bold text-white mb-1">{{ $exp['title'] }}</h3>
                        <p class="text-primary-400 text-sm font-medium mb-4">{{ $exp['company'] }}</p>
                        <p class="text-white/50 text-sm leading-relaxed mb-5">{{ $exp['description'] }}</p>

                        <div class="mb-5">
                            <h4 class="text-xs font-semibold text-white/60 uppercase tracking-wider mb-3">Key Responsibilities</h4>
                            <ul class="space-y-2">
                                @foreach($exp['responsibilities'] as $resp)
                                    <li class="flex items-start gap-2 text-sm text-white/40">
                                        <svg class="w-4 h-4 text-primary-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        {{ $resp }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="flex flex-wrap gap-2">
                            @foreach($exp['technologies'] as $tech)
                                <span class="px-2.5 py-1 text-xs font-mono text-purple-300/80 bg-purple-500/10 rounded-lg border border-purple-500/10">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endcomponent
