@props(['product'])
@php
    $image = $product->getFirstMediaUrl();
    // Custom price formatting to display 10 or 10.50, but not 10.00
    $price = number_format($product->price, 2, '.', '');
    $displayPrice = (floatval($price) == round(floatval($price))) ? number_format($product->price, 0) : $price;
    $hasBadges = $product->featured || $product->new;

    // Determine if any main content (Image OR Description) exists
    $hasMainContent = $image || $product->description;
@endphp

<div id="product-{{ $product->slug }}"
    class="scroll-mt-20 group relative bg-base-200 rounded-2xl overflow-hidden border border-base-300 hover:border-cyan-600 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 p-3"
    itemscope itemtype="https://schema.org/Product">

    <meta itemprop="sku" content="{{ $product->slug }}" />
    <meta itemprop="@id" content="{{ url('/#product-' . $product->slug) }}" />

    <div class="absolute inset-0 opacity-5 group-hover:opacity-10 transition-opacity duration-300">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,oklch(var(--p))_1px,transparent_1px)] bg-[length:20px_20px]">
        </div>
    </div>

    <div class="flex justify-between items-center mb-2">

        <div class="flex items-center gap-1 min-w-0 pr-2">
            @if ($product->name)
                <h3 class="text-lg font-semibold text-base-content leading-tight group-hover:text-cyan-600 transition-colors duration-200 truncate"
                    itemprop="name">
                    {{ $product->name }}
                </h3>
            @endif
        </div>

        @if (!$hasMainContent && $product->price)
            <div
                class="flex-shrink-0 text-right flex items-center gap-2 transform group-hover:scale-105 transition-transform duration-200">



                @if ($hasBadges)
                    <div class="flex items-center gap-1">
                        @if ($product->featured)
                            {{-- *** UPDATED BADGE STYLE *** --}}
                            <div class="badge rounded-full bg-orange-400 badge-sm badge-soft opacity-90 flex-shrink-0 text-warning-content">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endif
                        @if ($product->new)
                            {{-- *** UPDATED BADGE STYLE *** --}}
                            <div class="badge badge-success badge-sm badge-soft opacity-90 flex-shrink-0 raleway-400">New</div>
                        @endif
                    </div>
                @endif
                <div class="text-cyan-600 text-md font-mono font-bold bg-base-300/50 px-2 py-0.5 rounded-lg whitespace-nowrap"
                    itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                    $<span itemprop="price" >{{ $displayPrice }}</span>
                    <meta itemprop="priceCurrency" content="USD" />
                    <link itemprop="availability" href="https://schema.org/InStock" />
                    <meta itemprop="itemCondition" content="https://schema.org/NewCondition" />
                </div>
            </div>
        @endif
    </div>

    @if ($hasMainContent)
        <div class="relative flex items-start">

            @if ($image)
                <div class="w-20 flex-shrink-0 relative overflow-hidden cursor-pointer h-full p-1"
                    onclick="openImageModal('{{ $image }}')">

                    <img src="{{ $image }}" loading="lazy"
                        alt="{{ $product->name }}" itemprop="image"
                        class="w-full h-full object-cover group-hover:brightness-110 hover:scale-105 transition-all duration-500 rounded-lg" />

                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-1">
                        <div class="bg-black/40 rounded-lg w-full h-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607ZM10.5 7.5v6m3-3h-6" />
                            </svg>
                        </div>
                    </div>
                </div>
            @endif

            <div class="flex flex-col justify-start flex-1 min-w-0 @if ($image) pl-3 pt-1 @else pt-0 @endif">

                @if ($product->description)
                    <p class="text-xs raleway-500 text-base-content/70"
                        item itemprop="description">
                        {{ $product->description }}
                    </p>
                @endif

                @if ($product->price)
                    <div class="flex items-center gap-2 @if ($product->description) mt-2 @endif">

                        <div class="flex-shrink-0 text-left transform group-hover:scale-[1.02] transition-transform duration-200">
                            <div class="text-md text-cyan-600 font-mono font-bold bg-base-300/50 px-2 py-0.5 rounded-lg whitespace-nowrap inline-block"
                                itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                $<span itemprop="price">{{ $displayPrice }}</span>
                                <meta itemprop="priceCurrency" content="USD" />
                                <link itemprop="availability" href="https://schema.org/InStock" />
                                <meta itemprop="itemCondition" content="https://schema.org/NewCondition" />
                            </div>
                        </div>

                        @if ($hasBadges)
                            <div class="flex items-center gap-1">
                                @if ($product->featured)
                                    {{-- *** UPDATED BADGE STYLE *** --}}
                                    <div class="badge rounded-full  badge-warning bg-orange-400 badge-sm badge-soft opacity-90 flex-shrink-0 text-warning-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                @endif
                                @if ($product->new)
                                    {{-- *** UPDATED BADGE STYLE *** --}}
                                    <div class="badge badge-success badge-sm badge-soft opacity-90 flex-shrink-0 raleway-400">New</div>
                                @endif
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    @endif

    <div
        class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
    </div>

    @once
        <dialog id="imageModal" class="modal">
            <div class="modal-box max-w-lg p-0 bg-base-100">
                <img id="modalImageOnly" src="" alt="Product Image"
                    class="w-full h-auto object-contain bg-base-200 rounded-lg">
                <form method="dialog" class="modal-action absolute top-2 right-2 m-0">
                    <button class="btn btn-sm btn-circle btn-ghost text-white bg-black/50 hover:bg-black/80">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </form>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>

        <script>
            function openImageModal(image) {
                document.getElementById('modalImageOnly').src = image;
                document.getElementById('imageModal').showModal();
            }
        </script>
    @endonce
</div>
