<section id="work" class="py-24 space-y-16">
    <div class="flex flex-col md:flex-row justify-between items-end gap-8 pb-8 border-b border-stone-200">
        <div class="space-y-4 max-w-2xl">
            <span class="text-xs font-mono uppercase tracking-widest text-orange-600">Selected Work</span>
            <h2 class="text-5xl md:text-7xl font-serif font-bold text-stone-900 tracking-tight leading-[0.9]">
                Image-led case studies.
            </h2>
        </div>
        <p class="text-stone-500 max-w-sm text-sm leading-relaxed text-right md:text-left self-end">
            Clear hierarchy: one dominant promise in the hero, proof close to the CTA, and strong project imagery.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projects as $project)
            <article class="group relative flex flex-col gap-4 {{ $project['featured'] ? 'md:col-span-2 lg:col-span-2' : '' }}">
                <div class="relative overflow-hidden rounded-2xl bg-stone-200 aspect-[4/3] {{ $project['featured'] ? 'md:aspect-[16/9]' : '' }}">
                    <span class="absolute top-4 left-4 z-10 px-3 py-1 bg-stone-900/80 backdrop-blur-md text-stone-50 text-xs font-mono rounded-full">
                        {{ $project['index'] }} / {{ $project['category'] }}
                    </span>
                    
                    @if(isset($project['image']))
                        <!-- Placeholder for real image since we might not have the assets yet -->
                        <div class="w-full h-full bg-stone-300 group-hover:scale-105 transition-transform duration-700 ease-out flex items-center justify-center text-stone-400">
                           <span class="sr-only">{{ $project['title'] }} Image</span>
                           <svg class="w-12 h-12 opacity-20" fill="currentColor" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                        </div>
                    @endif
                </div>

                <div class="flex justify-between items-baseline border-b border-stone-200 pb-4 group-hover:border-stone-900 transition-colors">
                    <div>
                        <h3 class="text-2xl font-serif font-bold text-stone-900 group-hover:text-orange-700 transition-colors">
                            {{ $project['title'] }}
                        </h3>
                        <p class="text-stone-500 text-sm mt-1">{{ $project['summary'] }}</p>
                    </div>
                    <span class="text-xs font-mono text-stone-400">{{ $project['year'] }}</span>
                </div>
            </article>
        @endforeach
    </div>
</section>
