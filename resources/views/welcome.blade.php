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
            {{-- <div class="flex justify-items-start pl-2 mt-2 text-lg">
                <x-search-svg />
            </div> --}}
        </div>
    </div>

    <div class="mt-5">
        @foreach ($categories as $category)
            <a href="{{ route('view', ['Category' => $category['id']]) }}">
                <div>
                    <img src="{{ asset('storage/images/' . $category['image']) }}" alt="{{ $category['title'] }}"
                        class="w-full h-full object-cover rounded-2xl">
                </div>

                <div class="flex justify-between items-center p-3">
                    <div>
                        <p class="text-right text-black text-lg font-bold">{{ $category['title'] }}</p>
                    </div>

                    <div class="flex text-neutral-600 text-sm font-bold mt-5">
                        <p>{{ $category['text'] }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</x-site-layout>
