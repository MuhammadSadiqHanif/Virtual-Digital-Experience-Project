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
    }
    else {
        document.getElementById("drop").style.opacity = "0";
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
    // document.getElementById('medicalScreen').style.transform = "scale(0)"

    // document.getElementById('zoom').style.transform = "scale(0)"
    // document.getElementById('zoom').style.opacity = "0"

    // document.getElementById('zoom1').style.transform = "scale(0)"
    // document.getElementById('zoom2').style.transform = "scale(0)"
    // document.getElementById('zoom3').style.transform = "scale(0)"
    // document.getElementById('zoom4').style.transform = "scale(0)"
    // document.getElementById('zoom5').style.transform = "scale(0)"
    // document.getElementById('image1').style.transform = "scale(0)"
    // document.getElementById('image2').style.transform = "scale(0)"
    // document.getElementById('image3').style.transform = "scale(0)"
    // document.getElementById('image4').style.transform = "scale(0)"
    // document.getElementById('image5').style.transform = "scale(0)"
    // document.getElementById('image6').style.transform = "scale(0)"
    // document.getElementById('image7').style.transform = "scale(0)"



}


// console.log('runoig')

function medicalPage() {
    if (document.getElementById('medicalinner')) {

        // console.log("ssssssss")
        document.getElementById('medicalinner').style.transform = "scale(1)"
    }
}
medicalPage()

function Video() {
    // console.log('running ')
    document.getElementById('position1').style.width = "100%"
    document.getElementById('position2').style.opacity = "0"
    document.getElementById('position3').style.opacity = "0"
    document.getElementById('slider').style.display = "none"
    document.getElementById('lady').style.opacity = "0"
    document.getElementById('selfService').style.opacity = "0"
    document.getElementById('videopic').style.width = "70%"
    document.getElementById('position1').style.left = "0px"
    document.getElementById('videopic').style.transition = "0.6s"
    document.getElementById('videopic').style.zIndex = "4"
    document.getElementById('videolib').style.display = "none"
    document.getElementById('videoMenu').style.opacity = '1';
    document.getElementById('videoMenu').style.transition = '0.7s';
    document.getElementById('videoMenu').style.transitionDelay = '0.9s';
    document.getElementById('videobutton').disabled = false;
}
function videobutton() {
    // console.log('sdas')
    document.getElementById('videoplay').style.zIndex = '7'
    document.getElementById('videoplay').style.opacity = '1'

}




