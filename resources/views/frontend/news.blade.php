<x-frontend-layout>

    <section class="px-0 md:px-0">
        <div class="container grid grid-cols-1 md:grid-cols-12 gap-5">

            <div class="md:col-span-8 space-y-4">
                <p>
                    {{ nepalidate($news->created_at) }} | {{ $news->views }}  पटक पढिएको
                </p>
                <h1 class="text-3xl font-semibold">{{ $news->title }}</h1>
                <img src="{{ asset($news->image) }}" alt="{{ $news->title }}" class="w-full">
                <div>
                    {!! $news->description !!}
                </div>
                <div class="sharethis-sticky-share-buttons"></div>

<br>
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
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=67692c88c433c60012502f00&product=sticky-share-buttons&source=platform" async="async"></script>

</x-frontend-layout>
