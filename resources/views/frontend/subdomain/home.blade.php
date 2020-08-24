@extends('frontend.layouts.app')

@section('content')

@if (isset($settings) && $settings->topics->count())
<div class="center">

    <div class="images webView" id="webView">
        @if ($settings->topics->where('position', 'p1')->count())
        <a href="http://localhost/vdx/medical" id="image1" class="image1 p1">
            <lottie-player 
            src="{{ $settings->topics->where('position', 'p1')->first()->lottie_desktop }}" background="transparent"
            speed="1" loop autoplay>1</lottie-player>
        </a>
        @endif

        @if ($settings->topics->where('position', 'p2')->count())
        <a href="" id="image2" class="image2 p2">
            <lottie-player 
            src="{{ $settings->topics->where('position', 'p2')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>
                
        </a>
        @endif
        @if ($settings->topics->where('position', 'p3')->count())
        <a href="" id="image3" class="image3 p3">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p3')->first()->lottie_desktop }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
        
        </a>
        @endif
        @if ($settings->topics->where('position', 'p4')->count())
        <a href="" id="image4" class="image4 p4">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p4')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>
                
        </a>
        @endif
        @if ($settings->topics->where('position', 'p5')->count())
        <a href="" id="image5" class="image5 p5" >
            <lottie-player
                src="{{ $settings->topics->where('position', 'p5')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>

        </a>
        @endif
        @if ($settings->topics->where('position', 'p6')->count())
        <a href="" id="image6" class="image6 p6">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p6')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>

        </a>
        @endif
        @if ($settings->topics->where('position', 'p7')->count())
        <a href="" id="image7" class="image7 p7">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p7')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>

        </a>
        @endif

        @if ($settings->topics->where('position', 'p8')->count())
        <a href="" id="image8" class="image8 p8">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p8')->first()->lottie_desktop }}" background="transparent"
            speed="1" loop autoplay></lottie-player>

        </a>
        @endif

        @if ($settings->topics->where('position', 'p9')->count())
        <a href="" id="image9" class="image9 p9">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p9')->first()->lottie_desktop }}" background="transparent"
                speed="1" loop autoplay></lottie-player>
                
        </a>
        @endif

        @if ($settings->topics->where('position', 'p10')->count())
        <a href="" id="image10" class="image10 p10">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p10')->first()->lottie_desktop }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
            
        </a>
        @endif

    </div>
</div>
    <div class="gray">
        
        <div id="mobView" class="MobView">
        
        @if ($settings->topics->where('position', 'p1')->count())    
        <a href="medical.html" id="mobImage1" class="mobImage1 p1">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p1')->first()->lottie_mobile }}" background="transparent"
        speed="1" loop autoplay></lottie-player>
        </a>
        @endif
        
        @if ($settings->topics->where('position', 'p2')->count())
        <a href="" id="mobImage2" class="mobImage2">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p2')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
            
        </a>
        @endif
        @if ($settings->topics->where('position', 'p3')->count())
        <a href="" id="mobImage3" class="mobImage3">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p3')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
            
        </a>
        @endif

        @if ($settings->topics->where('position', 'p4')->count())
        <a href="" id="mobImage4" class="mobImage4">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p4')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
                
        </a>
        @endif

        @if ($settings->topics->where('position', 'p5')->count())
        <a href="" id="mobImage5" class="mobImage5">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p5')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>
                
        </a>
        @endif

        @if ($settings->topics->where('position', 'p6')->count())
        
        <a href="" id="mobImage6" class="mobImage6">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p6')->first()->lottie_mobile }}" background="transparent"
                speed="1" loop autoplay></lottie-player>
                
        </a>
        @endif

        @if ($settings->topics->where('position', 'p7')->count())
        
        <a href="" id="mobImage7" class="mobImage7">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p7')->first()->lottie_mobile }}" background="transparent"
        speed="1" loop autoplay></lottie-player>
            
        </a>
        @endif

        @if ($settings->topics->where('position', 'p8')->count())

        <a href="" id="mobImage8" class="mobImage8">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p8')->first()->lottie_mobile }}" background="transparent"
                speed="1" loop autoplay></lottie-player>

        </a>
        @endif

        @if ($settings->topics->where('position', 'p9')->count())

        <a href="" id="mobImage9" class="mobImage9 ">
            <lottie-player
                src="{{ $settings->topics->where('position', 'p9')->first()->lottie_mobile }}" background="transparent"
                speed="1" loop autoplay></lottie-player>
                
        </a>
        @endif

        @if ($settings->topics->where('position', 'p10')->count())

        <a href="" id="mobImage10" class="mobImage10">
            <lottie-player
            src="{{ $settings->topics->where('position', 'p1')->first()->lottie_mobile }}" background="transparent"
            speed="1" loop autoplay></lottie-player>  
        </a>
        @endif

    </div>
</div>
@endif
@endsection