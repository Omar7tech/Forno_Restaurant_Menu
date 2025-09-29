@props(['product'])
@php
    $image = $product->getFirstMediaUrl();
    $price = number_format($product->price, 2, '.', '');
@endphp

<div id="product-{{ $product->slug }}"
    class="scroll-mt-20 group relative bg-base-200 rounded-2xl overflow-hidden border border-base-300 hover:border-cyan-600 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300"
    itemscope itemtype="https://schema.org/Product">

    <meta itemprop="sku" content="{{ $product->slug }}" />
    <meta itemprop="@id" content="{{ url('/#product-' . $product->slug) }}" />

    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5 group-hover:opacity-10 transition-opacity duration-300">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,oklch(var(--p))_1px,transparent_1px)] bg-[length:20px_20px]">
        </div>
    </div>

    <div class="relative flex items-stretch">
        <!-- Image Strip -->
        @if ($image)
            <div class="w-20 flex-shrink-0 relative overflow-hidden cursor-pointer"
                onclick="openProductModal('{{ $image }}', '{{ $product->name }}', '{{ $product->description }}', '{{ $price }}', {{ $product->featured ? 'true' : 'false' }}, {{ $product->new ? 'true' : 'false' }})">
                <img src="{{ $image }}" loading="lazy"
                    alt="Buy {{ $product->name }} – {{ $product->description }}" itemprop="image"
                    class="w-full h-full object-cover group-hover:brightness-110 hover:scale-105 transition-all duration-500" />

                <!-- Subtle overlay for dots contrast -->
                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-transparent to-black/10"></div>

                <!-- Hover overlay with zoom icon -->
                <div
                    class="absolute inset-0 bg-black/20 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607ZM10.5 7.5v6m3-3h-6" />
                    </svg>
                </div>

                <!-- Blurry status bar at bottom -->
                @if ($product->featured || $product->new)
                    <div class="absolute bottom-0 left-0 right-0 backdrop-blur-md bg-black/30 px-2 py-1">
                        <div class="flex gap-1 justify-center">
                            @if ($product->featured)
                                <span class="text-warning text-[8px] font-bold tracking-wider">FEATURED</span>
                            @endif
                            @if ($product->new)
                                <span class="text-success text-[8px] font-bold tracking-wider">NEW</span>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        @endif

        <!-- Content Area -->
        <div class="flex-1 p-4 flex flex-col justify-between min-h-[72px]">
            <div class="space-y-1">
                <!-- Title & Price Row -->
                <div class="flex items-start justify-between gap-3">
                    @if ($product->name)
                        <div class="flex gap-2  items-center">

                            <h3 class="text-base font-bold text-base-content leading-tight group-hover:text-cyan-600 transition-colors duration-200"
                                itemprop="name">
                                {{ $product->name }}
                            </h3>
                            @if (!$image && ($product->featured || $product->new))
                                <div class="flex gap-1">
                                    @if ($product->featured)
                                        <div class="badge badge-soft badge-warning badge-xs"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="size-3">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    @endif
                                    @if ($product->new)
                                        <div class="badge badge-soft badge-success badge-xs">New</div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    @endif


                    @if ($product->price)
                        <div
                            class="flex-shrink-0 text-right transform group-hover:scale-105 transition-transform duration-200">
                            <div class="text-sm font-mono font-bold bg-base-300/50 px-2 py-0.5 rounded-lg"
                                itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                $<span itemprop="price">{{ $price }}</span>
                                <meta itemprop="priceCurrency" content="USD" />
                                <link itemprop="availability" href="https://schema.org/InStock" />
                                <meta itemprop="itemCondition" content="https://schema.org/NewCondition" />
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Description -->
                @if ($product->description)
                    <p class="text-xs text-base-content/70 leading-relaxed line-clamp-1 group-hover:text-base-content transition-colors duration-200"
                        itemprop="description">
                        {{ $product->description }}
                    </p>
                @endif
            </div>


        </div>
    </div>

    <!-- Bottom accent line -->
    <div
        class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
    </div>
    @once
        <!-- Single Reusable Product Modal -->
        <dialog id="productModal" class="modal">
            <div class="modal-box max-w-3xl p-0 bg-base-100">
                <!-- Modal Header -->
                <div class="flex justify-between items-center p-4 border-b border-base-300">
                    <div>
                        <h3 id="modalTitle" class="font-bold text-lg"></h3>
                        <p id="modalDescription" class="text-sm text-base-content/70"></p>
                    </div>
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Modal Image -->
                <div class="relative">
                    <img id="modalImage" src="" alt=""
                        class="w-full h-auto max-h-96 object-contain bg-base-200">

                    <!-- Status badges in modal -->
                    <div id="modalBadges" class="absolute top-4 right-4 flex gap-2 hidden">
                        <div id="featuredBadge" class="badge badge-warning hidden">Featured</div>
                        <div id="newBadge" class="badge badge-success hidden">New</div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="p-4 border-t border-base-300 flex justify-between items-center">
                    <span id="modalPrice" class="text-2xl font-bold text-cyan-600"></span>
                    <form method="dialog">
                        <button class="btn ">Close</button>
                    </form>
                </div>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>

        <script>
            function openProductModal(image, name, description, price, featured, isNew) {
                document.getElementById('modalImage').src = image;
                document.getElementById('modalImage').alt = name;
                document.getElementById('modalTitle').textContent = name;
                document.getElementById('modalDescription').textContent = description || '';
                document.getElementById('modalPrice').textContent = price ? '$' + price : '';

                const badgesContainer = document.getElementById('modalBadges');
                const featuredBadge = document.getElementById('featuredBadge');
                const newBadge = document.getElementById('newBadge');

                featuredBadge.classList.add('hidden');
                newBadge.classList.add('hidden');
                badgesContainer.classList.add('hidden');

                if (featured || isNew) {
                    badgesContainer.classList.remove('hidden');
                    if (featured) featuredBadge.classList.remove('hidden');
                    if (isNew) newBadge.classList.remove('hidden');
                }

                document.getElementById('productModal').showModal();
            }
        </script>
    @endonce
</div>
