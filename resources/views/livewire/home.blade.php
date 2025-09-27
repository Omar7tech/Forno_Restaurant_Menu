<div>


    <x-hero.main2 />
    <x-categories.title />
    <x-categories.main1 :$categories />

    <div class="mt-10">
        @foreach ($categories as $category)


            <x-category.header :name="$category->name" :slug="$category->slug" />
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

    

</div>
