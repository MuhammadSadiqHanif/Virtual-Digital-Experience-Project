document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
setTimeout(() => {
    if (document.getElementById('webView')) {

        // console.log("sss22222")
        if (document.getElementById('image1')) {
            document.getElementById('image1').style.transform = "scale(1)"
            document.getElementById('image1').style.opacity = "1"
        }
        // document.getElementById('image1').style.zIndex = "1"


        if (document.getElementById('image2')) {

            document.getElementById('image2').style.transform = "scale(1)"
            document.getElementById('image2').style.opacity = "1"
            // document.getElementById('image1').style.zIndex = "1"
        }
        if (document.getElementById('image3')) {


            document.getElementById('image3').style.transform = "scale(1)"
            document.getElementById('image3').style.opacity = "1"
            // document.getElementById('image1').style.zIndex = "1"
        }
        if (document.getElementById('image4')) {

            document.getElementById('image4').style.left = "11%"
            document.getElementById('image4').style.opacity = "1"
            // document.getElementById('image1').style.zIndex = "1"
        }
        if (document.getElementById('image5')) {

            document.getElementById('image5').style.left = "70.3%"
            document.getElementById('image5').style.opacity = "1"
            // document.getElementById('image1').style.zIndex = "1"
        }
        if (document.getElementById('image6')) {

            document.getElementById('image6').style.opacity = "1"
            document.getElementById('image6').style.top = "50px"
            // document.getElementById('image1').style.zIndex = "1"
        }
        if (document.getElementById('image7')) {

            document.getElementById('image7').style.opacity = "1"
            document.getElementById('image7').style.top = "-1px"
            // document.getElementById('image1').style.zIndex = "1"
        }
        if (document.getElementById('image8')) {

            document.getElementById('image8').style.top = "360px"
            document.getElementById('image8').style.opacity = "1"
            // document.getElementById('image1').style.zIndex = "1"
        }
        if (document.getElementById('image9')) {

            document.getElementById('image9').style.left = "68%"
            document.getElementById('image9').style.opacity = "1"
            // document.getElementById('image1').style.zIndex = "1"
        }
        if (document.getElementById('image10')) {

            document.getElementById('image10').style.left = "8%"
            document.getElementById('image10').style.opacity = "1"
            // document.getElementById('image1').style.zIndex = "1"
        }


    }

}, 500)

function dropDownToggle() {
    element = document.getElementById("drop");

    if (element.computedStyleMap().get('opacity').value == 0) {
        document.getElementById("drop").style.opacity = "1";
        document.getElementById("drop").style.zIndex = "99";
    }
    else {
        document.getElementById("drop").style.opacity = "0";
        document.getElementById("drop").style.zIndex = "0";
    }
}

