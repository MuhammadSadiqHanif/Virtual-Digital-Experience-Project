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

        <div class="medicalinner" id="medicalinner">
            <img class="plant1" src="{{ asset('frontend/images/medical/Asset1@2x.png') }}" alt="">
            <img class="plant2" src="{{ asset('frontend/images/medical/Asset1@2x.png') }}" alt="">
            <div class="pass-div">
                <img class="passport" src="{{ asset('frontend/images/medical/Asset3@2x.png') }}" alt="">
                <div id="video" class="video animate__animated animate__fadeInLeftBig animate__delay-2s">
                    <p>Video Library</p>
                    <a href="#">
                        <img src="{{ asset('frontend/images/medical/Asset6@2x.png') }}" alt="">
                        <i class="fas fa-play-circle"></i>
                    </a>
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
                <div id="lady" class="lady animate__animated animate__fadeInUpBig animate__delay-2s">
                    <div class="textbox" style="background-image:url({{ asset('frontend/images/medical/Asset8@2x.png') }}) ;">
                        <p>
                            Hello! I can help answer any questions you may have
                        </p>
                    </div>
                    <a href="#">
                        <img src="{{ asset('frontend/images/medical/Asset4@2x.png') }}" alt="">
                    </a>

                </div>
                <div id="selfService" class="selfService animate__animated animate__fadeInRightBig animate__delay-2s">
                    <a href="">
                        <p class="selfTxt">Self Service</p>
                        <img src="{{ asset('frontend/images/medical/Asset7@2x.png') }}" alt="">

                    </a>

                </div>
            </div>


        </div>
    </div>
    


@endsection