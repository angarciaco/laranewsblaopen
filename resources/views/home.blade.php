@extends('layouts.app')

@section('title', config('site.name').' — Muy pronto')
@section('description', 'Un nuevo sitio de noticias está en camino: información rigurosa, análisis con contexto y una lectura sin ruido. Suscríbete para enterarte del lanzamiento.')

@section('content')
    <div class="relative isolate overflow-hidden">
        <div aria-hidden="true" class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-[42rem] bg-hero-glow"></div>
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10 bg-hero-grid opacity-60"></div>

        <section class="mx-auto max-w-5xl px-6 pb-16 pt-16 text-center sm:pt-24 lg:px-8">
            <span class="inline-flex items-center gap-2 rounded-full border border-amber-300/20 bg-amber-300/10 px-4 py-1.5 text-[0.65rem] font-semibold uppercase tracking-[0.2em] text-amber-200">
                <span class="size-1.5 animate-pulse rounded-full bg-amber-300 motion-reduce:animate-none"></span>
                Edición inaugural
            </span>

            <h1 class="mx-auto mt-8 max-w-4xl text-balance text-5xl font-semibold tracking-tight text-white sm:text-6xl lg:text-7xl">
                Muy pronto, las noticias tendrán <span class="text-amber-300">otro ritmo.</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-pretty text-lg leading-8 text-slate-300 sm:text-xl">
                Estamos construyendo un nuevo medio digital: información rigurosa, análisis con contexto y una experiencia de lectura que respeta tu tiempo. Un solo lugar para entender lo que está pasando.
            </p>

            <div class="mt-9 flex flex-col items-center justify-center gap-3 sm:flex-row">
                <a href="#suscribirse" class="inline-flex items-center justify-center gap-2 rounded-xl bg-amber-300 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-amber-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950">
                    Quiero enterarme
                    <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
                <a href="#vision" class="inline-flex items-center justify-center rounded-xl border border-white/15 bg-white/5 px-5 py-3 text-sm font-semibold text-white transition hover:border-white/25 hover:bg-white/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-300 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950">
                    Conoce la visión
                </a>
            </div>

            <div class="mx-auto mt-16 max-w-2xl">
                <p class="text-[0.65rem] font-medium uppercase tracking-[0.3em] text-slate-500">
                    Cuenta regresiva para el lanzamiento
                </p>

                <div
                    class="mt-5 grid grid-cols-4 gap-2 sm:gap-4"
                    data-countdown
                    data-launch-at="{{ $launchAt }}"
                    aria-label="Cuenta regresiva para el lanzamiento"
                >
                    @foreach (['days' => 'Días', 'hours' => 'Horas', 'minutes' => 'Minutos', 'seconds' => 'Segundos'] as $unit => $label)
                        <div class="rounded-2xl border border-white/10 bg-white/[0.04] px-2 py-4 backdrop-blur-sm sm:px-4 sm:py-6">
                            <span class="block text-2xl font-semibold tabular-nums tracking-tight text-white sm:text-4xl" data-countdown-unit="{{ $unit }}">00</span>
                            <span class="mt-1 block text-[0.6rem] font-medium uppercase tracking-[0.18em] text-slate-400 sm:text-xs">{{ $label }}</span>
                        </div>
                    @endforeach
                </div>

                <p class="mt-5 text-sm text-amber-200" data-countdown-complete hidden>
                    Estamos afinando los últimos detalles. Vuelve pronto.
                </p>

                <noscript>
                    <p class="mt-5 text-sm text-slate-400">
                        El lanzamiento está muy cerca. Suscríbete y te avisaremos.
                    </p>
                </noscript>
            </div>
        </section>

        <div class="mx-auto max-w-3xl px-6 pb-20 lg:px-8">
            <x-subscribe-form />
        </div>

        <section id="vision" class="border-t border-white/5 bg-white/[0.02]">
            <div class="mx-auto max-w-6xl px-6 py-20 lg:px-8">
                <div class="max-w-2xl">
                    <p class="text-[0.65rem] font-semibold uppercase tracking-[0.25em] text-amber-300">
                        La visión
                    </p>
                    <h2 class="mt-3 text-balance text-3xl font-semibold tracking-tight text-white sm:text-4xl">
                        Un nuevo hogar para entender lo que pasa.
                    </h2>
                    <p class="mt-4 text-pretty text-base leading-7 text-slate-400">
                        Estamos cuidando cada detalle para que informarse sea una experiencia clara, rápida y sin distracciones.
                    </p>
                </div>

                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <x-feature-card
                        icon="globe"
                        title="Mirada global"
                        description="Historias de todas partes, contadas con rigor y sin perder el contexto."
                    />
                    <x-feature-card
                        icon="analysis"
                        title="Análisis que suma"
                        description="No solo qué pasó: por qué importa y qué podría venir después."
                    />
                    <x-feature-card
                        icon="reading"
                        title="Lectura sin ruido"
                        description="Una experiencia ágil y limpia, diseñada para concentrarte en lo esencial."
                    />
                </div>
            </div>
        </section>
    </div>
@endsection
