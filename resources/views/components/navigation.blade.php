<header class="sticky top-0 z-50 py-4 mb-8 bg-stone-50/90 backdrop-blur-md flex items-center justify-between border-b border-stone-200/50">
    <div class="flex flex-col gap-0.5">
        <a href="/" class="text-xl font-bold tracking-tight text-stone-900 font-serif">
            {{ $identity['name'] ?? 'Portfolio' }}
        </a>
        <span class="text-xs uppercase tracking-widest text-stone-500 font-mono">
            {{ $identity['role'] ?? 'Creative Director' }}
        </span>
    </div>

    <nav class="hidden md:flex gap-6 items-center">
        @foreach(['#work' => 'Selected Work', '#services' => 'Services', '#process' => 'Process', '#contact' => 'Contact'] as $href => $label)
            <a href="{{ $href }}" class="text-xs font-medium uppercase tracking-widest text-stone-600 hover:text-orange-700 transition-colors font-mono">
                {{ $label }}
            </a>
        @endforeach
    </nav>
</header>
