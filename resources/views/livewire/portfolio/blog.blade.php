<div class="relative container mx-auto py-12">
    <!-- Blurry Circles (Randomly Positioned) -->
    <div class="absolute top-[-150px] left-[-150px] w-[400px] h-[400px] opacity-40 blur-3xl z-0">
        <img src="/images/red-circle-svgrepo-com.svg" alt="Decorative SVG" class="w-full h-full object-cover">
    </div>
    <div class="absolute top-[30%] left-[10%] w-[200px] h-[200px] opacity-30 blur-3xl z-0">
        <img src="/images/red-circle-svgrepo-com.svg" alt="Decorative SVG" class="w-full h-full object-cover">
    </div>


    <h2 class="text-3xl font-bold text-[var(--color-accent)] text-center">Blogs</h2>
    <p class="mt-2 text-center text-[var(--color-text)]">Read my latest thoughts on development and tech.</p>

    <div class="mt-8">
        @forelse($posts as $post)
            <div class="blog-post-card mb-16 px-4 lg:px-16">
                <section class="blog-post-card-wrapper flex flex-wrap items-start flex-row">
                    <!-- Post Text Section -->
                    <div class="w-full lg:w-3/5">
                        <h2
                            class="blog-post-card-title mb-3 break-words font-heading text-2xl font-bold leading-tight text-slate-900 dark:text-white lg:text-3xl">
                            <a aria-label="{{ $post['title'] }}" href="https://ansumannn.hashnode.dev/{{ $post['slug'] }}"
                                target="_blank">
                                {{ $post['title'] }}
                            </a>
                        </h2>
                        <div
                            class="blog-post-card-meta mb-3 flex flex-row flex-wrap items-center font-heading text-sm font-medium text-slate-500 dark:text-slate-400">
                            <a aria-label="{{ $post['title'] }}" class="flex flex-row items-center gap-x-4"
                                href="https://ansumannn.hashnode.dev/{{ $post['slug'] }}" target="_blank">
                                <span
                                    class="blog-post-card-time">{{ \Carbon\Carbon::parse($post['publishedAt'])->format('M d, Y') }}</span>
                                <span class="flex items-center">
                                    <svg class="mr-1 h-4 w-4 fill-current" viewBox="0 0 384 512">
                                        <path
                                            d="M136 320h-16c-4.4 0-8 3.6-8 8v96c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-96c0-4.4-3.6-8-8-8zm64-96h-16c-4.4 0-8 3.6-8 8v192c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V232c0-4.4-3.6-8-8-8zm40 72v128c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V296c0-4.4-3.6-8-8-8h-16c-4.4 0-8 3.6-8 8zM369.9 97.98L286.02 14.1c-9-9-21.2-14.1-33.89-14.1H47.99C21.5.1 0 21.6 0 48.09v415.92C0 490.5 21.5 512 47.99 512h288.02c26.49 0 47.99-21.5 47.99-47.99V131.97c0-12.69-5.1-24.99-14.1-33.99zM256.03 32.59c2.8.7 5.3 2.1 7.4 4.2l83.88 83.88c2.1 2.1 3.5 4.6 4.2 7.4h-95.48V32.59zm95.98 431.42c0 8.8-7.2 16-16 16H47.99c-8.8 0-16-7.2-16-16V48.09c0-8.8 7.2-16.09 16-16.09h176.04v104.07c0 13.3 10.7 23.93 24 23.93h103.98v304.01z">
                                        </path>
                                    </svg>
                                    <span>{{ $post['views'] ?? '0' }} views</span>
                                </span>
                            </a>
                        </div>
                        <p
                            class="blog-post-card-brief block w-full break-words text-base leading-snug text-slate-700 hn-break-words dark:text-slate-400">
                            <a aria-label="{{ $post['title'] }}"
                                href="https://ansumannn.hashnode.dev/{{ $post['slug'] }}" target="_blank">
                                {{ Str::limit($post['brief'], 150) }}
                            </a>
                        </p>
                    </div>

                    <!-- Post Image Section -->
                    <div class="blog-post-card-cover mt-6 w-full lg:mt-0 lg:w-2/5 lg:pl-8">
                        <a class="block overflow-hidden rounded-lg border dark:border-slate-800"
                            aria-label="{{ $post['title'] }}"
                            href="https://ansumannn.hashnode.dev/{{ $post['slug'] }}" target="_blank">
                            <img alt="{{ $post['title'] }}" src="{{ $post['coverImage']['url'] }}"
                                class="w-full h-56 object-cover rounded-lg">
                        </a>
                    </div>
                </section>
            </div>
        @empty
            <p class="text-gray-500 text-center">No blogs found.</p>
        @endforelse
    </div>
    
</div>
