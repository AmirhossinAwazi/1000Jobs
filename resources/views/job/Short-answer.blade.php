<x-site-layout>
    <form method="POST" action="{{ route('SAQ.store') }}" enctype="multipart/form-data">
        @csrf
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
                        <label for="category_id">عنوان شغلی‌ات رو وارد کن</label>
                        <x-required-svg />
                    </div>

                    <select name="category_id" id="category_id"
                        class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border text-center">
                        @foreach ($categories as $category)
                            <option value={{ $category->id }}>{{ $category->title }}</option>
                        @endforeach
                    </select>

                </div>
                <div>
                    <div class="flex items-center">
                        <label for="experience-years">چند سال توی این کار تجربه داری؟</label>
                        <x-required-svg />
                    </div>
                    <input name="experience_years" id="experience-years" type="text"
                        class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border" pattern="[0-9]*"
                        placeholder="فقط عدد وارد کنید" required>
                </div>
                <div>
                    <p>از این شغل راضی هستی؟</p>
                    <div class="flex space-x-3 space-x-reverse mt-2">

                        <div>
                            <input id="bad" type="radio" class="peer hidden" name="job_datisfaction"
                                value="1">
                            <label for="bad"
                                class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">
                                ناراضی‌ام
                            </label>
                        </div>
                        <div>
                            <input id="not-bad" type="radio" class="peer hidden" name="job_datisfaction"
                                value="1">
                            <label for="not-bad"
                                class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">
                                بد نیست
                            </label>
                        </div>
                        <div>
                            <input id="good" type="radio" class="peer hidden" name="job_datisfaction"
                                value="1">
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
                    <x-required-svg />
                </div>

                <div class="flex mt-3 items-center font-bold">
                    <p class="m-2">از</p>
                    <input type="text" name="min_income_range" pattern="[0-9]*" title="لطفا فقط عدد وارد کنید"
                        class="rounded-md size-10 p-0.5 font-light" required>
                    <p class="m-2">میلیون تومان تا</p>
                    <input type="text" name="max_income_range" pattern="[0-9]*" title="لطفا فقط عدد وارد کنید"
                        class="rounded-md size-10 p-0.5 font-light" required>
                    <p class="m-2">میلیون تومان</p>
                </div>
            </div>

            <div class="mt-3">
                <div class="flex items-center">
                    <p class="text-gray-900">مدل درآمدیت چجوریه؟</p>
                    <x-required-svg />
                </div>
                <div class="mt-2 flex gap-4 items-center">
                    {{-- one of them must be required --}}
                    <div>
                        <div class="flex items-center">
                            <input id="Employee-checkbox" type="checkbox" name="revenue_model[]" value="Employee"
                                class="peer hidden">
                            <label for="Employee-checkbox"
                                class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">کارمندی</label>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center">
                            <input id="freelancer-checkbox" type="checkbox" class="peer hidden" name="revenue_model[]"
                                value="Freelancer">
                            <label for="freelancer-checkbox"
                                class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">فریلنسری</label>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center">
                            <input id="entrepreneur-checkbox" type="checkbox" class="peer hidden" name="revenue_model[]"
                                value="Entrepreneur">
                            <label for="entrepreneur-checkbox"
                                class="bg-white border rounded-lg text-center px-3 py-1 peer-checked:bg-green-200 peer-checked:border-green-500">کارآفرینی</label>
                        </div>
                    </div>
                </div>
            </div>

            <div>

                <div class="mt-2">
                    <label for="company">اسم شرکت؟</label>
                    <input id="company" type="text"
                        class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border" name="company">
                </div>
            </div>

            <div class="flex items-center space-x-2 space-x-reverse mt-4">
                <div class="size-4 bg-amber-300 shrink-0"></div>
                <div class="shrink-0 flex justify-center">توضیحات<x-required-svg /></div>
                <div class="w-full h-1 bg-amber-300"></div>
            </div>

            <div class="m-2">
                <p class="text-neutral-700 text-4xl font-black">
                    توضیح بده دقیقاً توی این شغل، تو چه کار می‌کنی و چطور با این شغل آشنا شدی؟
                </p>
                {{-- <x-required-svg /> --}}
                {{-- <div class="flex mt-2 w-fit h-11 items-center border border-neutral-700 rounded-2xl shadow-xl">
                    <div>
                        <p
                            class=" p-1 w-36 h-9 text-neutral-700 bg-neutral-400 bg-opacity-30 text-base font-bold rounded-xl">
                            ارسال صوت (voice)</p>
                    </div>

                    <div class="ml-2">
                        <x-voice-svg />
                    </div>
                </div> --}}
                <div>
                    {{-- Sound recording --}}
                </div>

                <div class="mt-3">
                    <textarea name="description" id="description" cols="30" rows="15" type="text"
                        placeholder="اینجا بنویس." class="w-full h-36 text-lg bg-white rounded-xl border border-neutral-400" required>
                    </textarea>
                </div>

                <div class="m-3 text-neutral-700 text-base leading-loose">
                    <p class="font-bold">
                        اینجا فرض کن برای کسی توضیح می‌دی که اولین باره اسم شغل تو رو شنیده و هیچ اطلاعاتی ازش نداره.
                        مثلاً این موارد رو توضیح بده:
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
                    <p class="mt-3 text-neutral-900">* لازم نیست به ترتیب و تفکیک شده جواب این سؤالات رو بدی. سعی کن
                        داستانی بگی و توی داستانت، جواب این سؤالات باشه.</p>
                </div>
            </div>

            <div class="flex items-center space-x-2 space-x-reverse mt-4">
                <div class="size-4 bg-amber-300 shrink-0"></div>
                <div class="shrink-0">گالری</div>
                <div class="w-full h-1 bg-amber-300"></div>
            </div>

            <div class="mt-3">
                <input id="photos" name="photos[]" type="file" multiple class="mt-1 block w-full"
                    accept=".png,.jpeg,.jpg" />
                <x-input-error class="mt-2" :messages="$errors->get('photos.*')" />
            </div>
            <div class="mt-5 grid grid-cols-3 gap-4" id="imagePreviewContainer">
                <!-- Preview images will be dynamically added here -->
            </div>

            <script>
                document.getElementById('photos').addEventListener('change', function(event) {
                    var files = event.target.files;
                    var previewContainer = document.getElementById('imagePreviewContainer');
                    // Check if adding files would exceed the limit of 4 photos
                    if (previewContainer.children.length + files.length > 4) {
                        alert('فقط میتوانید 4 عکس اضافه کنید');
                        return;
                    }

                    for (var i = 0; i < files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var imagePreview = document.createElement('div');
                            imagePreview.className = 'relative';
                            var img = document.createElement('img');
                            img.src = e.target.result;
                            img.className = 'w-full h-auto rounded border';
                            imagePreview.appendChild(img);
                            var deleteButton = document.createElement('button');
                            deleteButton.textContent = 'Delete';
                            deleteButton.className = 'absolute top-0 right-0 bg-red-500 text-white px-2 py-1 rounded';
                            deleteButton.addEventListener('click', function() {
                                // Remove the parent element (containing both image and delete button)
                                this.parentNode.remove();
                            });
                            imagePreview.appendChild(deleteButton);
                            previewContainer.appendChild(imagePreview);
                        };
                        reader.readAsDataURL(files[i]);
                    }
                });
            </script>
            <div>
                <p class="font-semibold">عکس اول شما به عنوان عکس اصلی در صحفه اصلی نمایش داده میشود.</p>
                <li>از محیط کاریت</li>
                <li>از فعالیت های تخصصی که انجام میدی</li>
                <li>از جلساتت</li>
            </div>
            <div class="flex mt-2">
                <x-required-svg />
                <p class="mr-1">حواست باشه اگه عکسی هست که ممکنه برای سازمان حساسیتی ایجاد کنه، قبلش با مسئولین
                    مربوطه هماهنگ کن</p>
            </div>

            <div class="flex items-center space-x-2 space-x-reverse mt-4">
                <div class="size-4 bg-amber-300 shrink-0"></div>
                <div class="shrink-0">اطلاعات شخصی</div>
                <div class="w-full h-1 bg-amber-300"></div>
            </div>

            <div>
                <div class="flex items-center">
                    <label for="name" class="ml-2">اسمت رو وارد کن</label>
                    <x-required-svg />
                </div>
                <input name="name" id="name" type="text"
                    class="mt-2 w-full p-2 rounded-lg bg-white text-neutral-700 border">
            </div>

            <div class="mt-4">
                <input name="needs-advice" id="needs-advice" type="checkbox" value=""
                    class="w-5 h-5 text-green-600 bg-neutral-200 border-green-500 border-2 rounded focus:ring-green-500">
                <label for="needs_advice" class=" text-neutral-700 font-bold leading-loose">اگر کسی درباره‌ی این شغل
                    راهنمایی و مشورت نیاز داشت، به من اطلاع بده.</label>
            </div>

            <div class="mt-3">
                <label for="phone-number" class="text-neutral-700 text-base font-bold leading-loose">شماره تلفن همراهت
                    رو وارد کن</label>
                <input name="phone_number" type="tel"
                    class="w-full p-2 rounded-lg bg-white text-neutral-700 border">
            </div>
        </div>

        <div>
            <button type="submit"
                class="w-20 h-10 m-2 bg-blue-500 hover:bg-blue-700 rounded-lg text-center text-white font-semibold">
                {{ __('Save') }}
            </button>
        </div>

    </form>
</x-site-layout>
