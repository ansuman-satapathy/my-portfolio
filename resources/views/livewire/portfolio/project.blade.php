<div class="container mx-auto py-12 px-6 text-center">
    <div class="absolute top-[-150px] left-[-150px] w-[400px] h-[400px] opacity-40 blur-3xl z-0">
        <img src="/images/red-circle-svgrepo-com.svg" alt="Decorative SVG" class="w-full h-full object-cover">
    </div>
    <!-- Page Title -->
    <h2 class="text-4xl font-bold text-[var(--color-accent)]">Projects</h2>
    <p class="mt-2 text-[var(--color-text)]">
        A collection of my latest and personal works showcasing my expertise in
        <strong>Laravel, Livewire, DevOps, and more</strong>.
    </p>

    <!-- Projects Grid -->
    <div class="mt-8 grid gap-6"
        :class="{ 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3': {{ count($projects) }} >
            1, 'grid-cols-1 max-w-lg mx-auto': {{ count($projects) }} == 1 }">

        @foreach ($projects as $project)
            <div
                class="p-6 bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] border border-[var(--color-accent-content)] rounded-lg shadow-lg transition-transform hover:scale-105">
                <!-- Project Image -->
                <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                    class="w-full h-48 object-cover rounded-lg shadow-md">

                <!-- Project Details -->
                <div class="mt-4">
                    <h3 class="text-2xl font-semibold text-[var(--color-accent)]">{{ $project['title'] }}</h3>
                    <p class="mt-2 text-[var(--color-text)]">{{ $project['description'] }}</p>
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
        @endforeach
    </div>
</div>
