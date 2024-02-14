<div class="bg-white sm:rounded-lg">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Items</h2>

        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            @foreach($items as $item)
            <a wire:navigate href="{{ route('item.view', $item->uuid) }}" class="group">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ $item->thumbImage }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">{{ $item->title }}</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">${{ $item->price }}</p>
            </a>
            @endforeach
            <!-- More products... -->
        </div>

        @if($totalRecords > $currentRecords)
            <div id="load-more-el" class="w-full text-center mt-10">loading...</div>
        @endif
    </div>

    <script>
        if (typeof loadMoreEl == 'undefined') {
            const loadMoreEl = document.getElementById("load-more-el")

            if (loadMoreEl != null) {
                const observer = new IntersectionObserver(entries => entries.forEach(entry => entry.isIntersecting && @this.loadMore(), {
                    root: null,
                    threshold: 1,
                    rootMargin: "0px"
                }));

                observer.observe(loadMoreEl);
            }
        }
    </script>
</div>
