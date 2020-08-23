@extends('frontend.layouts.app')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugin/flipbook.style.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>


<script type="text/javascript">
$(document).ready(function () {
    $("#flipCon").flipBook({
        pdfUrl:"{{ asset('frontend/plugin/sample-3pp.pdf') }}",
    });
});
</script>
@endpush

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
            <div class="medTitle">
            <div id="titleDiv" class="titleDive">
                <img src="{{asset('frontend/images/medical/medicalIcon.png')}}" alt="">
                <!-- <i class="fas fa-plus-circle"></i> -->
            <h6>MEDICAL</h6>
            </div>
            </div>
            <img class="plant1" src="{{ asset('frontend/images/medical/Asset1@2x.png') }}" alt="">
            <img class="plant2" src="{{ asset('frontend/images/medical/Asset1@2x.png') }}" alt="">
            <div class="pass-div web-medical">

                <button id='backbutton' onclick="back()" class='backbutton'><i class="fa fa-caret-left"></i></button>
                <img class="passport animate__animated animate__zoomIn animate__delay-2s" src="{{ asset('frontend/images/medical/Asset3@2x.png') }}" alt="">
                <div id="position1" class="position1 animate__animated animate__fadeInLeftBig animate__delay-2s">
                    <div onclick="lady()" id="lady" class="lady ">
                        <div id="textbox" class="textbox" style="background-image:url({{ asset('frontend/images/medical/Asset8@2x.png') }}) ;">
                            <p>
                            Hello! I can help answer any questions you may have
                            </p>
                        </div>
                        <a >
                            <img id="ladyimg"  src="{{ asset('frontend/images/medical/Asset4@2x.png') }}" alt="">
                        </a>

                    </div>
                </div>
                <div id="position2" class="position2 animate__animated animate__fadeInUpBig animate__delay-2s">
                    <div onclick="service()" id="selfService" class="selfService ">
                            <p class="selfTxt">Self Service</p>
                            <img src="{{ asset('frontend/images/medical/Asset7@2x.png') }}" alt="">
                    </div>
                </div>
                <div id="position3" class="position3 animate__animated animate__fadeInRightBig animate__delay-2s">
                    <div id="videoSlider" class="videoSlider">
                        <div id="video" class="video ">
                            <p id="videolib">Video Library</p>
                            <div onclick="Video()" id="videoinner">
                                <img id="videopic" src="{{ asset('frontend/images/medical/Asset6@2x.png') }}" alt="">
                                <button id="videobutton" class="fa fa-play-circle" disabled>
                                </button>
                            </div>
                        </div>

                        <div id="slider" class="slider animate__animated animate__fadeInUpBig animate__slow animate__delay-2s">
                            <div class='sliderText'>
                                <div class="innerSlider">

                                    <i class="fa fa-caret-left" onclick="plusSlides2(-1)"></i>
                                    <div class="mySlides fade">
                                    <div class="text"><p>Hays Companiew offers a choice of two
                                            medical plan option so you can choose the plan that best meets your needs -
                                            and those of your family.
                                        </p></div>
                                    </div>
                                <div class="mySlides fade">
                                    <div class="text"><p>Hays Companiew offers a choice of two
                                        medical plan option so you can choose the plan that best meets your needs -
                                            and those of your family.
                                        </p></div>
                                    </div>
                                    <div class="mySlides fade">
                                        <div class="text">
                                            <p>heloo
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mySlides fade">
                                        <div class="text"><p>Hays Companiew offers a choice of two
                                                medical plan option so you can choose the plan that best meets your needs -
                                                and those of your family.
                                            </p>
                                        </div>
                                        </div>
                                        <i class="fa fa-caret-right" onclick="plusSlides(1)"></i>
                                    </div>

                                        <div class="indicator">
                                            <span class="dot" onclick="currentSlide2(1)"></span>
                                <span class="dot" onclick="currentSlide2(2)"></span>
                                <span class="dot" onclick="currentSlide2(3)"></span>
                                <span class="dot" onclick="currentSlide2(4)"></span>
                            </div>
                        </div>
                    </div>

                
                        </div>
                        </div>

                        <!--
                            <div class="flipbook">
                                <div>
                        <img src="{{asset('frontend/images/medical/Asset 1@2x.png')}}" alt="">

                    </div>
                    <div>
                        <img src="{{asset('frontend/images/medical/Asset 1@2x.png')}}" alt="">
                            </div>

                        </div>
                    </div> -->
                <button id='backbutton' onclick="back()" class='backbutton'><i class="fa fa-caret-left"></i></button>
        
        {{-- filpbook here --}}
        <div id="flipCon">

        </div>
        {{-- flipobook end here --}}
    

    <div id="videoModal" class="videoModal"> 
        <div id="videoModalpic">
            <img  src="{{ asset('frontend/images/medical/Asset6@2x.png') }}" alt="">
            <button onclick="videobutton()"  id="videobutton" class="fa fa-play-circle" > </button>
            <iframe id="videoplay" class="videoplay" src="https://player.vimeo.com/video/116690342?color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

            </div>
            <div class="videoplayback">
                <div id="videoMenu" class="videoMenu">
                    <h5>Menu</h5>
            <div class="videolist">
                
                <div class="videolink">
                    <i class="fa fa-play-circle"></i> <p>Plan Overview <span class="time">:30</span></p>
                </div>
                <div class="videolink">
                    <i class="fa fa-play-circle"></i> <p>Eligiblity <span class="time">:40</span></p>
            </div>
            <div class="videolink">
                <i class="fa fa-play-circle"></i> <p>Dependents <span class="time">1:30</span></p>
            </div>
            <div class="videolink">
                <i class="fa fa-play-circle"></i> <p>Telemedicine<span class="time">:10</span></p>
            </div>
            <div class="videolink">
                <i class="fa fa-play-circle"></i> <p>HSA vs HRA<span class="time">1:10</span></p>
            </div>
        </div>
    </div>
    </div>
            </div>
    <div id="ladyexpnd" class="ladyexpnd">
    <div class="chatBotdiv">


    </div>
    <div class="ladyImgDiv">
    <img  src="{{ asset('frontend/images/medical/Asset4@2x.png') }}" alt="">

    </div>

    </div>
    
    
    <!-- Mobile View
    <div class="Mobile-medical">

            <button id='backbutton' onclick="back()" class='backbutton'><i class="fa fa-caret-left"></i></button>
            <div class="pasportDiv">
            <img class="passport animate__animated animate__zoomIn animate__delay-2s" src="{{ asset('frontend/images/medical/Asset3@2x.png') }}" alt="">
            </div>
            <div id="position1" class="position1 animate__animated animate__fadeInLeftBig animate__delay-2s">
                <div id="lady" class="lady ">
                    <div class="textbox" style="background-image:url({{ asset('frontend/images/medical/Asset8@2x.png') }}) ;">
                        <p>
                        Hello! I can help answer any questions you may have
                        </p>
                    </div>
                    <a >
                        <img  src="{{ asset('frontend/images/medical/Asset4@2x.png') }}" alt="">
                    </a>

                </div>
            </div>
            <div id="position2" class="position2 animate__animated animate__fadeInUpBig animate__delay-2s">
                <div  id="selfService" class="selfService ">
                    <a href="">
                        <p class="selfTxt">Self Service</p>
                        <img src="{{ asset('frontend/images/medical/Asset7@2x.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div id="position3" class="position3 animate__animated animate__fadeInRightBig animate__delay-2s">
                <div id="videoSlider" class="videoSlider">
                    <div id="video" class="video ">
                        <p id="videolib">Video Library</p>
                        <div onclick="Video()" id="videoinner">
                            <img id="videopic" src="{{ asset('frontend/images/medical/Asset6@2x.png') }}" alt="">
                            <button onclick="videobutton()"  id="videobutton" class="fa fa-play-circle" disabled>
                            </button>
                        </div>
                    </div>
                    <iframe id="videoplay" class="videoplay videoSlider" src="https://player.vimeo.com/video/116690342?color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

                    <div id="slider" class="slider animate__animated animate__fadeInUpBig animate__slow animate__delay-2s">
                        <div class='sliderText'>

                        <i class="fa fa-caret-left" onclick="plusSlides(-1)"></i>
                            <div class="mySlidesMob fade">
                                <div class="text"><p>Hays Companiew offers a choice of two
                                        medical plan option so you can choose the plan that best meets your needs -
                                        and those of your family.
                                    </p></div>
                            </div>
                            <div class="mySlidesMob fade">
                                <div class="text"><p>Hays Companiew offers a choice of two
                                        medical plan option so you can choose the plan that best meets your needs -
                                        and those of your family.
                                    </p></div>
                            </div>
                            <div class="mySlidesMob fade">
                                <div class="text"><p>heloo
                                    </p></div>
                            </div>
                            <div class="mySlidesMob fade">
                                <div class="text"><p>Hays Companiew offers a choice of two
                                        medical plan option so you can choose the plan that best meets your needs -
                                        and those of your family.
                                    </p></div>
                            </div>
                    <i class="fa fa-caret-right" onclick="plusSlides2(1)"></i>
                    </div>
                        <div class="indicator">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                        </div>
                        </div>
                </div>
                </div>

            </div>
        </div>
    </div> -->
    <div id='chatBot' class='chatBot'>
        <div id ='hiddenDiv' class='hiddenDiv'>
            <h1>heloo</h1>
        </div>
    </div>
    <!-- <div class="videoplayback">
        <div id="videoMenu" class="videoMenu">
            <h5>Menu</h5>
            <div class="videolist">

                <div class="videolink">
                    <i class="fa fa-play-circle"></i> <p>Plan Overview <span class="time">:30</span></p>
            </div>
            <div class="videolink">
                <i class="fa fa-play-circle"></i> <p>Eligiblity <span class="time">:40</span></p>
            </div>
            <div class="videolink">
                <i class="fa fa-play-circle"></i> <p>Dependents <span class="time">1:30</span></p>
            </div>
            <div class="videolink">
                <i class="fa fa-play-circle"></i> <p>Telemedicine<span class="time">:10</span></p>
            </div>
            <div class="videolink">
                <i class="fa fa-play-circle"></i> <p>HSA vs HRA<span class="time">1:10</span></p>
            </div>
        </div>
        </div> -->
    </div>


    @endsection
