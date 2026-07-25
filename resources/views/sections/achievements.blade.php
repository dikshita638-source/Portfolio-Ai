@component('components.section', ['id' => 'achievements'])
    <x-section-title title="Achievements" subtitle="Milestones"/>

    @php
        $achievements = [
            [
                'label' => 'CGPA',
                'value' => 8.5,
                'suffix' => '+',
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>',
                'color' => 'from-primary-500 to-purple-500',
            ],
            [
                'label' => 'Hackathons',
                'value' => 3,
                'suffix' => '+',
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>',
                'color' => 'from-purple-500 to-pink-500',
            ],
            [
                'label' => 'Projects Completed',
                'value' => 6,
                'suffix' => '+',
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>',
                'color' => 'from-violet-500 to-purple-500',
            ],
            [
                'label' => 'Certifications',
                'value' => 4,
                'suffix' => '+',
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>',
                'color' => 'from-pink-500 to-red-500',
            ],
            [
                'label' => 'Internships',
                'value' => 1,
                'suffix' => '',
                'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>',
                'color' => 'from-cyan-500 to-blue-500',
            ],
        ];
    @endphp

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach($achievements as $achievement)
            <div class="group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="glass-card p-6 rounded-2xl text-center hover:border-primary-500/30 transition-all duration-500 hover:-translate-y-1">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br {{ $achievement['color'] }} bg-opacity-10 flex items-center justify-center text-primary-400 group-hover:scale-110 transition-transform duration-300"
                         style="background: linear-gradient(135deg, rgba(139,92,246,0.1), rgba(168,85,247,0.1));">
                        {!! $achievement['icon'] !!}
                    </div>
                    <div class="text-3xl md:text-4xl font-display font-bold text-white mb-1">
                        <span class="counter" data-target="{{ $achievement['value'] }}">0</span>{{ $achievement['suffix'] }}
                    </div>
                    <p class="text-white/40 text-sm">{{ $achievement['label'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endcomponent
