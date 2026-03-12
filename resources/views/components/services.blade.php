<section id="services" class="py-24 space-y-16 bg-stone-100/50 -mx-4 px-4 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
    <div class="max-w-7xl mx-auto space-y-12">
        <div class="flex flex-col md:flex-row justify-between items-end gap-8 pb-8 border-b border-stone-200/50">
            <div class="space-y-4 max-w-2xl">
                <span class="text-xs font-mono uppercase tracking-widest text-orange-600">Services</span>
                <h2 class="text-5xl md:text-6xl font-serif font-bold text-stone-900 tracking-tight leading-[0.9]">
                    Expandable systems.
                </h2>
            </div>
            <p class="text-stone-500 max-w-sm text-sm leading-relaxed text-right md:text-left self-end">
                Modular layouts. Keep it as a landing page, or turn each project card into a full case study.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <article class="p-8 bg-white/80 backdrop-blur-sm rounded-2xl shadow-sm border border-stone-100">
                <span class="block mb-6 text-xs font-mono uppercase tracking-widest text-stone-400">Capabilities</span>
                <ul class="space-y-4">
                    @foreach($services as $service)
                        <li class="flex items-start gap-3 text-stone-600 border-b border-stone-100 pb-3 last:border-0">
                            <svg class="w-5 h-5 text-orange-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            {{ $service }}
                        </li>
                    @endforeach
                </ul>
            </article>

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
                @foreach($stats as $stat)
                    <article class="p-6 bg-stone-200/50 rounded-2xl flex flex-col justify-center items-center text-center gap-2">
                        <strong class="text-4xl font-serif font-bold text-stone-900">{{ $stat['value'] }}</strong>
                        <span class="text-xs font-mono uppercase tracking-widest text-stone-500">{{ $stat['label'] }}</span>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
