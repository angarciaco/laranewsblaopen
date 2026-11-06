const countdown = document.querySelector('[data-countdown]');

if (countdown instanceof HTMLElement) {
    const launchAt = Date.parse(countdown.dataset.launchAt ?? '');
    const completeMessage = document.querySelector('[data-countdown-complete]');
    const units = {
        days: countdown.querySelector('[data-countdown-unit="days"]'),
        hours: countdown.querySelector('[data-countdown-unit="hours"]'),
        minutes: countdown.querySelector('[data-countdown-unit="minutes"]'),
        seconds: countdown.querySelector('[data-countdown-unit="seconds"]'),
    };

    if (Number.isNaN(launchAt)) {
        console.warn('La fecha de lanzamiento configurada no es válida.');
    } else if (Object.values(units).every(Boolean)) {
        const pad = (value) => String(value).padStart(2, '0');

        const updateCountdown = () => {
            const remaining = launchAt - Date.now();

            if (remaining <= 0) {
                countdown.hidden = true;
                completeMessage?.removeAttribute('hidden');
                window.clearInterval(timer);

                return;
            }

            const totalSeconds = Math.floor(remaining / 1000);

            units.days.textContent = pad(Math.floor(totalSeconds / 86400));
            units.hours.textContent = pad(Math.floor((totalSeconds % 86400) / 3600));
            units.minutes.textContent = pad(Math.floor((totalSeconds % 3600) / 60));
            units.seconds.textContent = pad(totalSeconds % 60);
        };

        const timer = window.setInterval(updateCountdown, 1000);
        updateCountdown();
    }
}
