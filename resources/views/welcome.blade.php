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
        <a href="#">
            <div>
                <img src="{{ asset('storage/images/developer.jpg') }}" alt="برنامه نویس"
                    class="w-full h-full object-cover rounded-2xl">
            </div>

            <div class="flex justify-between items-center p-3">
                <div>
                    <p class="text-right text-black text-lg font-bold">برنامه نویس</p>
                    <p class="text-neutral-400 text-sm font-normal">5 معرفی</p>
                </div>

                <div class="flex text-neutral-600 text-sm font-bold mt-5">
                    <p>10 تا 45 م تومن</p>
                </div>
            </div>

        </a>

        <a href="#">
            <div>
                <img src="{{ asset('storage/images/lawyer.jpg') }}" alt="وکیل"
                    class="w-full h-64 object-cover rounded-2xl">
            </div>

            <div class="flex justify-between items-center p-3">
                <div>
                    <p class="text-right text-black text-lg font-bold">وکیل</p>
                    <p class="text-neutral-400 text-sm font-normal">4 معرفی</p>
                </div>

                <div class="flex text-neutral-600 text-sm font-bold mt-5">
                    <p>12 تا 20 م تومن</p>
                </div>
            </div>
        </a>

        <a href="#">
            <div>
                <img src="{{ asset('storage/images/teacher.jpg') }}" alt="معلم"
                    class="w-full h-full object-cover rounded-2xl">
            </div>

            <div class="flex justify-between items-center p-3">
                <div>
                    <p class="text-right text-black text-lg font-bold">معلم</p>
                    <p class="text-neutral-400 text-sm font-normal">2 معرفی</p>
                </div>


                <div class="flex text-neutral-600 text-sm font-bold mt-5">
                    <p>5 تا 15 م تومن</p>
                </div>
            </div>
        </a>

        <a href="#">
            <div>
                <img src="{{ asset('storage/images/seller.jpg') }}" alt="فروشنده"
                    class="w-full h-full object-cover rounded-2xl">
            </div>

            <div class="flex justify-between items-center p-3">
                <div>
                    <p class="text-right text-black text-lg font-bold">فروشنده</p>
                    <p class="text-neutral-400 text-sm font-normal">15 معرفی</p>
                </div>

                <div class="flex text-neutral-600 text-sm font-bold mt-5">
                    <p>20 تا 60 م تومن</p>
                </div>
            </div>

        </a>

        <a href="#">
            <div>
                <img src="{{ asset('storage/images/translator.png') }}" alt="مترجم"
                    class="w-full h-full object-cover rounded-2xl">
            </div>

            <div class="flex justify-between items-center p-3">
                <div>
                    <p class="text-right text-black text-lg font-bold">مترجم</p>
                    <p class="text-neutral-400 text-sm font-normal">9 معرفی</p>
                </div>

                <div class="flex text-neutral-600 text-sm font-bold mt-5">
                    <p>80 تا 100 م تومن</p>
                </div>
            </div>

        </a>
    </div>

</x-site-layout>
