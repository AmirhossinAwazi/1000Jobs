<x-site-layout>
    <x-header-saq />
    <div class=" bg-slate-50 pr-2">
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
                <input id="title" type="text" class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border">
            </div>
            <div>
                <label for="experience-years">چند سال توی این کار تجربه داری؟</label>
                <input id="experience-years" type="text" class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border" pattern="[0-9]*" placeholder="فقط عدد وارد کنید">
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
                    <input id="not-bad" type="radio" class="peer hidden" name="is" value="1" >
                    <label for="not-bad"
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

        <div class="flex items-center space-x-2 space-x-reverse mt-4">
            <div class="size-4 bg-amber-300 shrink-0"></div>
            <div class="shrink-0">اطلاعات درآمدی</div>
            <div class="w-full h-1 bg-amber-300"></div>
        </div>

        <div>
            <label for="title" class="flex">محدوده درآمدیت چقدره (ماهانه)؟</label>
            <div class="flex mt-3 items-center font-bold">
                <p class="m-2">از</p>
                <input type="text" name="min-income-range" pattern="[0-9]*" title="لطفا فقط عدد وارد کنید" class="rounded-md size-10 p-0.5 font-light">
                <p class="m-2">میلیون تومان تا</p>
                <input type="text" name="max-income-range" pattern="[0-9]*" title="لطفا فقط عدد وارد کنید" class="rounded-md size-10 p-0.5 font-light">
                <p class="m-2">میلیون تومان</p>
            </div>          
        </div>

        <div class="mt-3">
            <p class="text-gray-900">مدل درآمدیت چجوریه؟</p>
            <div class="mt-2 flex gap-4 items-center">
                <div>
                    <div class="flex items-center">
                        <input id="Employee-checkbox" type="checkbox" value="1" name="is" class="peer hidden">
                        <label for="Employee-checkbox" class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">کارمندی</label>
                    </div>
                </div>

                <div>
                    <div class="flex items-center">
                        <input id="freelancer-checkbox" type="checkbox" value="" class="peer hidden">
                        <label for="freelancer-checkbox" class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">فریلنسری</label>
                    </div>
                </div>

                <div>
                    <div class="flex items-center">
                        <input id="entrepreneur-checkbox" type="checkbox" value="" class="peer hidden">
                        <label for="entrepreneur-checkbox" class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">کارآفرینی</label>
                    </div>
                </div>
            </div>
        </div>

        <div>

            <div class="mt-2">
                <label for="company">اسم شرکت؟</label>
                <input id="company" type="text" class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border">
            </div>
        </div>

    </div>
</x-site-layout>