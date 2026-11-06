<footer class="relative z-10 border-t border-white/5">
    <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-6 py-8 text-center sm:flex-row sm:text-left lg:px-8">
        <p class="text-sm text-slate-500">
            &copy; {{ now()->year }} {{ config('site.name') }}. Todos los derechos reservados.
        </p>
        <p class="text-[0.65rem] uppercase tracking-[0.2em] text-slate-600">
            Hecho con Laravel · Blade · Tailwind CSS
        </p>
    </div>
</footer>
