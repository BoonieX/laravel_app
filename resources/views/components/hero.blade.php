<section id="top" class="min-h-[85vh] flex flex-col justify-end gap-12 py-20 relative">
    <div class="absolute inset-0 -z-10 bg-gradient-to-br from-orange-50/50 via-stone-50/20 to-transparent opacity-60"></div>

    <div class="max-w-4xl space-y-8 animate-fade-in-up">
        <span class="inline-block py-1 px-3 border border-orange-200 rounded-full text-xs font-mono uppercase tracking-widest text-orange-800 bg-orange-50/50 backdrop-blur-sm">
            {{ $identity['location'] ?? 'Available Worldwide' }}
        </span>

        <h1 class="text-6xl md:text-8xl lg:text-9xl font-serif font-bold leading-[0.85] tracking-tighter text-stone-900">
            Sharper stories.<br>
            <span class="text-stone-400">Better pacing.</span><br>
            Real weight.
        </h1>

        <p class="text-xl md:text-2xl text-stone-600 max-w-2xl font-light leading-relaxed">
            {{ $identity['intro'] ?? 'Editorial portfolio systems for fashion, culture, and product stories.' }}
        </p>

        <div class="flex flex-wrap gap-4 pt-4">
            <a href="#work" class="group relative px-8 py-4 bg-stone-900 text-stone-50 rounded-full font-bold overflow-hidden transition-transform hover:-translate-y-1 active:translate-y-0 shadow-lg hover:shadow-xl hover:bg-stone-800">
                <span class="relative z-10 flex items-center gap-2">
                    View Selected Work
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </span>
            </a>
            <a href="#contact" class="px-8 py-4 bg-white border border-stone-200 text-stone-600 rounded-full font-medium hover:bg-stone-50 hover:border-stone-300 hover:text-stone-900 transition-colors shadow-sm">
                Start a Project
            </a>
        </div>
    </div>

    @if(isset($proofs))
        <ul class="flex flex-wrap gap-3 mt-12 border-t border-stone-200/60 pt-8" aria-label="Portfolio highlights">
            @foreach($proofs as $proof)
                <li class="px-4 py-2 border border-stone-200 bg-white/50 backdrop-blur-sm rounded-full text-xs text-stone-500 font-mono tracking-wide uppercase">
                    {{ $proof }}
                </li>
            @endforeach
        </ul>
    @endif
</section>
