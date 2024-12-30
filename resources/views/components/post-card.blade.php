{{-- @props(['post'])


    <div class="grid grid-cols-12 gap-2 items-center rounded-xl overflow-hidden hover:shadow-lg duration-300">

        <div class="col-span-5">
            <img class="w-full h-[120px] object-cover" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
        </div>
        <div class="col-span-7">
            <h1 class="font-semibold mx-1">{{ $post->title }}</h1>
            <small>
              &nbsp;  <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;
                {{ nepalidate($post->created_at) }}</small>
        </div>
    </div>
 --}}


 @props(['post'])

<a href="{{ route('news',$post->id) }}" class="block hover:no-underline">
    <div {{ $attributes->merge(['class' => 'grid grid-cols-12 gap-2 items-center rounded-xl overflow-hidden hover:shadow-lg duration-300']) }}>

        <div class="col-span-5">
            <img class="w-full h-[120px] object-cover" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
        </div>
        <div class="col-span-7">
            <h1 class="font-semibold mx-1">{{ $post->title }}</h1>
            <small>
                <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;{{ nepalidate($post->created_at) }}
            </small>
        </div>
    </div>


    {{-- <div class="parent">
        <div class="card" style="background-image: url('{{ asset($post->image) }}');">
          <div class="content-box">
            <div class="card-content">
              <div class="card-title">Card Title</div>
              <div class="card-description">Card Description Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae ipsum quis nunc dapibus tristique.</div>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>
          <div class="date-box">
            <span class="month">Jan</span>
            <span class="date">01</span>
          </div>
        </div>
      </div> --}}





</a>
