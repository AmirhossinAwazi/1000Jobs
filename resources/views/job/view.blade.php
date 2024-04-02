<x-site-layout>
    <p class="text-right text-neutral-700 text-4xl font-black leading-loose">معرفی شغل {{ $job->category->title }}</p>
    <div class="flex items-center space-x-2 space-x-reverse mt-4">
        <div class="size-7">
            <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M25.4383 60.5L24.3383 51.7C23.7424 51.4708 23.181 51.1958 22.6539 50.875C22.1268 50.5542 21.6112 50.2104 21.107 49.8438L12.9258 53.2812L5.36328 40.2188L12.4445 34.8563C12.3987 34.5354 12.3758 34.226 12.3758 33.9281V32.0719C12.3758 31.774 12.3987 31.4646 12.4445 31.1438L5.36328 25.7812L12.9258 12.7188L21.107 16.1562C21.6112 15.7896 22.1383 15.4458 22.6883 15.125C23.2383 14.8042 23.7883 14.5292 24.3383 14.3L25.4383 5.5H40.5633L41.6633 14.3C42.2591 14.5292 42.8206 14.8042 43.3477 15.125C43.8747 15.4458 44.3904 15.7896 44.8945 16.1562L53.0758 12.7188L60.6383 25.7812L53.557 31.1438C53.6029 31.4646 53.6258 31.774 53.6258 32.0719V33.9281C53.6258 34.226 53.5799 34.5354 53.4883 34.8563L60.5695 40.2188L53.007 53.2812L44.8945 49.8438C44.3904 50.2104 43.8633 50.5542 43.3133 50.875C42.7633 51.1958 42.2133 51.4708 41.6633 51.7L40.5633 60.5H25.4383ZM30.2508 55H35.682L36.6445 47.7125C38.0654 47.3458 39.3831 46.8073 40.5977 46.0969C41.8122 45.3865 42.9237 44.5271 43.932 43.5187L50.7383 46.3375L53.4195 41.6625L47.507 37.1938C47.7362 36.5521 47.8966 35.876 47.9883 35.1656C48.0799 34.4552 48.1258 33.7333 48.1258 33C48.1258 32.2667 48.0799 31.5448 47.9883 30.8344C47.8966 30.124 47.7362 29.4479 47.507 28.8062L53.4195 24.3375L50.7383 19.6625L43.932 22.55C42.9237 21.4958 41.8122 20.6135 40.5977 19.9031C39.3831 19.1927 38.0654 18.6542 36.6445 18.2875L35.7508 11H30.3195L29.357 18.2875C27.9362 18.6542 26.6185 19.1927 25.4039 19.9031C24.1893 20.6135 23.0779 21.4729 22.0695 22.4813L15.2633 19.6625L12.582 24.3375L18.4945 28.7375C18.2654 29.425 18.1049 30.1125 18.0133 30.8C17.9216 31.4875 17.8758 32.2208 17.8758 33C17.8758 33.7333 17.9216 34.4438 18.0133 35.1313C18.1049 35.8188 18.2654 36.5063 18.4945 37.1938L12.582 41.6625L15.2633 46.3375L22.0695 43.45C23.0779 44.5042 24.1893 45.3865 25.4039 46.0969C26.6185 46.8073 27.9362 47.3458 29.357 47.7125L30.2508 55ZM33.1383 42.625C35.7966 42.625 38.0654 41.6854 39.9445 39.8063C41.8237 37.9271 42.7633 35.6583 42.7633 33C42.7633 30.3417 41.8237 28.0729 39.9445 26.1938C38.0654 24.3146 35.7966 23.375 33.1383 23.375C30.4341 23.375 28.1539 24.3146 26.2977 26.1938C24.4414 28.0729 23.5133 30.3417 23.5133 33C23.5133 35.6583 24.4414 37.9271 26.2977 39.8063C28.1539 41.6854 30.4341 42.625 33.1383 42.625Z"
                    fill="black" />
            </svg>
        </div>
        <div class="shrink-0">تفصیلی</div>
        <div class="w-full h-1 bg-black"></div>
    </div>
    <div>
        <div class="flex items-center p-1">
            <div class="size-3 bg-black shrink-0 rounded ml-2"></div>
            <p class="text-neutral-700 text-base font-bold">{{ $job->category->title }} دقیقاً چه کار می‌کنن؟</p>
        </div>
    </div>

    <div class="mt-5">
        <div class="flex w-fit h-full">
            <div class="object-cover overflow-hidden w-full h-full rounded-3xl border border-neutral-600">
                {{ $job->photo }}
            </div>
        </div>

        <div class="mt-5 rounded-md border border-black p-4">
            <div class="flex items-center">
                <svg width="17" height="24" viewBox="0 0 17 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.887 5.32384C12.887 2.57333 10.6656 0.339844 7.92984 0.339844C5.19413 0.339844 2.97266 2.57333 2.97266 5.32384V12.8115C2.97266 15.562 5.19413 17.7955 7.92984 17.7955C10.6656 17.7955 12.887 15.562 12.887 12.8115V5.32384ZM11.2335 5.32384V12.8115C11.2335 14.6443 9.75365 16.133 7.92984 16.133C6.10686 16.133 4.62615 14.6443 4.62615 12.8115V5.32384C4.62615 3.491 6.10686 2.00229 7.92984 2.00229C9.75365 2.00229 11.2335 3.491 11.2335 5.32384Z"
                        fill="#A3A3A3" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.44405 21.0793L7.45232 22.7866C7.45397 23.2446 7.82601 23.6153 8.28237 23.6137C8.73874 23.6112 9.10747 23.2371 9.10581 22.7783L9.09755 21.0784C13.2718 20.6595 16.535 17.1135 16.535 12.8078C16.535 12.3489 16.1646 11.9766 15.7082 11.9766C15.2519 11.9766 14.8815 12.3489 14.8815 12.8078C14.8815 16.4776 11.9176 19.4575 8.26749 19.4575C4.61739 19.4575 1.6535 16.4776 1.6535 12.8078C1.6535 12.3489 1.28311 11.9766 0.826749 11.9766C0.370384 11.9766 0 12.3489 0 12.8078C0 17.116 3.26731 20.6628 7.44405 21.0793Z"
                        fill="#A3A3A3" />
                </svg>

                <p class="m-2 text-neutral-700 text-base font-bold">
                    تجربه {{ $job->user->name }}
                </p>
            </div>

            <div>
                <div>
                    <p id="job-description"
                        class="text-justify text-neutral-700 text-base font-light leading-loose truncate">
                        {{ $job->description }}
                    </p>
                    <div id="read-more-btn" class="text-center text-neutral-700 text-base font-bold cursor-pointer">
                        نمایش بیشتر ...
                    </div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const description = document.getElementById('job-description');
                        const btn = document.getElementById('read-more-btn');

                        let isExpanded = false;

                        btn.addEventListener('click', function() {
                            isExpanded = !isExpanded;
                            if (isExpanded) {
                                description.classList.remove('truncate');
                                btn.textContent = 'بستن';
                            } else {
                                description.classList.add('truncate');
                                btn.textContent = 'نمایش بیشتر ...';
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="flex items-center space-x-2 space-x-reverse mt-4">
        <div class="size-7">
            <svg viewBox="0 0 69 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.5 34C3.5 19.3864 3.5 12.0797 8.03986 7.53986C12.5797 3 19.8864 3 34.5 3C49.1134 3 56.4204 3 60.96 7.53986C65.5 12.0797 65.5 19.3864 65.5 34C65.5 48.6134 65.5 55.9204 60.96 60.46C56.4204 65 49.1134 65 34.5 65C19.8864 65 12.5797 65 8.03986 60.46C3.5 55.9204 3.5 48.6134 3.5 34Z"
                    stroke="black" stroke-width="5.5" />
                <path opacity="0.5"
                    d="M46.8992 27.7999C50.3234 27.7999 53.0992 25.0241 53.0992 21.5999C53.0992 18.1757 50.3234 15.3999 46.8992 15.3999C43.4751 15.3999 40.6992 18.1757 40.6992 21.5999C40.6992 25.0241 43.4751 27.7999 46.8992 27.7999Z"
                    stroke="black" stroke-width="5.5" />
                <path opacity="0.5"
                    d="M12.8008 38.0519L15.3134 35.7182C18.1842 33.0519 22.6687 33.2016 25.3554 36.0533L33.5627 44.7655C35.2311 46.5363 37.9622 46.775 39.9125 45.3201C42.7226 43.2236 46.6354 43.462 49.1706 45.8837L56.2008 52.6002"
                    stroke="black" stroke-width="5.5" stroke-linecap="round" />
            </svg>
        </div>
        <div class="shrink-0">گالری</div>
        <div class="w-full h-1 bg-black"></div>
    </div>

    <div class="flex items-center m-2">
        <div class="h-fit w-10 ml-2 overflow-hidden rounded-full">
            {{ $job->photo }}
        </div>
        <p class=" text-neutral-700 text-base font-bold">
            محیط کار {{ $job->user->name }}
        </p>
    </div>

    <div class="m-2 grid grid-cols-2 gap-3">
        @foreach($job->getMedia('images') as $photo)
        <div class="object-cover overflow-hidden rounded-md w-fit h-fit border border-neutral-600">
            <img src="{{ $photo->getUrl() }}" alt="Job Photo" class="w-full h-full object-cover">
        </div>
        @endforeach
    </div>

    <div class="flex items-center space-x-2 space-x-reverse mt-4">
        <div class="size-7">
            <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M36 39C36.85 39 37.5875 38.6875 38.2125 38.0625C38.8375 37.4375 39.15 36.7 39.15 35.85C39.15 35 38.8375 34.2625 38.2125 33.6375C37.5875 33.0125 36.85 32.7 36 32.7C35.15 32.7 34.4125 33.0125 33.7875 33.6375C33.1625 34.2625 32.85 35 32.85 35.85C32.85 36.7 33.1625 37.4375 33.7875 38.0625C34.4125 38.6875 35.15 39 36 39ZM33.75 29.4H38.25C38.25 27.95 38.4 26.8875 38.7 26.2125C39 25.5375 39.7 24.65 40.8 23.55C42.3 22.05 43.3 20.8375 43.8 19.9125C44.3 18.9875 44.55 17.9 44.55 16.65C44.55 14.4 43.7625 12.5625 42.1875 11.1375C40.6125 9.7125 38.55 9 36 9C33.95 9 32.1625 9.575 30.6375 10.725C29.1125 11.875 28.05 13.4 27.45 15.3L31.5 16.95C31.95 15.7 32.5625 14.7625 33.3375 14.1375C34.1125 13.5125 35 13.2 36 13.2C37.2 13.2 38.175 13.5375 38.925 14.2125C39.675 14.8875 40.05 15.8 40.05 16.95C40.05 17.65 39.85 18.3125 39.45 18.9375C39.05 19.5625 38.35 20.35 37.35 21.3C35.7 22.75 34.6875 23.8875 34.3125 24.7125C33.9375 25.5375 33.75 27.1 33.75 29.4ZM18 48C16.35 48 14.9375 47.4125 13.7625 46.2375C12.5875 45.0625 12 43.65 12 42V6C12 4.35 12.5875 2.9375 13.7625 1.7625C14.9375 0.5875 16.35 0 18 0H54C55.65 0 57.0625 0.5875 58.2375 1.7625C59.4125 2.9375 60 4.35 60 6V42C60 43.65 59.4125 45.0625 58.2375 46.2375C57.0625 47.4125 55.65 48 54 48H18ZM18 42H54V6H18V42ZM6 60C4.35 60 2.9375 59.4125 1.7625 58.2375C0.5875 57.0625 0 55.65 0 54V12H6V54H48V60H6Z"
                    fill="black" />
            </svg>
        </div>
        <div class="shrink-0">پرسش</div>
        <div class="w-full h-1 bg-black"></div>
    </div>


    <form action="{{ route('comment.store', ['user' => $user, 'job' => $job]) }}" method="post">
        @csrf
        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50">
            <div>
                <label for="lastname"></label>
                <input id="lastname" name="lastname" type="username" placeholder="نام و نام خانوادگی خود را وارد کنید"
                    class="block border border-gray-400 rounded-md h-12 w-full" required />
            </div>
            <div class="px-4 py-2 bg-white rounded-t-lg">
                <label for="comment" class="sr-only">نظرتان</label>
                <textarea id="comment" name="body" rows="3"
                    class="w-full px-0 text-xl text-gray-900 bg-white border-0 focus:ring-0" placeholder="نظرتان را بنویسید" required /></textarea>
            </div>
            <div class="flex items-center justify-between px-3 py-2 border-t">
                <button type="submit"
                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-amber-400 rounded-lg focus:ring-4 focus:ring-amber-200 hover:bg-amber-500">
                    ارسال نظر
                </button>
            </div>
        </div>
    </form>

    <div class="pt-5">
        @foreach ($comments as $comment)
            <div class="mt-3 bg-neutral-50 rounded-lg border border-neutral-700">
                <div class="w-72 h-14 m-1 relative">
                    <div
                        class="w-32 h-4 left-[89.40px] top-[24.65px] absolute text-neutral-400 text-xs font-light leading-normal">
                        {{ $comment->created_at->diffForHumans() }}</div>
                    <div class="pr-2 w-56 h-6 left-0 top-0 absolute text-neutral-700 text-xs font-medium">
                        {{ $comment->lastname }}</div>
                    <div class="w-fit h-fit left-[223.50px] top-[1.54px] overflow-hidden absolute rounded-full">
                        {{ $job->photo }}
                    </div>
                </div>
                <div class="break-all p-3 text-justify text-neutral-700 text-xs font-light leading-normal">
                    {{ $comment->body }}
                </div>

                <form action="{{ route('comment.reply', ['job' => $job, 'comment' => $comment->id]) }}" method="POST"
                    class="p-3">
                    @csrf
                    <div>
                        <label for="lastname" class="sr-only">نام</label>
                        <textarea name="lastname" id="lastname" rows="2" class="w-full px-4 py-2 border rounded-lg" placeholder="نام خود را وارد کنید"></textarea>
                    </div>
                    <div>
                        <label for="reply" class="sr-only">ریپلای :</label>
                        <textarea name="reply" id="reply" rows="2" class="w-full px-4 py-2 border rounded-lg"
                            placeholder="به این نظر پاسخ دهید"></textarea>
                    </div>
                    <div class="mt-2">
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-amber-400 rounded-lg focus:ring-4 focus:ring-amber-200 hover:bg-amber-500">ارسال
                            پاسخ</button>
                    </div>
                </form>

                @if ($comment->replies->count() > 0)
                    <div class="replies">
                        @foreach ($comment->replies as $reply)
                            <div class="reply m-3 bg-neutral-50 rounded-lg border border-neutral-700">
                                <div class="w-72 h-14 m-1 relative">
                                    <div
                                        class="w-32 h-4 left-[89.40px] top-[24.65px] absolute text-neutral-400 text-xs font-light leading-normal">
                                        {{ $reply->created_at->diffForHumans() }}</div>
                                    <div
                                        class="pr-2 w-56 h-6 left-0 top-0 absolute text-neutral-700 text-xs font-medium">
                                        {{ $reply->lastname }}</div>
                                    <div
                                        class="w-fit h-fit left-[223.50px] top-[1.54px] overflow-hidden absolute rounded-full">
                                        {{ $job->photo }}
                                    </div>
                                </div>
                                <div
                                    class="break-all p-3 text-justify text-neutral-700 text-xs font-light leading-normal">
                                    {{ $reply->body }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</x-site-layout>
