<div class="container mx-auto py-12 px-6 text-center">
    <div class="absolute top-[-150px] left-[-150px] w-[400px] h-[400px] opacity-40 blur-3xl z-0">
        <img src="/images/red-circle-svgrepo-com.svg" alt="Decorative SVG" class="w-full h-full object-cover">
    </div>
    <!-- Page Title -->
    <h2 class="text-4xl font-bold text-[var(--color-accent)]">Certificates</h2>
    <p class="mt-2 text-[var(--color-text)]">My achievements and certifications.</p>

    <!-- Certificates Grid -->
    <div class="mt-8 grid gap-6"
        :class="{ 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3': {{ count($certificates) }} >
            1, 'grid-cols-1 max-w-lg mx-auto': {{ count($certificates) }} == 1 }">

        @foreach ($certificates as $certificate)
            <div
                class="p-6 bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] border border-[var(--color-accent-content)] rounded-lg shadow-lg transition-transform hover:scale-105">
                <!-- Certificate Image -->
                <img src="{{ $certificate['image'] }}" alt="{{ $certificate['title'] }}"
                    class="w-full h-64 object-cover rounded-lg shadow-md">

                <!-- Certificate Details -->
                <div class="mt-4">
                    <h3 class="text-2xl font-semibold text-[var(--color-accent)]">{{ $certificate['title'] }}</h3>
                    <p class="mt-1 text-[var(--color-text)]">{{ $certificate['issuer'] }}</p>
                    <p class="mt-1 text-sm opacity-80">{{ $certificate['date'] }}</p>
                </div>

                <!-- View Button -->
                <div class="mt-6">
                    <a href="{{ $certificate['link'] }}" target="_blank"
                        class="px-5 py-2 bg-[var(--color-accent)] text-[var(--color-accent-foreground)] rounded-lg shadow-lg hover:bg-[var(--color-accent-content)] transition">
                        View Certificate
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
