<x-site-layout>
    <div class="antialiased max-w-md mx-auto">
        <div class="flex justify-between border-b border-slate-300">
            <div class="flex mt-2 pr-2">
                <div>
                    <x-pensel-svg />
                </div>
                <div class="font-semibold pr-2">
                    فهرست مشاغل
                </div>
            </div>
            <div class="flex justify-items-start pl-2 mt-2 text-lg">
                <x-search-svg />
            </div>
        </div>
    </div>

    <div>
        @foreach ($categories as $category)
            <a href="{{ route('category.show',$category->id) }}" class="w-full bg-white border-2 border-zinc-100">
                <div class="flex">
                    <img class="w-full h-full object-cover rounded-2xl"
                         src="{{ $category->jobs->first->photo?->original_url }}"
                         alt="{{ $category->title }}">
                </div>

                <div class="flex justify-between items-center p-3">
                    <div class="text-right text-black text-lg font-bold">
                        <p>{{$category->title }}</p>
                    </div>

                    <div class="flex text-neutral-600 text-sm font-bold">
                        {{ $category->jobs->min('min_income_range')?->min_income_range }}
                        <p>تا</p>
                        {{ $category->jobs->min('max_income_range')?->max_income_range }}
                        <p>م تومن</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-site-layout>
