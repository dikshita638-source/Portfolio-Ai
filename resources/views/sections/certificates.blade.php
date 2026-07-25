@component('components.section', ['id' => 'certificates'])
    <x-section-title title="Certificates" subtitle="Verified Credentials"/>

    @php
        $certificates = [
            [
                'title' => 'Web Development Bootcamp',
                'issuer' => 'Udemy',
                'date' => '2025',
                'description' => 'Complete web development course covering HTML, CSS, JavaScript, and modern frameworks.',
            ],
            [
                'title' => 'Python for Data Science',
                'issuer' => 'Coursera',
                'date' => '2025',
                'description' => 'Comprehensive Python programming course with data science applications.',
            ],
            [
                'title' => 'Cyber Security Fundamentals',
                'issuer' => 'Cisco Networking Academy',
                'date' => '2024',
                'description' => 'Introduction to cybersecurity concepts, threats, and defense mechanisms.',
            ],
            [
                'title' => 'Java Programming Masterclass',
                'issuer' => 'Udemy',
                'date' => '2024',
                'description' => 'Advanced Java programming concepts including OOP, collections, and multithreading.',
            ],
        ];
    @endphp

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($certificates as $cert)
            <div class="group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="glass-card p-6 rounded-2xl h-full hover:border-primary-500/30 transition-all duration-500 hover:-translate-y-1">
                    {{-- Certificate Icon --}}
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary-500/20 to-purple-500/20 border border-white/10 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>

                    <h3 class="text-base font-display font-bold text-white mb-2 group-hover:text-primary-400 transition-colors">
                        {{ $cert['title'] }}
                    </h3>
                    <p class="text-primary-400/80 text-sm font-medium mb-1">{{ $cert['issuer'] }}</p>
                    <p class="text-white/30 text-xs font-mono mb-3">{{ $cert['date'] }}</p>
                    <p class="text-white/40 text-sm leading-relaxed mb-5">{{ $cert['description'] }}</p>

                    <a href="#" class="inline-flex items-center gap-2 text-xs font-medium text-primary-400 hover:text-primary-300 transition-colors group/link">
                        View Certificate
                        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endcomponent
