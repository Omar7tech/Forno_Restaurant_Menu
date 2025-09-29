<div>


    <x-hero.main2 />
    <x-categories.title />
    <x-categories.main1 :$categories />


    <div class="mt-10">
        @foreach ($categories as $category)
            <x-category.header :$category />
            <div class="px-2 md:px-4">
                <div
                    class="w-full -z-[100] bg-[linear-gradient(to_right,#4F4F4F0E_1px,transparent_1px),linear-gradient(to_bottom,#4F4F4F00_1px,transparent_1px)] bg-[size:2rem_20rem]">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($category->products as $product)
                            <x-product.main :$product />
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @php
        $menuData = [
            '@context' => 'https://schema.org',
            '@type' => 'Restaurant',
            'name' => 'Forno Flat Bread',
            'hasMenu' => [
                '@type' => 'Menu',
                'name' => 'Restaurant Menu',
                'hasMenuSection' => $categories
                    ->map(function ($category) {
                        return [
                            '@type' => 'MenuSection',
                            'name' => $category->name,
                            'hasMenuItem' => $category->products
                                ->map(function ($product) {
                                    return [
                                        '@type' => 'MenuItem',
                                        'name' => $product->name ?? '',
                                        'description' => $product->description ?? '',
                                        'offers' => [
                                            '@type' => 'Offer',
                                            'price' => number_format($product->price, 2, '.', ''),
                                            'priceCurrency' => 'USD',
                                            'availability' => 'https://schema.org/InStock',
                                            'itemCondition' => 'https://schema.org/NewCondition',
                                        ],
                                        'url' => url('/#product-' . $product->slug),
                                        '@id' => url('/#product-' . $product->slug),
                                        'image' => $product->getFirstMediaUrl() ?: null,
                                    ];
                                })
                                ->toArray(),
                        ];
                    })
                    ->toArray(),
            ],
        ];
    @endphp




    <script type="application/ld+json">
    {!! json_encode($menuData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>

</div>
