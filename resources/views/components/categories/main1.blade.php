@props(['categories'])
<nav class="sticky top-15 z-50 bg-base-100/75 backdrop-blur-md scrollbar-hide" aria-label="Menu Categories">
    <div class="w-full relative">
        <!-- Arrows -->
        <div class="absolute left-2 top-1/2 -translate-y-1/2 z-10 opacity-60">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 text-base-content/60">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </div>
        <div class="absolute right-2 top-1/2 -translate-y-1/2 z-10 opacity-60 animate-pulse">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 text-base-content/60">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </div>

        <!-- Category links -->
        <ul class="flex overflow-x-auto gap-3 px-8 py-4 scrollbar-hide scroll-smooth">
            @foreach ($categories as $category)
                <li class="flex-shrink-0">
                    <a href="#category-{{ $category->slug }}"
                        class="px-4 py-2 rounded-full bg-base-300
                        border border-[#00a6bf] text-sm font-medium text-base-content
                        hover:bg-[#00bfa6] hover:text-white
                        transition-all duration-200 cursor-pointer"
                        title="{{ $category->name }} category"
                        itemprop="hasMenuSection"
                        itemscope itemtype="https://schema.org/MenuSection">
                        <span itemprop="name">{{ $category->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
