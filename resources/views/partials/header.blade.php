<header class="relative z-20">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-6 py-6 lg:px-8">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2.5 rounded-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-300 focus-visible:ring-offset-4 focus-visible:ring-offset-slate-950">
            <span class="grid size-9 place-items-center rounded-lg bg-amber-300 text-slate-950 shadow-lg shadow-amber-400/20">
                <svg class="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M12 1.5 14.7 9.3 22.5 12l-7.8 2.7L12 22.5l-2.7-7.8L1.5 12l7.8-2.7L12 1.5Z"/>
                </svg>
            </span>
            <span class="text-sm font-semibold uppercase tracking-[0.25em] text-white">
                {{ config('site.name') }}
            </span>
        </a>

        <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-[0.65rem] font-medium uppercase tracking-[0.2em] text-slate-300">
            <span class="size-1.5 rounded-full bg-amber-300"></span>
            Próximamente
        </span>
    </div>
</header>
