<x-frontend-layout>

    <section>
        <div class="container grid md:grid-cols-12 gap-5">
            <div class="md:col-span-8">
                <div>
                 <a href="{{ route('news',$latest_post->id) }}">
                    <img src="{{ asset($latest_post->image) }}" alt="{{ $latest_post->title }}" class="w-full">
                 </a>
                    <h1 class="text-3xl font-semibold mt-3">{{ $latest_post->title }}</h1>
                    <div class="limited-text overflow-hidden">
                        {!! $latest_post->description !!}
                    </div>
                </div>



                {{-- hereeeeeeeeeeee --}}

                <div class="grid grid-cols-3 gap-4">
                    {{-- Placeholder comment or content --}}
                    {{-- <img src="/dhakatopi_logo/blue_line.png" alt=""> --}}

                    @foreach ($homepage_advertises as $homepage_advertise)
                        <div class="py-4">
                            <a href="{{ $homepage_advertise->redirect_url }}" target="_blank">
                                <img src="{{ asset($homepage_advertise->banner) }}"
                                    alt="{{ $homepage_advertise->redirect_url }}" height="100%" width="100%">
                            </a>
                        </div>
                    @endforeach
                </div>





            </div>


            <div class="md:col-span-4 space-y-4">
                <h1 class="text_primary bg-light_primary px-3 py-3 text-3xl font-semibold border-l-4 border-[#ff5757]">
                    ट्रेन्डिङ</h1>



                @foreach ($trending_posts as $post)
                    <x-post-card :post="$post" /> {{-- This "post" is not string it is variable. to write something in String it should be "'String'" --}}
                @endforeach


            </div>
        </div>
    </section>
<br>
    <section>
        <div class="container space-y-8">
            @foreach ($categories as $category)
                @if (count($category->posts->where('status', 'approved')) > 0)
                    <div class="mb-2">
                        <h1 class="text_primary text-4xl font-semibold">{{ $category->nep_title }}</h1>
                        <img class="mx-2 my-1 h-[12px] md:h-[15px] lg:h-[20px]" src="/dhakatopi_logo/blue_line.png"
                            alt="">
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-2 space-y-5">
                        @foreach ($category->posts->where('status', 'approved')->take(12) as $post)

                            <x-post-card :post="$post" />
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>




    </section>

</x-frontend-layout>
