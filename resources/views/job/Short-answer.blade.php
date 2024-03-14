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
                <div class="flex items-center">
                    <label for="title">عنوان شغلی‌ات رو وارد کن</label>
                    <x-required-svg/>
                </div>
                <input id="title" type="text" class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border" required> 
            </div>
            <div>
                <div class="flex items-center">
                    <label for="experience-years">چند سال توی این کار تجربه داری؟</label>
                    <x-required-svg/>
                </div>
                <input id="experience-years" type="text" class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border" pattern="[0-9]*" placeholder="فقط عدد وارد کنید" required>
            </div>
            <div>
                <p>از این شغل راضی هستی؟</p>
                <div class="flex space-x-3 space-x-reverse mt-2">
                    
                    <div>
                        <input id="bad" type="radio" class="peer hidden" name="is" value="1" >
                        <label for="bad"
                        class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">
                        ناراضی‌ام
                        </label>
                    </div>
                    <div>
                        <input id="not-bad" type="radio" class="peer hidden" name="is" value="1" >
                        <label for="not-bad"
                        class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">
                            بد نیست
                        </label>
                    </div>
                    <div>
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
            <div class="flex items-center">
                <label for="title" class="flex">محدوده درآمدیت چقدره (ماهانه)؟</label>
                <x-required-svg/>
            </div>
            
            <div class="flex mt-3 items-center font-bold">
                <p class="m-2">از</p>
                <input type="text" name="min-income-range" pattern="[0-9]*" title="لطفا فقط عدد وارد کنید" class="rounded-md size-10 p-0.5 font-light" required>
                <p class="m-2">میلیون تومان تا</p>
                <input type="text" name="max-income-range" pattern="[0-9]*" title="لطفا فقط عدد وارد کنید" class="rounded-md size-10 p-0.5 font-light" required>
                <p class="m-2">میلیون تومان</p>
            </div>          
        </div>

        <div class="mt-3">
            <div class="flex items-center">
                <p class="text-gray-900">مدل درآمدیت چجوریه؟</p>
                <x-required-svg/>
            </div>
            <div class="mt-2 flex gap-4 items-center">
                {{-- one of them must be required --}}
                <div>
                    <div class="flex items-center">
                        <input id="Employee-checkbox" type="checkbox" value="1" name="is" class="peer hidden">
                        <label for="Employee-checkbox" class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">کارمندی</label>
                    </div>
                </div>

                <div>
                    <div class="flex items-center">
                        <input id="freelancer-checkbox" type="checkbox" value="1" class="peer hidden">
                        <label for="freelancer-checkbox" class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">فریلنسری</label>
                    </div>
                </div>

                <div>
                    <div class="flex items-center">
                        <input id="entrepreneur-checkbox" type="checkbox" value="1" class="peer hidden">
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

        <div class="flex items-center space-x-2 space-x-reverse mt-4">
            <div class="size-4 bg-amber-300 shrink-0"></div>
            <div class="shrink-0">توضیحات</div>
            <div class="w-full h-1 bg-amber-300"></div>
        </div>

        <div class="m-2">
            <p class="text-neutral-700 text-4xl font-black">توضیح بده دقیقاً توی این شغل، تو چه کار می‌کنی و چطور با این شغل آشنا شدی؟</p>
            <div class="flex mt-2 w-fit h-11 items-center border border-neutral-700 rounded-2xl shadow-xl">
                <div>
                    <p class=" p-1 w-36 h-9 text-neutral-700 bg-neutral-400 bg-opacity-30 text-base font-bold rounded-xl">ارسال صوت (voice)</p>
                </div>

                <div class="ml-2">
                    <x-voice-svg/>
                </div>
            </div>
            <div>
                {{-- Sound recording --}}
            </div>

            <div class="mt-3">                                                                      
                <textarea name="description" id="description" cols="30" rows="15" type="text" placeholder="اگه سختت بود وویس بدی، اینجا متنی بنویس." class="w-full h-36 text-lg bg-white rounded-xl border border-neutral-400" required></textarea>
            </div>

            <div class="m-3 text-neutral-700 text-base leading-loose">
                <p class="font-bold">
                    اینجا فرض کن برای کسی توضیح می‌دی که اولین باره اسم شغل تو رو شنیده و هیچ اطلاعاتی ازش نداره. مثلاً این موارد رو توضیح بده:
                </p>

                <li>یه توضیح کوتاه بده که شغل تو چیه و چند وقته واردش شدی؟</li>
                <li>یه صبح تا شب توی شغلت چه کار می‌کنی؟</li>
                <li>محدوده درآمدی این شغل بعد از یک سال چقدره؟ (با عدد بگو)</li>
                <li>با چه آدمایی در ارتباط هستی؟</li>
                <li>چه ذهنیت‌های اشتباهی درباره‌ی این شغل وجود داره؟</li>
                <li>از چه ابزارها یا نرم‌افزاهایی استفاده می‌کنی؟</li>
                <li>پیش‌نیازهای این شغل (مدرک، مهارت، سرمایه) چیاست؟</li>
                <li>چی شد که این شغلو انتخاب کردی و چطور باهاش آشنا شدی؟</li>
                <li>تصور اولیه‌ت چی بود و بعد چه تغییری کرد؟</li>
                <li>اگه کسی بخواد وارد این شغل بشه از کجا باید شروع کنه؟</li>
                <p class="mt-3 text-neutral-900">* لازم نیست به ترتیب و تفکیک شده جواب این سؤالات رو بدی. سعی کن داستانی بگی و توی داستانت، جواب این سؤالات باشه.</p>
            </div>
        </div>
    </div>
</x-site-layout>