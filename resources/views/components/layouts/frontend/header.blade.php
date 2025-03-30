<div class="fixed top-0 left-0 w-full bg-[var(--color-bg)] shadow-2xl z-50">
    <nav x-data="{ open: false, active: window.location.pathname, darkMode: true }"
        x-init="darkMode = localStorage.getItem('darkMode') !== 'false'; 
                document.documentElement.classList.toggle('dark', darkMode)"
        class="container mx-auto flex justify-between items-center py-5 px-6">

        <!-- Logo -->
        <a href="/" wire:navigate
            class="text-2xl font-bold text-[var(--color-accent)] transition-all duration-300 transform hover:scale-105">
            Ansuman
        </a>

        <!-- Desktop Navigation + Dark Mode -->
        <div class="hidden md:flex space-x-6 items-center">
            <template x-for="link in [
                { href: '/', label: 'Home' },
                { href: '/projects', label: 'Projects' },
                { href: '/blogs', label: 'Blogs' },
                { href: '/certificates', label: 'Certificates' },
                { href: '/contact', label: 'Contact' }
            ]">
                <a :href="link.href" wire:navigate
                    :class="active === link.href ? 'text-[var(--color-accent)] font-bold' : 'text-gray-700 dark:text-gray-300'"
                    @click="active = link.href"
                    class="hover:text-[var(--color-accent-content)] transition-all duration-300 transform hover:scale-110">
                    <span x-text="link.label"></span>
                </a>
            </template>

            <!-- Desktop Dark Mode Toggle -->
            <button @click="darkMode = !darkMode; 
                            localStorage.setItem('darkMode', darkMode); 
                            document.documentElement.classList.toggle('dark', darkMode)"
                class="p-2 w-10 h-10 flex items-center justify-center transition-all duration-300">
                <i x-show="!darkMode" class="fas fa-moon text-black dark:text-white text-lg transition-all duration-300"></i>
                <i x-show="darkMode" class="fas fa-sun text-black dark:text-white text-lg transition-all duration-300"></i>
            </button>
        </div>

        <!-- Mobile: Menu Button -->
        <button @click="open = !open" class="md:hidden block focus:outline-none">
            <i class="fas fa-bars text-xl text-[var(--color-text)]"></i>
        </button>

        <!-- Mobile Dropdown (With Dark Mode Inside) -->
        <div class="absolute top-16 right-4 w-48 bg-[var(--color-bg)] shadow-lg rounded-lg md:hidden"
            x-show="open" @click.away="open = false" x-transition>
            <div class="flex flex-col space-y-4 p-4">
                <template x-for="link in [
                    { href: '/', label: 'Home' },
                    { href: '/projects', label: 'Projects' },
                    { href: '/blogs', label: 'Blogs' },
                    { href: '/certificates', label: 'Certificates' },
                    { href: '/contact', label: 'Contact' }
                ]">
                    <a :href="link.href" wire:navigate
                        class="block text-gray-700 dark:text-gray-300 text-center py-2 hover:text-[var(--color-accent-content)]"
                        @click="open = false; active = link.href">
                        <span x-text="link.label"></span>
                    </a>
                </template>

                <!-- Mobile Dark Mode Toggle -->
                <button @click="darkMode = !darkMode; 
                                localStorage.setItem('darkMode', darkMode); 
                                document.documentElement.classList.toggle('dark', darkMode)"
                    class="w-full flex justify-center items-center py-2 border-t border-gray-300 dark:border-gray-700">
                    <i x-show="!darkMode" class="fas fa-moon text-black dark:text-white text-lg transition-all duration-300"></i>
                    <i x-show="darkMode" class="fas fa-sun text-black dark:text-white text-lg transition-all duration-300"></i>
                    <span class="ml-2 text-gray-700 dark:text-gray-300">Dark Mode</span>
                </button>
            </div>
        </div>
    </nav>
</div>
