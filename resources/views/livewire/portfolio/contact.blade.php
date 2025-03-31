<div class="container mx-auto py-12 items-center justify-center text-center px-4 md:px-0">
    <div class="absolute top-[-150px] left-[-150px] w-[400px] h-[400px] opacity-40 blur-3xl z-0">
        <img src="/images/red-circle-svgrepo-com.svg" alt="Decorative SVG" class="w-full h-full object-cover">
    </div>

    <h2 class="text-3xl font-bold text-[var(--color-accent)]">Contact</h2>
    <p class="mt-2 text-[var(--color-text)]">Get in touch with me.</p>

    <div wire:loading wire:target="submitForm" class="mt-4 text-[var(--color-accent)]">Sending...</div>
    <div wire:loading wire:target="submitForm" class="spinner-border animate-spin text-[var(--color-accent)] mt-4"
        role="status">
        <span class="sr-only">Loading...</span>
    </div>

    @if (session()->has('success'))
        <div class="text-[var(--color-accent)] mt-4">{{ session('success') }}</div>
    @endif

    @if (session()->has('error'))
        <div class="text-[var(--color-accent)] mt-4">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="submitForm" class="mt-8 space-y-4 mx-auto max-w-lg w-full">
        <input type="text" wire:model="name" placeholder="Your Name" required
            class="w-full p-4 rounded-lg bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] text-[var(--color-text)] focus:outline-none border-[1px] border-[var(--color-accent-light)] hover:border-[var(--color-accent)] focus:border-[var(--color-accent)]">

        <input type="email" wire:model="email" placeholder="Your Email" required
            class="w-full p-4 rounded-lg bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] text-[var(--color-text)] focus:outline-none border-[1px] border-[var(--color-accent-light)] hover:border-[var(--color-accent)] focus:border-[var(--color-accent)]">

        <textarea wire:model="userMessage" placeholder="Your Message" rows="6" required
            class="w-full p-4 rounded-lg bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] text-[var(--color-text)] focus:outline-none border-[1px] border-[var(--color-accent-light)] hover:border-[var(--color-accent)] focus:border-[var(--color-accent)]"></textarea>

        <button type="submit" wire:loading.attr="disabled"
            class="w-full py-3 px-6 rounded-lg bg-[var(--color-accent)] text-white hover:bg-[var(--color-accent-dark)] transition duration-300">
            Send Message
        </button>
    </form>

    <!-- Social Links -->
    <div class="mt-8 flex justify-center gap-6 flex-wrap">
        <a href="https://github.com/ansuman-satapathy" target="_blank"
            class="social-icon w-12 h-12 flex items-center justify-center bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] rounded-full shadow-md transition-transform hover:scale-105 border-[1px] border-[var(--color-accent-light)] hover:border-[var(--color-accent)]">
            <i class="fab fa-github text-[var(--color-accent)] text-2xl"></i>
        </a>
        <a href="https://x.com/ansumantwts" target="_blank"
            class="social-icon w-12 h-12 flex items-center justify-center bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] rounded-full shadow-md transition-transform hover:scale-105 border-[1px] border-[var(--color-accent-light)] hover:border-[var(--color-accent)]">
            <i class="fab fa-twitter text-[var(--color-accent)] text-2xl"></i>
        </a>
        <a href="https://www.linkedin.com/in/ansuman-satapathy/" target="_blank"
            class="social-icon w-12 h-12 flex items-center justify-center bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] rounded-full shadow-md transition-transform hover:scale-105 border-[1px] border-[var(--color-accent-light)] hover:border-[var(--color-accent)]">
            <i class="fab fa-linkedin-in text-[var(--color-accent)] text-2xl"></i>
        </a>
        <a href="https://discord.com/users/793470656851214357" target="_blank"
            class="social-icon w-12 h-12 flex items-center justify-center bg-[var(--color-bg-light)] dark:bg-[var(--color-bg-dark)] rounded-full shadow-md transition-transform hover:scale-105 border-[1px] border-[var(--color-accent-light)] hover:border-[var(--color-accent)]">
            <i class="fab fa-discord text-[var(--color-accent)] text-2xl"></i>
        </a>
    </div>
</div>
