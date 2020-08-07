setTimeout(()=>{
    
    
    if (x.matches) { // If media query matches
        document.getElementById('image1').style.left = "25%";
        document.getElementById('image1').style.opacity = "1";
        document.getElementById('image2').style.width = "194px"
        document.getElementById('image2').style.opacity = "1";
        document.getElementById('image2').style.left = "42%";
        document.getElementById('image2').style.top= "109px";

        document.getElementById('image3').style.left =  "68%";
        document.getElementById('image3').style.top= "109px";

        document.getElementById('image3').style.opacity = "1";
        document.getElementById('image4').style.left= "1.4%";
        document.getElementById('image4').style.top= "356px";
        document.getElementById('image4').style.opacity = "1";
        document.getElementById('image5').style.top= "412px";
        document.getElementById('image5').style.left= "26.3%";
        document.getElementById('image5').style.opacity = "1";
        document.getElementById('image6').style.width = "274px"
        document.getElementById('image6').style.top= "232px";
        document.getElementById('image6').style.left= "44.4%";

        document.getElementById('image6').style.opacity = "1";
        document.getElementById('image7').style.left =  "59%";
        document.getElementById('image7').style.opacity = "1";
    } else {
        
        document.getElementById('image1').style.left = "31%";
        document.getElementById('image1').style.opacity = "1";
        document.getElementById('image2').style.width = "194px"
        document.getElementById('image2').style.opacity = "1";
        document.getElementById('image3').style.left =  "62%";
        document.getElementById('image3').style.opacity = "1";
        document.getElementById('image4').style.left= "14.4%";
        document.getElementById('image4').style.opacity = "1";
        document.getElementById('image5').style.top= "310px";
        document.getElementById('image5').style.opacity = "1";
        document.getElementById('image6').style.width = "264px"
        document.getElementById('image6').style.opacity = "1";
        document.getElementById('image7').style.left =  "58%";
        document.getElementById('image7').style.opacity = "1";
    }
    
    },500)
    
    var x = window.matchMedia("(max-width: 1024px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes

