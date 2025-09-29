@props(['category'])
<section id="category-{{ $category->slug }}" class="scroll-mt-35" aria-label="Category: {{ $category->name }}">
    <div class="flex items-center my-10">
        <div class="flex-grow max-w-[60px] border-t border-gray-300"></div>
        <div class="flex items-center gap-3 px-4">
            <!-- Category icon -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                    clip-rule="evenodd" />
            </svg>

            <!-- Category title + description -->
            <div class="flex-col">
                <!-- Use <h2> for SEO correctness -->
                <h2 class="font-bold text-2xl" itemprop="name">{{ $category->name }}</h2>

                @if ($category->description)
                    <p class="text-sm text-gray-500 mt-0" itemprop="description">
                        {{ $category->description }}
                    </p>
                @endif
            </div>
        </div>
    </div>


</section>
