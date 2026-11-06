<section id="suscribirse" {{ $attributes->merge(['class' => 'relative overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-br from-white/[0.07] to-white/[0.02] p-6 sm:p-10']) }}>
    <div aria-hidden="true" class="pointer-events-none absolute -right-16 -top-20 size-56 rounded-full bg-amber-300/10 blur-3xl"></div>

    <div class="relative">
        <div class="max-w-xl">
            <h2 class="text-2xl font-semibold tracking-tight text-white sm:text-3xl">
                Sé de los primeros en leerlo.
            </h2>
            <p class="mt-3 text-sm leading-6 text-slate-400 sm:text-base">
                Déjanos tu correo y te avisaremos el día del lanzamiento. Solo lo importante, nada de ruido.
            </p>
        </div>

        @if (session('status'))
            <div role="status" class="mt-6 flex items-start gap-3 rounded-xl border border-emerald-300/20 bg-emerald-300/10 px-4 py-3 text-sm text-emerald-100">
                <svg class="mt-0.5 size-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <form method="POST" action="{{ route('subscribers.store') }}" class="mt-6 flex flex-col gap-3 sm:flex-row">
            @csrf

            <div class="flex-1">
                <label for="email" class="sr-only">Correo electrónico</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    value="{{ old('email') }}"
                    placeholder="tu@correo.com"
                    autocomplete="email"
                    required
                    @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                    class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-amber-300 focus:outline-none focus:ring-2 focus:ring-amber-300/20 @error('email') border-red-400/60 @enderror"
                >

                @error('email')
                    <p id="email-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="inline-flex items-center justify-center gap-2 rounded-xl bg-amber-300 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-amber-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
            >
                Avísame
                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </button>
        </form>

        <p class="mt-3 text-xs text-slate-500">
            Al suscribirte aceptas recibir un único correo de lanzamiento. Sin spam.
        </p>
    </div>
</section>