if (document.getElementById('mobView')) {


    setTimeout(() => {
        if (document.getElementById('mobImage1')) {
            document.getElementById('mobImage1').style.left = "0%"
        }
    }, 500);
    setTimeout(() => {
        if (document.getElementById('mobImage2')) {
            document.getElementById('mobImage2').style.right = "0%"
        }
    }, 1000);
    setTimeout(() => {
        if (document.getElementById('mobImage3')) {
            document.getElementById('mobImage3').style.left = "0%"
        }
    }, 1500);
    setTimeout(() => {
        if (document.getElementById('mobImage4')) {
            document.getElementById('mobImage4').style.right = "0%"
        }
    }, 2000);
    setTimeout(() => {
        if (document.getElementById('mobImage5')) {
            document.getElementById('mobImage5').style.left = "0%"
        }
    }, 2500);
    setTimeout(() => {
        if (document.getElementById('mobImage6')) {
            document.getElementById('mobImage6').style.right = "0%"
        }
    }, 3000);
    setTimeout(() => {
        if (document.getElementById('mobImage7')) {
            document.getElementById('mobImage7').style.left = "0%"
        }
    }, 3500);
    setTimeout(() => {
        if (document.getElementById('mobImage8')) {
            document.getElementById('mobImage8').style.right = "0%"
        }
    }, 4000);
    setTimeout(() => {
        if (document.getElementById('mobImage9')) {
            document.getElementById('mobImage9').style.left = "0%"
        }
    }, 4500);
    setTimeout(() => {
        if (document.getElementById('mobImage10')) {
            document.getElementById('mobImage10').style.right = "0%"
        }
    }, 5000);

}
function medical() {
    // document.getElementById('zoom').style.transform = "scale(1.1)"
    if (document.getElementById('zoom1')) {
        document.getElementById('zoom1').style.transform = "scale(1.1)"
    }
    if (document.getElementById('zoom2')) {
        document.getElementById('zoom2').style.transform = "scale(1.1)"
    }
    if (document.getElementById('zoom3')) {
        document.getElementById('zoom3').style.transform = "scale(1.1)"
    }
    if (document.getElementById('zoom4')) {
        document.getElementById('zoom4').style.transform = "scale(1.1)"
    }
    if (document.getElementById('zoom5')) {
        document.getElementById('zoom5').style.transform = "scale(1.1)"
    }
    if (document.getElementById('image1')) {
        document.getElementById('image1').style.transform = "scale(1.15)"
    }
    if (document.getElementById('image2')) {
        document.getElementById('image2').style.transform = "scale(1.15)"
    }
    if (document.getElementById('image3')) {
        document.getElementById('image3').style.transform = "scale(1.15)"
    }
    if (document.getElementById('imag4')) {
        document.getElementById('image4').style.transform = "scale(1.15)"
    }
    if (document.getElementById('image5')) {
        document.getElementById('image5').style.transform = "scale(1.15)"
    }
    if (document.getElementById('image6')) {
        document.getElementById('image6').style.transform = "scale(1.15)"
    }
    if (document.getElementById('image7')) {
        document.getElementById('image7').style.transform = "scale(1.15)"
    }
    if (document.getElementById('medicalScreen')) {
        document.getElementById('medicalScreen').style.display = "block"
    }
}


// console.log('runoig')

function medicalPage() {
    if (document.getElementById('medicalinner')) {

        // console.log("ssssssss")
        document.getElementById('medicalinner').style.transform = "scale(1)"
        document.getElementById('titleDiv').style.transform = "scale(1)"
    }
}
medicalPage()

function Video() {
    // console.log('running ')
    // var x = window.matchMedia("(max-width: 768px)")

    // if (x.matches) { 
    //     document.getElementById('position1').style.width = "100%"
    //     document.getElementById('position2').style.opacity = "0"
    // document.getElementById('position3').style.opacity = "0"
    // document.getElementById('slider').style.display = "none"
    // document.getElementById('videoSlider').style.top = "-30px"
    // document.getElementById('videoSlider').style.opacity = "0"

    // document.getElementById('videoSlider').style.right = "-20px"
    // document.getElementById('lady').style.opacity = "0"
    // document.getElementById('selfService').style.opacity = "0"
    // document.getElementById('videoModal').style.transform = "scale(1)"
    
    // document.getElementById('position1').style.left = "0px"
    // document.getElementById('videoplay').style.display = "block"
    // document.getElementById('videolib').style.display = "none"
    // document.getElementById('backbutton').style.display = "block"
    // document.getElementById('videoMenu').style.opacity = '1';
    // document.getElementById('videoMenu').style.transition = '0.7s';
    // document.getElementById('videoMenu').style.transitionDelay = '0.9s';
    // document.getElementById('videobutton').disabled = false;
    // document.getElementById('videoSlider').classList.add("videoSlider2");
    // document.getElementById('videoMenu').style.display = 'block'
    // setTimeout(() => {
    //     document.getElementById('lady').style.display = "none"
    //     document.getElementById('selfService').style.display = "none"
    // }, 300);
    // document.documentElement.scrollTop = 0;
    // } else {
        document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
        document.getElementById('videoSlider').style.transform = "scale(0)"
        document.getElementById('selfService').style.transform = "scale(0)"
        document.getElementById('textbox').style.transform = "scale(0)"
        document.getElementById('lady').style.transform = "scale(0)"
        document.getElementById('position1').style.width = "100%"
    //     // document.getElementById('position2').style.opacity = "0"
    // // document.getElementById('position3').style.opacity = "0"
    // document.getElementById('slider').style.display = "none"
    // document.getElementById('videoSlider').style.top = "-70px"
    // document.getElementById('videoSlider').style.right = "455px"
    // document.getElementById('videoSlider').style.opacity = "0"
    // document.getElementById('lady').style.opacity = "0"
    // document.getElementById('selfService').style.opacity = "0"
    document.getElementById('videoModal').style.transform = "scale(1)"

    // // document.getElementById('videopic').style.width = "600px"
    // document.getElementById('position1').style.left = "0px"
    // // document.getElementById('videopic').style.transition = "0.6s"
    // // document.getElementById('videopic').style.zIndex = "4"
    // // document.getElementById('videoplay').style.top = "-359px"
    // // document.getElementById('videoplay').style.display = "block"
    // document.getElementById('videolib').style.display = "none"
    document.getElementById('backbutton').style.transform = "scale(1)"
    // document.getElementById('videoMenu').style.opacity = '1';
    // document.getElementById('videoMenu').style.transition = '0.7s';
    // document.getElementById('videoMenu').style.transitionDelay = '0.9s';
    // document.getElementById('videobutton').disabled = false;
    // document.getElementById('videoSlider').classList.add("videoSlider2");
    // document.getElementById('videoMenu').style.display = 'block'
    // setTimeout(() => {
    //     document.getElementById('lady').style.display = "none"
    //     document.getElementById('selfService').style.display = "none"
    // }, 300);
    // document.documentElement.scrollTop = 0;
// }
var x = window.matchMedia("(max-width: 600px)")

if (x.matches) { 
        
    document.getElementById('medicalinner').style.height = "1000px"
    document.getElementById('medicalScreen').style.height = "1000px"
  document.getElementById('passport').style.top = "91%"
}
}
function videobutton() {
    console.log('sdas')
    document.getElementById('videoplay').style.zIndex = '11'
    document.getElementById('videoplay').style.display = "block"
    document.getElementById('videoplay').style.opacity = '1'

}


