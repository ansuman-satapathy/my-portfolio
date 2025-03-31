<div class="relative w-full min-h-screen bg-[var(--color-bg)] text-[var(--color-text)] overflow-hidden"
    x-data="{ ready: false }" x-init="ready = true" wire:init="loadProjects">

    <!-- Background Decorations -->
    <div class="absolute top-[-150px] left-[-150px] w-[400px] h-[400px] opacity-40 blur-3xl z-10">
        <img src="/images/red-circle-svgrepo-com.svg" alt="Decorative SVG" class="w-full h-full object-cover">
    </div>

    <!-- Projects Section -->
    <div class="container mx-auto text-center py-10 px-6">
        <h2 class="text-4xl font-bold text-[var(--color-accent)] animate-fade-in">Projects</h2>
        <p class="mt-2 opacity-90">
            A collection of my latest/personal works showcasing my expertise in <strong>Laravel, Livewire, DevOps, and
                more</strong>.
        </p>

        <!-- Swiper Slider -->
        <div class="mt-12 swiper-container" x-show="ready">
            <div class="swiper-wrapper">
                @foreach ($projects as $project)
                    <div class="swiper-slide">
                        <div
                            class="p-6 bg-[var(--color-bg)] border border-[var(--color-accent-content)] rounded-lg shadow-lg overflow-hidden">

                            <!-- Project Image -->
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                class="w-full h-48 object-cover rounded-lg shadow-md">

                            <!-- Project Details -->
                            <div class="mt-4">
                                <h3 class="text-2xl font-semibold text-[var(--color-accent)]">
                                    {{ $project['title'] }}
                                </h3>
                                <p class="mt-2 opacity-90">{{ $project['description'] }}</p>
                            </div>

                            <!-- Tech Stack -->
                            <div class="mt-4 flex flex-wrap justify-center gap-2">
                                @foreach ($project['tech'] as $tech)
                                    <span
                                        class="px-3 py-1 bg-[var(--color-accent-content)] text-[var(--color-accent-foreground)] rounded-full text-sm shadow-md">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>

                            <!-- View Button -->
                            <div class="mt-6">
                                <a href="{{ $project['link'] }}" target="_blank"
                                    class="px-5 py-2 bg-[var(--color-accent)] text-[var(--color-accent-foreground)] rounded-lg shadow-lg hover:bg-[var(--color-accent-content)] transition">
                                    View Project
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Decorative Element Bottom -->
    <div class="absolute bottom-[-150px] right-[-150px] w-[400px] h-[400px] opacity-40 blur-3xl z-10">
        <img src="/images/red-circle-svgrepo-com.svg" alt="Decorative SVG" class="w-full h-full object-cover">
    </div>
</div>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function initSwiper() {
            if (window.swiperInstance) {
                window.swiperInstance.destroy(true, true);
            }

            window.swiperInstance = new Swiper('.swiper-container', {
                loop: true,
                spaceBetween: 20,
                slidesPerView: 1,
                breakpoints: {
                    1024: {
                        slidesPerView: 3
                    }
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        }

        initSwiper();

        document.addEventListener('livewire:navigated', () => {
            setTimeout(initSwiper, 100);
        });
    });
</script>
