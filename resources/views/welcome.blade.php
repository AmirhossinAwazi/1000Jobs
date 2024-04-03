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

    <div>
        @foreach ($jobs as $job)
            <a href="{{ route('view', ['job' => $job->id]) }}" class="w-full bg-white border-2 border-zinc-100">
                <div class="flex">
                    <img class="w-full h-full object-cover rounded-2xl" src="{{ $job->photo?->original_url }}"
                        alt="{{ $job->category->title }}">
                </div>

                <div class="flex justify-between items-center p-3">
                    <div class="text-right text-black text-lg font-bold">
                        <div class="flex gap-2 items-center">
                            <p>{{ $job->user->name }}</p>
                            <p>{{ $job->category->title }}</p>
                        </div>
                    </div>

                    <div class="flex text-neutral-600 text-sm font-bold">
                        {{ $job->min_income_range }}
                        <p>تا</p>
                        {{ $job->max_income_range }}
                        <p>م تومن</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-site-layout>
