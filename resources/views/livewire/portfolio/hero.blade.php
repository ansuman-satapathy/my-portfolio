<div class="relative w-full min-h-screen mt-[-15px] bg-[var(--color-bg)] overflow-hidden">
    <!-- Blurry Sun SVG (Top Left) -->
    <div class="absolute top-[-150px] left-[-150px] w-[400px] h-[400px] opacity-40 blur-3xl z-10">
        <img src="/images/red-circle-svgrepo-com.svg" alt="Decorative SVG" class="w-full h-full object-cover">
    </div>

    <!-- Hero Section -->
    <div class="relative flex flex-col items-center justify-center text-center px-6 min-h-screen">
        <div class="relative z-10 px-6 animate-fade-in">
            <h1
                class="text-5xl font-extrabold text-[var(--color-accent)] dark:text-[var(--color-accent-content)] drop-shadow-lg">
                Hi, I'm <strong>Ansuman Satapathy</strong>
            </h1>
            <p class="text-[var(--color-text)] mt-4 text-lg max-w-2xl mx-auto opacity-90">
                A <strong>Full-Stack Developer & DevOps Engineer</strong> passionate about <strong>automation, cloud
                    infrastructure,
                    and high-performance web applications</strong>.
            </p>

            <div class="mt-6 flex justify-center space-x-4">
                <a href="/projects" wire:navigate
                    class="px-6 py-3 bg-[var(--color-accent)] text-[var(--color-accent-foreground)] rounded-lg hover:bg-[var(--color-accent-content)] transition shadow-lg animate-bounce">
                    View Projects
                </a>
                <a href="/contact" wire:navigate
                    class="px-6 py-3 border-2 border-[var(--color-accent)] text-[var(--color-accent)] rounded-lg hover:bg-[var(--color-accent)] hover:text-white transition shadow-lg animate-bounce">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="relative py-20 px-6 bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-[var(--color-accent)] animate-fade-in">
                About Me
            </h2>
            <p class="text-[var(--color-text)] mt-4">
                I'm <strong>Ansuman Satapathy,</strong> a passionate <strong>DevOps Engineer &
                    Full-Stack Developer</strong>
                specializing in <strong>high-performance web applications and scalable infrastructure</strong>.
            </p>
            <p class="text-[var(--color-text)] mt-4">
                My expertise spans <strong>Docker, AWS, GitHub Actions, GitLab CI/CD, and Nginx</strong> for
                <strong>automated deployments</strong> and <strong>cloud scaling</strong>.
                As a developer, I build robust applications using <strong>Laravel, Livewire, Alpine.js, and Tailwind
                    CSS</strong> while ensuring database efficiency with <strong>MySQL, PostgreSQL, and Redis</strong>.
            </p>
            <p class="text-[var(--color-text)] mt-4">
                Passionate about <strong>automation, performance optimization, and test-driven development
                    (PEST)</strong>,
                I focus on delivering <strong>efficient, secure, and scalable solutions</strong>. Whether it’s designing
                <strong>cloud-native architectures</strong> or <strong>enhancing user experiences</strong>, I bring
                <strong>precision and innovation</strong> to every project.
            </p>
            <p class="text-[var(--color-text)] mt-4 font-semibold">
                Let’s collaborate and create something extraordinary!
            </p>
        </div>
    </section>


    <!-- Separator -->
    <div class="my-12 w-full overflow-hidden">
        <svg class="w-full h-24" viewBox="0 0 1440 320">
            <path fill="var(--color-accent)" fill-opacity="1"
                d="M0,320L48,293.3C96,267,192,213,288,208C384,203,480,245,576,245.3C672,245,768,203,864,186.7C960,171,1056,181,1152,202.7C1248,224,1344,256,1392,272L1440,288L1440,320L0,320Z">
            </path>
        </svg>
    </div>


    <!-- Skills Section -->
    <section class="py-20 px-6 bg-[var(--color-bg)] text-center">
        <div class="max-w-4xl mx-auto">
            <!-- Development Skills -->
            <h2 class="text-4xl font-bold text-[var(--color-accent)] animate-slide-in">
                💻 Development
            </h2>
            <p class="text-[var(--color-text)] mt-4">Tools & technologies I use for crafting powerful applications.</p>

            <div class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ([['icon' => 'fab fa-laravel text-red-500', 'label' => 'Laravel'], ['icon' => 'fas fa-bolt text-purple-500', 'label' => 'Livewire'], ['icon' => 'fas fa-mountain text-yellow-500', 'label' => 'Alpine.js'], ['icon' => 'fas fa-code text-blue-500', 'label' => 'Tailwind CSS'], ['icon' => 'fas fa-database text-blue-500', 'label' => 'MySQL / PostgreSQL'], ['icon' => 'fa-solid fa-server', 'label' => 'SQLite'], ['icon' => 'fas fa-memory text-gray-500', 'label' => 'Redis'], ['icon' => 'fas fa-vial text-green-500', 'label' => 'PEST Testing']] as $skill)
                    <div
                        class="p-4 border rounded-lg shadow-md transition transform hover:scale-110 hover:shadow-xl hover:bg-[var(--color-accent-light)] dark:hover:bg-[var(--color-accent-dark)]">
                        <i class="{{ $skill['icon'] }} text-4xl"></i>
                        <p class="mt-2">{{ $skill['label'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Separator -->
            <div class="my-12 w-full overflow-hidden">
                <svg class="w-full h-24" viewBox="0 0 1440 320">
                    <path fill="var(--color-accent)" fill-opacity="1"
                        d="M0,320L48,293.3C96,267,192,213,288,208C384,203,480,245,576,245.3C672,245,768,203,864,186.7C960,171,1056,181,1152,202.7C1248,224,1344,256,1392,272L1440,288L1440,320L0,320Z">
                    </path>
                </svg>
            </div>

            <!-- DevOps Skills -->
            <h2 class="text-4xl font-bold text-[var(--color-accent)] animate-slide-in">
                ⚙️ DevOps & Cloud
            </h2>
            <p class="text-[var(--color-text)] mt-4">Tech stack for scaling and automating deployments.</p>

            <div class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ([['icon' => 'fab fa-docker text-blue-500', 'label' => 'Docker'], ['icon' => 'fab fa-linux text-gray-800', 'label' => 'Linux'], ['icon' => 'fas fa-terminal text-green-500', 'label' => 'Bash Scripting'], ['icon' => 'fab fa-aws text-orange-500', 'label' => 'AWS'], ['icon' => 'fas fa-cloud text-gray-500', 'label' => 'Laravel Cloud'], ['icon' => 'fas fa-server text-blue-500', 'label' => 'Nginx'], ['icon' => 'fas fa-user-cog text-gray-700', 'label' => 'Server Admin'], ['icon' => 'fa-brands fa-github', 'label' => 'GitHub Actions (CI/CD)']] as $skill)
                    <div
                        class="p-4 border rounded-lg shadow-md transition transform hover:scale-110 hover:shadow-xl hover:bg-[var(--color-accent-light)] dark:hover:bg-[var(--color-accent-dark)]">
                        <i class="{{ $skill['icon'] }} text-4xl"></i>
                        <p class="mt-2">{{ $skill['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section class="py-20 px-6 bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-[var(--color-accent)] animate-slide-in">
                Contact Me
            </h2>
            <p class="text-[var(--color-text)] mt-4">
                Interested in working together? Let’s connect and discuss opportunities!
            </p>

            <div class="mt-6">
                <a href="/contact" wire:navigate
                    class="px-6 py-3 bg-[var(--color-accent)] text-[var(--color-accent-foreground)] rounded-lg hover:bg-[var(--color-accent-content)] shadow-lg">
                    Reach Out
                </a>
            </div>
        </div>
    </section>

    <!-- Blurry Sun SVG (Bottom Right) -->
    <div class="absolute bottom-[-150px] right-[-150px] w-[400px] h-[400px] opacity-40 blur-3xl z-10">
        <img src="/images/red-circle-svgrepo-com.svg" alt="Decorative SVG" class="w-full h-full object-cover">
    </div>
</div>
