<x-frontend-layout>

    <section class="px-0 md:px-0">
        <div class="container grid grid-cols-1 md:grid-cols-12 gap-5">

            <div class="md:col-span-8 space-y-4">

                @foreach ($posts as $post)



                    <div
                        class="grid grid-cols-1 md:grid-cols-12 gap-5 items-center hover:shadow-lg border rounded-lg duration-300">
                        <div class="col-span-12 md:col-span-5">
                            <a href="{{ route('news',$post->id) }}">
                                <img src="{{ asset($post->image) }}" alt="{{ $post->title }}"
                                class="w-full h-auto rounded-lg">
                            </a>
                        </div>
                        <div class="col-span-12 md:col-span-7">
                            <a class="block hover:no-underline" href="{{ route('news',$post->id) }}"><h1 class="text-xl md:text-xl lg:text-2xl font-semibold px-3 py-3">{{ $post->title }}</h1></a>

                            <div class="limited-text overflow-hidden px-3 py-1">
                                {!! $post->description !!}
                            </div>
                            <small class="px-3 pb-4">
                                <i class="fas fa-calendar-check"></i>&nbsp;
                                {{ nepalidate($post->created_at) }}</small>
                        </div>
                    </div>

                @endforeach
                    {{ $posts->links() }}
            </div>

            <div class="md:col-span-4">
                <h1 class="">Advertisement Section</h1>
                @foreach ($advertises as $advertise)
                <div class="py-4">
                    <a href="{{ $advertise->redirect_url }}" target="_blank">
                        <img src="{{ asset($advertise->banner) }}" alt="{{ $advertise->redirect_url }}" width="100%">
                    </a>
                </div>
            @endforeach
            </div>

        </div>
    </section>

</x-frontend-layout>
