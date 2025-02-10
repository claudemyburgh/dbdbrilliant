export default class CountUp {
    private options: { selector: string; threshold: number; duration: number };
    private observer: IntersectionObserver;

    constructor(options = {}) {
        this.options = Object.assign(
            {
                selector: "[data-count]",
                threshold: 0.5,
                duration: 3000,
            },
            options
        );
        this.observer = new IntersectionObserver(this.handleIntersect.bind(this), { threshold: this.options.threshold });
        this.init();
    }

    init() {
        document.querySelectorAll(this.options.selector).forEach((element) => {
            // Adding a passive touchstart listener
            element.addEventListener('touchstart', () => {}, { passive: true });
            this.observer.observe(element);
        });
    }

    handleIntersect(entries: IntersectionObserverEntry[]) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                this.startCount(entry.target as HTMLElement);
                this.observer.unobserve(entry.target); // Stop observing after first trigger
            }
        });
    }

    startCount(element: HTMLElement) {
        const targetValue = parseInt(element.dataset.count || "0", 10);
        const duration = this.options.duration;
        let startTime: number | null = null;

        const easeOut = (t: number) => t * (2 - t); // Easing function for a smooth finish

        function animateCount(timestamp: number) {
            if (!startTime) startTime = timestamp;
            const elapsedTime = timestamp - startTime;
            const progress = Math.min(elapsedTime / duration, 1);
            element.textContent = Math.floor(easeOut(progress) * targetValue).toString();

            if (progress < 1) {
                requestAnimationFrame(animateCount);
            } else {
                element.textContent = targetValue.toString();
            }
        }

        requestAnimationFrame(animateCount);
    }
}
