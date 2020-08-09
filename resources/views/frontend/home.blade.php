@extends('frontend.layouts.app')

@section('content')

<div class="images">  
    <img id="image1"  class="image1" src="{{ asset('frontend/images/Asset 7@2x.png') }}" alt="">
    <img id="image2"  class="image2" src="{{ asset('frontend/images/Asset 3@2x.png') }}" alt="">
    <img id="image3"  class="image3" src="{{ asset('frontend/images/Asset 2@2x.png') }}" alt="">
    <img id="image4"  class="image4" src="{{ asset('frontend/images/Asset 6@2x.png') }}" alt="">
    <img id="image5"  class="image5" src="{{ asset('frontend/images/Asset 5@2x.png') }}" alt="">
    <img id="image6"  class="image6" src="{{ asset('frontend/images/Asset 4@2x.png') }}" alt=""> 
    <img id="image7"  class="image7" src="{{ asset('frontend/images/Asset 1@2x.png') }}" alt="">
</div>



@endsection