@extends('frontend.layouts.app')

@push('css')
 <!-- For SLick Slider -->
<link rel="stylesheet" href="{{ asset('frontend/plugin/slick/slick.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/plugin/slick/slick-theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugin/flipbook.style.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#flipCon").flipBook({
            pdfUrl: "{{ asset('frontend/plugin/sample-3pp.pdf') }}",
        });
    });
</script>

@endpush

@section('content')

<div id="medicalScreen" class="medicalScreen ">

    <div class="medicalinner" id="medicalinner" style="background-image: url({{asset('frontend/images/medical/Asset5@2x.png') }})">
        <div class="medTitle">
            <div id="titleDiv" class="titleDive">
                <img src="{{asset('frontend/images/medical/medicalIcon.png')}}" alt="">
                <h6>MEDICAL</h6>
            </div>
        </div>
        <img class="plant1" src="{{ asset('frontend/images/medical/Asset1@2x.png') }}" alt="">
        <img class="plant2" src="{{ asset('frontend/images/medical/Asset1@2x.png') }}" alt="">
        <div class="pass-div web-medical">

            <div id="position1" class="position1 animate__animated animate__fadeInLeftBig animate__delay-1s">
                <div onclick="lady()" id="lady" class="lady ">
                    <div id="textbox" class="textbox" style="background-image:url({{ asset('frontend/images/medical/Asset8@2x.png') }}) ">
                        <p>
                            Hello! I can help answer any questions you may have
                        </p>
                    </div>
                    <a>
                        <img id="ladyimg" src="{{ asset('frontend/images/medical/Asset4@2x.png') }}" alt="">
                    </a>

                </div>
            </div>
            <div id="position2" class="position2 animate__animated animate__fadeInUpBig animate__delay-1s">
                <div onclick="service()" id="selfService" class="selfService ">
                    <p class="selfTxt">Self Service</p>
                    <img src="{{ asset('frontend/images/medical/Asset7@2x.png') }}" alt="">
                </div>
            </div>
            <div id="position3" class="position3 animate__animated animate__fadeInRightBig animate__delay-1s">
                <div id="videoSlider" class="videoSlider">
                    <div id="video" class="video ">
                        <p id="videolib">Video Library</p>
                        <div onclick="Video()" id="videoinner">
                            <img id="videopic" src="{{ asset('frontend/images/medical/Asset6@2x.png') }}" alt="">
                            <button id="videobutton" class="fa fa-play-circle" disabled>
                            </button>
                        </div>
                    </div>

                    <div id="slider" class="slider animate__animated animate__fadeInUpBig animate__slow animate__delay-1s">
                        <div class='sliderText'>
                            <div class="innerSlider">

                                <i class="fa fa-caret-left" onclick="plusSlides2(-1)"></i>
                                <div class="mySlides fade">
                                    <div class="text">
                                        <p>Hays Companiew offers a choice of two
                                            medical plan option so you can choose the plan that best meets your needs -
                                            and those of your family.
                                        </p>
                                    </div>
                                </div>
                                <div class="mySlides fade">
                                    <div class="text">
                                        <p>Hays Companiew offers a choice of two
                                            medical plan option so you can choose the plan that best meets your needs -
                                            and those of your family.
                                        </p>
                                    </div>
                                </div>
                                <div class="mySlides fade">
                                    <div class="text">
                                        <p>heloo
                                        </p>
                                    </div>
                                </div>
                                <div class="mySlides fade">
                                    <div class="text">
                                        <p>Hays Companiew offers a choice of two
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
            <div style="position:absolute!important;" class="passport-div" id="passport-div">
                <img id="passport" class="passport animate__animated animate__zoomIn animate__delay-1s" src="{{ asset('frontend/images/medical/Asset3@2x.png') }}" alt="">
            </div>

            <div id="pdfModal" class="pdfModal">
                <div class="pdfPic row">
                    <div class="col-md-6">
                        <div id="flipCon">

                        </div>
                    </div>
                    
                    <div class="pdfslider_change col-md-6">
                        <div class="main">
                            <div class="slider slider-nav slick-initialized slick-slider slick-dotted slider-div">
                                <div>
                                    <p style="font-size: 12px;margin-left: 20px;color: #3498db;font-weight: bold">Highlights</p>
                                    <img class="sliderImage pdfPic-img" src="{{ asset('frontend/images/medical/pdficon.png') }}" alt="">
                                </div>
                                <div>
                                    <p style="font-size: 12px;margin-left: 20px;color: #3498db;font-weight: bold">Highlights</p>
                                    <img class="sliderImage pdfPic-img" src="{{ asset('frontend/images/medical/pdficon.png') }}" alt="">
                                </div>
                                <div>
                                    <p style="font-size: 12px;margin-left: 20px;color: #3498db;font-weight: bold">Highlights</p>
                                    <img class="sliderImage pdfPic-img" src="{{ asset('frontend/images/medical/pdficon.png') }}" alt="">
                                </div>
                                <div>
                                    <p style="font-size: 12px;margin-left: 20px;color: #3498db;font-weight: bold">Highlights</p>
                                    <img class="sliderImage pdfPic-img" src="{{ asset('frontend/images/medical/pdficon.png') }}" alt="">
                                </div>
                                <div>
                                    <p style="font-size: 12px;margin-left: 20px;color: #3498db;font-weight: bold">Highlights</p>
                                    <img class="sliderImage pdfPic-img" src="{{ asset('frontend/images/medical/pdficon.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- filpbook here  flipobook end here  -->


            <div id="videoModal" class="videoModal">

                <div id="videoModalpic">
                    <img src="{{ asset('frontend/images/medical/Asset6@2x.png') }}" alt="">
                    <button onclick="videobutton()" id="videobutton" class="fa fa-play-circle"> </button>
            

                    <iframe id="videoplay" class="videoplay" src="https://player.vimeo.com/video/35636533" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>


                </div>
                <div class="videoplayback">
                    <div id="videoMenu" class="videoMenu">
                        <h5>Menu</h5>
                        <div class="videolist">

                            <div class="videolink">
                                <i class="fa fa-play-circle"></i>
                                <p>Plan Overview <span class="time">:30</span></p>
                            </div>
                            <div class="videolink">
                                <i class="fa fa-play-circle"></i>
                                <p>Eligiblity <span class="time">:40</span></p>
                            </div>
                            <div class="videolink">
                                <i class="fa fa-play-circle"></i>
                                <p>Dependents <span class="time">1:30</span></p>
                            </div>
                            <div class="videolink">
                                <i class="fa fa-play-circle"></i>
                                <p>Telemedicine<span class="time">:10</span></p>
                            </div>
                            <div class="videolink">
                                <i class="fa fa-play-circle"></i>
                                <p>HSA vs HRA<span class="time">1:10</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ladyexpnd" class="ladyexpnd">
                <div class="chatBotdiv">


                </div>
                <div class="ladyImgDiv">
                    <img src="{{ asset('frontend/images/medical/Asset4@2x.png') }}" alt="">

                </div>

            </div>
            <button id='backbutton' onclick="back()" class='backbutton'><img src="{{ asset('frontend/images/medical/backicon.png') }}" alt=""></button>

            <div id='chatBot' class='chatBot'>
                <div id='hiddenDiv' class='hiddenDiv'>
                    <h1>heloo</h1>
                </div>
            </div>
    
        </div>

@push('js')
<script src="https://support.mybenefitsappchat.com/supportboard/js/min/jquery.min.js"></script>
<script src="https://support.mybenefitsappchat.com/supportboard/js/init.js"></script>
<script src="https://support.mybenefitsappchat.com/supportboard/js/api.js?v=4"></script>
<script src="{{ asset('frontend/plugin/flipbook.js') }}"></script>
<script src="{{ asset('frontend/plugin/slick/slick.min.js') }}"></script>
@endpush
@endsection

