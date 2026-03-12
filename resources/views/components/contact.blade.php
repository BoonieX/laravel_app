<section id="contact" class="py-24 grid md:grid-cols-2 gap-16 items-center">
    <div class="space-y-8">
        <span class="text-xs font-mono uppercase tracking-widest text-orange-600">Contact</span>
        <h2 class="text-5xl md:text-7xl font-serif font-bold text-stone-900 tracking-tight leading-[0.9]">
            Let's build something real.
        </h2>
        <p class="text-xl text-stone-500 font-light leading-relaxed max-w-md">
            All text, projects, and placeholder visuals are centralized so the page can be swapped from demo mode to a real portfolio.
        </p>
    </div>

    <div class="flex flex-col items-start md:items-end gap-6">
        <a href="mailto:{{ $contact['email'] }}" class="text-3xl md:text-4xl font-serif text-stone-900 hover:text-orange-700 transition-colors border-b-2 border-transparent hover:border-orange-200">
            {{ $contact['email'] }}
        </a>
        <div class="flex gap-6 mt-4">
            @foreach(['instagram', 'vimeo'] as $social)
                @if(isset($contact[$social]))
                    <a href="https://{{ $contact[$social] }}" target="_blank" class="text-stone-400 hover:text-stone-900 uppercase tracking-widest text-xs font-mono transition-colors">
                        {{ $social }}
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</section>
