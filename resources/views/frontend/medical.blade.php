@extends('frontend.layouts.app')

@section('content')

<div id="medicalScreen" class="medicalScreen ">
        <!-- <div   class="header">
                <div class="logo">
                <div class="logoImg">
                    <img  src="images/mainscreen/Asset 14@2x.png" alt="">
                </div>
                <div class="logoTxt">
                 <img  src="images/mainscreen/Asset 12@2x.png" alt="">
            </div>
        </div>
                <div class="mapIcon">
                    <img  src="{{ asset('frontend/images/medical/Asset2@2x.png') }}" alt="">
                </div>
            </div> -->

        <div class="medicalinner" id="medicalinner" style="background-image: url({{asset('frontend/images/medical/Asset5@2x.png') }})">
            <img class="plant1" src="{{ asset('frontend/images/medical/Asset1@2x.png') }}" alt="">
            <img class="plant2" src="{{ asset('frontend/images/medical/Asset1@2x.png') }}" alt="">
            <div class="pass-div">
                <img class="passport animate__animated animate__zoomIn animate__delay-2s" src="{{ asset('frontend/images/medical/Asset3@2x.png') }}" alt="">
<div id="position1" class="position1 animate__animated animate__fadeInLeftBig animate__delay-2s">
    <div id="lady" class="lady ">
        <div class="textbox" style="background-image:url({{ asset('frontend/images/medical/Asset8@2x.png') }}) ;">
        <p>
        Hello! I can help answer any questions you may have
    </p>
</div>
<a href="#">
    <img src="{{ asset('frontend/images/medical/Asset4@2x.png') }}" alt="">
</a>

</div>
</div>
    <div id="position2" class="position2 animate__animated animate__fadeInUpBig animate__delay-2s">
        <div id="selfService" class="selfService ">
                        <a href="">
                            <p class="selfTxt">Self Service</p>
                            <img src="{{ asset('frontend/images/medical/Asset7@2x.png') }}" alt="">
                            
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div id="position3" class="position3 animate__animated animate__fadeInRightBig animate__delay-2s">
            <div class="videoSlider">
                <div id="video" class="video ">
                    <p id="videolib">Video Library</p>
                    <div onclick="Video()" id="videoinner">
                        <img id="videopic" src="{{ asset('frontend/images/medical/Asset6@2x.png') }}" alt="">
                        <button onclick="videobutton()"  id="videobutton" class="fas fa-play-circle" disabled>      
                        </button>
                    </div>
                </div>
                <div id="slider" class="slider animate__animated animate__fadeInUpBig animate__slow animate__delay-2s">
                    <div class="sliderText">
                        <i class="fas fa-caret-left"></i>
                        <p>Hays Companiew offers a choice of two
                            medical plan option so you can choose the plan that best meets your needs -
                            and those of your family.
                        </p>
                        <i class="fas fa-caret-right"></i>
                    </div>
                    <div class="indicator">
                        <i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i
                        class="fas fa-circle"></i>
                </div>
    
            </div>
    
        </div>
    </div>
    <div class="videoplayback">
        <iframe id="videoplay" class="videoplay" src="https://player.vimeo.com/video/116690342?color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        <div id="videoMenu" class="videoMenu">
            <h5>Menu</h5>
            <div>
                <i class="far fa-play-circle"></i> <p>Plan Overview <span class="time">:30</span></p>
            </div>
            <div>
                <i class="far fa-play-circle"></i> <p>Eligiblity <span class="time">:40</span></p>
            </div>
            <div>
                <i class="far fa-play-circle"></i> <p>Dependents <span class="time">1:30</span></p>
            </div>
            <div>
                <i class="far fa-play-circle"></i> <p>Telemedicine<span class="time">:10</span></p>
            </div>
            <div>
                <i class="far fa-play-circle"></i> <p>HSA vs HRA<span class="time">1:10</span></p>
            </div>
        </div>
    </div>


@endsection
