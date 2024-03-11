<x-site-layout>
    <x-header-saq />
    <div class="mt-4">
        <div>
            <h1 class="text-4xl font-black">
                اطلاعات اولیه شغلی
            </h1>
        </div>
        <div class="flex items-center space-x-2 space-x-reverse mt-4">
            <div class="size-4 bg-amber-300 shrink-0"></div>
            <div class="shrink-0">اطلاعات شغلی</div>
            <div class="w-full h-1 bg-amber-300"></div>
        </div>
        <div class="mt-4 space-y-3">
            <div>
                <label for="title">عنوان شغلی‌ات رو وارد کن</label>
                <input type="text" class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border">
            </div>
            <div>
                <label for="year">چند سال توی این کار تجربه داری؟</label>
                <input type="text" class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border">
            </div>
            <div>
                <p>از این شغل راضی هستی؟</p>
                <div class="flex space-x-3 space-x-reverse mt-2">
                    
                <div class="">
                    <input id="bad" type="radio" class="peer hidden" name="is" value="1" >
                    <label for="bad"
                    class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">
                    ناراضی‌ام
                    </label>
                </div>
                <div class="">
                    <input id="not_bad" type="radio" class="peer hidden" name="is" value="1" >
                    <label for="not_bad"
                    class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">
                        بد نیست
                    </label>
                </div>
                <div class="">
                    <input id="good" type="radio" class="peer hidden" name="is" value="1" >
                    <label for="good"
                     class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">
                     راضی‌ام
                    </label>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-site-layout>
