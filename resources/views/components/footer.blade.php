<footer class="py-12 mt-16 border-t border-stone-200">
    <div class="flex flex-col md:flex-row justify-between items-start gap-8">
        <div>
            <h3 class="font-serif text-2xl mb-2">{{ $identity['name'] ?? 'Portfolio' }}</h3>
            <p class="text-stone-500 max-w-xs text-sm leading-relaxed">
                {{ $identity['intro'] ?? 'Editorial portfolio systems for fashion, culture, and product stories.' }}
            </p>
        </div>

        <div class="flex flex-col gap-4 text-right">
            <span class="font-mono text-xs uppercase tracking-widest text-stone-400">Socials</span>
            @if(isset($contact))
                @foreach($contact as $platform => $handle)
                    @if($platform !== 'email')
                        <a href="https://{{ $handle }}" target="_blank" class="text-stone-600 hover:text-orange-700 transition-colors capitalize">
                            {{ ucfirst($platform) }}
                        </a>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
    <div class="mt-12 pt-8 border-t border-stone-100 flex justify-between items-center text-xs text-stone-400 font-mono uppercase tracking-widest">
        <span>&copy; {{ date('Y') }} {{ $identity['name'] ?? 'Portfolio' }}. All rights reserved.</span>
        <span>Bangkok &bull; Worldwide</span>
    </div>
</footer>