function openChatBot() {
    console.log('helooo')
    document.getElementById('position1').style.opacity = "0"
    document.getElementById('position2').style.opacity = "0"
    document.getElementById('position3').style.opacity = "0"
    document.getElementById('chatBot').style.display = "block"
    setTimeout(() => {
        document.getElementById('hiddenDiv').style.opacity = "1"
    }, 900)
}
var slideIndex = 1;
showSlides(slideIndex);
showSlides2(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}
function plusSlides2(n) {
    showSlides2(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}
function currentSlide2(n) {
    showSlides2(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
function showSlides2(n) {
    var i;
    var slides = document.getElementsByClassName("mySlidesMob");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
// if (document.getElementById(medicalScreen)){
function lady() {
    console.log('running')

    // var x = window.matchMedia("(max-width: 768px)")

    // if (x.matches) {
    //     document.getElementById('videoSlider').style.transform = "scale(0)"
    //     document.getElementById('selfService').style.transform = "scale(0)"
    //     document.getElementById('textbox').style.transform = "scale(0)"
    //     document.getElementById('videoSlider').style.transition = "0.7s"
    //     document.getElementById('selfService').style.transition = "0.7s"
    //     // document.getElementById('ladyimg').style.width = "220px"
    //     // document.getElementById('lady').style.left = "460px"
    //     // document.getElementById('lady').style.top = "-130px"
    //     // document.getElementById('lady').style.transition = "0.7s"
    //     // document.getElementById('lady').style.position = "absolute"
    //     // document.getElementById('chatbotDiv').style.display = "block"
    //     // document.getElementsByClassName('sb-chat')[0].style.display = "block"
    //     // document.getElementsByClassName('sb-chat')[0].style.opacity = "1"
    //     document.getElementById('backChat').style.display = "block"
    // } else {

        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        document.getElementById('videoSlider').style.transform = "scale(0)"
        document.getElementById('selfService').style.transform = "scale(0)"
        document.getElementById('textbox').style.transform = "scale(0)"
        document.getElementById('lady').style.transform = "scale(0)"
        document.getElementById('ladyexpnd').style.transform = "scale(1)"
        document.getElementsByClassName('sb-chat')[0].style.transform = "scale(1)"
        document.getElementById('videoSlider').style.transition = "0.7s"
        document.getElementById('selfService').style.transition = "0.7s"
        // document.getElementById('ladyimg').style.width = "220px"
        // document.getElementById('lady').style.left = "530px"
        // document.getElementById('lady').style.top = "-420px"
        // document.getElementById('lady').style.transition = "0.7s"
        // document.getElementById('lady').style.position = "absolute"
        // document.getElementById('chatbotDiv').style.display = "block"
        // document.getElementsByClassName('sb-chat')[0].style.display = "block"
        // document.getElementsByClassName('sb-chat')[0].style.opacity = "1"
        // document.getElementById('backbutton').style.display = "block"
    document.getElementById('backbutton').style.transform = "scale(1)"

    // }


    // myFunction(x) // Call listener function at run time
    // x.addListener(myFunction) // Attach listener function on state changes
}


function service() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    document.getElementById('videoSlider').style.transform = "scale(0)"
    document.getElementById('selfService').style.transform = "scale(0)"
    document.getElementById('textbox').style.transform = "scale(0)"
    document.getElementById('lady').style.transform = "scale(0)"
    document.getElementById('pdfModal').style.transform = "scale(1)"
    document.getElementById('videoSlider').style.transition = "0.7s"
    document.getElementById('selfService').style.transition = "0.7s"
    document.getElementById('backbutton').style.transform = "scale(1)"
    var x = window.matchMedia("(max-width: 600px)")

    if (x.matches) { 
        
        document.getElementById('medicalinner').style.height = "1000px"
        document.getElementById('medicalScreen').style.height = "1000px"
      document.getElementById('passport').style.top = "91%"
    }


    // myFunction(x) // Call listener function at run time
    // x.addListener(myFunction) // Attach listener function on state changes
  
}
function back(){
    document.getElementById('videoSlider').style.transform = "scale(1)"
    document.getElementById('selfService').style.transform = "scale(1)"
    document.getElementById('textbox').style.transform = "scale(1)"
    document.getElementById('lady').style.transform = "scale(1)"
    document.getElementById('ladyexpnd').style.transform = "scale(0)"
    document.getElementsByClassName('sb-chat')[0].style.transform = "scale(0)"
    document.getElementById('videoModal').style.transform = "scale(0)"
    document.getElementById('backbutton').style.transform = "scale(0)"
    document.getElementById('pdfModal').style.transform = "scale(0)"
    var x = window.matchMedia("(max-width: 600px)")

    if (x.matches) { 
        
        document.getElementById('medicalinner').style.height = "1700px"
        document.getElementById('medicalScreen').style.height = "1700px"
      
    }

    

}
// var slideIndex = 1;
// showPdfSlider(slideIndex);
// showPdfSlider2(slideIndex);

// function pdfSlider(n) {
//     showPdfSlider(slideIndex += n);
// }
// function pdfSlider2(n) {
//     showPdfSlider2(slideIndex += n);
// }

// function currentSlide(n) {
//     showPdfSlider(slideIndex = n);
// }
// function pdfCurrent(n) {
//     showPdfSlider2(slideIndex = n);
// }

// function showPdfSlider(n) {
//     var i;
//     var slides = document.getElementsByClassName("pdfIconSlide");
//     var dots = document.getElementsByClassName("pdfInd");
//     if (n > slides.length) { slideIndex = 1 }
//     if (n < 1) { slideIndex = slides.length }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex - 1].style.display = "block";
//     dots[slideIndex - 1].className += " active";
// }
// function showPdfSlider2(n) {
//     var i;
//     var slides = document.getElementsByClassName("pdfIconSlide");
//     var dots = document.getElementsByClassName("pdfInd");
//     if (n > slides.length) { slideIndex = 1 }
//     if (n < 1) { slideIndex = slides.length }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex - 1].style.display = "block";
//     dots[slideIndex - 1].className += " active";
// }
var slidePdfIndex = 1;
showPdfSlides(slidePdfIndex);

function plusPdfSlides(n) {
  showPdfSlides(slidePdfIndex += n);
}

function currentPdfSlide(n) {
  showPdfSlides(slidePdfIndex = n);
}

function showPdfSlides(n) {
  var i;
  var slides = document.getElementsByClassName("myPdfSlides");
  var dots = document.getElementsByClassName("Pdfdot");
  if (n > slides.length) {slidePdfIndex = 1}
    if (n < 1) {slidePdfIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slidePdfIndex-1].style.display = "flex";
  console.log(dots[slidePdfIndex-1])
  dots[slidePdfIndex-1].className += " active";
}





