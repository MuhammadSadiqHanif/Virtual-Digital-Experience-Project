@extends('frontend.subdomain.layouts.app')

@section('content')

@if (isset($settings) && $settings->topics->count())
    

  <div class="images webView">

        @if ($settings->topics->where('position', 'p1')->count())
            
        <a href="medical.html" id="image1" class="image1">
            <lottie-player 
            src="{{ $settings->topics->where('position', 'p1')->first()->lottie_desktop }}" background="transparent"
            speed="1" loop autoplay>1</lottie-player>
        </a>
        
        @endif

        @if ($settings->topics->where('position', 'p2')->count())
        <a href="" id="image2" class="image2">
        <lottie-player 
            src="{{ $settings->topics->where('position', 'p2')->first()->lottie_desktop }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
            
        </a>
        @endif

        @if ($settings->topics->where('position', 'p3')->count())
        <a href="" id="image3" class="image3">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p3')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>
            
        </a>
        @endif

        @if ($settings->topics->where('position', 'p4')->count())

        <a href="" id="image4" class="image4">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p4')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>

        </a>
        @endif

        @if ($settings->topics->where('position', 'p5')->count())

        <a href="" id="image5" class="image5" >
            <lottie-player
                src="{{ $settings->topics->where('position', 'p5')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>

        </a>
        @endif

        @if ($settings->topics->where('position', 'p6')->count())

        <a href="" id="image6" class="image6">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p6')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>

        </a>
        @endif

        @if ($settings->topics->where('position', 'p7')->count())

        <a href="" id="image7" class="image7">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p7')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>

        </a>
        @endif

        @if ($settings->topics->where('position', 'p8')->count())

        <a href="" id="image8" class="image8">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p8')->first()->lottie_desktop }}" background="transparent"
            speed="1" loop autoplay></lottie-player>

        </a>
        @endif

        @if ($settings->topics->where('position', 'p9')->count())

        <a href="" id="image9" class="image9">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p9')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>

        </a>
        @endif

        @if ($settings->topics->where('position', 'p10')->count())

        <a href="" id="image10" class="image10">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p10')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>

        </a>

        @endif
    </div>

    <div id="mobView" class="MobView">

        @if ($settings->topics->where('position', 'p1')->count())
        <a href="medical.html" id="mobImage1" class="mobImage1">
        <lottie-player
            src="{{ $settings->topics->where('position', 'p1')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        </a>
        @endif

        @if ($settings->topics->where('position', 'p2')->count())
        <lottie-player id="mobImage2" class="mobImage2"
            src="{{ $settings->topics->where('position', 'p2')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        @endif

        @if ($settings->topics->where('position', 'p3')->count())
        <lottie-player id="mobImage3" class="mobImage3"
            src="{{ $settings->topics->where('position', 'p3')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        @endif

        @if ($settings->topics->where('position', 'p4')->count())
        <lottie-player id="mobImage4" class="mobImage4"
            src="{{ $settings->topics->where('position', 'p4')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        @endif

        @if ($settings->topics->where('position', 'p5')->count())
        <lottie-player id="mobImage5" class="mobImage5"
            src="{{ $settings->topics->where('position', 'p5')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        @endif

        @if ($settings->topics->where('position', 'p6')->count())
        <lottie-player id="mobImage6" class="mobImage6"
            src="{{ $settings->topics->where('position', 'p6')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        @endif

        @if ($settings->topics->where('position', 'p7')->count())
        <lottie-player id="mobImage7" class="mobImage7"
            src="{{ $settings->topics->where('position', 'p7')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        @endif

        @if ($settings->topics->where('position', 'p8')->count())
        <lottie-player id="mobImage8" class="mobImage8"
            src="{{ $settings->topics->where('position', 'p8')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        @endif

        @if ($settings->topics->where('position', 'p9')->count())
        <lottie-player id="mobImage9" class="mobImage9 "
            src="{{ $settings->topics->where('position', 'p9')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        @endif

        @if ($settings->topics->where('position', 'p10')->count())
        <lottie-player id="mobImage10" class="mobImage10"
            src="{{ $settings->topics->where('position', 'p10')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        @endif
    </div>
@endif
@endsection